<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDesignerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the IDs for the Listing Designer theme and template (if either are used) associated with an item, which can optionally be used to enhance the appearance of the item's description. Cannot be used with Photo Display. <br> <br>
 * <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise listings. Existing listings that are already using a Listing Designer template will remain unchanged. The
 * <b>ListingDesigner</b> container has been removed from the WSDL and this type is also staged for removal. If a seller tries to use the <b>ListingDesigner</b> container, it will have no effect on the listing, but the seller will receive a warning
 * message about Listing Designer templates no longer being available.</span>
 * @subpackage Structs
 */
class ListingDesignerType extends AbstractStructBase
{
    /**
     * The LayoutID
     * Meta information extracted from the WSDL
     * - documentation: Identifies the Layout template to use when displaying the item's description. Call <b>GetDescriptionTemplates</b> for valid IDs. Set to false in <b>GetDescriptionTemplates</b> (or do not specify <b>LayoutID</b>) to get the standard
     * layout. If a Listing Designer layout is used (except standard layout), <b>PhotoDisplayType</b> must be false (or not be specified). When relisting an item, <b>LayoutID</b> is removed from the listing if you specify <b>ListingDesignerType</b> without
     * <b>LayoutID</b>. Alternatively, to remove this value when revising or relisting an item, use <b>DeletedField</b>.
     * - minOccurs: 0
     * @var int
     */
    public $LayoutID;
    /**
     * The OptimalPictureSize
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that the item's picture will be enlarged to fit description of the item.
     * - minOccurs: 0
     * @var bool
     */
    public $OptimalPictureSize;
    /**
     * The ThemeID
     * Meta information extracted from the WSDL
     * - documentation: ID for the Listing Designer theme template to use when displaying the item's description. When relisting, if you specify <b>ListingDesignerType</b> without <b>ThemeID</b>, <b>ThemeID</b> is removed from the listing. Alternatively, to
     * remove this value when revising or relisting an item, use <b>DeletedField</b>.
     * - minOccurs: 0
     * @var int
     */
    public $ThemeID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingDesignerType
     * @uses ListingDesignerType::setLayoutID()
     * @uses ListingDesignerType::setOptimalPictureSize()
     * @uses ListingDesignerType::setThemeID()
     * @uses ListingDesignerType::setAny()
     * @param int $layoutID
     * @param bool $optimalPictureSize
     * @param int $themeID
     * @param \DOMDocument $any
     */
    public function __construct($layoutID = null, $optimalPictureSize = null, $themeID = null, \DOMDocument $any = null)
    {
        $this
            ->setLayoutID($layoutID)
            ->setOptimalPictureSize($optimalPictureSize)
            ->setThemeID($themeID)
            ->setAny($any);
    }
    /**
     * Get LayoutID value
     * @return int|null
     */
    public function getLayoutID()
    {
        return $this->LayoutID;
    }
    /**
     * Set LayoutID value
     * @param int $layoutID
     * @return \StructType\ListingDesignerType
     */
    public function setLayoutID($layoutID = null)
    {
        // validation for constraint: int
        if (!is_null($layoutID) && !(is_int($layoutID) || ctype_digit($layoutID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($layoutID, true), gettype($layoutID)), __LINE__);
        }
        $this->LayoutID = $layoutID;
        return $this;
    }
    /**
     * Get OptimalPictureSize value
     * @return bool|null
     */
    public function getOptimalPictureSize()
    {
        return $this->OptimalPictureSize;
    }
    /**
     * Set OptimalPictureSize value
     * @param bool $optimalPictureSize
     * @return \StructType\ListingDesignerType
     */
    public function setOptimalPictureSize($optimalPictureSize = null)
    {
        // validation for constraint: boolean
        if (!is_null($optimalPictureSize) && !is_bool($optimalPictureSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optimalPictureSize, true), gettype($optimalPictureSize)), __LINE__);
        }
        $this->OptimalPictureSize = $optimalPictureSize;
        return $this;
    }
    /**
     * Get ThemeID value
     * @return int|null
     */
    public function getThemeID()
    {
        return $this->ThemeID;
    }
    /**
     * Set ThemeID value
     * @param int $themeID
     * @return \StructType\ListingDesignerType
     */
    public function setThemeID($themeID = null)
    {
        // validation for constraint: int
        if (!is_null($themeID) && !(is_int($themeID) || ctype_digit($themeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($themeID, true), gettype($themeID)), __LINE__);
        }
        $this->ThemeID = $themeID;
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
     * @return \StructType\ListingDesignerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
