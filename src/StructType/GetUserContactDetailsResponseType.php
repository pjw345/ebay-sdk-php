<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserContactDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns contact information to a seller for both bidders and users who have made offers (via Best Offer) during an active listing.
 * @subpackage Structs
 */
class GetUserContactDetailsResponseType extends AbstractResponseType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: An eBay ID that uniquely identifies the given user whose information is given in the call response.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The ContactAddress
     * Meta information extracted from the WSDL
     * - documentation: Contact information for the requested contact. Note that the email address is NOT returned.
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $ContactAddress;
    /**
     * The RegistrationDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that the requested contact registered with eBay.
     * - minOccurs: 0
     * @var string
     */
    public $RegistrationDate;
    /**
     * Constructor method for GetUserContactDetailsResponseType
     * @uses GetUserContactDetailsResponseType::setUserID()
     * @uses GetUserContactDetailsResponseType::setContactAddress()
     * @uses GetUserContactDetailsResponseType::setRegistrationDate()
     * @param string $userID
     * @param \StructType\AddressType $contactAddress
     * @param string $registrationDate
     */
    public function __construct($userID = null, \StructType\AddressType $contactAddress = null, $registrationDate = null)
    {
        $this
            ->setUserID($userID)
            ->setContactAddress($contactAddress)
            ->setRegistrationDate($registrationDate);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\GetUserContactDetailsResponseType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get ContactAddress value
     * @return \StructType\AddressType|null
     */
    public function getContactAddress()
    {
        return $this->ContactAddress;
    }
    /**
     * Set ContactAddress value
     * @param \StructType\AddressType $contactAddress
     * @return \StructType\GetUserContactDetailsResponseType
     */
    public function setContactAddress(\StructType\AddressType $contactAddress = null)
    {
        $this->ContactAddress = $contactAddress;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \StructType\GetUserContactDetailsResponseType
     */
    public function setRegistrationDate($registrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationDate, true), gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
}
