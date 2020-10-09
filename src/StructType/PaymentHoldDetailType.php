<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentHoldDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>PaymentHoldDetails</b> container, which consists of information related to the payment hold on the order, including the reason why the buyer's payment for the order is being held, the expected release date of
 * the funds into the seller's account, and possible action(s) the seller can take to expedite the payout of funds into their account.
 * @subpackage Structs
 */
class PaymentHoldDetailType extends AbstractStructBase
{
    /**
     * The ExpectedReleaseDate
     * Meta information extracted from the WSDL
     * - documentation: Timestamp that indicates the expected date in which eBay/PayPal will distribute the funds to the seller's account. This is not a firm date and is subject to change. This field is only returned after checkout is complete and if the
     * <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
     * - minOccurs: 0
     * @var string
     */
    public $ExpectedReleaseDate;
    /**
     * The RequiredSellerActionArray
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more <b>RequiredSellerAction</b> fields. <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to expedite the release of funds into their account.
     * - minOccurs: 0
     * @var \ArrayType\RequiredSellerActionArrayType
     */
    public $RequiredSellerActionArray;
    /**
     * The NumOfReqSellerActions
     * Meta information extracted from the WSDL
     * - documentation: Integer value that indicates the number of possible actions that a seller can take to possibly expedite the release of funds into their account. This value should equal the number of <b>RequiredSellerAction</b> fields contained in
     * the <b>RequiredSellerActionArray</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $NumOfReqSellerActions;
    /**
     * The PaymentHoldReason
     * Meta information extracted from the WSDL
     * - documentation: Enumerated value that indicates why the buyer's payment for the order is being held by PayPal instead of being distributed to the seller's account. A seller's funds for an order can be held by PayPal for as little as three days after
     * the buyer receives the order, but the hold can be up to 21 days based on the scenario, and in some cases, the seller's lack of action in helping to expedite the release of funds.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentHoldReason;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentHoldDetailType
     * @uses PaymentHoldDetailType::setExpectedReleaseDate()
     * @uses PaymentHoldDetailType::setRequiredSellerActionArray()
     * @uses PaymentHoldDetailType::setNumOfReqSellerActions()
     * @uses PaymentHoldDetailType::setPaymentHoldReason()
     * @uses PaymentHoldDetailType::setAny()
     * @param string $expectedReleaseDate
     * @param \ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray
     * @param int $numOfReqSellerActions
     * @param string $paymentHoldReason
     * @param \DOMDocument $any
     */
    public function __construct($expectedReleaseDate = null, \ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray = null, $numOfReqSellerActions = null, $paymentHoldReason = null, \DOMDocument $any = null)
    {
        $this
            ->setExpectedReleaseDate($expectedReleaseDate)
            ->setRequiredSellerActionArray($requiredSellerActionArray)
            ->setNumOfReqSellerActions($numOfReqSellerActions)
            ->setPaymentHoldReason($paymentHoldReason)
            ->setAny($any);
    }
    /**
     * Get ExpectedReleaseDate value
     * @return string|null
     */
    public function getExpectedReleaseDate()
    {
        return $this->ExpectedReleaseDate;
    }
    /**
     * Set ExpectedReleaseDate value
     * @param string $expectedReleaseDate
     * @return \StructType\PaymentHoldDetailType
     */
    public function setExpectedReleaseDate($expectedReleaseDate = null)
    {
        // validation for constraint: string
        if (!is_null($expectedReleaseDate) && !is_string($expectedReleaseDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedReleaseDate, true), gettype($expectedReleaseDate)), __LINE__);
        }
        $this->ExpectedReleaseDate = $expectedReleaseDate;
        return $this;
    }
    /**
     * Get RequiredSellerActionArray value
     * @return \ArrayType\RequiredSellerActionArrayType|null
     */
    public function getRequiredSellerActionArray()
    {
        return $this->RequiredSellerActionArray;
    }
    /**
     * Set RequiredSellerActionArray value
     * @param \ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray
     * @return \StructType\PaymentHoldDetailType
     */
    public function setRequiredSellerActionArray(\ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray = null)
    {
        $this->RequiredSellerActionArray = $requiredSellerActionArray;
        return $this;
    }
    /**
     * Get NumOfReqSellerActions value
     * @return int|null
     */
    public function getNumOfReqSellerActions()
    {
        return $this->NumOfReqSellerActions;
    }
    /**
     * Set NumOfReqSellerActions value
     * @param int $numOfReqSellerActions
     * @return \StructType\PaymentHoldDetailType
     */
    public function setNumOfReqSellerActions($numOfReqSellerActions = null)
    {
        // validation for constraint: int
        if (!is_null($numOfReqSellerActions) && !(is_int($numOfReqSellerActions) || ctype_digit($numOfReqSellerActions))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOfReqSellerActions, true), gettype($numOfReqSellerActions)), __LINE__);
        }
        $this->NumOfReqSellerActions = $numOfReqSellerActions;
        return $this;
    }
    /**
     * Get PaymentHoldReason value
     * @return string|null
     */
    public function getPaymentHoldReason()
    {
        return $this->PaymentHoldReason;
    }
    /**
     * Set PaymentHoldReason value
     * @uses \EnumType\PaymentHoldReasonCodeType::valueIsValid()
     * @uses \EnumType\PaymentHoldReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentHoldReason
     * @return \StructType\PaymentHoldDetailType
     */
    public function setPaymentHoldReason($paymentHoldReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentHoldReasonCodeType::valueIsValid($paymentHoldReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentHoldReasonCodeType', is_array($paymentHoldReason) ? implode(', ', $paymentHoldReason) : var_export($paymentHoldReason, true), implode(', ', \EnumType\PaymentHoldReasonCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldReason = $paymentHoldReason;
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
     * @return \StructType\PaymentHoldDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
