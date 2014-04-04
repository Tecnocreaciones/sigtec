<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\ToolsBundle\Model;

/**
 * Description of Rif
 *
 * @author inhack20
 */
class Rif 
{
    
    /**
     * El formato del rif es invalido
     */
    const STATUS_ERROR_INVALID_RIF_FORMAT = 0;
    /**
     * El servidor sel SENIAT no responde
     */
    const STATUS_ERROR_SERVER_DOWN = 1;
    /**
     * El rif no existe
     */
    const STATUS_ERROR_RIF_DOES_NOT_EXIST = 2;
    /**
     * El digito verificador es invalido
     */
    const STATUS_ERROR_INVALID_CHECK_DIGIT = 3;
    /**
     * El rif se recupero exisotamente
     */
    const STATUS_OK = 4;
    
    private $rif;
    
    private $name;
    
    private $message;
    
    private $codeResponse;
    
    /**
     * Verifica si el rif es valido
     * @var boolean
     */
    private $valid = true;
    
    public function getRif() {
        return $this->rif;
    }

    public function getName() {
        return $this->name;
    }

    public function getCodeResponse() {
        return $this->codeResponse;
    }

    public function setRif($rif) {
        $this->rif = $rif;
        
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        
        return $this;
    }

    public function setCodeResponse($codeResponse) {
        $this->codeResponse = $codeResponse;
        if($this->codeResponse != self::STATUS_OK){
            $this->valid = false;
        }
        return $this;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
        
        return $this;
    }
    
    public function getArrayResponse() {
        $data = array(
            'message' => $this->getMessage(),
        );
        return $data;
    }
    
    /**
     * Retorna true si es valido
     * @return boolean
     */
    public function isValid() {
        return $this->valid;
    }
}
