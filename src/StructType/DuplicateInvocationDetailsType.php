<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateInvocationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DuplicateInvocationDetails</b> container that is returned in some calls if a duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> is used in the call request.
 * @subpackage Structs
 */
class DuplicateInvocationDetailsType extends AbstractStructBase
{
    /**
     * The DuplicateInvocationID
     * Meta information extracted from the WSDL
     * - documentation: This value represents the duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> that was used in the call request. | Specifies a universally unique identifier for an item. This is used to ensure that you only list a particular
     * item once, particularly if you are listing many items at once. The identifier can contain only digits from 0-9 and letters from A-F. The identifier must be 32 characters long. For example, 9CEBD9A6825644EC8D06C436D6CF494B.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DuplicateInvocationID;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the status of the previous call that used the <b>InvocationID</b> or <b>InvocationTrackingID</b> specified in the <b>DuplicateInvocationID</b>.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The InvocationTrackingID
     * Meta information extracted from the WSDL
     * - documentation: This unique identifier identifies the business item the previous API invocation created. For example, the Item ID of the item created by an <b>AddItem</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $InvocationTrackingID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DuplicateInvocationDetailsType
     * @uses DuplicateInvocationDetailsType::setDuplicateInvocationID()
     * @uses DuplicateInvocationDetailsType::setStatus()
     * @uses DuplicateInvocationDetailsType::setInvocationTrackingID()
     * @uses DuplicateInvocationDetailsType::setAny()
     * @param string $duplicateInvocationID
     * @param string $status
     * @param string $invocationTrackingID
     * @param \DOMDocument $any
     */
    public function __construct($duplicateInvocationID = null, $status = null, $invocationTrackingID = null, \DOMDocument $any = null)
    {
        $this
            ->setDuplicateInvocationID($duplicateInvocationID)
            ->setStatus($status)
            ->setInvocationTrackingID($invocationTrackingID)
            ->setAny($any);
    }
    /**
     * Get DuplicateInvocationID value
     * @return string|null
     */
    public function getDuplicateInvocationID()
    {
        return $this->DuplicateInvocationID;
    }
    /**
     * Set DuplicateInvocationID value
     * @param string $duplicateInvocationID
     * @return \StructType\DuplicateInvocationDetailsType
     */
    public function setDuplicateInvocationID($duplicateInvocationID = null)
    {
        // validation for constraint: string
        if (!is_null($duplicateInvocationID) && !is_string($duplicateInvocationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicateInvocationID, true), gettype($duplicateInvocationID)), __LINE__);
        }
        $this->DuplicateInvocationID = $duplicateInvocationID;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\InvocationStatusType::valueIsValid()
     * @uses \EnumType\InvocationStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\DuplicateInvocationDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\InvocationStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\InvocationStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\InvocationStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get InvocationTrackingID value
     * @return string|null
     */
    public function getInvocationTrackingID()
    {
        return $this->InvocationTrackingID;
    }
    /**
     * Set InvocationTrackingID value
     * @param string $invocationTrackingID
     * @return \StructType\DuplicateInvocationDetailsType
     */
    public function setInvocationTrackingID($invocationTrackingID = null)
    {
        // validation for constraint: string
        if (!is_null($invocationTrackingID) && !is_string($invocationTrackingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invocationTrackingID, true), gettype($invocationTrackingID)), __LINE__);
        }
        $this->InvocationTrackingID = $invocationTrackingID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\DuplicateInvocationDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
