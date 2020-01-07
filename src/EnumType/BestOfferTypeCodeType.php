<?php

namespace EnumType;

/**
 * This class stands for BestOfferTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible offer types for the Best Offer feature.
 * @subpackage Enumerations
 */
class BestOfferTypeCodeType
{
    /**
     * Constant for value 'BuyerBestOffer'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the offer is an original Best Offer made by a prospective buyer to the seller.
     * @return string 'BuyerBestOffer'
     */
    const VALUE_BUYER_BEST_OFFER = 'BuyerBestOffer';
    /**
     * Constant for value 'BuyerCounterOffer'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the offer is a prospective buyer's counter offer against the seller's counter offer.
     * @return string 'BuyerCounterOffer'
     */
    const VALUE_BUYER_COUNTER_OFFER = 'BuyerCounterOffer';
    /**
     * Constant for value 'SellerCounterOffer'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the offer is a seller's counter offer against the seller's original Best Offer.
     * @return string 'SellerCounterOffer'
     */
    const VALUE_SELLER_COUNTER_OFFER = 'SellerCounterOffer';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_BUYER_BEST_OFFER
     * @uses self::VALUE_BUYER_COUNTER_OFFER
     * @uses self::VALUE_SELLER_COUNTER_OFFER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYER_BEST_OFFER,
            self::VALUE_BUYER_COUNTER_OFFER,
            self::VALUE_SELLER_COUNTER_OFFER,
            self::VALUE_CUSTOM_CODE,
        );
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
