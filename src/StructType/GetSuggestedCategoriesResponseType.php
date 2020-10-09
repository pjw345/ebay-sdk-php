<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSuggestedCategoriesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of a <b>GetSuggestedCategories</b> call. This response includes an array of categories with the highest number of listings whose listing titles or descriptions contain the keywords specified in the <b>Query</b>
 * field of the call request.
 * @subpackage Structs
 */
class GetSuggestedCategoriesResponseType extends AbstractResponseType
{
    /**
     * The SuggestedCategoryArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container
     * will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     * - minOccurs: 0
     * @var \StructType\SuggestedCategoryArrayType
     */
    public $SuggestedCategoryArray;
    /**
     * The CategoryCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of suggested categories that were found that matched the keywords.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryCount;
    /**
     * Constructor method for GetSuggestedCategoriesResponseType
     * @uses GetSuggestedCategoriesResponseType::setSuggestedCategoryArray()
     * @uses GetSuggestedCategoriesResponseType::setCategoryCount()
     * @param \StructType\SuggestedCategoryArrayType $suggestedCategoryArray
     * @param int $categoryCount
     */
    public function __construct(\StructType\SuggestedCategoryArrayType $suggestedCategoryArray = null, $categoryCount = null)
    {
        $this
            ->setSuggestedCategoryArray($suggestedCategoryArray)
            ->setCategoryCount($categoryCount);
    }
    /**
     * Get SuggestedCategoryArray value
     * @return \StructType\SuggestedCategoryArrayType|null
     */
    public function getSuggestedCategoryArray()
    {
        return $this->SuggestedCategoryArray;
    }
    /**
     * Set SuggestedCategoryArray value
     * @param \StructType\SuggestedCategoryArrayType $suggestedCategoryArray
     * @return \StructType\GetSuggestedCategoriesResponseType
     */
    public function setSuggestedCategoryArray(\StructType\SuggestedCategoryArrayType $suggestedCategoryArray = null)
    {
        $this->SuggestedCategoryArray = $suggestedCategoryArray;
        return $this;
    }
    /**
     * Get CategoryCount value
     * @return int|null
     */
    public function getCategoryCount()
    {
        return $this->CategoryCount;
    }
    /**
     * Set CategoryCount value
     * @param int $categoryCount
     * @return \StructType\GetSuggestedCategoriesResponseType
     */
    public function setCategoryCount($categoryCount = null)
    {
        // validation for constraint: int
        if (!is_null($categoryCount) && !(is_int($categoryCount) || ctype_digit($categoryCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryCount, true), gettype($categoryCount)), __LINE__);
        }
        $this->CategoryCount = $categoryCount;
        return $this;
    }
}
