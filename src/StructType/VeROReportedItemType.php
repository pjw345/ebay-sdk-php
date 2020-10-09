<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportedItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ReportedItem</b> container which is returned in the <b>GetVeROReportStatus</b> response. The <b>ReportedItem</b> container consists of the <b>ItemID</b> of the item that has infringed upon the seller's copyright,
 * trademark, or intellectual property rights, as well as the submission status of the VeRO Report.
 * @subpackage Structs
 */
class VeROReportedItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier (<b>ItemID</b>) of the listing reported for copyright, trademark, or intellectual property right infringment. <br><br> This field is always returned with the <b>ReportedItem</b> container. | Type that represents
     * the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ItemStatus
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the current submission status of the VeRO Report. <br><br> This field is always returned with the <b>ReportedItem</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $ItemStatus;
    /**
     * The ItemReasonForFailure
     * Meta information extracted from the WSDL
     * - documentation: This text explanation is submitted by eBay when the submission of an VeRO Report has failed or was blocked. <br><br> This field is only returned with the <b>ReportedItem</b> container if the <b>ItemStatus</b> value is
     * <b>SubmissionFailed</b> or <b>ClarificationRequired</b>.
     * - minOccurs: 0
     * @var string
     */
    public $ItemReasonForFailure;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VeROReportedItemType
     * @uses VeROReportedItemType::setItemID()
     * @uses VeROReportedItemType::setItemStatus()
     * @uses VeROReportedItemType::setItemReasonForFailure()
     * @uses VeROReportedItemType::setAny()
     * @param string $itemID
     * @param string $itemStatus
     * @param string $itemReasonForFailure
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $itemStatus = null, $itemReasonForFailure = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setItemStatus($itemStatus)
            ->setItemReasonForFailure($itemReasonForFailure)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\VeROReportedItemType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get ItemStatus value
     * @return string|null
     */
    public function getItemStatus()
    {
        return $this->ItemStatus;
    }
    /**
     * Set ItemStatus value
     * @uses \EnumType\VeROItemStatusCodeType::valueIsValid()
     * @uses \EnumType\VeROItemStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemStatus
     * @return \StructType\VeROReportedItemType
     */
    public function setItemStatus($itemStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\VeROItemStatusCodeType::valueIsValid($itemStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\VeROItemStatusCodeType', is_array($itemStatus) ? implode(', ', $itemStatus) : var_export($itemStatus, true), implode(', ', \EnumType\VeROItemStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ItemStatus = $itemStatus;
        return $this;
    }
    /**
     * Get ItemReasonForFailure value
     * @return string|null
     */
    public function getItemReasonForFailure()
    {
        return $this->ItemReasonForFailure;
    }
    /**
     * Set ItemReasonForFailure value
     * @param string $itemReasonForFailure
     * @return \StructType\VeROReportedItemType
     */
    public function setItemReasonForFailure($itemReasonForFailure = null)
    {
        // validation for constraint: string
        if (!is_null($itemReasonForFailure) && !is_string($itemReasonForFailure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemReasonForFailure, true), gettype($itemReasonForFailure)), __LINE__);
        }
        $this->ItemReasonForFailure = $itemReasonForFailure;
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
     * @return \StructType\VeROReportedItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
