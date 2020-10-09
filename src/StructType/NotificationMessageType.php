<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: A template for an SMS notification message.
 * @subpackage Structs
 */
class NotificationMessageType extends AbstractResponseType
{
    /**
     * The MessageBody
     * Meta information extracted from the WSDL
     * - documentation: The SMS message.
     * - minOccurs: 0
     * @var string
     */
    public $MessageBody;
    /**
     * The EIAS
     * Meta information extracted from the WSDL
     * - documentation: The EIAS userId.
     * - minOccurs: 0
     * @var string
     */
    public $EIAS;
    /**
     * Constructor method for NotificationMessageType
     * @uses NotificationMessageType::setMessageBody()
     * @uses NotificationMessageType::setEIAS()
     * @param string $messageBody
     * @param string $eIAS
     */
    public function __construct($messageBody = null, $eIAS = null)
    {
        $this
            ->setMessageBody($messageBody)
            ->setEIAS($eIAS);
    }
    /**
     * Get MessageBody value
     * @return string|null
     */
    public function getMessageBody()
    {
        return $this->MessageBody;
    }
    /**
     * Set MessageBody value
     * @param string $messageBody
     * @return \StructType\NotificationMessageType
     */
    public function setMessageBody($messageBody = null)
    {
        // validation for constraint: string
        if (!is_null($messageBody) && !is_string($messageBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageBody, true), gettype($messageBody)), __LINE__);
        }
        $this->MessageBody = $messageBody;
        return $this;
    }
    /**
     * Get EIAS value
     * @return string|null
     */
    public function getEIAS()
    {
        return $this->EIAS;
    }
    /**
     * Set EIAS value
     * @param string $eIAS
     * @return \StructType\NotificationMessageType
     */
    public function setEIAS($eIAS = null)
    {
        // validation for constraint: string
        if (!is_null($eIAS) && !is_string($eIAS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIAS, true), gettype($eIAS)), __LINE__);
        }
        $this->EIAS = $eIAS;
        return $this;
    }
}
