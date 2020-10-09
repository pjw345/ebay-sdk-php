<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>VariationDetails</b> container that is returned in <b>GeteBayDetails</b> if <b>VariationDetails</b> is included in the request as a <b>DetailName</b> filter, or if <b>GeteBayDetails</b> is called with no
 * <b>DetailName</b> filters.
 * @subpackage Structs
 */
class VariationDetailsType extends AbstractStructBase
{
    /**
     * The MaxVariationsPerItem
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of item variations that the site will allow within one multi-variation listing.
     * - minOccurs: 0
     * @var int
     */
    public $MaxVariationsPerItem;
    /**
     * The MaxNamesPerVariationSpecificsSet
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of variation specific sets that the site will allow per listing. Typical variation specific sets for clothing may be 'Color', 'Size', 'Long Sleeve', etc.
     * - minOccurs: 0
     * @var int
     */
    public $MaxNamesPerVariationSpecificsSet;
    /**
     * The MaxValuesPerVariationSpecificsSetName
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of values that the site will allow within one variation specific set. For example, if the variation specific set was 'Color', the seller could specify as many colors that are available up to
     * this maximum value.
     * - minOccurs: 0
     * @var int
     */
    public $MaxValuesPerVariationSpecificsSetName;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VariationDetailsType
     * @uses VariationDetailsType::setMaxVariationsPerItem()
     * @uses VariationDetailsType::setMaxNamesPerVariationSpecificsSet()
     * @uses VariationDetailsType::setMaxValuesPerVariationSpecificsSetName()
     * @uses VariationDetailsType::setDetailVersion()
     * @uses VariationDetailsType::setUpdateTime()
     * @uses VariationDetailsType::setAny()
     * @param int $maxVariationsPerItem
     * @param int $maxNamesPerVariationSpecificsSet
     * @param int $maxValuesPerVariationSpecificsSetName
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($maxVariationsPerItem = null, $maxNamesPerVariationSpecificsSet = null, $maxValuesPerVariationSpecificsSetName = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setMaxVariationsPerItem($maxVariationsPerItem)
            ->setMaxNamesPerVariationSpecificsSet($maxNamesPerVariationSpecificsSet)
            ->setMaxValuesPerVariationSpecificsSetName($maxValuesPerVariationSpecificsSetName)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get MaxVariationsPerItem value
     * @return int|null
     */
    public function getMaxVariationsPerItem()
    {
        return $this->MaxVariationsPerItem;
    }
    /**
     * Set MaxVariationsPerItem value
     * @param int $maxVariationsPerItem
     * @return \StructType\VariationDetailsType
     */
    public function setMaxVariationsPerItem($maxVariationsPerItem = null)
    {
        // validation for constraint: int
        if (!is_null($maxVariationsPerItem) && !(is_int($maxVariationsPerItem) || ctype_digit($maxVariationsPerItem))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxVariationsPerItem, true), gettype($maxVariationsPerItem)), __LINE__);
        }
        $this->MaxVariationsPerItem = $maxVariationsPerItem;
        return $this;
    }
    /**
     * Get MaxNamesPerVariationSpecificsSet value
     * @return int|null
     */
    public function getMaxNamesPerVariationSpecificsSet()
    {
        return $this->MaxNamesPerVariationSpecificsSet;
    }
    /**
     * Set MaxNamesPerVariationSpecificsSet value
     * @param int $maxNamesPerVariationSpecificsSet
     * @return \StructType\VariationDetailsType
     */
    public function setMaxNamesPerVariationSpecificsSet($maxNamesPerVariationSpecificsSet = null)
    {
        // validation for constraint: int
        if (!is_null($maxNamesPerVariationSpecificsSet) && !(is_int($maxNamesPerVariationSpecificsSet) || ctype_digit($maxNamesPerVariationSpecificsSet))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxNamesPerVariationSpecificsSet, true), gettype($maxNamesPerVariationSpecificsSet)), __LINE__);
        }
        $this->MaxNamesPerVariationSpecificsSet = $maxNamesPerVariationSpecificsSet;
        return $this;
    }
    /**
     * Get MaxValuesPerVariationSpecificsSetName value
     * @return int|null
     */
    public function getMaxValuesPerVariationSpecificsSetName()
    {
        return $this->MaxValuesPerVariationSpecificsSetName;
    }
    /**
     * Set MaxValuesPerVariationSpecificsSetName value
     * @param int $maxValuesPerVariationSpecificsSetName
     * @return \StructType\VariationDetailsType
     */
    public function setMaxValuesPerVariationSpecificsSetName($maxValuesPerVariationSpecificsSetName = null)
    {
        // validation for constraint: int
        if (!is_null($maxValuesPerVariationSpecificsSetName) && !(is_int($maxValuesPerVariationSpecificsSetName) || ctype_digit($maxValuesPerVariationSpecificsSetName))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValuesPerVariationSpecificsSetName, true), gettype($maxValuesPerVariationSpecificsSetName)), __LINE__);
        }
        $this->MaxValuesPerVariationSpecificsSetName = $maxValuesPerVariationSpecificsSetName;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \StructType\VariationDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\VariationDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
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
     * @return \StructType\VariationDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
