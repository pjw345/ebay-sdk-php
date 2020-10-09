<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContextSearchAssetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ContextSearchAsset</b> container that is returned in the <b>GetContextualKeywords</b> response for each keyword that is found.
 * @subpackage Structs
 */
class ContextSearchAssetType extends AbstractStructBase
{
    /**
     * The Keyword
     * Meta information extracted from the WSDL
     * - documentation: The name of the keyword that was found in the search.
     * - minOccurs: 0
     * @var string
     */
    public $Keyword;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The eBay category in which the keyword is used.
     * - minOccurs: 0
     * @var \StructType\CategoryType
     */
    public $Category;
    /**
     * The Ranking
     * Meta information extracted from the WSDL
     * - documentation: The ranking of the corresponding keyword/category combination relative to other keywords that were returned in the response.
     * - minOccurs: 0
     * @var int
     */
    public $Ranking;
    /**
     * Constructor method for ContextSearchAssetType
     * @uses ContextSearchAssetType::setKeyword()
     * @uses ContextSearchAssetType::setCategory()
     * @uses ContextSearchAssetType::setRanking()
     * @param string $keyword
     * @param \StructType\CategoryType $category
     * @param int $ranking
     */
    public function __construct($keyword = null, \StructType\CategoryType $category = null, $ranking = null)
    {
        $this
            ->setKeyword($keyword)
            ->setCategory($category)
            ->setRanking($ranking);
    }
    /**
     * Get Keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param string $keyword
     * @return \StructType\ContextSearchAssetType
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyword, true), gettype($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        return $this;
    }
    /**
     * Get Category value
     * @return \StructType\CategoryType|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param \StructType\CategoryType $category
     * @return \StructType\ContextSearchAssetType
     */
    public function setCategory(\StructType\CategoryType $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Ranking value
     * @return int|null
     */
    public function getRanking()
    {
        return $this->Ranking;
    }
    /**
     * Set Ranking value
     * @param int $ranking
     * @return \StructType\ContextSearchAssetType
     */
    public function setRanking($ranking = null)
    {
        // validation for constraint: int
        if (!is_null($ranking) && !(is_int($ranking) || ctype_digit($ranking))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ranking, true), gettype($ranking)), __LINE__);
        }
        $this->Ranking = $ranking;
        return $this;
    }
}
