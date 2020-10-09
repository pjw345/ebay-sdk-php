<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThemeGroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for one theme group. Returned for <b>GetDescriptionTemplates</b> if theme groups are requested.
 * @subpackage Structs
 */
class ThemeGroupType extends AbstractStructBase
{
    /**
     * The GroupID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for this theme group.
     * - minOccurs: 0
     * @var int
     */
    public $GroupID;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - documentation: Name of this theme group (localized to the language associated with the eBay site).
     * - minOccurs: 0
     * @var string
     */
    public $GroupName;
    /**
     * The ThemeID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for each theme in this group. There is at least one theme in a theme group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $ThemeID;
    /**
     * The ThemeTotal
     * Meta information extracted from the WSDL
     * - documentation: The number of <b>ThemeID</b> elements in this group.
     * - minOccurs: 0
     * @var int
     */
    public $ThemeTotal;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ThemeGroupType
     * @uses ThemeGroupType::setGroupID()
     * @uses ThemeGroupType::setGroupName()
     * @uses ThemeGroupType::setThemeID()
     * @uses ThemeGroupType::setThemeTotal()
     * @uses ThemeGroupType::setAny()
     * @param int $groupID
     * @param string $groupName
     * @param int[] $themeID
     * @param int $themeTotal
     * @param \DOMDocument $any
     */
    public function __construct($groupID = null, $groupName = null, array $themeID = array(), $themeTotal = null, \DOMDocument $any = null)
    {
        $this
            ->setGroupID($groupID)
            ->setGroupName($groupName)
            ->setThemeID($themeID)
            ->setThemeTotal($themeTotal)
            ->setAny($any);
    }
    /**
     * Get GroupID value
     * @return int|null
     */
    public function getGroupID()
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param int $groupID
     * @return \StructType\ThemeGroupType
     */
    public function setGroupID($groupID = null)
    {
        // validation for constraint: int
        if (!is_null($groupID) && !(is_int($groupID) || ctype_digit($groupID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        $this->GroupID = $groupID;
        return $this;
    }
    /**
     * Get GroupName value
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->GroupName;
    }
    /**
     * Set GroupName value
     * @param string $groupName
     * @return \StructType\ThemeGroupType
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        $this->GroupName = $groupName;
        return $this;
    }
    /**
     * Get ThemeID value
     * @return int[]|null
     */
    public function getThemeID()
    {
        return $this->ThemeID;
    }
    /**
     * This method is responsible for validating the values passed to the setThemeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThemeID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThemeIDForArrayConstraintsFromSetThemeID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $themeGroupTypeThemeIDItem) {
            // validation for constraint: itemType
            if (!(is_int($themeGroupTypeThemeIDItem) || ctype_digit($themeGroupTypeThemeIDItem))) {
                $invalidValues[] = is_object($themeGroupTypeThemeIDItem) ? get_class($themeGroupTypeThemeIDItem) : sprintf('%s(%s)', gettype($themeGroupTypeThemeIDItem), var_export($themeGroupTypeThemeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ThemeID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ThemeID value
     * @throws \InvalidArgumentException
     * @param int[] $themeID
     * @return \StructType\ThemeGroupType
     */
    public function setThemeID(array $themeID = array())
    {
        // validation for constraint: array
        if ('' !== ($themeIDArrayErrorMessage = self::validateThemeIDForArrayConstraintsFromSetThemeID($themeID))) {
            throw new \InvalidArgumentException($themeIDArrayErrorMessage, __LINE__);
        }
        $this->ThemeID = $themeID;
        return $this;
    }
    /**
     * Add item to ThemeID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\ThemeGroupType
     */
    public function addToThemeID($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The ThemeID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ThemeID[] = $item;
        return $this;
    }
    /**
     * Get ThemeTotal value
     * @return int|null
     */
    public function getThemeTotal()
    {
        return $this->ThemeTotal;
    }
    /**
     * Set ThemeTotal value
     * @param int $themeTotal
     * @return \StructType\ThemeGroupType
     */
    public function setThemeTotal($themeTotal = null)
    {
        // validation for constraint: int
        if (!is_null($themeTotal) && !(is_int($themeTotal) || ctype_digit($themeTotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($themeTotal, true), gettype($themeTotal)), __LINE__);
        }
        $this->ThemeTotal = $themeTotal;
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
     * @return \StructType\ThemeGroupType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
