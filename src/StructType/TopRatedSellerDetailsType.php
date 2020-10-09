<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TopRatedSellerDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for Top-Rated Seller program information.
 * @subpackage Structs
 */
class TopRatedSellerDetailsType extends AbstractStructBase
{
    /**
     * The TopRatedProgram
     * Meta information extracted from the WSDL
     * - documentation: A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $TopRatedProgram;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TopRatedSellerDetailsType
     * @uses TopRatedSellerDetailsType::setTopRatedProgram()
     * @uses TopRatedSellerDetailsType::setAny()
     * @param string[] $topRatedProgram
     * @param \DOMDocument $any
     */
    public function __construct(array $topRatedProgram = array(), \DOMDocument $any = null)
    {
        $this
            ->setTopRatedProgram($topRatedProgram)
            ->setAny($any);
    }
    /**
     * Get TopRatedProgram value
     * @return string[]|null
     */
    public function getTopRatedProgram()
    {
        return $this->TopRatedProgram;
    }
    /**
     * This method is responsible for validating the values passed to the setTopRatedProgram method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTopRatedProgram method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTopRatedProgramForArrayConstraintsFromSetTopRatedProgram(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $topRatedSellerDetailsTypeTopRatedProgramItem) {
            // validation for constraint: enumeration
            if (!\EnumType\TopRatedProgramCodeType::valueIsValid($topRatedSellerDetailsTypeTopRatedProgramItem)) {
                $invalidValues[] = is_object($topRatedSellerDetailsTypeTopRatedProgramItem) ? get_class($topRatedSellerDetailsTypeTopRatedProgramItem) : sprintf('%s(%s)', gettype($topRatedSellerDetailsTypeTopRatedProgramItem), var_export($topRatedSellerDetailsTypeTopRatedProgramItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TopRatedProgramCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\TopRatedProgramCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TopRatedProgram value
     * @uses \EnumType\TopRatedProgramCodeType::valueIsValid()
     * @uses \EnumType\TopRatedProgramCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $topRatedProgram
     * @return \StructType\TopRatedSellerDetailsType
     */
    public function setTopRatedProgram(array $topRatedProgram = array())
    {
        // validation for constraint: array
        if ('' !== ($topRatedProgramArrayErrorMessage = self::validateTopRatedProgramForArrayConstraintsFromSetTopRatedProgram($topRatedProgram))) {
            throw new \InvalidArgumentException($topRatedProgramArrayErrorMessage, __LINE__);
        }
        $this->TopRatedProgram = $topRatedProgram;
        return $this;
    }
    /**
     * Add item to TopRatedProgram value
     * @uses \EnumType\TopRatedProgramCodeType::valueIsValid()
     * @uses \EnumType\TopRatedProgramCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\TopRatedSellerDetailsType
     */
    public function addToTopRatedProgram($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TopRatedProgramCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TopRatedProgramCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\TopRatedProgramCodeType::getValidValues())), __LINE__);
        }
        $this->TopRatedProgram[] = $item;
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
     * @return \StructType\TopRatedSellerDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
