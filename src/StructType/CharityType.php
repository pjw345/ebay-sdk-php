<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about a nonprofit organization registered with the PayPal Giving Fund.
 * @subpackage Structs
 */
class CharityType extends AbstractStructBase
{
    /**
     * The CharityName
     * Meta information extracted from the WSDL
     * - documentation: The name of the benefiting nonprofit charity organization selected by the charity seller.
     * - minOccurs: 0
     * @var string
     */
    public $CharityName;
    /**
     * The CharityNumber
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier assigned to a nonprofit charity organization by the PayPal Giving Fund. This value can contain up to 10 digits. This value is superseded by <b>CharityID</b>.
     * - minOccurs: 0
     * @var int
     */
    public $CharityNumber;
    /**
     * The DonationPercent
     * Meta information extracted from the WSDL
     * - documentation: The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is displayed in the eBay for Charity listing. <b>Possible values</b>: 10.0 to 100.0. <b></b> <ul>
     * <li>Percentages must increment by 5.0. </li> <li>Minimum donation percentages may be required for eBay for Charity listings, see <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html"> Selling to benefit nonprofit organizations</a> for
     * details. </li> </ul> <b>DonationPercent</b> is required input when creating eBay for Charity listings.
     * - minOccurs: 0
     * @var float
     */
    public $DonationPercent;
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: A unique identification number assigned by the PayPal Giving Fund to registered nonprofit charity organizations. This field is required when creating eBay for Charity listings.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The Mission
     * Meta information extracted from the WSDL
     * - documentation: The stated mission of the nonprofit charity organization. This mission is displayed in the eBay for Charity listing.
     * - minOccurs: 0
     * @var string
     */
    public $Mission;
    /**
     * The LogoURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the nonprofit charity organization. This URL is displayed in the eBay for Charity listing.
     * - minOccurs: 0
     * @var string
     */
    public $LogoURL;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The status of the nonprofit charity organization.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The CharityListing
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, a percentage of item's purchase price will be donated to a nonprofit organization.
     * - minOccurs: 0
     * @var bool
     */
    public $CharityListing;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharityType
     * @uses CharityType::setCharityName()
     * @uses CharityType::setCharityNumber()
     * @uses CharityType::setDonationPercent()
     * @uses CharityType::setCharityID()
     * @uses CharityType::setMission()
     * @uses CharityType::setLogoURL()
     * @uses CharityType::setStatus()
     * @uses CharityType::setCharityListing()
     * @uses CharityType::setAny()
     * @param string $charityName
     * @param int $charityNumber
     * @param float $donationPercent
     * @param string $charityID
     * @param string $mission
     * @param string $logoURL
     * @param string $status
     * @param bool $charityListing
     * @param \DOMDocument $any
     */
    public function __construct($charityName = null, $charityNumber = null, $donationPercent = null, $charityID = null, $mission = null, $logoURL = null, $status = null, $charityListing = null, \DOMDocument $any = null)
    {
        $this
            ->setCharityName($charityName)
            ->setCharityNumber($charityNumber)
            ->setDonationPercent($donationPercent)
            ->setCharityID($charityID)
            ->setMission($mission)
            ->setLogoURL($logoURL)
            ->setStatus($status)
            ->setCharityListing($charityListing)
            ->setAny($any);
    }
    /**
     * Get CharityName value
     * @return string|null
     */
    public function getCharityName()
    {
        return $this->CharityName;
    }
    /**
     * Set CharityName value
     * @param string $charityName
     * @return \StructType\CharityType
     */
    public function setCharityName($charityName = null)
    {
        // validation for constraint: string
        if (!is_null($charityName) && !is_string($charityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityName, true), gettype($charityName)), __LINE__);
        }
        $this->CharityName = $charityName;
        return $this;
    }
    /**
     * Get CharityNumber value
     * @return int|null
     */
    public function getCharityNumber()
    {
        return $this->CharityNumber;
    }
    /**
     * Set CharityNumber value
     * @param int $charityNumber
     * @return \StructType\CharityType
     */
    public function setCharityNumber($charityNumber = null)
    {
        // validation for constraint: int
        if (!is_null($charityNumber) && !(is_int($charityNumber) || ctype_digit($charityNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($charityNumber, true), gettype($charityNumber)), __LINE__);
        }
        $this->CharityNumber = $charityNumber;
        return $this;
    }
    /**
     * Get DonationPercent value
     * @return float|null
     */
    public function getDonationPercent()
    {
        return $this->DonationPercent;
    }
    /**
     * Set DonationPercent value
     * @param float $donationPercent
     * @return \StructType\CharityType
     */
    public function setDonationPercent($donationPercent = null)
    {
        // validation for constraint: float
        if (!is_null($donationPercent) && !(is_float($donationPercent) || is_numeric($donationPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($donationPercent, true), gettype($donationPercent)), __LINE__);
        }
        $this->DonationPercent = $donationPercent;
        return $this;
    }
    /**
     * Get CharityID value
     * @return string|null
     */
    public function getCharityID()
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @param string $charityID
     * @return \StructType\CharityType
     */
    public function setCharityID($charityID = null)
    {
        // validation for constraint: string
        if (!is_null($charityID) && !is_string($charityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityID, true), gettype($charityID)), __LINE__);
        }
        $this->CharityID = $charityID;
        return $this;
    }
    /**
     * Get Mission value
     * @return string|null
     */
    public function getMission()
    {
        return $this->Mission;
    }
    /**
     * Set Mission value
     * @param string $mission
     * @return \StructType\CharityType
     */
    public function setMission($mission = null)
    {
        // validation for constraint: string
        if (!is_null($mission) && !is_string($mission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mission, true), gettype($mission)), __LINE__);
        }
        $this->Mission = $mission;
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL()
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \StructType\CharityType
     */
    public function setLogoURL($logoURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoURL, true), gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
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
     * @uses \EnumType\CharityStatusCodeType::valueIsValid()
     * @uses \EnumType\CharityStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\CharityType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CharityStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CharityStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\CharityStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get CharityListing value
     * @return bool|null
     */
    public function getCharityListing()
    {
        return $this->CharityListing;
    }
    /**
     * Set CharityListing value
     * @param bool $charityListing
     * @return \StructType\CharityType
     */
    public function setCharityListing($charityListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($charityListing) && !is_bool($charityListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($charityListing, true), gettype($charityListing)), __LINE__);
        }
        $this->CharityListing = $charityListing;
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
     * @return \StructType\CharityType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CharityType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
