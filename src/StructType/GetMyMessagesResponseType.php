<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyMessagesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Conains information about the messages sent to a user. Depending on the detail level, this information can include message counts, resolution and flagged status, message headers, and message text.
 * @subpackage Structs
 */
class GetMyMessagesResponseType extends AbstractResponseType
{
    /**
     * The Summary
     * Meta information extracted from the WSDL
     * - documentation: Summary data for a given user's messages. This includes the numbers of new messages, flagged messages, and total messages. The amount and type of data returned is the same whether or not the request includes specific Message IDs.
     * Always/Conditionally returned logic assumes a detail level of ReturnMessages.
     * - minOccurs: 0
     * @var \StructType\MyMessagesSummaryType
     */
    public $Summary;
    /**
     * The Alerts
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \ArrayType\MyMessagesAlertArrayType
     */
    public $Alerts;
    /**
     * The Messages
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of one or more messages that match the search criteria in the call request.
     * - minOccurs: 0
     * @var \ArrayType\MyMessagesMessageArrayType
     */
    public $Messages;
    /**
     * Constructor method for GetMyMessagesResponseType
     * @uses GetMyMessagesResponseType::setSummary()
     * @uses GetMyMessagesResponseType::setAlerts()
     * @uses GetMyMessagesResponseType::setMessages()
     * @param \StructType\MyMessagesSummaryType $summary
     * @param \ArrayType\MyMessagesAlertArrayType $alerts
     * @param \ArrayType\MyMessagesMessageArrayType $messages
     */
    public function __construct(\StructType\MyMessagesSummaryType $summary = null, \ArrayType\MyMessagesAlertArrayType $alerts = null, \ArrayType\MyMessagesMessageArrayType $messages = null)
    {
        $this
            ->setSummary($summary)
            ->setAlerts($alerts)
            ->setMessages($messages);
    }
    /**
     * Get Summary value
     * @return \StructType\MyMessagesSummaryType|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param \StructType\MyMessagesSummaryType $summary
     * @return \StructType\GetMyMessagesResponseType
     */
    public function setSummary(\StructType\MyMessagesSummaryType $summary = null)
    {
        $this->Summary = $summary;
        return $this;
    }
    /**
     * Get Alerts value
     * @return \ArrayType\MyMessagesAlertArrayType|null
     */
    public function getAlerts()
    {
        return $this->Alerts;
    }
    /**
     * Set Alerts value
     * @param \ArrayType\MyMessagesAlertArrayType $alerts
     * @return \StructType\GetMyMessagesResponseType
     */
    public function setAlerts(\ArrayType\MyMessagesAlertArrayType $alerts = null)
    {
        $this->Alerts = $alerts;
        return $this;
    }
    /**
     * Get Messages value
     * @return \ArrayType\MyMessagesMessageArrayType|null
     */
    public function getMessages()
    {
        return $this->Messages;
    }
    /**
     * Set Messages value
     * @param \ArrayType\MyMessagesMessageArrayType $messages
     * @return \StructType\GetMyMessagesResponseType
     */
    public function setMessages(\ArrayType\MyMessagesMessageArrayType $messages = null)
    {
        $this->Messages = $messages;
        return $this;
    }
}
