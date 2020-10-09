<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated. Replaced by <b>CharityAffiliationDetailType</b>
 * @subpackage Structs
 */
class CharityAffiliationType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: This attribute is deprecated. Replaced by the <b>CharityID</b> field of <b>CharityAffiliationDetailType</b>.
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This attribute is deprecated. Replaced by the <b>AffiliationType</b> field of <b>CharityAffiliationDetailType</b>.
     * @var string
     */
    public $type;
    /**
     * Constructor method for CharityAffiliationType
     * @uses CharityAffiliationType::setAny()
     * @uses CharityAffiliationType::setId()
     * @uses CharityAffiliationType::setType()
     * @param \DOMDocument $any
     * @param string $id
     * @param string $type
     */
    public function __construct(\DOMDocument $any = null, $id = null, $type = null)
    {
        $this
            ->setAny($any)
            ->setId($id)
            ->setType($type);
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
     * @return \StructType\CharityAffiliationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\CharityAffiliationType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\CharityAffiliationTypeCodeType::valueIsValid()
     * @uses \EnumType\CharityAffiliationTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\CharityAffiliationType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CharityAffiliationTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CharityAffiliationTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\CharityAffiliationTypeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
