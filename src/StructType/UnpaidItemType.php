<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnpaidItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>UnpaidItem</strong> container, which consists of details related to the type and status of an Unpaid Item case.
 * @subpackage Structs
 */
class UnpaidItemType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the status of the Unpaid Item case. This field is always returned with the <strong>UnpaidItem</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: This field indicates if the Unpaid Item case was opened manually by the customer or opened automatically by eBay's Unpaid Item Assistant feature. This field is always returned with the <strong>UnpaidItem</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnpaidItemType
     * @uses UnpaidItemType::setStatus()
     * @uses UnpaidItemType::setType()
     * @uses UnpaidItemType::setAny()
     * @param string $status
     * @param string $type
     * @param \DOMDocument $any
     */
    public function __construct($status = null, $type = null, \DOMDocument $any = null)
    {
        $this
            ->setStatus($status)
            ->setType($type)
            ->setAny($any);
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
     * @uses \EnumType\UnpaidItemCaseStatusTypeCodeType::valueIsValid()
     * @uses \EnumType\UnpaidItemCaseStatusTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\UnpaidItemType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UnpaidItemCaseStatusTypeCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\UnpaidItemCaseStatusTypeCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\UnpaidItemCaseStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\UnpaidItemCaseOpenTypeCodeType::valueIsValid()
     * @uses \EnumType\UnpaidItemCaseOpenTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\UnpaidItemType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UnpaidItemCaseOpenTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\UnpaidItemCaseOpenTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\UnpaidItemCaseOpenTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \StructType\UnpaidItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
