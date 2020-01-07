<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedPictureDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
 * @subpackage Structs
 */
class ExtendedPictureDetailsType extends AbstractStructBase
{
    /**
     * The PictureURLs
     * Meta information extracted from the WSDL
     * - documentation: This container returns the <b>eBayPictureURL</b> (images hosted by eBay Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PictureURLsType[]
     */
    public $PictureURLs;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExtendedPictureDetailsType
     * @uses ExtendedPictureDetailsType::setPictureURLs()
     * @uses ExtendedPictureDetailsType::setAny()
     * @param \StructType\PictureURLsType[] $pictureURLs
     * @param \DOMDocument $any
     */
    public function __construct(array $pictureURLs = array(), \DOMDocument $any = null)
    {
        $this
            ->setPictureURLs($pictureURLs)
            ->setAny($any);
    }
    /**
     * Get PictureURLs value
     * @return \StructType\PictureURLsType[]|null
     */
    public function getPictureURLs()
    {
        return $this->PictureURLs;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureURLs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureURLs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureURLsForArrayConstraintsFromSetPictureURLs(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $extendedPictureDetailsTypePictureURLsItem) {
            // validation for constraint: itemType
            if (!$extendedPictureDetailsTypePictureURLsItem instanceof \StructType\PictureURLsType) {
                $invalidValues[] = is_object($extendedPictureDetailsTypePictureURLsItem) ? get_class($extendedPictureDetailsTypePictureURLsItem) : sprintf('%s(%s)', gettype($extendedPictureDetailsTypePictureURLsItem), var_export($extendedPictureDetailsTypePictureURLsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureURLs property can only contain items of type \StructType\PictureURLsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PictureURLs value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureURLsType[] $pictureURLs
     * @return \StructType\ExtendedPictureDetailsType
     */
    public function setPictureURLs(array $pictureURLs = array())
    {
        // validation for constraint: array
        if ('' !== ($pictureURLsArrayErrorMessage = self::validatePictureURLsForArrayConstraintsFromSetPictureURLs($pictureURLs))) {
            throw new \InvalidArgumentException($pictureURLsArrayErrorMessage, __LINE__);
        }
        $this->PictureURLs = $pictureURLs;
        return $this;
    }
    /**
     * Add item to PictureURLs value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureURLsType $item
     * @return \StructType\ExtendedPictureDetailsType
     */
    public function addToPictureURLs(\StructType\PictureURLsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PictureURLsType) {
            throw new \InvalidArgumentException(sprintf('The PictureURLs property can only contain items of type \StructType\PictureURLsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PictureURLs[] = $item;
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
     * @return \StructType\ExtendedPictureDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ExtendedPictureDetailsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
