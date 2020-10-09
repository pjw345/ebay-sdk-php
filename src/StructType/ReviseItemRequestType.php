<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to revise a listing on a specified eBay site. To revise an active listing, the seller specifies the <b>ItemID</b> value for the listing. The seller makes one or multiple changes to the listing through the <b>Item</b>
 * container, and the seller can also use one or more <b>DeletedField</b> tags to remove an optional field/setting from the listing. <br> <br> After a multiple-quantity, fixed-price listing has one or more sales, or less than 12 hours remain before the
 * listing is scheduled to end, you can not edit the values in the Listing Title, Primary Category, Secondary Category, Listing Duration, and Listing Type fields for that listing. The same applies to an auction listing that has at least one bid. <br>
 * <br> To revise a multiple-variation, fixed-price listing, the <b>ReviseFixedPriceItem</b> call should be used instead, as the <b>ReviseItem</b> call does not support variation-level edits.
 * @subpackage Structs
 */
class ReviseItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: The <b>Item</b> container is used to make changes to the active listing. The seller must pass in the <b>ItemID</b> value for the listing that is being revised. For anything else that the seller wishes to change, such as quantity or
     * price, the seller should include this field in the call request and give it a new value. <br/><br/> If the seller wants to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
     * - documentation: Specifies the name of a field to delete from a listing. The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted). See the relevant field descriptions to determine when to use
     * <b>DeletedField</b> (and potential consequences). <br><br> You cannot delete required fields from a listing. <br><br> Some fields are optional when you first list an item (e.g., <b>SecondaryCategory</b>), but once they are set they cannot be deleted
     * when you revise an item. Some optional fields cannot be deleted if the item has bids and/or ends within 12 hours. Some optional fields cannot be deleted if other fields depend on them. <br><br> Use values that match the case of the schema element
     * names (<b>Item.PictureDetails.GalleryURL</b>) or make the initial letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>). However, do not change the case of letters in the middle of a field name. For example,
     * <b>item.picturedetails.galleryUrl</b> is not allowed. <br><br> To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are deleting in square brackets ("[ ]"); for example, <b>Item.ListingEnhancement[BoldTitle]</b>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * The VerifyOnly
     * Meta information extracted from the WSDL
     * - documentation: When the <b>VerifyOnly</b> is included and set as <code>true</code>, the active listing is not actually revised, but the same response is returned and the seller gets to see the expected fees based on the changes made, and can also
     * view any listing recommendations if the <b>Item.IncludeRecommedations</b> boolean field is included and set to <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $VerifyOnly;
    /**
     * Constructor method for ReviseItemRequestType
     * @uses ReviseItemRequestType::setItem()
     * @uses ReviseItemRequestType::setDeletedField()
     * @uses ReviseItemRequestType::setVerifyOnly()
     * @param \StructType\ItemType $item
     * @param string[] $deletedField
     * @param bool $verifyOnly
     */
    public function __construct(\StructType\ItemType $item = null, array $deletedField = array(), $verifyOnly = null)
    {
        $this
            ->setItem($item)
            ->setDeletedField($deletedField)
            ->setVerifyOnly($verifyOnly);
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\ReviseItemRequestType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]|null
     */
    public function getDeletedField()
    {
        return $this->DeletedField;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedFieldForArrayConstraintsFromSetDeletedField(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviseItemRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($reviseItemRequestTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($reviseItemRequestTypeDeletedFieldItem) ? get_class($reviseItemRequestTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($reviseItemRequestTypeDeletedFieldItem), var_export($reviseItemRequestTypeDeletedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedField property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeletedField value
     * @throws \InvalidArgumentException
     * @param string[] $deletedField
     * @return \StructType\ReviseItemRequestType
     */
    public function setDeletedField(array $deletedField = array())
    {
        // validation for constraint: array
        if ('' !== ($deletedFieldArrayErrorMessage = self::validateDeletedFieldForArrayConstraintsFromSetDeletedField($deletedField))) {
            throw new \InvalidArgumentException($deletedFieldArrayErrorMessage, __LINE__);
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ReviseItemRequestType
     */
    public function addToDeletedField($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeletedField[] = $item;
        return $this;
    }
    /**
     * Get VerifyOnly value
     * @return bool|null
     */
    public function getVerifyOnly()
    {
        return $this->VerifyOnly;
    }
    /**
     * Set VerifyOnly value
     * @param bool $verifyOnly
     * @return \StructType\ReviseItemRequestType
     */
    public function setVerifyOnly($verifyOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifyOnly) && !is_bool($verifyOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verifyOnly, true), gettype($verifyOnly)), __LINE__);
        }
        $this->VerifyOnly = $verifyOnly;
        return $this;
    }
}
