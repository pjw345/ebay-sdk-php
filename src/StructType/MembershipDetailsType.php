<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MembershipDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>Membership</b> container that is returned in the response of the <b>GetUser</b> call if the seller is enrolled in one or more eBay membership programs such as eBay Plus. <br/><br/> <span
 * class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces in the near future. </span>
 * @subpackage Structs
 */
class MembershipDetailsType extends AbstractStructBase
{
    /**
     * The Program
     * Meta information extracted from the WSDL
     * - documentation: A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership
     * expiration date.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MembershipDetailType[]
     */
    public $Program;
    /**
     * Constructor method for MembershipDetailsType
     * @uses MembershipDetailsType::setProgram()
     * @param \StructType\MembershipDetailType[] $program
     */
    public function __construct(array $program = array())
    {
        $this
            ->setProgram($program);
    }
    /**
     * Get Program value
     * @return \StructType\MembershipDetailType[]|null
     */
    public function getProgram()
    {
        return $this->Program;
    }
    /**
     * This method is responsible for validating the values passed to the setProgram method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProgram method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProgramForArrayConstraintsFromSetProgram(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $membershipDetailsTypeProgramItem) {
            // validation for constraint: itemType
            if (!$membershipDetailsTypeProgramItem instanceof \StructType\MembershipDetailType) {
                $invalidValues[] = is_object($membershipDetailsTypeProgramItem) ? get_class($membershipDetailsTypeProgramItem) : sprintf('%s(%s)', gettype($membershipDetailsTypeProgramItem), var_export($membershipDetailsTypeProgramItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Program property can only contain items of type \StructType\MembershipDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Program value
     * @throws \InvalidArgumentException
     * @param \StructType\MembershipDetailType[] $program
     * @return \StructType\MembershipDetailsType
     */
    public function setProgram(array $program = array())
    {
        // validation for constraint: array
        if ('' !== ($programArrayErrorMessage = self::validateProgramForArrayConstraintsFromSetProgram($program))) {
            throw new \InvalidArgumentException($programArrayErrorMessage, __LINE__);
        }
        $this->Program = $program;
        return $this;
    }
    /**
     * Add item to Program value
     * @throws \InvalidArgumentException
     * @param \StructType\MembershipDetailType $item
     * @return \StructType\MembershipDetailsType
     */
    public function addToProgram(\StructType\MembershipDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MembershipDetailType) {
            throw new \InvalidArgumentException(sprintf('The Program property can only contain items of type \StructType\MembershipDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Program[] = $item;
        return $this;
    }
}
