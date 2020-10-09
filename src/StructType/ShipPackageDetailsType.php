<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipPackageDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details pertinent to one or more items for which calculated shipping (or flat rate shipping using shipping rate tables with weight surcharges) has been offered by the seller, such as package dimension and weight and
 * packaging/handling costs. <br/><br/> Also returned with the data for an item's transaction. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <strong>ShippingPackageDetails</strong> container should now be used instead of the
 * <strong>CalculatedShippingRate</strong> container to specify values for the <strong>MeasurementUnit</strong>, <strong>PackageDepth</strong>, <strong>PackageWidth</strong>, <strong>PackageLength</strong>, <strong>ShippingIrregular</strong>,
 * <strong>ShippingPackage</strong>, <strong>WeightMajor</strong>, and/or <strong>WeightMinor</strong> fields. The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the
 * <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. </span>
 * @subpackage Structs
 */
class ShipPackageDetailsType extends AbstractStructBase
{
    /**
     * The MeasurementUnit
     * Meta information extracted from the WSDL
     * - documentation: Specifies the unit type of the weight and dimensions of a shipping package. If <b>MeasurementUnit</b> is used, it overrides the system specified by measurementSystem. If <b>MeasurementUnit</b> and measurementSystem are not specified,
     * the following defaults will be used: <br><br> English: US<br> Metric: CA, CAFR, AU <br><br> CA and CAFR supports both English and Metric, while other sites only support the site's default. <br><br> Use <b>MeasurementUnit</b> with weight and package
     * dimensions. For example, to represent a 5 lbs 2 oz package: <br><br> <code> &lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt; <br> &lt;WeightMajor&gt;5&lt;/WeightMajor&gt; <br> &lt;WeightMinor&gt;2&lt;/WeightMinor&gt; </code>
     * - minOccurs: 0
     * @var string
     */
    public $MeasurementUnit;
    /**
     * The PackageDepth
     * Meta information extracted from the WSDL
     * - documentation: Depth of the package, in whole number of inches, needed to ship the item. This is validated against the selected shipping service. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for
     * service XXXXX," where XXXXX is the name of the shipping service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.) <br><br> <b>Developer
     * impact:</b> UPS requires dimensions for any Ground packages that are 3 cubic feet or larger and for all air packages, if they are to provide correct shipping cost. If package dimensions are not included for an item listed with calculated shipping,
     * the shipping cost returned will be an estimate based on standard dimensions for the defined package type. eBay enforces a dimensions requirement on listings so that buyers receive accurate calculated shipping costs.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $PackageDepth;
    /**
     * The PackageLength
     * Meta information extracted from the WSDL
     * - documentation: Length of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping
     * service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $PackageLength;
    /**
     * The PackageWidth
     * Meta information extracted from the WSDL
     * - documentation: Width of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping
     * service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $PackageWidth;
    /**
     * The ShippingIrregular
     * Meta information extracted from the WSDL
     * - documentation: Whether a package is irregular and therefore cannot go through the stamping machine at the shipping service office and thus requires special or fragile handling. For calculated shipping only.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIrregular;
    /**
     * The ShippingPackage
     * Meta information extracted from the WSDL
     * - documentation: The nature of the package used to ship the item(s). Required for calculated shipping only.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingPackage;
    /**
     * The WeightMajor
     * Meta information extracted from the WSDL
     * - documentation: <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a shipping package. <b>WeightMajor</b> is used to specify the weight of the package in pounds (in US) or kilograms (all countries that use metric system).
     * Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>. If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is
     * for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     * &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed 14 oz or 324 gr, below is how you would
     * represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="gr"&gt;324&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="oz"&gt;0&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt; </code> <br/><br/> In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be
     * specified in an Add/Revise/Relist/Verify call, even if either's value is '0'. <br><br> The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the
     * shipping rate table uses weight surcharges.
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $WeightMajor;
    /**
     * The WeightMinor
     * Meta information extracted from the WSDL
     * - documentation: <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a shipping package. <b>WeightMinor</b> is used to specify the weight of the package in ounces (in US) or grams (all countries that use metric system).
     * Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>. If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is
     * for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     * &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed 14 oz or 324 gr, below is how you would
     * represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="gr"&gt;324&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="oz"&gt;0&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt; </code> <br/><br/> In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be
     * specified in an Add/Revise/Relist/Verify call, even if either's value is '0'. <br><br> The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the
     * shipping rate table uses weight surcharges. <br/><br/>
     * - minOccurs: 0
     * @var \StructType\MeasureType
     */
    public $WeightMinor;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShipPackageDetailsType
     * @uses ShipPackageDetailsType::setMeasurementUnit()
     * @uses ShipPackageDetailsType::setPackageDepth()
     * @uses ShipPackageDetailsType::setPackageLength()
     * @uses ShipPackageDetailsType::setPackageWidth()
     * @uses ShipPackageDetailsType::setShippingIrregular()
     * @uses ShipPackageDetailsType::setShippingPackage()
     * @uses ShipPackageDetailsType::setWeightMajor()
     * @uses ShipPackageDetailsType::setWeightMinor()
     * @uses ShipPackageDetailsType::setAny()
     * @param string $measurementUnit
     * @param \StructType\MeasureType $packageDepth
     * @param \StructType\MeasureType $packageLength
     * @param \StructType\MeasureType $packageWidth
     * @param bool $shippingIrregular
     * @param string $shippingPackage
     * @param \StructType\MeasureType $weightMajor
     * @param \StructType\MeasureType $weightMinor
     * @param \DOMDocument $any
     */
    public function __construct($measurementUnit = null, \StructType\MeasureType $packageDepth = null, \StructType\MeasureType $packageLength = null, \StructType\MeasureType $packageWidth = null, $shippingIrregular = null, $shippingPackage = null, \StructType\MeasureType $weightMajor = null, \StructType\MeasureType $weightMinor = null, \DOMDocument $any = null)
    {
        $this
            ->setMeasurementUnit($measurementUnit)
            ->setPackageDepth($packageDepth)
            ->setPackageLength($packageLength)
            ->setPackageWidth($packageWidth)
            ->setShippingIrregular($shippingIrregular)
            ->setShippingPackage($shippingPackage)
            ->setWeightMajor($weightMajor)
            ->setWeightMinor($weightMinor)
            ->setAny($any);
    }
    /**
     * Get MeasurementUnit value
     * @return string|null
     */
    public function getMeasurementUnit()
    {
        return $this->MeasurementUnit;
    }
    /**
     * Set MeasurementUnit value
     * @uses \EnumType\MeasurementSystemCodeType::valueIsValid()
     * @uses \EnumType\MeasurementSystemCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $measurementUnit
     * @return \StructType\ShipPackageDetailsType
     */
    public function setMeasurementUnit($measurementUnit = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MeasurementSystemCodeType::valueIsValid($measurementUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MeasurementSystemCodeType', is_array($measurementUnit) ? implode(', ', $measurementUnit) : var_export($measurementUnit, true), implode(', ', \EnumType\MeasurementSystemCodeType::getValidValues())), __LINE__);
        }
        $this->MeasurementUnit = $measurementUnit;
        return $this;
    }
    /**
     * Get PackageDepth value
     * @return \StructType\MeasureType|null
     */
    public function getPackageDepth()
    {
        return $this->PackageDepth;
    }
    /**
     * Set PackageDepth value
     * @param \StructType\MeasureType $packageDepth
     * @return \StructType\ShipPackageDetailsType
     */
    public function setPackageDepth(\StructType\MeasureType $packageDepth = null)
    {
        $this->PackageDepth = $packageDepth;
        return $this;
    }
    /**
     * Get PackageLength value
     * @return \StructType\MeasureType|null
     */
    public function getPackageLength()
    {
        return $this->PackageLength;
    }
    /**
     * Set PackageLength value
     * @param \StructType\MeasureType $packageLength
     * @return \StructType\ShipPackageDetailsType
     */
    public function setPackageLength(\StructType\MeasureType $packageLength = null)
    {
        $this->PackageLength = $packageLength;
        return $this;
    }
    /**
     * Get PackageWidth value
     * @return \StructType\MeasureType|null
     */
    public function getPackageWidth()
    {
        return $this->PackageWidth;
    }
    /**
     * Set PackageWidth value
     * @param \StructType\MeasureType $packageWidth
     * @return \StructType\ShipPackageDetailsType
     */
    public function setPackageWidth(\StructType\MeasureType $packageWidth = null)
    {
        $this->PackageWidth = $packageWidth;
        return $this;
    }
    /**
     * Get ShippingIrregular value
     * @return bool|null
     */
    public function getShippingIrregular()
    {
        return $this->ShippingIrregular;
    }
    /**
     * Set ShippingIrregular value
     * @param bool $shippingIrregular
     * @return \StructType\ShipPackageDetailsType
     */
    public function setShippingIrregular($shippingIrregular = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingIrregular) && !is_bool($shippingIrregular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingIrregular, true), gettype($shippingIrregular)), __LINE__);
        }
        $this->ShippingIrregular = $shippingIrregular;
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string|null
     */
    public function getShippingPackage()
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingPackage
     * @return \StructType\ShipPackageDetailsType
     */
    public function setShippingPackage($shippingPackage = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingPackageCodeType::valueIsValid($shippingPackage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ShippingPackageCodeType', is_array($shippingPackage) ? implode(', ', $shippingPackage) : var_export($shippingPackage, true), implode(', ', \EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        return $this;
    }
    /**
     * Get WeightMajor value
     * @return \StructType\MeasureType|null
     */
    public function getWeightMajor()
    {
        return $this->WeightMajor;
    }
    /**
     * Set WeightMajor value
     * @param \StructType\MeasureType $weightMajor
     * @return \StructType\ShipPackageDetailsType
     */
    public function setWeightMajor(\StructType\MeasureType $weightMajor = null)
    {
        $this->WeightMajor = $weightMajor;
        return $this;
    }
    /**
     * Get WeightMinor value
     * @return \StructType\MeasureType|null
     */
    public function getWeightMinor()
    {
        return $this->WeightMinor;
    }
    /**
     * Set WeightMinor value
     * @param \StructType\MeasureType $weightMinor
     * @return \StructType\ShipPackageDetailsType
     */
    public function setWeightMinor(\StructType\MeasureType $weightMinor = null)
    {
        $this->WeightMinor = $weightMinor;
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
     * @return \StructType\ShipPackageDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
