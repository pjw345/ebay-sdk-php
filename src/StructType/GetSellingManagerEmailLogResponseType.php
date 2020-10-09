<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerEmailLogResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the log of emails not sent.
 * @subpackage Structs
 */
class GetSellingManagerEmailLogResponseType extends AbstractResponseType
{
    /**
     * The EmailLog
     * Meta information extracted from the WSDL
     * - documentation: Email logs associated with this order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SellingManagerEmailLogType[]
     */
    public $EmailLog;
    /**
     * Constructor method for GetSellingManagerEmailLogResponseType
     * @uses GetSellingManagerEmailLogResponseType::setEmailLog()
     * @param \StructType\SellingManagerEmailLogType[] $emailLog
     */
    public function __construct(array $emailLog = array())
    {
        $this
            ->setEmailLog($emailLog);
    }
    /**
     * Get EmailLog value
     * @return \StructType\SellingManagerEmailLogType[]|null
     */
    public function getEmailLog()
    {
        return $this->EmailLog;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailLogForArrayConstraintsFromSetEmailLog(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerEmailLogResponseTypeEmailLogItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerEmailLogResponseTypeEmailLogItem instanceof \StructType\SellingManagerEmailLogType) {
                $invalidValues[] = is_object($getSellingManagerEmailLogResponseTypeEmailLogItem) ? get_class($getSellingManagerEmailLogResponseTypeEmailLogItem) : sprintf('%s(%s)', gettype($getSellingManagerEmailLogResponseTypeEmailLogItem), var_export($getSellingManagerEmailLogResponseTypeEmailLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailLog property can only contain items of type \StructType\SellingManagerEmailLogType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EmailLog value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerEmailLogType[] $emailLog
     * @return \StructType\GetSellingManagerEmailLogResponseType
     */
    public function setEmailLog(array $emailLog = array())
    {
        // validation for constraint: array
        if ('' !== ($emailLogArrayErrorMessage = self::validateEmailLogForArrayConstraintsFromSetEmailLog($emailLog))) {
            throw new \InvalidArgumentException($emailLogArrayErrorMessage, __LINE__);
        }
        $this->EmailLog = $emailLog;
        return $this;
    }
    /**
     * Add item to EmailLog value
     * @throws \InvalidArgumentException
     * @param \StructType\SellingManagerEmailLogType $item
     * @return \StructType\GetSellingManagerEmailLogResponseType
     */
    public function addToEmailLog(\StructType\SellingManagerEmailLogType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SellingManagerEmailLogType) {
            throw new \InvalidArgumentException(sprintf('The EmailLog property can only contain items of type \StructType\SellingManagerEmailLogType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EmailLog[] = $item;
        return $this;
    }
}
