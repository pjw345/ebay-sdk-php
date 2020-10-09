<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns token status.
 * @subpackage Structs
 */
class TokenStatusType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Current token status.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The EIASToken
     * Meta information extracted from the WSDL
     * - documentation: Identifies the user to whom the token belongs.
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The ExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: Original expiration time for the token.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationTime;
    /**
     * The RevocationTime
     * Meta information extracted from the WSDL
     * - documentation: Token revocation time, if the token has been revoked.
     * - minOccurs: 0
     * @var string
     */
    public $RevocationTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TokenStatusType
     * @uses TokenStatusType::setStatus()
     * @uses TokenStatusType::setEIASToken()
     * @uses TokenStatusType::setExpirationTime()
     * @uses TokenStatusType::setRevocationTime()
     * @uses TokenStatusType::setAny()
     * @param string $status
     * @param string $eIASToken
     * @param string $expirationTime
     * @param string $revocationTime
     * @param \DOMDocument $any
     */
    public function __construct($status = null, $eIASToken = null, $expirationTime = null, $revocationTime = null, \DOMDocument $any = null)
    {
        $this
            ->setStatus($status)
            ->setEIASToken($eIASToken)
            ->setExpirationTime($expirationTime)
            ->setRevocationTime($revocationTime)
            ->setAny($any);
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
     * @uses \EnumType\TokenStatusCodeType::valueIsValid()
     * @uses \EnumType\TokenStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\TokenStatusType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TokenStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TokenStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\TokenStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \StructType\TokenStatusType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIASToken, true), gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        return $this;
    }
    /**
     * Get ExpirationTime value
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->ExpirationTime;
    }
    /**
     * Set ExpirationTime value
     * @param string $expirationTime
     * @return \StructType\TokenStatusType
     */
    public function setExpirationTime($expirationTime = null)
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationTime, true), gettype($expirationTime)), __LINE__);
        }
        $this->ExpirationTime = $expirationTime;
        return $this;
    }
    /**
     * Get RevocationTime value
     * @return string|null
     */
    public function getRevocationTime()
    {
        return $this->RevocationTime;
    }
    /**
     * Set RevocationTime value
     * @param string $revocationTime
     * @return \StructType\TokenStatusType
     */
    public function setRevocationTime($revocationTime = null)
    {
        // validation for constraint: string
        if (!is_null($revocationTime) && !is_string($revocationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($revocationTime, true), gettype($revocationTime)), __LINE__);
        }
        $this->RevocationTime = $revocationTime;
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
     * @return \StructType\TokenStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
