<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureSetMemberType StructType
 * Meta information extracted from the WSDL
 * - documentation: URL and size information for each generated and stored picture. This data is provided for use in application previews of pictures. This data is used for display control for specific pictures in the generated imageset. This container
 * is supplied for all generated pictures.
 * @subpackage Structs
 */
class PictureSetMemberType extends AbstractStructBase
{
    /**
     * The MemberURL
     * Meta information extracted from the WSDL
     * - documentation: URL for the picture.
     * - minOccurs: 0
     * @var string
     */
    public $MemberURL;
    /**
     * The PictureHeight
     * Meta information extracted from the WSDL
     * - documentation: Height of the picture in pixels.
     * - minOccurs: 0
     * @var int
     */
    public $PictureHeight;
    /**
     * The PictureWidth
     * Meta information extracted from the WSDL
     * - documentation: Width of the picture in pixels.
     * - minOccurs: 0
     * @var int
     */
    public $PictureWidth;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureSetMemberType
     * @uses PictureSetMemberType::setMemberURL()
     * @uses PictureSetMemberType::setPictureHeight()
     * @uses PictureSetMemberType::setPictureWidth()
     * @uses PictureSetMemberType::setAny()
     * @param string $memberURL
     * @param int $pictureHeight
     * @param int $pictureWidth
     * @param \DOMDocument $any
     */
    public function __construct($memberURL = null, $pictureHeight = null, $pictureWidth = null, \DOMDocument $any = null)
    {
        $this
            ->setMemberURL($memberURL)
            ->setPictureHeight($pictureHeight)
            ->setPictureWidth($pictureWidth)
            ->setAny($any);
    }
    /**
     * Get MemberURL value
     * @return string|null
     */
    public function getMemberURL()
    {
        return $this->MemberURL;
    }
    /**
     * Set MemberURL value
     * @param string $memberURL
     * @return \StructType\PictureSetMemberType
     */
    public function setMemberURL($memberURL = null)
    {
        // validation for constraint: string
        if (!is_null($memberURL) && !is_string($memberURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberURL, true), gettype($memberURL)), __LINE__);
        }
        $this->MemberURL = $memberURL;
        return $this;
    }
    /**
     * Get PictureHeight value
     * @return int|null
     */
    public function getPictureHeight()
    {
        return $this->PictureHeight;
    }
    /**
     * Set PictureHeight value
     * @param int $pictureHeight
     * @return \StructType\PictureSetMemberType
     */
    public function setPictureHeight($pictureHeight = null)
    {
        // validation for constraint: int
        if (!is_null($pictureHeight) && !(is_int($pictureHeight) || ctype_digit($pictureHeight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pictureHeight, true), gettype($pictureHeight)), __LINE__);
        }
        $this->PictureHeight = $pictureHeight;
        return $this;
    }
    /**
     * Get PictureWidth value
     * @return int|null
     */
    public function getPictureWidth()
    {
        return $this->PictureWidth;
    }
    /**
     * Set PictureWidth value
     * @param int $pictureWidth
     * @return \StructType\PictureSetMemberType
     */
    public function setPictureWidth($pictureWidth = null)
    {
        // validation for constraint: int
        if (!is_null($pictureWidth) && !(is_int($pictureWidth) || ctype_digit($pictureWidth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pictureWidth, true), gettype($pictureWidth)), __LINE__);
        }
        $this->PictureWidth = $pictureWidth;
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
     * @return \StructType\PictureSetMemberType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
