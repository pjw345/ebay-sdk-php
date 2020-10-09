<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReasonCodeDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for VeRO reason code details.
 * @subpackage Structs
 */
class ReasonCodeDetailType extends AbstractStructBase
{
    /**
     * The BriefText
     * Meta information extracted from the WSDL
     * - documentation: The short description of the infringement associated with the reason code ID.
     * - minOccurs: 0
     * @var string
     */
    public $BriefText;
    /**
     * The DetailedText
     * Meta information extracted from the WSDL
     * - documentation: The long description of the infringement associated with the reason code ID.
     * - minOccurs: 0
     * @var string
     */
    public $DetailedText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The codeID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier assigned to a reason code.
     * @var int
     */
    public $codeID;
    /**
     * Constructor method for ReasonCodeDetailType
     * @uses ReasonCodeDetailType::setBriefText()
     * @uses ReasonCodeDetailType::setDetailedText()
     * @uses ReasonCodeDetailType::setAny()
     * @uses ReasonCodeDetailType::setCodeID()
     * @param string $briefText
     * @param string $detailedText
     * @param \DOMDocument $any
     * @param int $codeID
     */
    public function __construct($briefText = null, $detailedText = null, \DOMDocument $any = null, $codeID = null)
    {
        $this
            ->setBriefText($briefText)
            ->setDetailedText($detailedText)
            ->setAny($any)
            ->setCodeID($codeID);
    }
    /**
     * Get BriefText value
     * @return string|null
     */
    public function getBriefText()
    {
        return $this->BriefText;
    }
    /**
     * Set BriefText value
     * @param string $briefText
     * @return \StructType\ReasonCodeDetailType
     */
    public function setBriefText($briefText = null)
    {
        // validation for constraint: string
        if (!is_null($briefText) && !is_string($briefText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($briefText, true), gettype($briefText)), __LINE__);
        }
        $this->BriefText = $briefText;
        return $this;
    }
    /**
     * Get DetailedText value
     * @return string|null
     */
    public function getDetailedText()
    {
        return $this->DetailedText;
    }
    /**
     * Set DetailedText value
     * @param string $detailedText
     * @return \StructType\ReasonCodeDetailType
     */
    public function setDetailedText($detailedText = null)
    {
        // validation for constraint: string
        if (!is_null($detailedText) && !is_string($detailedText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailedText, true), gettype($detailedText)), __LINE__);
        }
        $this->DetailedText = $detailedText;
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
     * @return \StructType\ReasonCodeDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get codeID value
     * @return int|null
     */
    public function getCodeID()
    {
        return $this->codeID;
    }
    /**
     * Set codeID value
     * @param int $codeID
     * @return \StructType\ReasonCodeDetailType
     */
    public function setCodeID($codeID = null)
    {
        // validation for constraint: int
        if (!is_null($codeID) && !(is_int($codeID) || ctype_digit($codeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeID, true), gettype($codeID)), __LINE__);
        }
        $this->codeID = $codeID;
        return $this;
    }
}
