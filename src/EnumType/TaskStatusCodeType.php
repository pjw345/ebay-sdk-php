<?php

namespace EnumType;

/**
 * This class stands for TaskStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Status values for the processing progress for the category structure changes specified by a SetStoreCategories request. If the SetStoreCategories call is processed asynchronously, then the status is returned by
 * GetStoreCategoryUpdateStatus, otherwise, the status is returned in the SetStoreCategories response.
 * @subpackage Enumerations
 */
class TaskStatusCodeType
{
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: (out) The category changes have not started.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'InProgress'
     * Meta information extracted from the WSDL
     * - documentation: (out) The category changes are in progress.
     * @return string 'InProgress'
     */
    const VALUE_IN_PROGRESS = 'InProgress';
    /**
     * Constant for value 'Complete'
     * Meta information extracted from the WSDL
     * - documentation: (out) The category changes completed successfully.
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: (out) The category changes failed.
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
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
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_IN_PROGRESS
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PENDING,
            self::VALUE_IN_PROGRESS,
            self::VALUE_COMPLETE,
            self::VALUE_FAILED,
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
