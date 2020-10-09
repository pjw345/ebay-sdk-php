<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NameValueListArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: A list of one or more valid names and corresponding values. Currently used to identify Item Specifics and individual variations within a multiple-variation listing.
 * @subpackage Arrays
 */
class NameValueListArrayType extends AbstractStructArrayBase
{
    /**
     * The NameValueList
     * Meta information extracted from the WSDL
     * - documentation: <b>For the <b>AddItem</b> family of calls:</b> Contains the name and value(s) for an Item Specific. Only required when the <b>ItemSpecifics</b> container is specified.<br> <br> <span class="tablenote"><b>Note: </b> The maximum number
     * of item specifics that may be defined for a listing has increased from 30 to 45. </span><br> <b>For the AddFixedPriceItem family of calls:</b> The same NameValueList schema is used for the <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b>
     * node, and the <b>VariationSpecifcsSet</b> node.<br> <br> If the listing has variations, any name that you use in the <b>VariationSpecifics</b> and <b>VariationSpecificsSet</b> nodes can't be used in the <b>ItemSpecifics</b> node.<br> When you list
     * with Item Variations:<br> <b></b> <ul> <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li> <li>Specify up to five <b>VariationSpecifics</b> in each Variation node. </li> <li>Specify all applicable names with all
     * their supported values in the <b>VariationSpecificSet</b> node. </li> </ul> See the Variation sample in the <b>AddFixedPriceItem</b> call reference for examples.<br> <br> <b>For PlaceOffer:</b> Required if the item being purchased includes Item
     * Variations. <br> <br> <b>For AddToWatchList and RemoveFromWatchList:</b> The <b>ItemID</b> value of the multiple-variation listing and the name-value pair to identify each variation in the listing are required. <br> <br> <span
     * class="tablenote"><b>Note:</b> As of August 30, 2018, California will require sellers to display a Proposition 65 warning on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This
     * requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and catalog-enabled categories. The warning message can be customized by the seller, but should contain the following basic information: <ul>
     * <li>The name of at least one listed chemical that prompted the warning</li> <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li> <li>The URL for OEHHA's new Proposition 65 warnings website, which is <a
     * href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li> </ul> Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65 Warning' item specific
     * allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing. </span><br>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameValueListType[]
     */
    public $NameValueList;
    /**
     * Constructor method for NameValueListArrayType
     * @uses NameValueListArrayType::setNameValueList()
     * @param \StructType\NameValueListType[] $nameValueList
     */
    public function __construct(array $nameValueList = array())
    {
        $this
            ->setNameValueList($nameValueList);
    }
    /**
     * Get NameValueList value
     * @return \StructType\NameValueListType[]|null
     */
    public function getNameValueList()
    {
        return $this->NameValueList;
    }
    /**
     * This method is responsible for validating the values passed to the setNameValueList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameValueList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameValueListForArrayConstraintsFromSetNameValueList(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nameValueListArrayTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$nameValueListArrayTypeNameValueListItem instanceof \StructType\NameValueListType) {
                $invalidValues[] = is_object($nameValueListArrayTypeNameValueListItem) ? get_class($nameValueListArrayTypeNameValueListItem) : sprintf('%s(%s)', gettype($nameValueListArrayTypeNameValueListItem), var_export($nameValueListArrayTypeNameValueListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameValueList property can only contain items of type \StructType\NameValueListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NameValueList value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValueListType[] $nameValueList
     * @return \ArrayType\NameValueListArrayType
     */
    public function setNameValueList(array $nameValueList = array())
    {
        // validation for constraint: array
        if ('' !== ($nameValueListArrayErrorMessage = self::validateNameValueListForArrayConstraintsFromSetNameValueList($nameValueList))) {
            throw new \InvalidArgumentException($nameValueListArrayErrorMessage, __LINE__);
        }
        $this->NameValueList = $nameValueList;
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValueListType $item
     * @return \ArrayType\NameValueListArrayType
     */
    public function addToNameValueList(\StructType\NameValueListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameValueListType) {
            throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of type \StructType\NameValueListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NameValueList[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\NameValueListType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\NameValueListType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\NameValueListType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\NameValueListType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\NameValueListType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NameValueList
     */
    public function getAttributeName()
    {
        return 'NameValueList';
    }
}
