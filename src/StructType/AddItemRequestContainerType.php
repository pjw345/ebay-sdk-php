<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemRequestContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>AddItemRequestContainer</b> containers that are used in an <b>AddItems</b> call. An <b>AddItemRequestContainer</b> container is required for each item being created through an <b>AddItems</b> call. Each item
 * being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller.
 * @subpackage Structs
 */
class AddItemRequestContainerType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Container holding all values that define a new listing. One <b>Item</b> container is required for each <b>AddItemRequestContainer</b>.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. With <b>AddItems</b>, a unique <b>MessageID</b> value is required for each <b>AddItemRequestContainer</b>
     * container that is used in the request. The <b>CorrelationID</b> value returned under each <b>AddItemResponseContainer</b> container is used to correlate each item request container with its corresponding response container. The same <b>MessageID</b>
     * value that you pass into a request will be returned in the <b>CorrelationID</b> field in the response.
     * - minOccurs: 0
     * @var string
     */
    public $MessageID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AddItemRequestContainerType
     * @uses AddItemRequestContainerType::setItem()
     * @uses AddItemRequestContainerType::setMessageID()
     * @uses AddItemRequestContainerType::setAny()
     * @param \StructType\ItemType $item
     * @param string $messageID
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\ItemType $item = null, $messageID = null, \DOMDocument $any = null)
    {
        $this
            ->setItem($item)
            ->setMessageID($messageID)
            ->setAny($any);
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\AddItemRequestContainerType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get MessageID value
     * @return string|null
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param string $messageID
     * @return \StructType\AddItemRequestContainerType
     */
    public function setMessageID($messageID = null)
    {
        // validation for constraint: string
        if (!is_null($messageID) && !is_string($messageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageID, true), gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
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
     * @return \StructType\AddItemRequestContainerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
