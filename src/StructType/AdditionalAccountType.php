<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalAccountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for one additional account. An additional account is created when the user has an active account and changes country of registry (i.e., registers with the eBay site for the new country). A new account is created and
 * the old account becomes inactive as an additional account. A user who never changes country of residency while having an account will never have any additional accounts.
 * @subpackage Structs
 */
class AdditionalAccountType extends AbstractStructBase
{
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current balance of the additional account.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Balance;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Indicates the currency in which monetary amounts for the additional account are expressed.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - documentation: Indicates the unique identifier for the additional account (the account ID).
     * - minOccurs: 0
     * @var string
     */
    public $AccountCode;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AdditionalAccountType
     * @uses AdditionalAccountType::setBalance()
     * @uses AdditionalAccountType::setCurrency()
     * @uses AdditionalAccountType::setAccountCode()
     * @uses AdditionalAccountType::setAny()
     * @param \StructType\AmountType $balance
     * @param string $currency
     * @param string $accountCode
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $balance = null, $currency = null, $accountCode = null, \DOMDocument $any = null)
    {
        $this
            ->setBalance($balance)
            ->setCurrency($currency)
            ->setAccountCode($accountCode)
            ->setAny($any);
    }
    /**
     * Get Balance value
     * @return \StructType\AmountType|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \StructType\AmountType $balance
     * @return \StructType\AdditionalAccountType
     */
    public function setBalance(\StructType\AmountType $balance = null)
    {
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \EnumType\CurrencyCodeType::valueIsValid()
     * @uses \EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \StructType\AdditionalAccountType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CurrencyCodeType', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \StructType\AdditionalAccountType
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
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
     * @return \StructType\AdditionalAccountType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
