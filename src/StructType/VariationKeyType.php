<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationKeyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>VariationKey</b> container to identify one or more item variations to either add or remove from an eBay user's Watch List.
 * @subpackage Structs
 */
class VariationKeyType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the fixed-price listing whose variation(s) should be added to or removed from the watch list. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The VariationSpecifics
     * Meta information extracted from the WSDL
     * - documentation: This container is used to identify one or more item variations within the multiple-variation listing. If the specified name-value pairs do not match any item variation, the call behaves as if no variations were specified.
     * - minOccurs: 0
     * @var \ArrayType\NameValueListArrayType
     */
    public $VariationSpecifics;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VariationKeyType
     * @uses VariationKeyType::setItemID()
     * @uses VariationKeyType::setVariationSpecifics()
     * @uses VariationKeyType::setAny()
     * @param string $itemID
     * @param \ArrayType\NameValueListArrayType $variationSpecifics
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, \ArrayType\NameValueListArrayType $variationSpecifics = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setVariationSpecifics($variationSpecifics)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\VariationKeyType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics()
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \ArrayType\NameValueListArrayType $variationSpecifics
     * @return \StructType\VariationKeyType
     */
    public function setVariationSpecifics(\ArrayType\NameValueListArrayType $variationSpecifics = null)
    {
        $this->VariationSpecifics = $variationSpecifics;
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
     * @return \StructType\VariationKeyType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
