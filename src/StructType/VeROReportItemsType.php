<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ReportItems</b> container in the <b>VeROReportItems</b> request. The <b>ReportItems</b> container is an array of one or more eBay items which, according to the product's owner, are infringing upon the product
 * owner's copyright, trademark, or intellectual property rights.
 * @subpackage Structs
 */
class VeROReportItemsType extends AbstractStructBase
{
    /**
     * The ReportItem
     * Meta information extracted from the WSDL
     * - documentation: A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b>
     * fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\VeROReportItemType[]
     */
    public $ReportItem;
    /**
     * Constructor method for VeROReportItemsType
     * @uses VeROReportItemsType::setReportItem()
     * @param \StructType\VeROReportItemType[] $reportItem
     */
    public function __construct(array $reportItem = array())
    {
        $this
            ->setReportItem($reportItem);
    }
    /**
     * Get ReportItem value
     * @return \StructType\VeROReportItemType[]|null
     */
    public function getReportItem()
    {
        return $this->ReportItem;
    }
    /**
     * This method is responsible for validating the values passed to the setReportItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReportItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReportItemForArrayConstraintsFromSetReportItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROReportItemsTypeReportItemItem) {
            // validation for constraint: itemType
            if (!$veROReportItemsTypeReportItemItem instanceof \StructType\VeROReportItemType) {
                $invalidValues[] = is_object($veROReportItemsTypeReportItemItem) ? get_class($veROReportItemsTypeReportItemItem) : sprintf('%s(%s)', gettype($veROReportItemsTypeReportItemItem), var_export($veROReportItemsTypeReportItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReportItem property can only contain items of type \StructType\VeROReportItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ReportItem value
     * @throws \InvalidArgumentException
     * @param \StructType\VeROReportItemType[] $reportItem
     * @return \StructType\VeROReportItemsType
     */
    public function setReportItem(array $reportItem = array())
    {
        // validation for constraint: array
        if ('' !== ($reportItemArrayErrorMessage = self::validateReportItemForArrayConstraintsFromSetReportItem($reportItem))) {
            throw new \InvalidArgumentException($reportItemArrayErrorMessage, __LINE__);
        }
        $this->ReportItem = $reportItem;
        return $this;
    }
    /**
     * Add item to ReportItem value
     * @throws \InvalidArgumentException
     * @param \StructType\VeROReportItemType $item
     * @return \StructType\VeROReportItemsType
     */
    public function addToReportItem(\StructType\VeROReportItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VeROReportItemType) {
            throw new \InvalidArgumentException(sprintf('The ReportItem property can only contain items of type \StructType\VeROReportItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReportItem[] = $item;
        return $this;
    }
}
