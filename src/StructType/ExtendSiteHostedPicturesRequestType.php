<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendSiteHostedPicturesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: By default, unpublished pictures uploaded to eBay Picture Services (EPS) via the <b>UploadSiteHostedPictures</b> call will be kept on the server for five days before being purged. The <b>ExtendSiteHostedPictures</b> call is used to
 * extend this expiration date by the number of days specified in the call. This restricted call gives approved sellers the ability to extend the default expiration date of pictures uploaded to EPS but not immediately published in an eBay listing.
 * @subpackage Structs
 */
class ExtendSiteHostedPicturesRequestType extends AbstractRequestType
{
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The ExtensionInDays
     * Meta information extracted from the WSDL
     * - documentation: The number of days by which to extend the expiration date for the specified image.
     * - minOccurs: 0
     * @var int
     */
    public $ExtensionInDays;
    /**
     * Constructor method for ExtendSiteHostedPicturesRequestType
     * @uses ExtendSiteHostedPicturesRequestType::setPictureURL()
     * @uses ExtendSiteHostedPicturesRequestType::setExtensionInDays()
     * @param string[] $pictureURL
     * @param int $extensionInDays
     */
    public function __construct(array $pictureURL = array(), $extensionInDays = null)
    {
        $this
            ->setPictureURL($pictureURL)
            ->setExtensionInDays($extensionInDays);
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
        foreach ($values as $extendSiteHostedPicturesRequestTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($extendSiteHostedPicturesRequestTypePictureURLItem)) {
                $invalidValues[] = is_object($extendSiteHostedPicturesRequestTypePictureURLItem) ? get_class($extendSiteHostedPicturesRequestTypePictureURLItem) : sprintf('%s(%s)', gettype($extendSiteHostedPicturesRequestTypePictureURLItem), var_export($extendSiteHostedPicturesRequestTypePictureURLItem, true));
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
     * @return \StructType\ExtendSiteHostedPicturesRequestType
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
     * @return \StructType\ExtendSiteHostedPicturesRequestType
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
     * Get ExtensionInDays value
     * @return int|null
     */
    public function getExtensionInDays()
    {
        return $this->ExtensionInDays;
    }
    /**
     * Set ExtensionInDays value
     * @param int $extensionInDays
     * @return \StructType\ExtendSiteHostedPicturesRequestType
     */
    public function setExtensionInDays($extensionInDays = null)
    {
        // validation for constraint: int
        if (!is_null($extensionInDays) && !(is_int($extensionInDays) || ctype_digit($extensionInDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extensionInDays, true), gettype($extensionInDays)), __LINE__);
        }
        $this->ExtensionInDays = $extensionInDays;
        return $this;
    }
}
