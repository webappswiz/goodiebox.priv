<?php

/**
 * 
 *  Copyright (C) 2013 PayU Hungary Kft.
 *
 *  This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @copyright   Copyright (c) 2013 PayU Hungary Kft. (http://www.payu.hu)
 * @link        http://www.payu.hu 
 * @license     http://www.gnu.org/licenses/gpl-3.0.html  GNU GENERAL PUBLIC LICENSE (GPL V3.0)
 *
 * @package  	PayU SDK 
 * 
 */
 
 
require_once('PayUBase.class.php');
 
 
/**
 * PayU Instant Delivery Information
 *
 * Sends delivery notification via HTTP
 * 
 */
class PayUIdn extends PayUBase{
    public $missing = array();
    
    public $targetUrl;
    public $formData;
    public $hashData;

    public $hashFields = array(
        "MERCHANT",
        "ORDER_REF",
        "ORDER_AMOUNT",
        "ORDER_CURRENCY",
        "IDN_DATE"
    );

    protected $validFields = array(
        "MERCHANT" => array("type"=>"single", "paramName"=>"merchantId", "required"=>true),
        "ORDER_REF" => array("type"=>"single", "paramName"=>"orderRef", "required"=>true),
        "ORDER_AMOUNT" => array("type"=>"single", "paramName"=>"amount", "required"=>true),
        "ORDER_CURRENCY" => array("type"=>"single", "paramName"=>"currency", "required"=>true),
        "IDN_DATE" => array("type"=>"single", "paramName"=>"idnDate", "required"=>true),
        "REF_URL" => array("type"=>"single", "paramName"=>"refUrl"),
    );

    /*
     * Constructor of PayUIdn class
     * 
     * @param mixed $config Configuration array or filename
     * @param boolean $debug Debug mode
     */
    public function __construct($config, $debug = false){
        $this->hashData = array();
        $this->formData = array();

        parent::__construct($config, $debug);
        $this->fieldData['MERCHANT'] = $this->merchantId;
        $this->targetUrl = $this->idnUrl;
    }

    /*
     * Creates associative array for the received data
     * 
     * @param array $data Processed data
     */
    protected function nameData($data){
        return array(
            "ORDER_REF"=>$data[0],
            "RESPONSE_CODE"=>$data[1],
            "RESPONSE_MSG"=>$data[2],
            "IDN_DATE"=>$data[3],
            "ORDER_HASH"=>$data[4],
        );
    }
    
    /*
     * Sends notification via cURL
     * 
     * @param array $data (Optional) Data array to be sent
     */
    public function requestCurl($data = false, $target = '', $method = ''){
        if(!$data){
            if (!$this->prepareFields("ORDER_HASH")) {
                return false;
            }

            $data = $this->formData;
        }
        return parent::requestCurl($this->targetUrl, "POST", $this->formData);
    }      
    
    /*
     * Generates a ready-to-insert HTML FORM
     * 
     * @param string $formName The ID parameter of the form
     * @param string $submitElement The type of the submit element ('button' or 'link')
     * @param string $submitElementText The lebel for the submit element
     * @param boolean $tags Display open/close TAGs
     */
    public function createHtmlForm($formName, $submitElement=false, $submitElementText=false, $data = array(), $tags=true, $iframe= false){
		if (!$this->prepareFields("ORDER_HASH")) {
            return false;
        }
        return parent::createHtmlForm($formName, $submitElement, $submitElementText, $this->formData, $tags, $iframe = false);
    }
                                      
 
    /*
     * Creates an array from useful REQUEST variables
     * 
     */
    public function receiveResponse(){
        return array(
            "ORDER_REF" => $_REQUEST['ORDER_REF'],
            "RESPONSE_CODE" => $_REQUEST['RESPONSE_CODE'],
            "RESPONSE_MSG" => $_REQUEST['RESPONSE_MSG'],
            "IDN_DATE" => $_REQUEST['IDN_DATE'],
            "ORDER_HASH" => $_REQUEST['ORDER_HASH']
        );
    }
    
    /*
     * Returns a list of missing required fields
     * 
     */
    public function getMissing(){
        return $this->missing;
    }
}


/**
 * PayU Instant Refund Notification
 *
 * Sends Refund request via HTTP request
 * 
 */
class PayUIrn extends PayUBase{
    /*
     * Constructor of PayUIrn class
     * 
     * @param mixed $config Configuration array or filename
     * @param boolean $debug Debug mode
     */
    public function __construct($config, $debug = false){
        $this->hashFields = array(
            "MERCHANT",
            "ORDER_REF",
            "ORDER_AMOUNT",
            "ORDER_CURRENCY",
            "IRN_DATE",
            "ORDER_PCODE",
            "ORDER_QTY",
            "AMOUNT"
        );

        $this->validFields = array(
            "MERCHANT" => array("type" => "single", "paramName" => "merchantId", "required" => true),
            "ORDER_REF" => array("type" => "single", "paramName" => "orderRef", "required" => true),
            "ORDER_AMOUNT" => array("type" => "single", "paramName" => "amount", "required" => true),
            "AMOUNT" => array("type" => "single", "paramName" => "amount", "required" => true),
            "ORDER_CURRENCY" => array("type" => "single", "paramName" => "currency", "required" => true),
            "IRN_DATE" => array("type" => "single", "paramName" => "irnDate", "required" => true),
            "REF_URL" => array("type" => "single", "paramName" => "refUrl"),
            "ORDER_PCODE" => array("type" => "product", "paramName" => "code", "rename"=>"PRODUCTS_IDS"),
            "ORDER_QTY" => array("type" => "product", "paramName" => "qty", "rename" => "PRODUCTS_QTY")
        );

        parent::__construct($config, $debug);
        $this->fieldData['MERCHANT'] = $this->merchantId;
        $this->targetUrl = $this->irnUrl;
    }

    /*
     * Creates associative array for the received data
     * 
     * @param array $data Processed data
     */
    protected function nameData($data){
        return array(
            "ORDER_REF"=>$data[0],
            "RESPONSE_CODE"=>$data[1],
            "RESPONSE_MSG"=>$data[2],
            "IRN_DATE"=>$data[3],
            "ORDER_HASH"=>$data[4],
        );
    }
    
    /*
     * Sends notification via cURL
     * 
     * @param array $data (Optional) Data array to be sent
     */
    public function requestCurl($data = false, $target = '', $method = ''){
        if(!$data){
            if (!$this->prepareFields("ORDER_HASH")) {
                return false;
            }

            $data = $this->formData;
        }
        return parent::requestCurl($this->targetUrl, "POST", $this->formData);
    }      
    
    /*
     * Generates a ready-to-insert HTML FORM
     * 
     * @param string $formName The ID parameter of the form
     * @param string $submitElement The type of the submit element ('button' or 'link')
     * @param string $submitElementText The lebel for the submit element
     * @param boolean $tags Display open/close TAGs
     */
    public function createHtmlForm($formName, $submitElement=false, $submitElementText=false, $data = array(), $tags=true, $iframe= false){
        if (!$this->prepareFields("ORDER_HASH")) {
                return false;
            }
        return parent::createHtmlForm($formName, $submitElement, $submitElementText, $this->formData, $tags, $iframe = false);
    }
    
    /*
     * Creates an array from useful REQUEST variables
     * 
     */
    public function receiveResponse(){
        return array(
            "ORDER_REF" => $_REQUEST['ORDER_REF'],
            "RESPONSE_CODE" => $_REQUEST['RESPONSE_CODE'],
            "RESPONSE_MSG" => $_REQUEST['RESPONSE_MSG'],
            "IRN_DATE" => $_REQUEST['IRN_DATE'],
            "ORDER_HASH" => $_REQUEST['ORDER_HASH']
        );
    }
    
    /*
     * Returns a list of missing required fields
     * 
     */
    public function getMissing(){
        return $this->missing;
    }
}



?>