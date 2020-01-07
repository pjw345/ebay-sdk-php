<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendSiteHostedPicturesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the URL of an eBay Picture Services image whose expiration date was extended.
 * @subpackage Structs
 */
class ExtendSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * Constructor method for ExtendSiteHostedPicturesResponseType
     * @uses ExtendSiteHostedPicturesResponseType::setPictureURL()
     * @param string[] $pictureURL
     */
    public function __construct(array $pictureURL = array())
    {
        $this
            ->setPictureURL($pictureURL);
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
        foreach ($values as $extendSiteHostedPicturesResponseTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($extendSiteHostedPicturesResponseTypePictureURLItem)) {
                $invalidValues[] = is_object($extendSiteHostedPicturesResponseTypePictureURLItem) ? get_class($extendSiteHostedPicturesResponseTypePictureURLItem) : sprintf('%s(%s)', gettype($extendSiteHostedPicturesResponseTypePictureURLItem), var_export($extendSiteHostedPicturesResponseTypePictureURLItem, true));
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
     * @return \StructType\ExtendSiteHostedPicturesResponseType
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
     * @return \StructType\ExtendSiteHostedPicturesResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ExtendSiteHostedPicturesResponseType
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
