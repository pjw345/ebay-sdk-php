<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyingGuideDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BuyingGuideDetailsType extends AbstractStructBase
{
    /**
     * The BuyingGuide
     * Meta information extracted from the WSDL
     * - documentation: Information that identifies a buying guide. A buying guide contains content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Buying
     * guides are useful to buyers who do not have a specific product in mind. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BuyingGuideType[]
     */
    public $BuyingGuide;
    /**
     * The BuyingGuideHub
     * Meta information extracted from the WSDL
     * - documentation: URL of the buying guide home page for the site being searched. Your application can present this URL as a link. Optionally, you can use a value like "See all buying guides" as the link's display name.
     * - minOccurs: 0
     * @var string
     */
    public $BuyingGuideHub;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyingGuideDetailsType
     * @uses BuyingGuideDetailsType::setBuyingGuide()
     * @uses BuyingGuideDetailsType::setBuyingGuideHub()
     * @uses BuyingGuideDetailsType::setAny()
     * @param \StructType\BuyingGuideType[] $buyingGuide
     * @param string $buyingGuideHub
     * @param \DOMDocument $any
     */
    public function __construct(array $buyingGuide = array(), $buyingGuideHub = null, \DOMDocument $any = null)
    {
        $this
            ->setBuyingGuide($buyingGuide)
            ->setBuyingGuideHub($buyingGuideHub)
            ->setAny($any);
    }
    /**
     * Get BuyingGuide value
     * @return \StructType\BuyingGuideType[]|null
     */
    public function getBuyingGuide()
    {
        return $this->BuyingGuide;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyingGuide method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyingGuide method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyingGuideForArrayConstraintsFromSetBuyingGuide(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $buyingGuideDetailsTypeBuyingGuideItem) {
            // validation for constraint: itemType
            if (!$buyingGuideDetailsTypeBuyingGuideItem instanceof \StructType\BuyingGuideType) {
                $invalidValues[] = is_object($buyingGuideDetailsTypeBuyingGuideItem) ? get_class($buyingGuideDetailsTypeBuyingGuideItem) : sprintf('%s(%s)', gettype($buyingGuideDetailsTypeBuyingGuideItem), var_export($buyingGuideDetailsTypeBuyingGuideItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyingGuide property can only contain items of type \StructType\BuyingGuideType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BuyingGuide value
     * @throws \InvalidArgumentException
     * @param \StructType\BuyingGuideType[] $buyingGuide
     * @return \StructType\BuyingGuideDetailsType
     */
    public function setBuyingGuide(array $buyingGuide = array())
    {
        // validation for constraint: array
        if ('' !== ($buyingGuideArrayErrorMessage = self::validateBuyingGuideForArrayConstraintsFromSetBuyingGuide($buyingGuide))) {
            throw new \InvalidArgumentException($buyingGuideArrayErrorMessage, __LINE__);
        }
        $this->BuyingGuide = $buyingGuide;
        return $this;
    }
    /**
     * Add item to BuyingGuide value
     * @throws \InvalidArgumentException
     * @param \StructType\BuyingGuideType $item
     * @return \StructType\BuyingGuideDetailsType
     */
    public function addToBuyingGuide(\StructType\BuyingGuideType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BuyingGuideType) {
            throw new \InvalidArgumentException(sprintf('The BuyingGuide property can only contain items of type \StructType\BuyingGuideType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyingGuide[] = $item;
        return $this;
    }
    /**
     * Get BuyingGuideHub value
     * @return string|null
     */
    public function getBuyingGuideHub()
    {
        return $this->BuyingGuideHub;
    }
    /**
     * Set BuyingGuideHub value
     * @param string $buyingGuideHub
     * @return \StructType\BuyingGuideDetailsType
     */
    public function setBuyingGuideHub($buyingGuideHub = null)
    {
        // validation for constraint: string
        if (!is_null($buyingGuideHub) && !is_string($buyingGuideHub)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyingGuideHub, true), gettype($buyingGuideHub)), __LINE__);
        }
        $this->BuyingGuideHub = $buyingGuideHub;
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
     * @return \StructType\BuyingGuideDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
