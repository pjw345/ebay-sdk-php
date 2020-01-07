<?php

namespace EnumType;

/**
 * This class stands for SetUserNotesActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the action to take for an item's My eBay notes.
 * @subpackage Enumerations
 */
class SetUserNotesActionCodeType
{
    /**
     * Constant for value 'AddOrUpdate'
     * Meta information extracted from the WSDL
     * - documentation: Creates or replaces an item's My eBay notes. Note that if the specified item already has notes in My eBay, the new notes will completely replace the existing notes. They will not be appended.
     * @return string 'AddOrUpdate'
     */
    const VALUE_ADD_OR_UPDATE = 'AddOrUpdate';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: Deletes any existing My eBay notes for the specified item. Specifying Delete when no notes exist does nothing, but does not return an error.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
     * @uses self::VALUE_ADD_OR_UPDATE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD_OR_UPDATE,
            self::VALUE_DELETE,
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
