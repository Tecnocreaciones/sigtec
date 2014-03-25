<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TecnoCreaciones\UserBundle\Controller;

use FOS\UserBundle\Controller\ResettingController as BaseController;

/**
 * Description of ResettingController
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class ResettingController extends BaseController
{
    public function sendEmailAction(\Symfony\Component\HttpFoundation\Request $request) {
        if($request->isXmlHttpRequest()){
            $data = array();
            $response = new \Symfony\Component\HttpFoundation\JsonResponse();
            
            $username = $request->request->get('username');

            /** @var $user UserInterface */
            $user = $this->container->get('fos_user.user_manager')->findUserByUsernameOrEmail($username);

            if (null === $user) {
                $data['message'] = $this->getTranslator()->trans('resetting.request.invalid_username',array('%username%' => $username),'FOSUserBundle');
                $response->setData($data)->setStatusCode(400);
                return $response;
            }

            if ($user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
                
                $data['message'] = $this->getTranslator()->trans('resetting.password_already_requested',array(),'FOSUserBundle');
                $response->setData($data)->setStatusCode(400);
                return $response;
            }

            if (null === $user->getConfirmationToken()) {
                /** @var $tokenGenerator \FOS\UserBundle\Util\TokenGeneratorInterface */
                $tokenGenerator = $this->container->get('fos_user.util.token_generator');
                $user->setConfirmationToken($tokenGenerator->generateToken());
            }

            $this->container->get('fos_user.mailer')->sendResettingEmailMessage($user);
            $user->setPasswordRequestedAt(new \DateTime());
            $this->container->get('fos_user.user_manager')->updateUser($user);

            $data['message'] = $this->getTranslator()->trans('resetting.check_email',array('%email%' => $username),'FOSUserBundle');
            $response->setData($data);
            return $response;
        }else{
            return parent::sendEmailAction($request);
        }
    }
    
    /**
     * Traductor
     * @return \Symfony\Component\Translation\TranslatorInterface
     */
    protected function getTranslator()
    {
        return $this->container->get('translator');
    }
}
