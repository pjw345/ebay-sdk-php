<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContextualKeywordsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to a <b>GetContextualKeywords</b> request.
 * @subpackage Structs
 */
class GetContextualKeywordsResponseType extends AbstractResponseType
{
    /**
     * The ContextSearchAsset
     * Meta information extracted from the WSDL
     * - documentation: An array of either keyword/category pairs or categories, with ranking and score.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ContextSearchAssetType[]
     */
    public $ContextSearchAsset;
    /**
     * Constructor method for GetContextualKeywordsResponseType
     * @uses GetContextualKeywordsResponseType::setContextSearchAsset()
     * @param \StructType\ContextSearchAssetType[] $contextSearchAsset
     */
    public function __construct(array $contextSearchAsset = array())
    {
        $this
            ->setContextSearchAsset($contextSearchAsset);
    }
    /**
     * Get ContextSearchAsset value
     * @return \StructType\ContextSearchAssetType[]|null
     */
    public function getContextSearchAsset()
    {
        return $this->ContextSearchAsset;
    }
    /**
     * This method is responsible for validating the values passed to the setContextSearchAsset method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContextSearchAsset method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextSearchAssetForArrayConstraintsFromSetContextSearchAsset(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getContextualKeywordsResponseTypeContextSearchAssetItem) {
            // validation for constraint: itemType
            if (!$getContextualKeywordsResponseTypeContextSearchAssetItem instanceof \StructType\ContextSearchAssetType) {
                $invalidValues[] = is_object($getContextualKeywordsResponseTypeContextSearchAssetItem) ? get_class($getContextualKeywordsResponseTypeContextSearchAssetItem) : sprintf('%s(%s)', gettype($getContextualKeywordsResponseTypeContextSearchAssetItem), var_export($getContextualKeywordsResponseTypeContextSearchAssetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContextSearchAsset property can only contain items of type \StructType\ContextSearchAssetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ContextSearchAsset value
     * @throws \InvalidArgumentException
     * @param \StructType\ContextSearchAssetType[] $contextSearchAsset
     * @return \StructType\GetContextualKeywordsResponseType
     */
    public function setContextSearchAsset(array $contextSearchAsset = array())
    {
        // validation for constraint: array
        if ('' !== ($contextSearchAssetArrayErrorMessage = self::validateContextSearchAssetForArrayConstraintsFromSetContextSearchAsset($contextSearchAsset))) {
            throw new \InvalidArgumentException($contextSearchAssetArrayErrorMessage, __LINE__);
        }
        $this->ContextSearchAsset = $contextSearchAsset;
        return $this;
    }
    /**
     * Add item to ContextSearchAsset value
     * @throws \InvalidArgumentException
     * @param \StructType\ContextSearchAssetType $item
     * @return \StructType\GetContextualKeywordsResponseType
     */
    public function addToContextSearchAsset(\StructType\ContextSearchAssetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ContextSearchAssetType) {
            throw new \InvalidArgumentException(sprintf('The ContextSearchAsset property can only contain items of type \StructType\ContextSearchAssetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ContextSearchAsset[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetContextualKeywordsResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
