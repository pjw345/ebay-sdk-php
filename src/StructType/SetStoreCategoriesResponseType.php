<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCategoriesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>SetStoreCategories</b> call. Returns the status of the eBay Store category changes.
 * @subpackage Structs
 */
class SetStoreCategoriesResponseType extends AbstractResponseType
{
    /**
     * The TaskID
     * Meta information extracted from the WSDL
     * - documentation: The task ID associated with the category structure change request. For a simple change, the <b>SetStoreCategories</b> call is processed synchronously. That is, simple changes are made immediately and then the response is returned.
     * For synchronous processing, the task ID in the response is 0. If the category structure changes affect many listings, the changes will be processed asynchronously and the task ID will be a positive number. Use the non-zero task ID with
     * <b>GetStoreCategoryUpdateStatus</b> to monitor the status of asynchronously processed changes.
     * - minOccurs: 0
     * @var int
     */
    public $TaskID;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: When an eBay Store category structure change is processed synchronously, the status is returned as 'Complete' or 'Failed'. For asynchronously processed changes, the status is reported as 'InProgress' or 'Pending'. Use
     * <b>GetStoreCategoryUpdateStatus</b> to monitor the status of asynchronously processed changes.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The CustomCategory
     * Meta information extracted from the WSDL
     * - documentation: Contains hierarchy data for eBay Store categories that you have created/modified.
     * - minOccurs: 0
     * @var \ArrayType\StoreCustomCategoryArrayType
     */
    public $CustomCategory;
    /**
     * Constructor method for SetStoreCategoriesResponseType
     * @uses SetStoreCategoriesResponseType::setTaskID()
     * @uses SetStoreCategoriesResponseType::setStatus()
     * @uses SetStoreCategoriesResponseType::setCustomCategory()
     * @param int $taskID
     * @param string $status
     * @param \ArrayType\StoreCustomCategoryArrayType $customCategory
     */
    public function __construct($taskID = null, $status = null, \ArrayType\StoreCustomCategoryArrayType $customCategory = null)
    {
        $this
            ->setTaskID($taskID)
            ->setStatus($status)
            ->setCustomCategory($customCategory);
    }
    /**
     * Get TaskID value
     * @return int|null
     */
    public function getTaskID()
    {
        return $this->TaskID;
    }
    /**
     * Set TaskID value
     * @param int $taskID
     * @return \StructType\SetStoreCategoriesResponseType
     */
    public function setTaskID($taskID = null)
    {
        // validation for constraint: int
        if (!is_null($taskID) && !(is_int($taskID) || ctype_digit($taskID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskID, true), gettype($taskID)), __LINE__);
        }
        $this->TaskID = $taskID;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\TaskStatusCodeType::valueIsValid()
     * @uses \EnumType\TaskStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\SetStoreCategoriesResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TaskStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TaskStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\TaskStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get CustomCategory value
     * @return \ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getCustomCategory()
    {
        return $this->CustomCategory;
    }
    /**
     * Set CustomCategory value
     * @param \ArrayType\StoreCustomCategoryArrayType $customCategory
     * @return \StructType\SetStoreCategoriesResponseType
     */
    public function setCustomCategory(\ArrayType\StoreCustomCategoryArrayType $customCategory = null)
    {
        $this->CustomCategory = $customCategory;
        return $this;
    }
}
