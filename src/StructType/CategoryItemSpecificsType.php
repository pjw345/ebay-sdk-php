<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryItemSpecificsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>CategorySpecific</b> container in the <b>GetCategorySpecifics</b> request. The <b>CategorySpecific</b> container is used when a seller wants to pass in Item Specific name-value(s) pairs for a specific
 * category to discover if eBay has better name or value recommendations for that Item Specific.
 * @subpackage Structs
 */
class CategoryItemSpecificsType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: An eBay category ID is passed into this field to identify the eBay category for which the seller is providing Item Specific name-value(s) pairs. Multiple <b>CategoryID</b> fields can be passed in if the Item Specific name-value(s)
     * pairs are applicable for multiple categories. However, more categories can result in longer call response times. If your request times out, specify fewer category IDs. <br> <br> <span class="tablenote"><b>Note:</b> The call request requires either
     * one or more <b>CategoryID</b> values (at the root level), one or more <b>CategorySpecific.CategoryID</b> values, or the <b>CategorySpecificsFileInfo</b> boolean field. The <b>CategorySpecificsFileInfo</b> field is only used if the user plans to use
     * the <b>downloadFile</b> call of the <b>FileTransfer</b> API to retrieve Item Specifics. <b>CategoryID</b> and <b>CategorySpecific.CategoryID</b> can both be used in the same call request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The ItemSpecifics
     * Meta information extracted from the WSDL
     * - documentation: This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be an arbitrary name that the
     * user wants to check, or it could be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     * - minOccurs: 0
     * @var \ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CategoryItemSpecificsType
     * @uses CategoryItemSpecificsType::setCategoryID()
     * @uses CategoryItemSpecificsType::setItemSpecifics()
     * @uses CategoryItemSpecificsType::setAny()
     * @param string $categoryID
     * @param \ArrayType\NameValueListArrayType $itemSpecifics
     * @param \DOMDocument $any
     */
    public function __construct($categoryID = null, \ArrayType\NameValueListArrayType $itemSpecifics = null, \DOMDocument $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setItemSpecifics($itemSpecifics)
            ->setAny($any);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \StructType\CategoryItemSpecificsType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \ArrayType\NameValueListArrayType $itemSpecifics
     * @return \StructType\CategoryItemSpecificsType
     */
    public function setItemSpecifics(\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
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
     * @return \StructType\CategoryItemSpecificsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
