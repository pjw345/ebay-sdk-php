<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReturnProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a return policy business policy. Return policy business policies contain detailed information on the
 * seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a
 * refund, and who pays the return shipping costs.
 * @subpackage Structs
 */
class SellerReturnProfileType extends AbstractStructBase
{
    /**
     * The ReturnProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a
     * return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> Return policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account
     * API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay. <br/><br/> In the 'Get' calls, the <b>ReturnProfileID</b>
     * value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business
     * policy.
     * - minOccurs: 0
     * @var int
     */
    public $ReturnProfileID;
    /**
     * The ReturnProfileName
     * Meta information extracted from the WSDL
     * - documentation: The name of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy
     * business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the
     * listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnProfileName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerReturnProfileType
     * @uses SellerReturnProfileType::setReturnProfileID()
     * @uses SellerReturnProfileType::setReturnProfileName()
     * @uses SellerReturnProfileType::setAny()
     * @param int $returnProfileID
     * @param string $returnProfileName
     * @param \DOMDocument $any
     */
    public function __construct($returnProfileID = null, $returnProfileName = null, \DOMDocument $any = null)
    {
        $this
            ->setReturnProfileID($returnProfileID)
            ->setReturnProfileName($returnProfileName)
            ->setAny($any);
    }
    /**
     * Get ReturnProfileID value
     * @return int|null
     */
    public function getReturnProfileID()
    {
        return $this->ReturnProfileID;
    }
    /**
     * Set ReturnProfileID value
     * @param int $returnProfileID
     * @return \StructType\SellerReturnProfileType
     */
    public function setReturnProfileID($returnProfileID = null)
    {
        // validation for constraint: int
        if (!is_null($returnProfileID) && !(is_int($returnProfileID) || ctype_digit($returnProfileID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnProfileID, true), gettype($returnProfileID)), __LINE__);
        }
        $this->ReturnProfileID = $returnProfileID;
        return $this;
    }
    /**
     * Get ReturnProfileName value
     * @return string|null
     */
    public function getReturnProfileName()
    {
        return $this->ReturnProfileName;
    }
    /**
     * Set ReturnProfileName value
     * @param string $returnProfileName
     * @return \StructType\SellerReturnProfileType
     */
    public function setReturnProfileName($returnProfileName = null)
    {
        // validation for constraint: string
        if (!is_null($returnProfileName) && !is_string($returnProfileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnProfileName, true), gettype($returnProfileName)), __LINE__);
        }
        $this->ReturnProfileName = $returnProfileName;
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
     * @return \StructType\SellerReturnProfileType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
