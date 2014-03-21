<?php

namespace Coramer\CRM\CoreBundle\Handler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler;

/**
 * Description of AuthenticationFailureHandler
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com.ve>
 */
class AuthenticationFailureHandler extends DefaultAuthenticationFailureHandler
{
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
        if($request->isXmlHttpRequest()){
            
            $data = array(
                'message' => $exception->getMessage(),
            );
            $response = new \Symfony\Component\HttpFoundation\JsonResponse($data,400);
            return $response;
        }else{
            return parent::onAuthenticationFailure($request, $exception);
        }
    }
}
