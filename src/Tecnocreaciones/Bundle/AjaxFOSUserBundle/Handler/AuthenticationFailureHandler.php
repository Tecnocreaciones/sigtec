<?php

namespace Tecnocreaciones\Bundle\AjaxFOSUserBundle\Handler;

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
    /**
     * Translator
     * @var \Symfony\Component\Translation\TranslatorInterface
     */
    private $translator;
    
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
        if($request->isXmlHttpRequest()){
            
            $data = array(
                'message' => $this->translator->trans($exception->getMessage(),array(),'FOSUserBundle'),
            );
            $response = new \Symfony\Component\HttpFoundation\JsonResponse($data,400);
            return $response;
        }else{
            return parent::onAuthenticationFailure($request, $exception);
        }
    }
    
    /**
     * Establece el traductor
     * @param \Symfony\Component\Translation\TranslatorInterface $translator
     */
    function setTranslator(\Symfony\Component\Translation\TranslatorInterface $translator) {
        $this->translator = $translator;
    }
}
