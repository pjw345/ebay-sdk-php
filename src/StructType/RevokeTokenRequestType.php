<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevokeTokenRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Revokes a token before it would otherwise expire.
 * @subpackage Structs
 */
class RevokeTokenRequestType extends AbstractRequestType
{
    /**
     * The UnsubscribeNotification
     * Meta information extracted from the WSDL
     * - documentation: Cancels notification subscriptions for the user/application if set to true. Default value is false.
     * - minOccurs: 0
     * @var bool
     */
    public $UnsubscribeNotification;
    /**
     * Constructor method for RevokeTokenRequestType
     * @uses RevokeTokenRequestType::setUnsubscribeNotification()
     * @param bool $unsubscribeNotification
     */
    public function __construct($unsubscribeNotification = null)
    {
        $this
            ->setUnsubscribeNotification($unsubscribeNotification);
    }
    /**
     * Get UnsubscribeNotification value
     * @return bool|null
     */
    public function getUnsubscribeNotification()
    {
        return $this->UnsubscribeNotification;
    }
    /**
     * Set UnsubscribeNotification value
     * @param bool $unsubscribeNotification
     * @return \StructType\RevokeTokenRequestType
     */
    public function setUnsubscribeNotification($unsubscribeNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($unsubscribeNotification) && !is_bool($unsubscribeNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unsubscribeNotification, true), gettype($unsubscribeNotification)), __LINE__);
        }
        $this->UnsubscribeNotification = $unsubscribeNotification;
        return $this;
    }
}
