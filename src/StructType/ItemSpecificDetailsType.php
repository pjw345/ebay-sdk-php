<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSpecificDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ItemSpecificDetails</b> container that is returned in the <b>GeteBayDetails</b> call. The <b>ItemSpecificDetails</b> container consists of maximum threshold values that must be adhered to when creating,
 * revising, or relisting items with Item Specifics. Item Specifics are used to provide descriptive details of an item in a structured manner.
 * @subpackage Structs
 */
class ItemSpecificDetailsType extends AbstractStructBase
{
    /**
     * The MaxItemSpecificsPerItem
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of Item Specifics name-value pairs that can be used when creating, revising, or relisting an item on the specified site. Item Specifics are used to provide descriptive details of an item in a
     * structured manner.
     * - minOccurs: 0
     * @var int
     */
    public $MaxItemSpecificsPerItem;
    /**
     * The MaxValuesPerName
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of corresponding name values that can be used per Item Specific when creating, revising, or relisting an item on the specified site. An example of an Item Specific that might have multiple values is
     * 'Features'. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields. <br><br> Once you know the site threshold, it can also be helpful to know specific Item
     * Specifics in a listing category that can have more than value, such as 'Features'. To retrieve this information, you can call <b>GetCategorySpecifics</b> for a category and check the <b>NameRecommendation.ValidationRules.MaxValues</b> field for each
     * Item Specific in the response.
     * - minOccurs: 0
     * @var int
     */
    public $MaxValuesPerName;
    /**
     * The MaxCharactersPerValue
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of characters that can be used for an Item Specific value on the specified site.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCharactersPerValue;
    /**
     * The MaxCharactersPerName
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of characters that can be used for an Item Specific name on the specified site.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCharactersPerName;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: This string indicates the version of the Item Specifics metadata.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the Item Specifics metadata was last updated. Time is in Greenwich Mean Time (GMT) time. This timestamp can be useful in determining if and when to refresh cached client data.
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
     * Constructor method for ItemSpecificDetailsType
     * @uses ItemSpecificDetailsType::setMaxItemSpecificsPerItem()
     * @uses ItemSpecificDetailsType::setMaxValuesPerName()
     * @uses ItemSpecificDetailsType::setMaxCharactersPerValue()
     * @uses ItemSpecificDetailsType::setMaxCharactersPerName()
     * @uses ItemSpecificDetailsType::setDetailVersion()
     * @uses ItemSpecificDetailsType::setUpdateTime()
     * @uses ItemSpecificDetailsType::setAny()
     * @param int $maxItemSpecificsPerItem
     * @param int $maxValuesPerName
     * @param int $maxCharactersPerValue
     * @param int $maxCharactersPerName
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($maxItemSpecificsPerItem = null, $maxValuesPerName = null, $maxCharactersPerValue = null, $maxCharactersPerName = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setMaxItemSpecificsPerItem($maxItemSpecificsPerItem)
            ->setMaxValuesPerName($maxValuesPerName)
            ->setMaxCharactersPerValue($maxCharactersPerValue)
            ->setMaxCharactersPerName($maxCharactersPerName)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get MaxItemSpecificsPerItem value
     * @return int|null
     */
    public function getMaxItemSpecificsPerItem()
    {
        return $this->MaxItemSpecificsPerItem;
    }
    /**
     * Set MaxItemSpecificsPerItem value
     * @param int $maxItemSpecificsPerItem
     * @return \StructType\ItemSpecificDetailsType
     */
    public function setMaxItemSpecificsPerItem($maxItemSpecificsPerItem = null)
    {
        // validation for constraint: int
        if (!is_null($maxItemSpecificsPerItem) && !(is_int($maxItemSpecificsPerItem) || ctype_digit($maxItemSpecificsPerItem))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItemSpecificsPerItem, true), gettype($maxItemSpecificsPerItem)), __LINE__);
        }
        $this->MaxItemSpecificsPerItem = $maxItemSpecificsPerItem;
        return $this;
    }
    /**
     * Get MaxValuesPerName value
     * @return int|null
     */
    public function getMaxValuesPerName()
    {
        return $this->MaxValuesPerName;
    }
    /**
     * Set MaxValuesPerName value
     * @param int $maxValuesPerName
     * @return \StructType\ItemSpecificDetailsType
     */
    public function setMaxValuesPerName($maxValuesPerName = null)
    {
        // validation for constraint: int
        if (!is_null($maxValuesPerName) && !(is_int($maxValuesPerName) || ctype_digit($maxValuesPerName))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValuesPerName, true), gettype($maxValuesPerName)), __LINE__);
        }
        $this->MaxValuesPerName = $maxValuesPerName;
        return $this;
    }
    /**
     * Get MaxCharactersPerValue value
     * @return int|null
     */
    public function getMaxCharactersPerValue()
    {
        return $this->MaxCharactersPerValue;
    }
    /**
     * Set MaxCharactersPerValue value
     * @param int $maxCharactersPerValue
     * @return \StructType\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerValue($maxCharactersPerValue = null)
    {
        // validation for constraint: int
        if (!is_null($maxCharactersPerValue) && !(is_int($maxCharactersPerValue) || ctype_digit($maxCharactersPerValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCharactersPerValue, true), gettype($maxCharactersPerValue)), __LINE__);
        }
        $this->MaxCharactersPerValue = $maxCharactersPerValue;
        return $this;
    }
    /**
     * Get MaxCharactersPerName value
     * @return int|null
     */
    public function getMaxCharactersPerName()
    {
        return $this->MaxCharactersPerName;
    }
    /**
     * Set MaxCharactersPerName value
     * @param int $maxCharactersPerName
     * @return \StructType\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerName($maxCharactersPerName = null)
    {
        // validation for constraint: int
        if (!is_null($maxCharactersPerName) && !(is_int($maxCharactersPerName) || ctype_digit($maxCharactersPerName))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCharactersPerName, true), gettype($maxCharactersPerName)), __LINE__);
        }
        $this->MaxCharactersPerName = $maxCharactersPerName;
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
     * @return \StructType\ItemSpecificDetailsType
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
     * @return \StructType\ItemSpecificDetailsType
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
     * @return \StructType\ItemSpecificDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
