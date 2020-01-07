<?php

namespace EnumType;

/**
 * This class stands for PictureSetCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies whether to generate the 'standard' set of images for each picture or to also generate a super-sized image. <br/><br/> <b>Note:</b> This type is used only for images that will be used in a listing.
 * @subpackage Enumerations
 */
class PictureSetCodeType
{
    /**
     * Constant for value 'Standard'
     * Meta information extracted from the WSDL
     * - documentation: Indicates to generate the "Standard" set of images, which is a set of 7 images of various sizes, for each <b>ExternalPictureURL</b> submitted in the request. This is the default. <b>Note:</b> This field is used only for images that
     * will be used in a listing.
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Supersize'
     * Meta information extracted from the WSDL
     * - documentation: Indicates to generate the "Standard" set <i>plus</i> a super-sized image for each <b>ExternalPictureURL</b> submitted in the request. In order to include the super-sized image in the Add Item calls, you must also specify
     * <b>Item.PictureDetails.PhotoDisplay.Supersize</b> or <b>Item.PictureDetails.PhotoDisplay.PicturePack</b>. <b>Note:</b> This field is used only for images that will be used in a listing.
     * @return string 'Supersize'
     */
    const VALUE_SUPERSIZE = 'Supersize';
    /**
     * Constant for value 'Large'
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer returned.
     * @return string 'Large'
     */
    const VALUE_LARGE = 'Large';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal use <b>only</b>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_SUPERSIZE
     * @uses self::VALUE_LARGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STANDARD,
            self::VALUE_SUPERSIZE,
            self::VALUE_LARGE,
            self::VALUE_CUSTOM_CODE,
        );
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
