<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\ReportTechnicalBundle\Controller;

use Coramer\Sigtec\CoreBundle\Entity\Historical;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\Exportation;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\GrowthPotential;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\InventoryLevel;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\OtherPlasticResin;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\Properties\ProfessionalProfile;
use Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical;
use Coramer\Sigtec\ReportTechnicalBundle\Event\Events;
use Coramer\Sigtec\ReportTechnicalBundle\Event\ReportTechnicalEvent;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Swift_Message;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Tecnocreaciones\Bundle\ResourceBundle\Controller\ResourceController;
use Tecnocreaciones\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * Controlador del reporte tecnico
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class ReportTechnicalController extends ResourceController
{
    /**
     * 
     * @param Request $request
     * @return type
     * @Security("is_granted('ROLE_REVISER')")
     */
    public function indexAction(Request $request) {
        return parent::indexAction($request);
    }
    
    public function showAction(Request $request) {
        $resource = $this->findOr404($request);
        
        //Security Check
        $user = $this->getUser();
        if(!$this->getSecurityContext()->isGranted('ROLE_REVISER') && !$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('show.html'))
            ->setTemplateVar($this->config->getResourceName())
        ;
        if($request->isXmlHttpRequest() || $this->config->isApiRequest()){
            $view->setData($resource);
        }else{
            $view->setData(array(
                'company_report_technical' => $resource,
                'report_technical_manager' => $this->get('coramer_sigtec_report_technical.manager.report_technical_manager')
            ));
        }
        $view->getSerializationContext()->setGroups(array('id','report_technical','process_details'));
        return $this->handleView($view);
    }
    
    /**
     * 
     * @param Request $request
     * @return type
     * @Security("is_granted('ROLE_USER')")
     */
    function indexClientAction(Request $request)
    {
        $formCompany = $this->buildFormCompanyField();
        $criteria = $request->get('filter',$this->config->getCriteria());
        $sorting = $request->get('sorting',$this->config->getSorting());
        $repository = $this->getRepository();
            $resources = $this->resourceResolver->getResource(
                $repository,
                'createPaginatorByClient',
                array($criteria, $sorting)
            );
            $maxPerPage = $this->config->getPaginationMaxPerPage();
            if(($limit = $request->query->get('limit')) && $limit > 0){
                if($limit > 100){
                    $limit = 100;
                }
                $maxPerPage = $limit;
            }
                $resources->setCurrentPage($request->get('page', 1), true, true);
                $resources->setMaxPerPage($maxPerPage);
                
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('clientIndex.html'))
            ->setTemplateVar($this->config->getPluralResourceName())
        ;
        if($request->get('_format') == 'html'){
            $view->setData(array(
                'form_company' => $formCompany->createView(),'company_report_technicals' => $resources
            ));
        }else{
            $formatData = $request->get('_formatData','default');
            $view->setData($resources->toArray($this->config->getRedirectRoute('client_index'),array(),$formatData));
        }
        return $this->handleView($view);
    }
    
    public function createAction(Request $request)
    {
        $resource = $this->createNew();
        $formCompany = $this->buildFormCompanyField($resource);
        $sequenceGenerator = $this->get('sigtec.sequence_generator');
                
        if ($request->isMethod('POST') && $formCompany->submit($request)->isValid()) {
            $company = $resource->getCompany();
            $descriptionAreaCompanyManager = $this->get('coramer_sigtec_report_technical.properties.description_area_company_manager');
            $resource
                    ->setArchive($sequenceGenerator->getNextTempArchive())
                    ->setProfessionalProfile(new ProfessionalProfile())
                    ->setOtherPlasticResin(new OtherPlasticResin())
                    ->setExportation(new Exportation())
                    ->setDescriptionAreaCompany($descriptionAreaCompanyManager->build($company))
                    ->setGrowthPotential(new GrowthPotential())
                    ->setInventoryLevel(new InventoryLevel())
                    ;
            
            $resource = $this->domainManager->create($resource);
            //Actualizar la fecha del ultimo reporte tecnico creado
            $company->setLastTechnicalReportDateCreated(new DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            if (null === $resource) {
                return $this->redirectHandler->redirectToIndex();
            }
            
            return $this->redirectHandler->redirectToRoute('coramer_sigtec_backend_company_report_technical_update',array(
                'id' => $resource->getId(),
            ));
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($formCompany));
        }

        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('index.html'))
            ->setData(array(
                $this->config->getResourceName() => $resource,
                'form_company'                   => $formCompany->createView()
            ))
        ;

        return $this->handleView($view);
    }
    
    public function updateAction(Request $request)
    {
        $resource = $this->findOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
                
        $form = $this->getForm($resource);
        $data = array();
        if (($request->isMethod('PUT') || $request->isMethod('POST')) && $form->submit($request)->isValid()) {
            $event = new ReportTechnicalEvent($resource);
            $this->get('event_dispatcher')->dispatch(Events::REPORT_TECHNICAL_UPDATE,$event);
            
            if($request->isXmlHttpRequest()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($resource);
                $em->flush();
                $data['message'] = $this->get('translator')->trans('sigtec.the_changes_have_been_successfully_saved');
            }else{
                $this->domainManager->update($resource);
                return $this->redirectHandler->redirectTo($resource);
            }
        }else{
            $data = $form;
        }

        if ($this->config->isApiRequest()) {
            return $this->handleView($this->view($form));
        }
        $view = $this
                ->view();
        if($request->isXmlHttpRequest()){
            $view
                ->setFormat('json')
                ->setTemplate($this->config->getTemplate('update.html'))
                ->setData($data)
            ;
        }else{
            $view
                ->setTemplate($this->config->getTemplate('update.html'))
                ->setData(array(
                    $this->config->getResourceName() => $resource,
                    'form'                           => $form->createView()
                ))
            ;
        }

        return $this->handleView($view);
    }
    
    public function deleteAction(Request $request)
    {
        $resource = $this->findOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $this->domainManager->delete($resource);
        if($request->isXmlHttpRequest()){
            /** @var FlashBag $flashBag */
            $flashBag = $this->get('session')->getBag('flashes');
            $data = array(
                'message' => $flashBag->get('success'),
            );
            return new JsonResponse($data);
        }else{
            return $this->redirectHandler->redirectToRoute($this->config->getRedirectRoute('client_index'));
        }
    }
    
    function getProfessionalProfileAction(Request $request)
    {
        $resource = $this->findOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        $view = $this
            ->view()
            ->setTemplate($this->config->getTemplate('show.html'))
            ->setData(array(
                $resource->getProfessionalProfile(),
            ))
        ;

        return $this->handleView($view);
    }
    
    private function buildFormCompanyField($resource = null) {
        $user = $this->getUser();
        $form =  $this->createFormBuilder($resource)->add('company','entity',array(
                'label' => 'sigtec.company',
                'class' => 'Coramer\Sigtec\CompanyBundle\Entity\Company',
                'property' => 'rif',
                'empty_value' => 'sigtec.select',
                'attr' => array(
                    'class' => 'select blue-gradient replacement glossy input-large',
                ),
                'required' => true,
                'query_builder' => function(EntityRepository $er) use ($user) {
                    $qb = $er->createQueryBuilder('c');
                    $qb
                        ->select('c')
                        ->innerJoin('c.user','u')
                        ->andWhere('c.status = :status')
                        ->andWhere('c.valid = :valid')
                        ->andWhere('u.id = :user')
                        ->setParameter('valid', true)
                        ->setParameter('user', $user)
                        ->setParameter('status', true)
                            ;
                    return $qb;
                },
            ));
        return $form->getForm();
    }
    
    function cancelAction(Request $request)
    {
        $resource = $this->findOr404($request);
        $comment = $request->get('comment');
        if($comment == ''){
            $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.empty_comment');
            return $this->redirectHandler->redirectTo($resource);
        }
        
        if(($resource->getStatus() != ReportTechnical::STATUS_APPROVED && 
            $resource->getStatus() != ReportTechnical::STATUS_REJECTED &&
            $resource->getStatus() != ReportTechnical::STATUS_CANCELED
            )){
                $event = 'sigtec.company_report_technical.historical.cancel';
                $status = ReportTechnical::STATUS_CANCELED;

                $this->changeEstatus($resource, $comment, $event, $status);

                $this->setFlash('success', 'coramer_sigtec_backend.company_report_technical.cancel');
        }else{
            $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.can_not_be_sent_to_review');
        }
        return $this->redirectHandler->redirectTo($resource);
    }
    
    /**
     * Envia el reporte a revision
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return type
     * @throws type
     */
    function sendToRevisionAction(Request $request)
    {
        $resource = $this->findOr404($request);
        //Security Check
        $user = $this->getUser();
        if(!$user->getCompanies()->contains($resource->getCompany())){
            throw $this->createAccessDeniedHttpException();
        }
        
        if(($resource->getStatus() == ReportTechnical::STATUS_IN_PROGRESS || $resource->getStatus() == ReportTechnical::STATUS_PENDING_CORRECTION)){
            if($this->container->get('coramer_sigtec_report_technical.manager.report_technical_manager')->isValidRegistration($resource)){
                $comment = $request->get('comment');
                $event = 'sigtec.company_report_technical.historical.send_to_revision';
                $status = ReportTechnical::STATUS_IN_REVIEW;

                $this->changeEstatus($resource, $comment, $event, $status);

                $this->setFlash('success', 'coramer_sigtec_backend.company_report_technical.send_to_revision');
            }else{
                $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.invalid_report');
            }
        }else{
            $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.can_not_be_sent_to_review');
        }
        return $this->redirectHandler->redirectTo($resource);
    }
    
    /**
     * Cambia el estatus del reporte tecnico por el Revisor encargado
     * 
     * @Security("is_granted('ROLE_REVISER')")
     */
    function reviewerSendToAction(Request $request,$status)
    {
        $resource = $this->findOr404($request);
        $comment = $request->get('comment');
        if($comment == ''){
            $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.empty_comment');
            return $this->redirectHandler->redirectTo($resource);
        }
        if(($resource->getStatus() == ReportTechnical::STATUS_IN_REVIEW)){
            if($this->container->get('coramer_sigtec_report_technical.manager.report_technical_manager')->isValidRegistration($resource)){
               $flash = '';
                if($status == ReportTechnical::STATUS_PENDING_CORRECTION){
                    $event = 'sigtec.company_report_technical.historical.pending_correction';
                    $flash = 'pending_correction';
                }elseif($status == ReportTechnical::STATUS_REVISED){
                    $event = 'sigtec.company_report_technical.historical.revised';
                    $flash = 'revised';
                }

                $this->changeEstatus($resource, $comment, $event, $status);

                $this->setFlash('success', 'coramer_sigtec_backend.company_report_technical.'.$flash);
            }else{
                $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.invalid_report');
            }
        }else{
            $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.can_not_status_review');
        }
        return $this->redirectHandler->redirectTo($resource);
    }
    
    /**
     * Cambia el estatus del reporte tecnico por el Gerente tecnico
     * 
     * @Security("is_granted('ROLE_TECHNICAL_MANAGER')")
     */
    function technicalManagerSendToAction(Request $request,$status)
    {
        $resource = $this->findOr404($request);
        $comment = $request->get('comment');
        if($comment == ''){
            $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.empty_comment');
            return $this->redirectHandler->redirectTo($resource);
        }
        if(($resource->getStatus() == ReportTechnical::STATUS_REVISED)){
            if($this->container->get('coramer_sigtec_report_technical.manager.report_technical_manager')->isValidRegistration($resource)){
               $flash = '';
                if($status == ReportTechnical::STATUS_APPROVED){
                    $event = 'sigtec.company_report_technical.historical.approved';
                    $flash = 'approved';
                }elseif($status == ReportTechnical::STATUS_REJECTED){
                    $event = 'sigtec.company_report_technical.historical.rejected';
                    $flash = 'rejected';
                }

                $this->changeEstatus($resource, $comment, $event, $status);

                $this->setFlash('success', 'coramer_sigtec_backend.company_report_technical.'.$flash);
            }else{
                $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.invalid_report');
            }
        }else{
            $this->setFlash('error', 'coramer_sigtec_backend.company_report_technical.error.can_not_be_approved');
        }
        return $this->redirectHandler->redirectTo($resource);
    }
    
    /**
     * Envia un mensaje flash
     * 
     * @param type $type
     * @param type $message
     * @param type $parameters
     * @param type $domain
     * @return type
     */
    protected function setFlash($type,$message,$parameters = array(),$domain = 'flashes')
    {
        return $this->get('session')->getBag('flashes')->add($type,$this->trans($message, $parameters, $domain));
    }
    
    /**
     * Funcion que cambia el estatus del reporte tecnico y notifica por correo electronico a los contactos de la empresa
     * 
     * @param \Coramer\Sigtec\ReportTechnicalBundle\Entity\ReportTechnical $reportTechnical
     * @param type $comment
     * @param type $event
     * @param type $status
     */
    protected function changeEstatus(ReportTechnical $reportTechnical,$comment,$event,$status) {
        $historical = new Historical();
        $historical
                ->setUser($this->getUser())
                ->setComment($comment)
                ->setEvent($event)
                ;
        $reportTechnical->addHistory($historical);
        $status1 = $this->trans($reportTechnical->getLabelStatus());
        $reportTechnical->setStatus($status);

        $status2 = $this->trans($reportTechnical->getLabelStatus());
        $reportArchive = $reportTechnical->getArchive();

        $em = $this->getDoctrine()->getManager();
        $em->persist($reportTechnical);
        $em->flush();

        foreach ($reportTechnical->getCompany()->getContacts() as $contact) {
             $recipient = $contact->getEmail();
             $customer = $contact->getFullName();
             $body = $this->trans(
                            'sigtec.company_report_technical.email.change_status.body',
                            array(
                                '%customer%' => $customer,
                                '%reportArchive%' => $reportArchive,
                                '%status1%' => $status1,
                                '%status2%' => $status2,
                            ),
                            'CoramerSigtecReportTechnicalBundle'
                        );
             $message = Swift_Message::newInstance()
                ->setSubject($this->trans('sigtec.company_report_technical.email.change_status.subject',array(),'CoramerSigtecReportTechnicalBundle'))
                ->setFrom('info@example.com')
                ->setTo($recipient)
                ->setBody($body)
            ;
            $this->get('mailer')->send($message);
        }
    }
}
