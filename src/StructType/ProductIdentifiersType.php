<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductIdentifiersType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><strong>Note:</strong> This type and the <b>ProductIdentifiers</b> container were originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other
 * descriptive item specifics, but the <b>ProductIdentifiers</b> container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b>
 * field in the <b>GetCategorySpecifics</b> response. </span>
 * @subpackage Structs
 */
class ProductIdentifiersType extends AbstractStructBase
{
    /**
     * The ValidationRules
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item
     * specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field. </span>
     * @var \StructType\GroupValidationRulesType
     */
    public $ValidationRules;
    /**
     * The NameRecommendation
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item
     * specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameRecommendationType[]
     */
    public $NameRecommendation;
    /**
     * Constructor method for ProductIdentifiersType
     * @uses ProductIdentifiersType::setValidationRules()
     * @uses ProductIdentifiersType::setNameRecommendation()
     * @param \StructType\GroupValidationRulesType $validationRules
     * @param \StructType\NameRecommendationType[] $nameRecommendation
     */
    public function __construct(\StructType\GroupValidationRulesType $validationRules = null, array $nameRecommendation = array())
    {
        $this
            ->setValidationRules($validationRules)
            ->setNameRecommendation($nameRecommendation);
    }
    /**
     * Get ValidationRules value
     * @return \StructType\GroupValidationRulesType|null
     */
    public function getValidationRules()
    {
        return $this->ValidationRules;
    }
    /**
     * Set ValidationRules value
     * @param \StructType\GroupValidationRulesType $validationRules
     * @return \StructType\ProductIdentifiersType
     */
    public function setValidationRules(\StructType\GroupValidationRulesType $validationRules = null)
    {
        $this->ValidationRules = $validationRules;
        return $this;
    }
    /**
     * Get NameRecommendation value
     * @return \StructType\NameRecommendationType[]|null
     */
    public function getNameRecommendation()
    {
        return $this->NameRecommendation;
    }
    /**
     * This method is responsible for validating the values passed to the setNameRecommendation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameRecommendation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameRecommendationForArrayConstraintsFromSetNameRecommendation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productIdentifiersTypeNameRecommendationItem) {
            // validation for constraint: itemType
            if (!$productIdentifiersTypeNameRecommendationItem instanceof \StructType\NameRecommendationType) {
                $invalidValues[] = is_object($productIdentifiersTypeNameRecommendationItem) ? get_class($productIdentifiersTypeNameRecommendationItem) : sprintf('%s(%s)', gettype($productIdentifiersTypeNameRecommendationItem), var_export($productIdentifiersTypeNameRecommendationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameRecommendation property can only contain items of type \StructType\NameRecommendationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NameRecommendation value
     * @throws \InvalidArgumentException
     * @param \StructType\NameRecommendationType[] $nameRecommendation
     * @return \StructType\ProductIdentifiersType
     */
    public function setNameRecommendation(array $nameRecommendation = array())
    {
        // validation for constraint: array
        if ('' !== ($nameRecommendationArrayErrorMessage = self::validateNameRecommendationForArrayConstraintsFromSetNameRecommendation($nameRecommendation))) {
            throw new \InvalidArgumentException($nameRecommendationArrayErrorMessage, __LINE__);
        }
        $this->NameRecommendation = $nameRecommendation;
        return $this;
    }
    /**
     * Add item to NameRecommendation value
     * @throws \InvalidArgumentException
     * @param \StructType\NameRecommendationType $item
     * @return \StructType\ProductIdentifiersType
     */
    public function addToNameRecommendation(\StructType\NameRecommendationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameRecommendationType) {
            throw new \InvalidArgumentException(sprintf('The NameRecommendation property can only contain items of type \StructType\NameRecommendationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NameRecommendation[] = $item;
        return $this;
    }
}
