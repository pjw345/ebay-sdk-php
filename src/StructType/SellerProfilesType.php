<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerProfilesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerProfiles</b> container, which consists of references to a seller's payment, shipping, and return policy profiles.
 * @subpackage Structs
 */
class SellerProfilesType extends AbstractStructBase
{
    /**
     * The SellerShippingProfile
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed
     * information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Muliple shipping business policies can be created and saved at the account
     * level by sellers, and it is possible to make one policy the default policy. <br/><br/> This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     * - minOccurs: 0
     * @var \StructType\SellerShippingProfileType
     */
    public $SellerShippingProfile;
    /**
     * The SellerReturnProfile
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return policy business policy. Return policy business policies contain detailed
     * information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return
     * the item for a refund, and who pays the return shipping costs. Muliple return policy business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy. <br/><br/> This container is
     * only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     * - minOccurs: 0
     * @var \StructType\SellerReturnProfileType
     */
    public $SellerReturnProfile;
    /**
     * The SellerPaymentProfile
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a payment business policy. Payment business policies contain accepted payment methods, a
     * flag to set up the immediate payment feature, a payment instructions field, and a field to specify the seller's PayPal email address. Muliple payment business policies can be created and saved at the account level by sellers, and it is possible to
     * make one policy the default policy. <br/><br/> This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing. <br> <br> <span
     * class="tablenote"><b>Note:</b> For sellers onboarded for eBay managed payments, payment methods do not need to be specified, and the PayPal email address is never relevant. The immediate payment boolean field is available to managed payments sellers
     * if they want to required immediate payment for 'Buy it Now' items. </span>
     * - minOccurs: 0
     * @var \StructType\SellerPaymentProfileType
     */
    public $SellerPaymentProfile;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerProfilesType
     * @uses SellerProfilesType::setSellerShippingProfile()
     * @uses SellerProfilesType::setSellerReturnProfile()
     * @uses SellerProfilesType::setSellerPaymentProfile()
     * @uses SellerProfilesType::setAny()
     * @param \StructType\SellerShippingProfileType $sellerShippingProfile
     * @param \StructType\SellerReturnProfileType $sellerReturnProfile
     * @param \StructType\SellerPaymentProfileType $sellerPaymentProfile
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\SellerShippingProfileType $sellerShippingProfile = null, \StructType\SellerReturnProfileType $sellerReturnProfile = null, \StructType\SellerPaymentProfileType $sellerPaymentProfile = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerShippingProfile($sellerShippingProfile)
            ->setSellerReturnProfile($sellerReturnProfile)
            ->setSellerPaymentProfile($sellerPaymentProfile)
            ->setAny($any);
    }
    /**
     * Get SellerShippingProfile value
     * @return \StructType\SellerShippingProfileType|null
     */
    public function getSellerShippingProfile()
    {
        return $this->SellerShippingProfile;
    }
    /**
     * Set SellerShippingProfile value
     * @param \StructType\SellerShippingProfileType $sellerShippingProfile
     * @return \StructType\SellerProfilesType
     */
    public function setSellerShippingProfile(\StructType\SellerShippingProfileType $sellerShippingProfile = null)
    {
        $this->SellerShippingProfile = $sellerShippingProfile;
        return $this;
    }
    /**
     * Get SellerReturnProfile value
     * @return \StructType\SellerReturnProfileType|null
     */
    public function getSellerReturnProfile()
    {
        return $this->SellerReturnProfile;
    }
    /**
     * Set SellerReturnProfile value
     * @param \StructType\SellerReturnProfileType $sellerReturnProfile
     * @return \StructType\SellerProfilesType
     */
    public function setSellerReturnProfile(\StructType\SellerReturnProfileType $sellerReturnProfile = null)
    {
        $this->SellerReturnProfile = $sellerReturnProfile;
        return $this;
    }
    /**
     * Get SellerPaymentProfile value
     * @return \StructType\SellerPaymentProfileType|null
     */
    public function getSellerPaymentProfile()
    {
        return $this->SellerPaymentProfile;
    }
    /**
     * Set SellerPaymentProfile value
     * @param \StructType\SellerPaymentProfileType $sellerPaymentProfile
     * @return \StructType\SellerProfilesType
     */
    public function setSellerPaymentProfile(\StructType\SellerPaymentProfileType $sellerPaymentProfile = null)
    {
        $this->SellerPaymentProfile = $sellerPaymentProfile;
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
     * @return \StructType\SellerProfilesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
