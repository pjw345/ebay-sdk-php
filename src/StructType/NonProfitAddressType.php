<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonProfitAddressType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>NonProfitAddress</b> container, which consists of the address (including latitude and longitude) of a nonprofit charity organization.
 * @subpackage Structs
 */
class NonProfitAddressType extends AbstractStructBase
{
    /**
     * The AddressLine1
     * Meta information extracted from the WSDL
     * - documentation: The street address of a nonprofit charity organization.
     * - minOccurs: 0
     * @var string
     */
    public $AddressLine1;
    /**
     * The AddressLine2
     * Meta information extracted from the WSDL
     * - documentation: The second line (if needed) of a nonprofit charity organization. This field is often used for a suite number, floor number, or P.O. Box.
     * - minOccurs: 0
     * @var string
     */
    public $AddressLine2;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - documentation: The city in which a nonprofit charity organization is located.
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - documentation: The state in which a nonprofit charity organization is located.
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - documentation: The zip code of a nonprofit charity organization.
     * - minOccurs: 0
     * @var string
     */
    public $ZipCode;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - documentation: The latitude value of a nonprofit charity organization. Latitude and longitude coordinates pinpoint the location of the organization relative to the earth, and are useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     * fields are only returned in <b>GetCharities</b> if set by the organization.
     * - minOccurs: 0
     * @var float
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - documentation: The longitude value of a nonprofit charity organization. Latitude and longitude coordinates pinpoint the location of the organization relative to the earth, and are useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     * fields are only returned in <b>GetCharities</b> if set by the organization.
     * - minOccurs: 0
     * @var float
     */
    public $Longitude;
    /**
     * The AddressType
     * Meta information extracted from the WSDL
     * - documentation: Enumeration value that indicates whether or not a nonprofit charity organization is registered with the PayPal Giving Fund. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help
     * topic for more information on registering with the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
     * - minOccurs: 0
     * @var string
     */
    public $AddressType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NonProfitAddressType
     * @uses NonProfitAddressType::setAddressLine1()
     * @uses NonProfitAddressType::setAddressLine2()
     * @uses NonProfitAddressType::setCity()
     * @uses NonProfitAddressType::setState()
     * @uses NonProfitAddressType::setZipCode()
     * @uses NonProfitAddressType::setLatitude()
     * @uses NonProfitAddressType::setLongitude()
     * @uses NonProfitAddressType::setAddressType()
     * @uses NonProfitAddressType::setAny()
     * @param string $addressLine1
     * @param string $addressLine2
     * @param string $city
     * @param string $state
     * @param string $zipCode
     * @param float $latitude
     * @param float $longitude
     * @param string $addressType
     * @param \DOMDocument $any
     */
    public function __construct($addressLine1 = null, $addressLine2 = null, $city = null, $state = null, $zipCode = null, $latitude = null, $longitude = null, $addressType = null, \DOMDocument $any = null)
    {
        $this
            ->setAddressLine1($addressLine1)
            ->setAddressLine2($addressLine2)
            ->setCity($city)
            ->setState($state)
            ->setZipCode($zipCode)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setAddressType($addressType)
            ->setAny($any);
    }
    /**
     * Get AddressLine1 value
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }
    /**
     * Set AddressLine1 value
     * @param string $addressLine1
     * @return \StructType\NonProfitAddressType
     */
    public function setAddressLine1($addressLine1 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine1) && !is_string($addressLine1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine1, true), gettype($addressLine1)), __LINE__);
        }
        $this->AddressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Get AddressLine2 value
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }
    /**
     * Set AddressLine2 value
     * @param string $addressLine2
     * @return \StructType\NonProfitAddressType
     */
    public function setAddressLine2($addressLine2 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine2) && !is_string($addressLine2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine2, true), gettype($addressLine2)), __LINE__);
        }
        $this->AddressLine2 = $addressLine2;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \StructType\NonProfitAddressType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \StructType\NonProfitAddressType
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get ZipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
    /**
     * Set ZipCode value
     * @param string $zipCode
     * @return \StructType\NonProfitAddressType
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->ZipCode = $zipCode;
        return $this;
    }
    /**
     * Get Latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param float $latitude
     * @return \StructType\NonProfitAddressType
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param float $longitude
     * @return \StructType\NonProfitAddressType
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get AddressType value
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->AddressType;
    }
    /**
     * Set AddressType value
     * @uses \EnumType\AddressTypeCodeType::valueIsValid()
     * @uses \EnumType\AddressTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressType
     * @return \StructType\NonProfitAddressType
     */
    public function setAddressType($addressType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AddressTypeCodeType::valueIsValid($addressType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AddressTypeCodeType', is_array($addressType) ? implode(', ', $addressType) : var_export($addressType, true), implode(', ', \EnumType\AddressTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AddressType = $addressType;
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
     * @return \StructType\NonProfitAddressType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
