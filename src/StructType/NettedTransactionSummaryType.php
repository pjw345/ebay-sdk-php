<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NettedTransactionSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>NettedTransactionSummary</b> container, which shows the total amount of fees (and credits if applicable) that have already been paid through seller payout deductions. <br> <br> <span
 * class="tablenote"><b>Note: </b> For a limited number of managed payments sellers, final value fees and payment processing fees will start getting deducted from seller payouts as early as mid-June 2020, but for many other managed payments sellers,
 * these fees won't start getting deducted from seller payouts until mid-July 2020. </span>
 * @subpackage Structs
 */
class NettedTransactionSummaryType extends AbstractStructBase
{
    /**
     * The TotalNettedChargeAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount in this field is the total amount of all charges/fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' fees in the <b>AccountEntries</b>
     * array. The corresponding <b>Netted</b> boolean field for each fee in <b>AccountEntries</b> array will show as <code>true</code> if the fee has already been deducted from a seller payout. <br> <br> This field is returned even if <code>0.0</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalNettedChargeAmount;
    /**
     * The TotalNettedCreditAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount in this field is the total amount of all credits for fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' credit in the
     * <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each credit in <b>AccountEntries</b> array will show as <code>true</code> if the credit is for a fee that has already been deducted from a seller payout. <br> <br> This
     * field is returned even if <code>0.0</code>.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalNettedCreditAmount;
    /**
     * Constructor method for NettedTransactionSummaryType
     * @uses NettedTransactionSummaryType::setTotalNettedChargeAmount()
     * @uses NettedTransactionSummaryType::setTotalNettedCreditAmount()
     * @param \StructType\AmountType $totalNettedChargeAmount
     * @param \StructType\AmountType $totalNettedCreditAmount
     */
    public function __construct(\StructType\AmountType $totalNettedChargeAmount = null, \StructType\AmountType $totalNettedCreditAmount = null)
    {
        $this
            ->setTotalNettedChargeAmount($totalNettedChargeAmount)
            ->setTotalNettedCreditAmount($totalNettedCreditAmount);
    }
    /**
     * Get TotalNettedChargeAmount value
     * @return \StructType\AmountType|null
     */
    public function getTotalNettedChargeAmount()
    {
        return $this->TotalNettedChargeAmount;
    }
    /**
     * Set TotalNettedChargeAmount value
     * @param \StructType\AmountType $totalNettedChargeAmount
     * @return \StructType\NettedTransactionSummaryType
     */
    public function setTotalNettedChargeAmount(\StructType\AmountType $totalNettedChargeAmount = null)
    {
        $this->TotalNettedChargeAmount = $totalNettedChargeAmount;
        return $this;
    }
    /**
     * Get TotalNettedCreditAmount value
     * @return \StructType\AmountType|null
     */
    public function getTotalNettedCreditAmount()
    {
        return $this->TotalNettedCreditAmount;
    }
    /**
     * Set TotalNettedCreditAmount value
     * @param \StructType\AmountType $totalNettedCreditAmount
     * @return \StructType\NettedTransactionSummaryType
     */
    public function setTotalNettedCreditAmount(\StructType\AmountType $totalNettedCreditAmount = null)
    {
        $this->TotalNettedCreditAmount = $totalNettedCreditAmount;
        return $this;
    }
}
