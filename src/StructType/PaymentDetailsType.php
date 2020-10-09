<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>PaymentDetails</b> container, which is used by the seller to specify amounts and due dates for deposits and full payment on motor vehicle listings.
 * @subpackage Structs
 */
class PaymentDetailsType extends AbstractStructBase
{
    /**
     * The HoursToDeposit
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of hours that a buyer has (after he/she commits to buy) to make a deposit to the seller as a down payment on a motor vehicle. <b>Valid values:</b> 24, 48 (default), and 72. <br/><br/> The
     * deposit amount is specified in the <b>DepositAmount</b> field. If not specified, the <b>DepositAmount</b> value defaults to 0.0, in which case, a deposit on the vehicle is not required. <br>
     * - minOccurs: 0
     * @var int
     */
    public $HoursToDeposit;
    /**
     * The DaysToFullPayment
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of days that a buyer has (after he/she commits to buy) to make full payment to the seller and close the remaining balance on a motor vehicle. <b>Valid values:</b> 3, 7 (default), 10, and 14.
     * <br/><br/> In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>PaymentMethods</b> values must be specified for the listing: <ul> <li>CashInPerson</li> <li>LoanCheck</li> <li>MOCC (money order or
     * cashier's check)</li> <li><b>PaymentSeeDescription</b> (indicates to prospective buyers that payment instructions are in the item's description</li> <li>PersonalCheck</li> </ul>
     * - minOccurs: 0
     * @var int
     */
    public $DaysToFullPayment;
    /**
     * The DepositAmount
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the amount of the deposit that a buyer must make on a purchased motor vehicle (eBay Motors US and CA). The deposit amount can be as high as $2,000.00. <br/><br/> If not specified, this value defaults to
     * '0.0'. If the seller is requiring that the buyer put down a deposit on the vehicle, the seller must include and set the <b>DepositType</b> field to <code>OtherMethod</code> and specify an <b>HoursToDeposit</b> value. If specified, then also specify
     * <b>HoursToDeposit</b> <br> <br> Deposits can only be paid using PayPal, so if <b>DepositAmount</b> is specified (and not '0.0'), then the listing must offer 'PayPal' as a payment method (in addition to the payment methods offered for the full
     * payment). Unlike other listings, PayPal is not automatically added to a Motors listing even if the seller has a PayPal preference set in My eBay. The seller also needs to have a linked PayPal account in order to require a deposit.<br> <br> The
     * deposit amount appears in the shipping, payment details and return policy section of the View Item page.<br> <br> <b>For ReviseItem and related calls</b>: If the listing has no bids, the seller can add or lower a deposit; and they can increase the
     * deposit if the listing doesn't require Immediate Payment. The seller can also remove the Immediate Payment option (if any). If the listing has bids, the seller can only lower an existing deposit; but not add or increase a deposit. The seller can't
     * remove Immediate Payment when a listing with a deposit has bids. <br>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $DepositAmount;
    /**
     * The DepositType
     * Meta information extracted from the WSDL
     * - documentation: This field applies to eBay Motors (US and CA) vehicles listings. If the seller is requiring that the buyer make a deposit on the vehicle, the <b>DepositType</b> value must be included and set to <code>OtherMethod</code>. Otherwise,
     * specify <code>None</code> (or don't pass in <b>DepositType</b>).
     * - minOccurs: 0
     * @var string
     */
    public $DepositType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentDetailsType
     * @uses PaymentDetailsType::setHoursToDeposit()
     * @uses PaymentDetailsType::setDaysToFullPayment()
     * @uses PaymentDetailsType::setDepositAmount()
     * @uses PaymentDetailsType::setDepositType()
     * @uses PaymentDetailsType::setAny()
     * @param int $hoursToDeposit
     * @param int $daysToFullPayment
     * @param \StructType\AmountType $depositAmount
     * @param string $depositType
     * @param \DOMDocument $any
     */
    public function __construct($hoursToDeposit = null, $daysToFullPayment = null, \StructType\AmountType $depositAmount = null, $depositType = null, \DOMDocument $any = null)
    {
        $this
            ->setHoursToDeposit($hoursToDeposit)
            ->setDaysToFullPayment($daysToFullPayment)
            ->setDepositAmount($depositAmount)
            ->setDepositType($depositType)
            ->setAny($any);
    }
    /**
     * Get HoursToDeposit value
     * @return int|null
     */
    public function getHoursToDeposit()
    {
        return $this->HoursToDeposit;
    }
    /**
     * Set HoursToDeposit value
     * @param int $hoursToDeposit
     * @return \StructType\PaymentDetailsType
     */
    public function setHoursToDeposit($hoursToDeposit = null)
    {
        // validation for constraint: int
        if (!is_null($hoursToDeposit) && !(is_int($hoursToDeposit) || ctype_digit($hoursToDeposit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hoursToDeposit, true), gettype($hoursToDeposit)), __LINE__);
        }
        $this->HoursToDeposit = $hoursToDeposit;
        return $this;
    }
    /**
     * Get DaysToFullPayment value
     * @return int|null
     */
    public function getDaysToFullPayment()
    {
        return $this->DaysToFullPayment;
    }
    /**
     * Set DaysToFullPayment value
     * @param int $daysToFullPayment
     * @return \StructType\PaymentDetailsType
     */
    public function setDaysToFullPayment($daysToFullPayment = null)
    {
        // validation for constraint: int
        if (!is_null($daysToFullPayment) && !(is_int($daysToFullPayment) || ctype_digit($daysToFullPayment))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysToFullPayment, true), gettype($daysToFullPayment)), __LINE__);
        }
        $this->DaysToFullPayment = $daysToFullPayment;
        return $this;
    }
    /**
     * Get DepositAmount value
     * @return \StructType\AmountType|null
     */
    public function getDepositAmount()
    {
        return $this->DepositAmount;
    }
    /**
     * Set DepositAmount value
     * @param \StructType\AmountType $depositAmount
     * @return \StructType\PaymentDetailsType
     */
    public function setDepositAmount(\StructType\AmountType $depositAmount = null)
    {
        $this->DepositAmount = $depositAmount;
        return $this;
    }
    /**
     * Get DepositType value
     * @return string|null
     */
    public function getDepositType()
    {
        return $this->DepositType;
    }
    /**
     * Set DepositType value
     * @uses \EnumType\DepositTypeCodeType::valueIsValid()
     * @uses \EnumType\DepositTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $depositType
     * @return \StructType\PaymentDetailsType
     */
    public function setDepositType($depositType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DepositTypeCodeType::valueIsValid($depositType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DepositTypeCodeType', is_array($depositType) ? implode(', ', $depositType) : var_export($depositType, true), implode(', ', \EnumType\DepositTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DepositType = $depositType;
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
     * @return \StructType\PaymentDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
