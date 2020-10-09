<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorParameterType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ErrorParameters</b> container if one or more errors or warnings occur with the call, and if a specific request parameter has been pinpointed as the reason why the error or warning was triggered.
 * @subpackage Structs
 */
class ErrorParameterType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: This is the value of the request parameter noted in the <b>ParamID</b> attribute. So, if the <b>ParamID</b> value was <b>ItemID</b>, the value in this field would be the actual value of that <b>ItemID</b>.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The ParamID
     * Meta information extracted from the WSDL
     * - documentation: This is name of the request parameter that has been pinpointed as the reason why the error or warning was triggered. This value might be <b>ItemID</b>, in which case the identifier of that item would be returned in the <b>Value</b>
     * field.
     * @var string
     */
    public $ParamID;
    /**
     * Constructor method for ErrorParameterType
     * @uses ErrorParameterType::setValue()
     * @uses ErrorParameterType::setAny()
     * @uses ErrorParameterType::setParamID()
     * @param string $value
     * @param \DOMDocument $any
     * @param string $paramID
     */
    public function __construct($value = null, \DOMDocument $any = null, $paramID = null)
    {
        $this
            ->setValue($value)
            ->setAny($any)
            ->setParamID($paramID);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \StructType\ErrorParameterType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
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
     * @return \StructType\ErrorParameterType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get ParamID value
     * @return string|null
     */
    public function getParamID()
    {
        return $this->ParamID;
    }
    /**
     * Set ParamID value
     * @param string $paramID
     * @return \StructType\ErrorParameterType
     */
    public function setParamID($paramID = null)
    {
        // validation for constraint: string
        if (!is_null($paramID) && !is_string($paramID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paramID, true), gettype($paramID)), __LINE__);
        }
        $this->ParamID = $paramID;
        return $this;
    }
}
