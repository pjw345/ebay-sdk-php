<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for the pictures associated with an item.
 * @subpackage Structs
 */
class PictureDetailsType extends AbstractStructBase
{
    /**
     * The GalleryType
     * Meta information extracted from the WSDL
     * - documentation: <a name="galleryTypeField"></a> This field is used to specify the type of picture gallery to use for the listing. If this field is omitted, a standard picture gallery is used for the listing. There is no listing fee for a standard
     * picture gallery. <br/><br/> To use the Gallery Plus feature, you must include this field and set its value to <code>Plus</code>. <br/><br/> The Gallery image will be the first URL passed into the first <b>PictureURL</b> field, so if you want a
     * specific picture to be the Gallery image, you should make sure you pass the URL for this picture in the first <b>PictureURL</b> field. <br/><br/> When revising a listing, if you disable the Gallery Plus or Featured Gallery feature by including the
     * <b>GalleryType</b> and setting its value to <code>Gallery</code>, the original feature fee for either of these features will not be credited to the seller. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $GalleryType;
    /**
     * The PhotoDisplay
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of image display used in a listing. Some options are only available if images are hosted through eBay Picture Services (EPS). eBay determines this by parsing the associated <b>PictureURL</b>. <br><br> Some
     * <b>PhotoDisplay</b> options can result in listing fees, even when the item is relisted. If you are relisting an item that was originally listed with a <b>PhotoDisplay</b> option, and you do not want that <b>PhotoDisplay</b> enhancement in your
     * relisted item, you need to specifically remove <b>PhotoDisplay</b> in your <b>RelistItem</b> call (or <b>RelistFixedPriceItem</b>, as applicable) by setting <b>PhotoDisplay</b> to <code>None</code>. Use <b>VerifyRelistItem</b> to review your listing
     * fees before you relist an item.
     * - minOccurs: 0
     * @var string
     */
    public $PhotoDisplay;
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: Contains the URL for a picture of the item. The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted). You can pass in up to 12 picture URLs (for most categories and
     * marketplaces) for each listing, but you cannot mix self-hosted and EPS-hosted URLs in the same listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted
     * on a site that is using the 'https' protocol. URLs using the 'http' protocol will not be allowed. <br/><br/> <span class="tablenote"><b>Note: </b> If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example,
     * <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a
     * semicolon cannot be a part of the URL, as an error will occur. </span> On the US and Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b> in the array of
     * <b>PictureURL</b> fields. <br/><br/> <span class="tablenote"><b>Note: </b> All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on
     * its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a
     * href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page. </span> To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first
     * URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page. <br><br> If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the
     * picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL. <br/><br/> <b>For VerifyAddItem only:</b> You must include a picture even when using
     * <b>VerifyAddItem</b>. If you don't have a image file, you can use the following fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call. <br><br> <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     * revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set of URLs with the revised set. You cannot remove all the
     * <b>PictureURL</b> fields from a listing because each listing requires at least one picture. <br/><br/> <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in
     * when relisting/revising is different from when the listing was created, the 'gallery image' will be changed. <br/><br/> <span class="tablenote"> <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added
     * or removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The PictureSource
     * Meta information extracted from the WSDL
     * - documentation: The service hosting the pictures in <b>PictureURL</b>, if any. This information is primarily useful for Picture Manager subscribers, who pay a flat subscription fee instead of individual picture fees per listing. Only returned when
     * <b>PictureURL</b> is returned. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $PictureSource;
    /**
     * The GalleryStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the gallery image upload failed and gives a reason for the failure, such as 'InvalidUrl' or 'ServerDown'. It is not returned if the gallery image is uploaded successfully.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryStatus;
    /**
     * The GalleryErrorInfo
     * Meta information extracted from the WSDL
     * - documentation: Indicates the reason the gallery generation failed, such as, URL for the image is not valid. This field is returned when <b>GalleryStatus</b> field is returned and does not appear when the gallery generation is successful. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $GalleryErrorInfo;
    /**
     * The ExternalPictureURL
     * Meta information extracted from the WSDL
     * - documentation: When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed. <br/>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExternalPictureURL;
    /**
     * The ExtendedPictureDetails
     * Meta information extracted from the WSDL
     * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ExtendedPictureDetailsType
     */
    public $ExtendedPictureDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureDetailsType
     * @uses PictureDetailsType::setGalleryType()
     * @uses PictureDetailsType::setPhotoDisplay()
     * @uses PictureDetailsType::setPictureURL()
     * @uses PictureDetailsType::setPictureSource()
     * @uses PictureDetailsType::setGalleryStatus()
     * @uses PictureDetailsType::setGalleryErrorInfo()
     * @uses PictureDetailsType::setExternalPictureURL()
     * @uses PictureDetailsType::setExtendedPictureDetails()
     * @uses PictureDetailsType::setAny()
     * @param string $galleryType
     * @param string $photoDisplay
     * @param string[] $pictureURL
     * @param string $pictureSource
     * @param string $galleryStatus
     * @param string $galleryErrorInfo
     * @param string[] $externalPictureURL
     * @param \StructType\ExtendedPictureDetailsType $extendedPictureDetails
     * @param \DOMDocument $any
     */
    public function __construct($galleryType = null, $photoDisplay = null, array $pictureURL = array(), $pictureSource = null, $galleryStatus = null, $galleryErrorInfo = null, array $externalPictureURL = array(), \StructType\ExtendedPictureDetailsType $extendedPictureDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setGalleryType($galleryType)
            ->setPhotoDisplay($photoDisplay)
            ->setPictureURL($pictureURL)
            ->setPictureSource($pictureSource)
            ->setGalleryStatus($galleryStatus)
            ->setGalleryErrorInfo($galleryErrorInfo)
            ->setExternalPictureURL($externalPictureURL)
            ->setExtendedPictureDetails($extendedPictureDetails)
            ->setAny($any);
    }
    /**
     * Get GalleryType value
     * @return string|null
     */
    public function getGalleryType()
    {
        return $this->GalleryType;
    }
    /**
     * Set GalleryType value
     * @uses \EnumType\GalleryTypeCodeType::valueIsValid()
     * @uses \EnumType\GalleryTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $galleryType
     * @return \StructType\PictureDetailsType
     */
    public function setGalleryType($galleryType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GalleryTypeCodeType::valueIsValid($galleryType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GalleryTypeCodeType', is_array($galleryType) ? implode(', ', $galleryType) : var_export($galleryType, true), implode(', ', \EnumType\GalleryTypeCodeType::getValidValues())), __LINE__);
        }
        $this->GalleryType = $galleryType;
        return $this;
    }
    /**
     * Get PhotoDisplay value
     * @return string|null
     */
    public function getPhotoDisplay()
    {
        return $this->PhotoDisplay;
    }
    /**
     * Set PhotoDisplay value
     * @uses \EnumType\PhotoDisplayCodeType::valueIsValid()
     * @uses \EnumType\PhotoDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $photoDisplay
     * @return \StructType\PictureDetailsType
     */
    public function setPhotoDisplay($photoDisplay = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PhotoDisplayCodeType::valueIsValid($photoDisplay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PhotoDisplayCodeType', is_array($photoDisplay) ? implode(', ', $photoDisplay) : var_export($photoDisplay, true), implode(', ', \EnumType\PhotoDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->PhotoDisplay = $photoDisplay;
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string[]|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureURL method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureURLForArrayConstraintsFromSetPictureURL(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureDetailsTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($pictureDetailsTypePictureURLItem)) {
                $invalidValues[] = is_object($pictureDetailsTypePictureURLItem) ? get_class($pictureDetailsTypePictureURLItem) : sprintf('%s(%s)', gettype($pictureDetailsTypePictureURLItem), var_export($pictureDetailsTypePictureURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureURL property can only contain items of type anyURI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $pictureURL
     * @return \StructType\PictureDetailsType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        // validation for constraint: array
        if ('' !== ($pictureURLArrayErrorMessage = self::validatePictureURLForArrayConstraintsFromSetPictureURL($pictureURL))) {
            throw new \InvalidArgumentException($pictureURLArrayErrorMessage, __LINE__);
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\PictureDetailsType
     */
    public function addToPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of type anyURI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PictureURL[] = $item;
        return $this;
    }
    /**
     * Get PictureSource value
     * @return string|null
     */
    public function getPictureSource()
    {
        return $this->PictureSource;
    }
    /**
     * Set PictureSource value
     * @uses \EnumType\PictureSourceCodeType::valueIsValid()
     * @uses \EnumType\PictureSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pictureSource
     * @return \StructType\PictureDetailsType
     */
    public function setPictureSource($pictureSource = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PictureSourceCodeType::valueIsValid($pictureSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PictureSourceCodeType', is_array($pictureSource) ? implode(', ', $pictureSource) : var_export($pictureSource, true), implode(', ', \EnumType\PictureSourceCodeType::getValidValues())), __LINE__);
        }
        $this->PictureSource = $pictureSource;
        return $this;
    }
    /**
     * Get GalleryStatus value
     * @return string|null
     */
    public function getGalleryStatus()
    {
        return $this->GalleryStatus;
    }
    /**
     * Set GalleryStatus value
     * @uses \EnumType\GalleryStatusCodeType::valueIsValid()
     * @uses \EnumType\GalleryStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $galleryStatus
     * @return \StructType\PictureDetailsType
     */
    public function setGalleryStatus($galleryStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GalleryStatusCodeType::valueIsValid($galleryStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GalleryStatusCodeType', is_array($galleryStatus) ? implode(', ', $galleryStatus) : var_export($galleryStatus, true), implode(', ', \EnumType\GalleryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->GalleryStatus = $galleryStatus;
        return $this;
    }
    /**
     * Get GalleryErrorInfo value
     * @return string|null
     */
    public function getGalleryErrorInfo()
    {
        return $this->GalleryErrorInfo;
    }
    /**
     * Set GalleryErrorInfo value
     * @param string $galleryErrorInfo
     * @return \StructType\PictureDetailsType
     */
    public function setGalleryErrorInfo($galleryErrorInfo = null)
    {
        // validation for constraint: string
        if (!is_null($galleryErrorInfo) && !is_string($galleryErrorInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($galleryErrorInfo, true), gettype($galleryErrorInfo)), __LINE__);
        }
        $this->GalleryErrorInfo = $galleryErrorInfo;
        return $this;
    }
    /**
     * Get ExternalPictureURL value
     * @return string[]|null
     */
    public function getExternalPictureURL()
    {
        return $this->ExternalPictureURL;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalPictureURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPictureURL method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPictureURLForArrayConstraintsFromSetExternalPictureURL(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureDetailsTypeExternalPictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($pictureDetailsTypeExternalPictureURLItem)) {
                $invalidValues[] = is_object($pictureDetailsTypeExternalPictureURLItem) ? get_class($pictureDetailsTypeExternalPictureURLItem) : sprintf('%s(%s)', gettype($pictureDetailsTypeExternalPictureURLItem), var_export($pictureDetailsTypeExternalPictureURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPictureURL property can only contain items of type anyURI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExternalPictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $externalPictureURL
     * @return \StructType\PictureDetailsType
     */
    public function setExternalPictureURL(array $externalPictureURL = array())
    {
        // validation for constraint: array
        if ('' !== ($externalPictureURLArrayErrorMessage = self::validateExternalPictureURLForArrayConstraintsFromSetExternalPictureURL($externalPictureURL))) {
            throw new \InvalidArgumentException($externalPictureURLArrayErrorMessage, __LINE__);
        }
        $this->ExternalPictureURL = $externalPictureURL;
        return $this;
    }
    /**
     * Add item to ExternalPictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\PictureDetailsType
     */
    public function addToExternalPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExternalPictureURL property can only contain items of type anyURI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPictureURL[] = $item;
        return $this;
    }
    /**
     * Get ExtendedPictureDetails value
     * @return \StructType\ExtendedPictureDetailsType|null
     */
    public function getExtendedPictureDetails()
    {
        return $this->ExtendedPictureDetails;
    }
    /**
     * Set ExtendedPictureDetails value
     * @param \StructType\ExtendedPictureDetailsType $extendedPictureDetails
     * @return \StructType\PictureDetailsType
     */
    public function setExtendedPictureDetails(\StructType\ExtendedPictureDetailsType $extendedPictureDetails = null)
    {
        $this->ExtendedPictureDetails = $extendedPictureDetails;
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
     * @return \StructType\PictureDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
