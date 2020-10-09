<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ReportItem</b> container. A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property
 * rights.
 * @subpackage Structs
 */
class VeROReportItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for the listing being reported for the alleged infringement, which is specified in the <b>VeROReasonCodeID</b> field. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The VeROReasonCodeID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for the type of claimed infringement. The <b>GetVeROReasonCodeDetails</b> call can be used to retrieve a list of reason codes for a given eBay site.
     * - minOccurs: 0
     * @var int
     */
    public $VeROReasonCodeID;
    /**
     * The MessageToSeller
     * Meta information extracted from the WSDL
     * - documentation: This field is used by the VeRO Program member to provide more details to the seller about why the item is being reported as violating copyright, trademark, or intellectual property rights.
     * - minOccurs: 0
     * @var string
     */
    public $MessageToSeller;
    /**
     * The CopyEmailToRightsOwner
     * Meta information extracted from the WSDL
     * - documentation: If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically
     * sent to the seller of the reported item.
     * - minOccurs: 0
     * @var bool
     */
    public $CopyEmailToRightsOwner;
    /**
     * The Region
     * Meta information extracted from the WSDL
     * - documentation: If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own
     * <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Region;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field.
     * Supported values for <b>Country</b> are found in <b>CountryCodeType</b>. <br><br> This field is required when the <b>VeROReasonCodeID</b> is 9037 (Item(s) is unlawful importation of product bearing trademark).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Country;
    /**
     * The Patent
     * Meta information extracted from the WSDL
     * - documentation: This string field is used to specify the number of a product patent that is being violated. <br><br> This field is required when the <b>VeROReasonCodeID</b> is 9048 (Item(s) infringes a valid patent).
     * - minOccurs: 0
     * @var string
     */
    public $Patent;
    /**
     * The DetailedMessage
     * Meta information extracted from the WSDL
     * - documentation: Explanatory text from the VeRO Program member. This field is conditionally required when the <b>VeROReasonCodeID</b> is <code>Others</code>. Note that there is a 1000-character restriction on this text field when the items are being
     * reported with the <code>Others</code> reason code.
     * - minOccurs: 0
     * @var string
     */
    public $DetailedMessage;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VeROReportItemType
     * @uses VeROReportItemType::setItemID()
     * @uses VeROReportItemType::setVeROReasonCodeID()
     * @uses VeROReportItemType::setMessageToSeller()
     * @uses VeROReportItemType::setCopyEmailToRightsOwner()
     * @uses VeROReportItemType::setRegion()
     * @uses VeROReportItemType::setCountry()
     * @uses VeROReportItemType::setPatent()
     * @uses VeROReportItemType::setDetailedMessage()
     * @uses VeROReportItemType::setAny()
     * @param string $itemID
     * @param int $veROReasonCodeID
     * @param string $messageToSeller
     * @param bool $copyEmailToRightsOwner
     * @param string[] $region
     * @param string[] $country
     * @param string $patent
     * @param string $detailedMessage
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $veROReasonCodeID = null, $messageToSeller = null, $copyEmailToRightsOwner = null, array $region = array(), array $country = array(), $patent = null, $detailedMessage = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setVeROReasonCodeID($veROReasonCodeID)
            ->setMessageToSeller($messageToSeller)
            ->setCopyEmailToRightsOwner($copyEmailToRightsOwner)
            ->setRegion($region)
            ->setCountry($country)
            ->setPatent($patent)
            ->setDetailedMessage($detailedMessage)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\VeROReportItemType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get VeROReasonCodeID value
     * @return int|null
     */
    public function getVeROReasonCodeID()
    {
        return $this->VeROReasonCodeID;
    }
    /**
     * Set VeROReasonCodeID value
     * @param int $veROReasonCodeID
     * @return \StructType\VeROReportItemType
     */
    public function setVeROReasonCodeID($veROReasonCodeID = null)
    {
        // validation for constraint: int
        if (!is_null($veROReasonCodeID) && !(is_int($veROReasonCodeID) || ctype_digit($veROReasonCodeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($veROReasonCodeID, true), gettype($veROReasonCodeID)), __LINE__);
        }
        $this->VeROReasonCodeID = $veROReasonCodeID;
        return $this;
    }
    /**
     * Get MessageToSeller value
     * @return string|null
     */
    public function getMessageToSeller()
    {
        return $this->MessageToSeller;
    }
    /**
     * Set MessageToSeller value
     * @param string $messageToSeller
     * @return \StructType\VeROReportItemType
     */
    public function setMessageToSeller($messageToSeller = null)
    {
        // validation for constraint: string
        if (!is_null($messageToSeller) && !is_string($messageToSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageToSeller, true), gettype($messageToSeller)), __LINE__);
        }
        $this->MessageToSeller = $messageToSeller;
        return $this;
    }
    /**
     * Get CopyEmailToRightsOwner value
     * @return bool|null
     */
    public function getCopyEmailToRightsOwner()
    {
        return $this->CopyEmailToRightsOwner;
    }
    /**
     * Set CopyEmailToRightsOwner value
     * @param bool $copyEmailToRightsOwner
     * @return \StructType\VeROReportItemType
     */
    public function setCopyEmailToRightsOwner($copyEmailToRightsOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($copyEmailToRightsOwner) && !is_bool($copyEmailToRightsOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($copyEmailToRightsOwner, true), gettype($copyEmailToRightsOwner)), __LINE__);
        }
        $this->CopyEmailToRightsOwner = $copyEmailToRightsOwner;
        return $this;
    }
    /**
     * Get Region value
     * @return string[]|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * This method is responsible for validating the values passed to the setRegion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegionForArrayConstraintsFromSetRegion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROReportItemTypeRegionItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ShippingRegionCodeType::valueIsValid($veROReportItemTypeRegionItem)) {
                $invalidValues[] = is_object($veROReportItemTypeRegionItem) ? get_class($veROReportItemTypeRegionItem) : sprintf('%s(%s)', gettype($veROReportItemTypeRegionItem), var_export($veROReportItemTypeRegionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingRegionCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ShippingRegionCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Region value
     * @uses \EnumType\ShippingRegionCodeType::valueIsValid()
     * @uses \EnumType\ShippingRegionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $region
     * @return \StructType\VeROReportItemType
     */
    public function setRegion(array $region = array())
    {
        // validation for constraint: array
        if ('' !== ($regionArrayErrorMessage = self::validateRegionForArrayConstraintsFromSetRegion($region))) {
            throw new \InvalidArgumentException($regionArrayErrorMessage, __LINE__);
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Add item to Region value
     * @uses \EnumType\ShippingRegionCodeType::valueIsValid()
     * @uses \EnumType\ShippingRegionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\VeROReportItemType
     */
    public function addToRegion($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingRegionCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingRegionCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ShippingRegionCodeType::getValidValues())), __LINE__);
        }
        $this->Region[] = $item;
        return $this;
    }
    /**
     * Get Country value
     * @return string[]|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * This method is responsible for validating the values passed to the setCountry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryForArrayConstraintsFromSetCountry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROReportItemTypeCountryItem) {
            // validation for constraint: enumeration
            if (!\EnumType\CountryCodeType::valueIsValid($veROReportItemTypeCountryItem)) {
                $invalidValues[] = is_object($veROReportItemTypeCountryItem) ? get_class($veROReportItemTypeCountryItem) : sprintf('%s(%s)', gettype($veROReportItemTypeCountryItem), var_export($veROReportItemTypeCountryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CountryCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\CountryCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Country value
     * @uses \EnumType\CountryCodeType::valueIsValid()
     * @uses \EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $country
     * @return \StructType\VeROReportItemType
     */
    public function setCountry(array $country = array())
    {
        // validation for constraint: array
        if ('' !== ($countryArrayErrorMessage = self::validateCountryForArrayConstraintsFromSetCountry($country))) {
            throw new \InvalidArgumentException($countryArrayErrorMessage, __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Add item to Country value
     * @uses \EnumType\CountryCodeType::valueIsValid()
     * @uses \EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\VeROReportItemType
     */
    public function addToCountry($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CountryCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CountryCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country[] = $item;
        return $this;
    }
    /**
     * Get Patent value
     * @return string|null
     */
    public function getPatent()
    {
        return $this->Patent;
    }
    /**
     * Set Patent value
     * @param string $patent
     * @return \StructType\VeROReportItemType
     */
    public function setPatent($patent = null)
    {
        // validation for constraint: string
        if (!is_null($patent) && !is_string($patent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($patent, true), gettype($patent)), __LINE__);
        }
        $this->Patent = $patent;
        return $this;
    }
    /**
     * Get DetailedMessage value
     * @return string|null
     */
    public function getDetailedMessage()
    {
        return $this->DetailedMessage;
    }
    /**
     * Set DetailedMessage value
     * @param string $detailedMessage
     * @return \StructType\VeROReportItemType
     */
    public function setDetailedMessage($detailedMessage = null)
    {
        // validation for constraint: string
        if (!is_null($detailedMessage) && !is_string($detailedMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailedMessage, true), gettype($detailedMessage)), __LINE__);
        }
        $this->DetailedMessage = $detailedMessage;
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
     * @return \StructType\VeROReportItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
