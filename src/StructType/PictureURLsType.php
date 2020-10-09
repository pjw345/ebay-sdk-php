<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureURLsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
 * @subpackage Structs
 */
class PictureURLsType extends AbstractStructBase
{
    /**
     * The eBayPictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of an eBay Picture Services (EPS) image. This image is created when a seller uploads a self-hosted image using the <b>UploadSiteHostedPictures</b>, <b>AddItem</b> or <b>AddFixedPriceItem</b> call. <br>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $eBayPictureURL;
    /**
     * The ExternalPictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of a seller's self-hosted image(s). <br>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalPictureURL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureURLsType
     * @uses PictureURLsType::setEBayPictureURL()
     * @uses PictureURLsType::setExternalPictureURL()
     * @uses PictureURLsType::setAny()
     * @param string $eBayPictureURL
     * @param string $externalPictureURL
     * @param \DOMDocument $any
     */
    public function __construct($eBayPictureURL = null, $externalPictureURL = null, \DOMDocument $any = null)
    {
        $this
            ->setEBayPictureURL($eBayPictureURL)
            ->setExternalPictureURL($externalPictureURL)
            ->setAny($any);
    }
    /**
     * Get eBayPictureURL value
     * @return string|null
     */
    public function getEBayPictureURL()
    {
        return $this->eBayPictureURL;
    }
    /**
     * Set eBayPictureURL value
     * @param string $eBayPictureURL
     * @return \StructType\PictureURLsType
     */
    public function setEBayPictureURL($eBayPictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($eBayPictureURL) && !is_string($eBayPictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eBayPictureURL, true), gettype($eBayPictureURL)), __LINE__);
        }
        $this->eBayPictureURL = $eBayPictureURL;
        return $this;
    }
    /**
     * Get ExternalPictureURL value
     * @return string|null
     */
    public function getExternalPictureURL()
    {
        return $this->ExternalPictureURL;
    }
    /**
     * Set ExternalPictureURL value
     * @param string $externalPictureURL
     * @return \StructType\PictureURLsType
     */
    public function setExternalPictureURL($externalPictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($externalPictureURL) && !is_string($externalPictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalPictureURL, true), gettype($externalPictureURL)), __LINE__);
        }
        $this->ExternalPictureURL = $externalPictureURL;
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
     * @return \StructType\PictureURLsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
