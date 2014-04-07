<?php

namespace Coramer\Sigtec\CompanyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Coramer\Sigtec\CompanyBundle\Entity\Plant;
use Coramer\Sigtec\CompanyBundle\Form\PlantType;

/**
 * Plant controller.
 *
 * @Route("/plant")
 */
class PlantController extends Controller
{

    /**
     * Lists all Plant entities.
     *
     * @Route("/", name="plant")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoramerSigtecCompanyBundle:Plant')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Plant entity.
     *
     * @Route("/", name="plant_create")
     * @Method("POST")
     * @Template("CoramerSigtecCompanyBundle:Plant:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Plant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plant_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Plant entity.
    *
    * @param Plant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Plant $entity)
    {
        $form = $this->createForm(new PlantType(), $entity, array(
            'action' => $this->generateUrl('plant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Plant entity.
     *
     * @Route("/new", name="plant_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $phone1 = new \Coramer\Sigtec\CompanyBundle\Entity\Phone();
        $entity = new Plant();
        $entity->getPhones()->add($phone1);
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Plant entity.
     *
     * @Route("/{id}", name="plant_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoramerSigtecCompanyBundle:Plant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Plant entity.
     *
     * @Route("/{id}/edit", name="plant_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoramerSigtecCompanyBundle:Plant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Plant entity.
    *
    * @param Plant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Plant $entity)
    {
        $form = $this->createForm(new PlantType(), $entity, array(
            'action' => $this->generateUrl('plant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Plant entity.
     *
     * @Route("/{id}", name="plant_update")
     * @Method("PUT")
     * @Template("CoramerSigtecCompanyBundle:Plant:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoramerSigtecCompanyBundle:Plant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('plant_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Plant entity.
     *
     * @Route("/{id}", name="plant_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CoramerSigtecCompanyBundle:Plant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Plant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plant'));
    }

    /**
     * Creates a form to delete a Plant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
