<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMyMessagesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Removes selected messages for a given user.
 * @subpackage Structs
 */
class DeleteMyMessagesRequestType extends AbstractRequestType
{
    /**
     * The AlertIDs
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \ArrayType\MyMessagesAlertIDArrayType
     */
    public $AlertIDs;
    /**
     * The MessageIDs
     * Meta information extracted from the WSDL
     * - documentation: Contains a list of up to 10 <b>MessageID</b> values.
     * - minOccurs: 0
     * @var \ArrayType\MyMessagesMessageIDArrayType
     */
    public $MessageIDs;
    /**
     * Constructor method for DeleteMyMessagesRequestType
     * @uses DeleteMyMessagesRequestType::setAlertIDs()
     * @uses DeleteMyMessagesRequestType::setMessageIDs()
     * @param \ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @param \ArrayType\MyMessagesMessageIDArrayType $messageIDs
     */
    public function __construct(\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null, \ArrayType\MyMessagesMessageIDArrayType $messageIDs = null)
    {
        $this
            ->setAlertIDs($alertIDs)
            ->setMessageIDs($messageIDs);
    }
    /**
     * Get AlertIDs value
     * @return \ArrayType\MyMessagesAlertIDArrayType|null
     */
    public function getAlertIDs()
    {
        return $this->AlertIDs;
    }
    /**
     * Set AlertIDs value
     * @param \ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @return \StructType\DeleteMyMessagesRequestType
     */
    public function setAlertIDs(\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null)
    {
        $this->AlertIDs = $alertIDs;
        return $this;
    }
    /**
     * Get MessageIDs value
     * @return \ArrayType\MyMessagesMessageIDArrayType|null
     */
    public function getMessageIDs()
    {
        return $this->MessageIDs;
    }
    /**
     * Set MessageIDs value
     * @param \ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @return \StructType\DeleteMyMessagesRequestType
     */
    public function setMessageIDs(\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null)
    {
        $this->MessageIDs = $messageIDs;
        return $this;
    }
}
