<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * Meta information extracted from the WSDL
 * - documentation: These are request errors (as opposed to system errors) that occur due to problems with business-level data (e.g., an invalid combination of arguments) that the application passed in.
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The ShortMessage
     * Meta information extracted from the WSDL
     * - documentation: A brief description of the condition that raised the error.
     * - minOccurs: 0
     * @var string
     */
    public $ShortMessage;
    /**
     * The LongMessage
     * Meta information extracted from the WSDL
     * - documentation: A more detailed description of the condition that raised the error.
     * - minOccurs: 0
     * @var string
     */
    public $LongMessage;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - documentation: A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. See the "Errors by Number" document.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorCode;
    /**
     * The UserDisplayHint
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the error message text is intended to be displayed to an end user or intended only to be parsed by the application. If true or not present (the default), the message text is intended for the end user. If false, the
     * message text is intended for the application, and the application should translate the error into a more appropriate message. Only applicable to Item Specifics errors and warnings returned from listing requests.
     * - minOccurs: 0
     * @var bool
     */
    public $UserDisplayHint;
    /**
     * The SeverityCode
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the error is a severe error (causing the request to fail) or an informational error (a warning) that should be communicated to the user.
     * - minOccurs: 0
     * @var string
     */
    public $SeverityCode;
    /**
     * The ErrorParameters
     * Meta information extracted from the WSDL
     * - documentation: This optional element carries a list of context-specific error variables that indicate details about the error condition. These are useful when multiple instances of <b>ErrorType</b> are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ErrorParameterType[]
     */
    public $ErrorParameters;
    /**
     * The ErrorClassification
     * Meta information extracted from the WSDL
     * - documentation: API errors are divided between two classes: system errors and request errors.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorClassification;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setShortMessage()
     * @uses ErrorType::setLongMessage()
     * @uses ErrorType::setErrorCode()
     * @uses ErrorType::setUserDisplayHint()
     * @uses ErrorType::setSeverityCode()
     * @uses ErrorType::setErrorParameters()
     * @uses ErrorType::setErrorClassification()
     * @uses ErrorType::setAny()
     * @param string $shortMessage
     * @param string $longMessage
     * @param string $errorCode
     * @param bool $userDisplayHint
     * @param string $severityCode
     * @param \StructType\ErrorParameterType[] $errorParameters
     * @param string $errorClassification
     * @param \DOMDocument $any
     */
    public function __construct($shortMessage = null, $longMessage = null, $errorCode = null, $userDisplayHint = null, $severityCode = null, array $errorParameters = array(), $errorClassification = null, \DOMDocument $any = null)
    {
        $this
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage)
            ->setErrorCode($errorCode)
            ->setUserDisplayHint($userDisplayHint)
            ->setSeverityCode($severityCode)
            ->setErrorParameters($errorParameters)
            ->setErrorClassification($errorClassification)
            ->setAny($any);
    }
    /**
     * Get ShortMessage value
     * @return string|null
     */
    public function getShortMessage()
    {
        return $this->ShortMessage;
    }
    /**
     * Set ShortMessage value
     * @param string $shortMessage
     * @return \StructType\ErrorType
     */
    public function setShortMessage($shortMessage = null)
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortMessage, true), gettype($shortMessage)), __LINE__);
        }
        $this->ShortMessage = $shortMessage;
        return $this;
    }
    /**
     * Get LongMessage value
     * @return string|null
     */
    public function getLongMessage()
    {
        return $this->LongMessage;
    }
    /**
     * Set LongMessage value
     * @param string $longMessage
     * @return \StructType\ErrorType
     */
    public function setLongMessage($longMessage = null)
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longMessage, true), gettype($longMessage)), __LINE__);
        }
        $this->LongMessage = $longMessage;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param string $errorCode
     * @return \StructType\ErrorType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get UserDisplayHint value
     * @return bool|null
     */
    public function getUserDisplayHint()
    {
        return $this->UserDisplayHint;
    }
    /**
     * Set UserDisplayHint value
     * @param bool $userDisplayHint
     * @return \StructType\ErrorType
     */
    public function setUserDisplayHint($userDisplayHint = null)
    {
        // validation for constraint: boolean
        if (!is_null($userDisplayHint) && !is_bool($userDisplayHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userDisplayHint, true), gettype($userDisplayHint)), __LINE__);
        }
        $this->UserDisplayHint = $userDisplayHint;
        return $this;
    }
    /**
     * Get SeverityCode value
     * @return string|null
     */
    public function getSeverityCode()
    {
        return $this->SeverityCode;
    }
    /**
     * Set SeverityCode value
     * @uses \EnumType\SeverityCodeType::valueIsValid()
     * @uses \EnumType\SeverityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severityCode
     * @return \StructType\ErrorType
     */
    public function setSeverityCode($severityCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SeverityCodeType::valueIsValid($severityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SeverityCodeType', is_array($severityCode) ? implode(', ', $severityCode) : var_export($severityCode, true), implode(', ', \EnumType\SeverityCodeType::getValidValues())), __LINE__);
        }
        $this->SeverityCode = $severityCode;
        return $this;
    }
    /**
     * Get ErrorParameters value
     * @return \StructType\ErrorParameterType[]|null
     */
    public function getErrorParameters()
    {
        return $this->ErrorParameters;
    }
    /**
     * This method is responsible for validating the values passed to the setErrorParameters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorParameters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorParametersForArrayConstraintsFromSetErrorParameters(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $errorTypeErrorParametersItem) {
            // validation for constraint: itemType
            if (!$errorTypeErrorParametersItem instanceof \StructType\ErrorParameterType) {
                $invalidValues[] = is_object($errorTypeErrorParametersItem) ? get_class($errorTypeErrorParametersItem) : sprintf('%s(%s)', gettype($errorTypeErrorParametersItem), var_export($errorTypeErrorParametersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ErrorParameters property can only contain items of type \StructType\ErrorParameterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ErrorParameters value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorParameterType[] $errorParameters
     * @return \StructType\ErrorType
     */
    public function setErrorParameters(array $errorParameters = array())
    {
        // validation for constraint: array
        if ('' !== ($errorParametersArrayErrorMessage = self::validateErrorParametersForArrayConstraintsFromSetErrorParameters($errorParameters))) {
            throw new \InvalidArgumentException($errorParametersArrayErrorMessage, __LINE__);
        }
        $this->ErrorParameters = $errorParameters;
        return $this;
    }
    /**
     * Add item to ErrorParameters value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorParameterType $item
     * @return \StructType\ErrorType
     */
    public function addToErrorParameters(\StructType\ErrorParameterType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ErrorParameterType) {
            throw new \InvalidArgumentException(sprintf('The ErrorParameters property can only contain items of type \StructType\ErrorParameterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ErrorParameters[] = $item;
        return $this;
    }
    /**
     * Get ErrorClassification value
     * @return string|null
     */
    public function getErrorClassification()
    {
        return $this->ErrorClassification;
    }
    /**
     * Set ErrorClassification value
     * @uses \EnumType\ErrorClassificationCodeType::valueIsValid()
     * @uses \EnumType\ErrorClassificationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorClassification
     * @return \StructType\ErrorType
     */
    public function setErrorClassification($errorClassification = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ErrorClassificationCodeType::valueIsValid($errorClassification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ErrorClassificationCodeType', is_array($errorClassification) ? implode(', ', $errorClassification) : var_export($errorClassification, true), implode(', ', \EnumType\ErrorClassificationCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorClassification = $errorClassification;
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
     * @return \StructType\ErrorType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
