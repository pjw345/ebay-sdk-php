<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadSiteHostedPicturesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a picture upload (i.e., information about a picture upload containing a binary attachment of an image).
 * @subpackage Structs
 */
class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * The PictureSystemVersion
     * Meta information extracted from the WSDL
     * - documentation: Specifies the picture system version that was used to upload pictures. Only version 2 is valid.
     * - minOccurs: 0
     * @var int
     */
    public $PictureSystemVersion;
    /**
     * The SiteHostedPictureDetails
     * Meta information extracted from the WSDL
     * - documentation: The information about an <b>UploadSiteHostedPictures</b> upload, including the URL of the uploaded picture.
     * - minOccurs: 0
     * @var \StructType\SiteHostedPictureDetailsType
     */
    public $SiteHostedPictureDetails;
    /**
     * Constructor method for UploadSiteHostedPicturesResponseType
     * @uses UploadSiteHostedPicturesResponseType::setPictureSystemVersion()
     * @uses UploadSiteHostedPicturesResponseType::setSiteHostedPictureDetails()
     * @param int $pictureSystemVersion
     * @param \StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails
     */
    public function __construct($pictureSystemVersion = null, \StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails = null)
    {
        $this
            ->setPictureSystemVersion($pictureSystemVersion)
            ->setSiteHostedPictureDetails($siteHostedPictureDetails);
    }
    /**
     * Get PictureSystemVersion value
     * @return int|null
     */
    public function getPictureSystemVersion()
    {
        return $this->PictureSystemVersion;
    }
    /**
     * Set PictureSystemVersion value
     * @param int $pictureSystemVersion
     * @return \StructType\UploadSiteHostedPicturesResponseType
     */
    public function setPictureSystemVersion($pictureSystemVersion = null)
    {
        // validation for constraint: int
        if (!is_null($pictureSystemVersion) && !(is_int($pictureSystemVersion) || ctype_digit($pictureSystemVersion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pictureSystemVersion, true), gettype($pictureSystemVersion)), __LINE__);
        }
        $this->PictureSystemVersion = $pictureSystemVersion;
        return $this;
    }
    /**
     * Get SiteHostedPictureDetails value
     * @return \StructType\SiteHostedPictureDetailsType|null
     */
    public function getSiteHostedPictureDetails()
    {
        return $this->SiteHostedPictureDetails;
    }
    /**
     * Set SiteHostedPictureDetails value
     * @param \StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails
     * @return \StructType\UploadSiteHostedPicturesResponseType
     */
    public function setSiteHostedPictureDetails(\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails = null)
    {
        $this->SiteHostedPictureDetails = $siteHostedPictureDetails;
        return $this;
    }
}
