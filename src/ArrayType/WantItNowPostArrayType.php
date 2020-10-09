<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for WantItNowPostArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class WantItNowPostArrayType extends AbstractStructArrayBase
{
    /**
     * The WantItNowPost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WantItNowPostType[]
     */
    public $WantItNowPost;
    /**
     * Constructor method for WantItNowPostArrayType
     * @uses WantItNowPostArrayType::setWantItNowPost()
     * @param \StructType\WantItNowPostType[] $wantItNowPost
     */
    public function __construct(array $wantItNowPost = array())
    {
        $this
            ->setWantItNowPost($wantItNowPost);
    }
    /**
     * Get WantItNowPost value
     * @return \StructType\WantItNowPostType[]|null
     */
    public function getWantItNowPost()
    {
        return $this->WantItNowPost;
    }
    /**
     * This method is responsible for validating the values passed to the setWantItNowPost method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWantItNowPost method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWantItNowPostForArrayConstraintsFromSetWantItNowPost(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $wantItNowPostArrayTypeWantItNowPostItem) {
            // validation for constraint: itemType
            if (!$wantItNowPostArrayTypeWantItNowPostItem instanceof \StructType\WantItNowPostType) {
                $invalidValues[] = is_object($wantItNowPostArrayTypeWantItNowPostItem) ? get_class($wantItNowPostArrayTypeWantItNowPostItem) : sprintf('%s(%s)', gettype($wantItNowPostArrayTypeWantItNowPostItem), var_export($wantItNowPostArrayTypeWantItNowPostItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WantItNowPost property can only contain items of type \StructType\WantItNowPostType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WantItNowPost value
     * @throws \InvalidArgumentException
     * @param \StructType\WantItNowPostType[] $wantItNowPost
     * @return \ArrayType\WantItNowPostArrayType
     */
    public function setWantItNowPost(array $wantItNowPost = array())
    {
        // validation for constraint: array
        if ('' !== ($wantItNowPostArrayErrorMessage = self::validateWantItNowPostForArrayConstraintsFromSetWantItNowPost($wantItNowPost))) {
            throw new \InvalidArgumentException($wantItNowPostArrayErrorMessage, __LINE__);
        }
        $this->WantItNowPost = $wantItNowPost;
        return $this;
    }
    /**
     * Add item to WantItNowPost value
     * @throws \InvalidArgumentException
     * @param \StructType\WantItNowPostType $item
     * @return \ArrayType\WantItNowPostArrayType
     */
    public function addToWantItNowPost(\StructType\WantItNowPostType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WantItNowPostType) {
            throw new \InvalidArgumentException(sprintf('The WantItNowPost property can only contain items of type \StructType\WantItNowPostType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WantItNowPost[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WantItNowPostType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WantItNowPostType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WantItNowPostType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WantItNowPostType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WantItNowPostType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WantItNowPost
     */
    public function getAttributeName()
    {
        return 'WantItNowPost';
    }
}
