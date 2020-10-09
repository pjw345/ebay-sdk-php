<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteHostedPictureDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SiteHostedPictureDetails</b> container that is returned in an <b>UploadSiteHostedPictures</b> call.
 * @subpackage Structs
 */
class SiteHostedPictureDetailsType extends AbstractStructBase
{
    /**
     * The PictureName
     * Meta information extracted from the WSDL
     * - documentation: The seller-defined name for the picture. This field is only returned if a <b>PictureName</b> value was specified in the request. A name for a picture can make it easier to track than an arbitrary, eBay-assigned URL.
     * - minOccurs: 0
     * @var string
     */
    public $PictureName;
    /**
     * The PictureSet
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the size of the generated picture. This value may differ from the one specified in the request (e.g. if a Supersize image cannot be generated).
     * - minOccurs: 0
     * @var string
     */
    public $PictureSet;
    /**
     * The PictureFormat
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the image format of the generated image, such as JPG, GIF, or PNG.
     * - minOccurs: 0
     * @var string
     */
    public $PictureFormat;
    /**
     * The FullURL
     * Meta information extracted from the WSDL
     * - documentation: This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing. This URL will also be
     * needed for unpublished pictures whose expiration date must be extended through an <b>ExtendSiteHostedPictures</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $FullURL;
    /**
     * The BaseURL
     * Meta information extracted from the WSDL
     * - documentation: This is the truncated version of the full URL.
     * - minOccurs: 0
     * @var string
     */
    public $BaseURL;
    /**
     * The PictureSetMember
     * Meta information extracted from the WSDL
     * - documentation: The URL and size information for each generated image.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PictureSetMemberType[]
     */
    public $PictureSetMember;
    /**
     * The ExternalPictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the external Web site hosting the uploaded photo. This field is returned if an <b>ExternalPictureURL</b> is provided in the call request. <br>
     * - minOccurs: 0
     * @var string
     */
    public $ExternalPictureURL;
    /**
     * The UseByDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the picture must be uploaded with an eBay listing before it is purged from the EPS server. <br> <br> By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS
     * server for five days, but a seller can use the <b>ExtensionInDays</b> field in the request to make the expiration date further into the future (a maximum of 30 days). The seller can also use the <b>ExtendSiteHostedPictures</b> to extend the
     * expiration date of the picture.
     * - minOccurs: 0
     * @var string
     */
    public $UseByDate;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteHostedPictureDetailsType
     * @uses SiteHostedPictureDetailsType::setPictureName()
     * @uses SiteHostedPictureDetailsType::setPictureSet()
     * @uses SiteHostedPictureDetailsType::setPictureFormat()
     * @uses SiteHostedPictureDetailsType::setFullURL()
     * @uses SiteHostedPictureDetailsType::setBaseURL()
     * @uses SiteHostedPictureDetailsType::setPictureSetMember()
     * @uses SiteHostedPictureDetailsType::setExternalPictureURL()
     * @uses SiteHostedPictureDetailsType::setUseByDate()
     * @uses SiteHostedPictureDetailsType::setAny()
     * @param string $pictureName
     * @param string $pictureSet
     * @param string $pictureFormat
     * @param string $fullURL
     * @param string $baseURL
     * @param \StructType\PictureSetMemberType[] $pictureSetMember
     * @param string $externalPictureURL
     * @param string $useByDate
     * @param \DOMDocument $any
     */
    public function __construct($pictureName = null, $pictureSet = null, $pictureFormat = null, $fullURL = null, $baseURL = null, array $pictureSetMember = array(), $externalPictureURL = null, $useByDate = null, \DOMDocument $any = null)
    {
        $this
            ->setPictureName($pictureName)
            ->setPictureSet($pictureSet)
            ->setPictureFormat($pictureFormat)
            ->setFullURL($fullURL)
            ->setBaseURL($baseURL)
            ->setPictureSetMember($pictureSetMember)
            ->setExternalPictureURL($externalPictureURL)
            ->setUseByDate($useByDate)
            ->setAny($any);
    }
    /**
     * Get PictureName value
     * @return string|null
     */
    public function getPictureName()
    {
        return $this->PictureName;
    }
    /**
     * Set PictureName value
     * @param string $pictureName
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setPictureName($pictureName = null)
    {
        // validation for constraint: string
        if (!is_null($pictureName) && !is_string($pictureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureName, true), gettype($pictureName)), __LINE__);
        }
        $this->PictureName = $pictureName;
        return $this;
    }
    /**
     * Get PictureSet value
     * @return string|null
     */
    public function getPictureSet()
    {
        return $this->PictureSet;
    }
    /**
     * Set PictureSet value
     * @uses \EnumType\PictureSetCodeType::valueIsValid()
     * @uses \EnumType\PictureSetCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pictureSet
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setPictureSet($pictureSet = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PictureSetCodeType::valueIsValid($pictureSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PictureSetCodeType', is_array($pictureSet) ? implode(', ', $pictureSet) : var_export($pictureSet, true), implode(', ', \EnumType\PictureSetCodeType::getValidValues())), __LINE__);
        }
        $this->PictureSet = $pictureSet;
        return $this;
    }
    /**
     * Get PictureFormat value
     * @return string|null
     */
    public function getPictureFormat()
    {
        return $this->PictureFormat;
    }
    /**
     * Set PictureFormat value
     * @uses \EnumType\PictureFormatCodeType::valueIsValid()
     * @uses \EnumType\PictureFormatCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pictureFormat
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setPictureFormat($pictureFormat = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PictureFormatCodeType::valueIsValid($pictureFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PictureFormatCodeType', is_array($pictureFormat) ? implode(', ', $pictureFormat) : var_export($pictureFormat, true), implode(', ', \EnumType\PictureFormatCodeType::getValidValues())), __LINE__);
        }
        $this->PictureFormat = $pictureFormat;
        return $this;
    }
    /**
     * Get FullURL value
     * @return string|null
     */
    public function getFullURL()
    {
        return $this->FullURL;
    }
    /**
     * Set FullURL value
     * @param string $fullURL
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setFullURL($fullURL = null)
    {
        // validation for constraint: string
        if (!is_null($fullURL) && !is_string($fullURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullURL, true), gettype($fullURL)), __LINE__);
        }
        $this->FullURL = $fullURL;
        return $this;
    }
    /**
     * Get BaseURL value
     * @return string|null
     */
    public function getBaseURL()
    {
        return $this->BaseURL;
    }
    /**
     * Set BaseURL value
     * @param string $baseURL
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setBaseURL($baseURL = null)
    {
        // validation for constraint: string
        if (!is_null($baseURL) && !is_string($baseURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseURL, true), gettype($baseURL)), __LINE__);
        }
        $this->BaseURL = $baseURL;
        return $this;
    }
    /**
     * Get PictureSetMember value
     * @return \StructType\PictureSetMemberType[]|null
     */
    public function getPictureSetMember()
    {
        return $this->PictureSetMember;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureSetMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureSetMember method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureSetMemberForArrayConstraintsFromSetPictureSetMember(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteHostedPictureDetailsTypePictureSetMemberItem) {
            // validation for constraint: itemType
            if (!$siteHostedPictureDetailsTypePictureSetMemberItem instanceof \StructType\PictureSetMemberType) {
                $invalidValues[] = is_object($siteHostedPictureDetailsTypePictureSetMemberItem) ? get_class($siteHostedPictureDetailsTypePictureSetMemberItem) : sprintf('%s(%s)', gettype($siteHostedPictureDetailsTypePictureSetMemberItem), var_export($siteHostedPictureDetailsTypePictureSetMemberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureSetMember property can only contain items of type \StructType\PictureSetMemberType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PictureSetMember value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureSetMemberType[] $pictureSetMember
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setPictureSetMember(array $pictureSetMember = array())
    {
        // validation for constraint: array
        if ('' !== ($pictureSetMemberArrayErrorMessage = self::validatePictureSetMemberForArrayConstraintsFromSetPictureSetMember($pictureSetMember))) {
            throw new \InvalidArgumentException($pictureSetMemberArrayErrorMessage, __LINE__);
        }
        $this->PictureSetMember = $pictureSetMember;
        return $this;
    }
    /**
     * Add item to PictureSetMember value
     * @throws \InvalidArgumentException
     * @param \StructType\PictureSetMemberType $item
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function addToPictureSetMember(\StructType\PictureSetMemberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PictureSetMemberType) {
            throw new \InvalidArgumentException(sprintf('The PictureSetMember property can only contain items of type \StructType\PictureSetMemberType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PictureSetMember[] = $item;
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
     * @return \StructType\SiteHostedPictureDetailsType
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
     * Get UseByDate value
     * @return string|null
     */
    public function getUseByDate()
    {
        return $this->UseByDate;
    }
    /**
     * Set UseByDate value
     * @param string $useByDate
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setUseByDate($useByDate = null)
    {
        // validation for constraint: string
        if (!is_null($useByDate) && !is_string($useByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($useByDate, true), gettype($useByDate)), __LINE__);
        }
        $this->UseByDate = $useByDate;
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
     * @return \StructType\SiteHostedPictureDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
