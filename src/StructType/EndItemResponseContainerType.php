<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemResponseContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type includes the acknowledgement of the date and time when an eBay listing was ended due to the call to <b>EndItems</b>.
 * @subpackage Structs
 */
class EndItemResponseContainerType extends AbstractStructBase
{
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. With <b>EndItems</b>, the seller can pass in a different <b>MessageID</b> value for each
     * <b>EndItemRequestContainer</b> container that is used in the request. The <b>CorrelationID</b> value returned under each <b>EndItemResponseContainer</b> container is used to correlate each End Item request container with its corresponding End Item
     * response container. The same <b>MessageID</b> value that you pass into a request will be returned in the <b>CorrelationID</b> field in the response. <br> <br> If you do not pass in a <b>MessageID</b> value in the request, <b>CorrelationID</b> is not
     * returned.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - documentation: A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server
     * side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal
     * business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ErrorType[]
     */
    public $Errors;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for EndItemResponseContainerType
     * @uses EndItemResponseContainerType::setEndTime()
     * @uses EndItemResponseContainerType::setCorrelationID()
     * @uses EndItemResponseContainerType::setErrors()
     * @uses EndItemResponseContainerType::setAny()
     * @param string $endTime
     * @param string $correlationID
     * @param \StructType\ErrorType[] $errors
     * @param \DOMDocument $any
     */
    public function __construct($endTime = null, $correlationID = null, array $errors = array(), \DOMDocument $any = null)
    {
        $this
            ->setEndTime($endTime)
            ->setCorrelationID($correlationID)
            ->setErrors($errors)
            ->setAny($any);
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EndItemResponseContainerType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \StructType\EndItemResponseContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorType[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $endItemResponseContainerTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$endItemResponseContainerTypeErrorsItem instanceof \StructType\ErrorType) {
                $invalidValues[] = is_object($endItemResponseContainerTypeErrorsItem) ? get_class($endItemResponseContainerTypeErrorsItem) : sprintf('%s(%s)', gettype($endItemResponseContainerTypeErrorsItem), var_export($endItemResponseContainerTypeErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Errors property can only contain items of type \StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Errors value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorType[] $errors
     * @return \StructType\EndItemResponseContainerType
     */
    public function setErrors(array $errors = array())
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new \InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorType $item
     * @return \StructType\EndItemResponseContainerType
     */
    public function addToErrors(\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of type \StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Errors[] = $item;
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
     * @return \StructType\EndItemResponseContainerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
