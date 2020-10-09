<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingDiscountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>CalculatedShippingDiscount</b> container, which is used in the <b>SetShippingDiscountProfiles</b> call to create one or more discounted calculated shipping rules. The <b>CalculatedShippingDiscount</b> container is
 * returned in the response of all other calls that use this type.
 * @subpackage Structs
 */
class CalculatedShippingDiscountType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountName;
    /**
     * The DiscountProfile
     * Meta information extracted from the WSDL
     * - documentation: This container provides details of this particular calculated shipping discount profile. <br><br> <b>For SetShippingDiscountProfiles</b>: If the <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified
     * version of the profile must be provided. If the <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no
     * longer applicable. <br><br> Restrictions on how many profiles can exist for a given discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DiscountProfileType[]
     */
    public $DiscountProfile;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CalculatedShippingDiscountType
     * @uses CalculatedShippingDiscountType::setDiscountName()
     * @uses CalculatedShippingDiscountType::setDiscountProfile()
     * @uses CalculatedShippingDiscountType::setAny()
     * @param string $discountName
     * @param \StructType\DiscountProfileType[] $discountProfile
     * @param \DOMDocument $any
     */
    public function __construct($discountName = null, array $discountProfile = array(), \DOMDocument $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setDiscountProfile($discountProfile)
            ->setAny($any);
    }
    /**
     * Get DiscountName value
     * @return string|null
     */
    public function getDiscountName()
    {
        return $this->DiscountName;
    }
    /**
     * Set DiscountName value
     * @uses \EnumType\DiscountNameCodeType::valueIsValid()
     * @uses \EnumType\DiscountNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountName
     * @return \StructType\CalculatedShippingDiscountType
     */
    public function setDiscountName($discountName = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DiscountNameCodeType::valueIsValid($discountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountNameCodeType', is_array($discountName) ? implode(', ', $discountName) : var_export($discountName, true), implode(', ', \EnumType\DiscountNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        return $this;
    }
    /**
     * Get DiscountProfile value
     * @return \StructType\DiscountProfileType[]|null
     */
    public function getDiscountProfile()
    {
        return $this->DiscountProfile;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountProfile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountProfileForArrayConstraintsFromSetDiscountProfile(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculatedShippingDiscountTypeDiscountProfileItem) {
            // validation for constraint: itemType
            if (!$calculatedShippingDiscountTypeDiscountProfileItem instanceof \StructType\DiscountProfileType) {
                $invalidValues[] = is_object($calculatedShippingDiscountTypeDiscountProfileItem) ? get_class($calculatedShippingDiscountTypeDiscountProfileItem) : sprintf('%s(%s)', gettype($calculatedShippingDiscountTypeDiscountProfileItem), var_export($calculatedShippingDiscountTypeDiscountProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountProfile property can only contain items of type \StructType\DiscountProfileType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DiscountProfile value
     * @throws \InvalidArgumentException
     * @param \StructType\DiscountProfileType[] $discountProfile
     * @return \StructType\CalculatedShippingDiscountType
     */
    public function setDiscountProfile(array $discountProfile = array())
    {
        // validation for constraint: array
        if ('' !== ($discountProfileArrayErrorMessage = self::validateDiscountProfileForArrayConstraintsFromSetDiscountProfile($discountProfile))) {
            throw new \InvalidArgumentException($discountProfileArrayErrorMessage, __LINE__);
        }
        $this->DiscountProfile = $discountProfile;
        return $this;
    }
    /**
     * Add item to DiscountProfile value
     * @throws \InvalidArgumentException
     * @param \StructType\DiscountProfileType $item
     * @return \StructType\CalculatedShippingDiscountType
     */
    public function addToDiscountProfile(\StructType\DiscountProfileType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DiscountProfileType) {
            throw new \InvalidArgumentException(sprintf('The DiscountProfile property can only contain items of type \StructType\DiscountProfileType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DiscountProfile[] = $item;
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
     * @return \StructType\CalculatedShippingDiscountType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
