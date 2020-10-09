<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerDashboardResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>GetSellerDashboard</b> call. This call retrieves seller performance data, including seller standards level, Power Seller status, Buyer Satisfaction status, eBay Search standing, and any seller fee
 * discounts.
 * @subpackage Structs
 */
class GetSellerDashboardResponseType extends AbstractResponseType
{
    /**
     * The SearchStanding
     * Meta information extracted from the WSDL
     * - documentation: Provides information about the visibility level you have earned for your listings. The higher your search standing rating, the higher your items will be placed in search results sorted by Best Match. Because your search standing
     * rating is directly tied to your customer service record, this rating is an important way that eBay rewards you as a good seller--it encourages you to give buyers the best possible shopping experience. <br><br> This field is returned <b>only</b> for
     * the following sites. <br><br> <table> <tr> <th>Site</th> <th>Id</th> </tr> <tr> <td>AU</td> <td>15</td> </tr> <tr> <td>BEFR</td> <td>23</td> </tr> <tr> <td>BENL</td> <td>123</td> </tr> <tr> <td>CA</td> <td>2</td> </tr> <tr> <td>ES</td> <td>186</td>
     * </tr> <tr> <td>FR</td> <td>71</td> </tr> <tr> <td>IN</td> <td>203</td> </tr> <tr> <td>IT</td> <td>101</td> </tr> <tr> <td>MOTORS</td> <td>100</td> </tr> <tr> <td>NL</td> <td>146</td> </tr> <tr> <td>PL</td> <td>212</td> </tr> </table>
     * - minOccurs: 0
     * @var \StructType\SearchStandingDashboardType
     */
    public $SearchStanding;
    /**
     * The SellerFeeDiscount
     * Meta information extracted from the WSDL
     * - documentation: This container provides the percentage discount that the seller is eligible to receive on the Final Value Fee for each order line item. Top-Rated Sellers may be eligible for Final Value Fee discounts if their listings meet all
     * requirements for the discount. <br><br> This container is still returned even if the seller is not receiving a Final Value Fee discount (returned as <code>0.0</code>)
     * - minOccurs: 0
     * @var \StructType\SellerFeeDiscountDashboardType
     */
    public $SellerFeeDiscount;
    /**
     * The PowerSellerStatus
     * Meta information extracted from the WSDL
     * - documentation: This container provides the seller's PowerSeller status, as well as any informational alerts related to the seller's PowerSeller status. If the seller has not achieved Power Seller status, a value of <code>None</code> will be
     * returned in the <b>PowerSellerStatus.Level</b> field. A <b>PowerSellerStatus.Alert</b> container will only be returned if there is an alert/message related to the seller's PowerSeller status. <br><br> For eBay Germany and France, you must be a
     * registered business seller to see your Power Seller status.
     * - minOccurs: 0
     * @var \StructType\PowerSellerDashboardType
     */
    public $PowerSellerStatus;
    /**
     * The PolicyCompliance
     * Meta information extracted from the WSDL
     * - documentation: This container is no longer returned in <b>GetSellerDashboard</b>.
     * - minOccurs: 0
     * @var \StructType\PolicyComplianceDashboardType
     */
    public $PolicyCompliance;
    /**
     * The BuyerSatisfaction
     * Meta information extracted from the WSDL
     * - documentation: This container provides the seller's Buyer Satisfaction status, as well as any informational alerts related to the seller's Buyer Satisfaction status. A <b>BuyerSatisfaction.Alert</b> container will only be returned if there is an
     * alert/message related to the seller's Buyer Satisfaction status. <br><br> This field is not returned for all sites.
     * - minOccurs: 0
     * @var \StructType\BuyerSatisfactionDashboardType
     */
    public $BuyerSatisfaction;
    /**
     * The SellerAccount
     * Meta information extracted from the WSDL
     * - documentation: This container provides the seller's account status, as well as any informational alerts related to the seller's account status. A seller's account status can either be 'current' (all selling fees paid), 'past due' (seller is late
     * paying selling fees), or 'on hold' (seller will be blocked from listing and is in danger of being suspended until selling fees are brought current). A <b>SellerAccount.Alert</b> container will only be returned if there is an alert/message related to
     * the seller's account status.
     * - minOccurs: 0
     * @var \StructType\SellerAccountDashboardType
     */
    public $SellerAccount;
    /**
     * The Performance
     * Meta information extracted from the WSDL
     * - documentation: This container provides the seller's performance level, as well as any informational alerts related to the seller's performance level. A <b>Performance.Alert</b> container will only be returned if there is an alert/message related to
     * the seller's performance level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PerformanceDashboardType[]
     */
    public $Performance;
    /**
     * Constructor method for GetSellerDashboardResponseType
     * @uses GetSellerDashboardResponseType::setSearchStanding()
     * @uses GetSellerDashboardResponseType::setSellerFeeDiscount()
     * @uses GetSellerDashboardResponseType::setPowerSellerStatus()
     * @uses GetSellerDashboardResponseType::setPolicyCompliance()
     * @uses GetSellerDashboardResponseType::setBuyerSatisfaction()
     * @uses GetSellerDashboardResponseType::setSellerAccount()
     * @uses GetSellerDashboardResponseType::setPerformance()
     * @param \StructType\SearchStandingDashboardType $searchStanding
     * @param \StructType\SellerFeeDiscountDashboardType $sellerFeeDiscount
     * @param \StructType\PowerSellerDashboardType $powerSellerStatus
     * @param \StructType\PolicyComplianceDashboardType $policyCompliance
     * @param \StructType\BuyerSatisfactionDashboardType $buyerSatisfaction
     * @param \StructType\SellerAccountDashboardType $sellerAccount
     * @param \StructType\PerformanceDashboardType[] $performance
     */
    public function __construct(\StructType\SearchStandingDashboardType $searchStanding = null, \StructType\SellerFeeDiscountDashboardType $sellerFeeDiscount = null, \StructType\PowerSellerDashboardType $powerSellerStatus = null, \StructType\PolicyComplianceDashboardType $policyCompliance = null, \StructType\BuyerSatisfactionDashboardType $buyerSatisfaction = null, \StructType\SellerAccountDashboardType $sellerAccount = null, array $performance = array())
    {
        $this
            ->setSearchStanding($searchStanding)
            ->setSellerFeeDiscount($sellerFeeDiscount)
            ->setPowerSellerStatus($powerSellerStatus)
            ->setPolicyCompliance($policyCompliance)
            ->setBuyerSatisfaction($buyerSatisfaction)
            ->setSellerAccount($sellerAccount)
            ->setPerformance($performance);
    }
    /**
     * Get SearchStanding value
     * @return \StructType\SearchStandingDashboardType|null
     */
    public function getSearchStanding()
    {
        return $this->SearchStanding;
    }
    /**
     * Set SearchStanding value
     * @param \StructType\SearchStandingDashboardType $searchStanding
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function setSearchStanding(\StructType\SearchStandingDashboardType $searchStanding = null)
    {
        $this->SearchStanding = $searchStanding;
        return $this;
    }
    /**
     * Get SellerFeeDiscount value
     * @return \StructType\SellerFeeDiscountDashboardType|null
     */
    public function getSellerFeeDiscount()
    {
        return $this->SellerFeeDiscount;
    }
    /**
     * Set SellerFeeDiscount value
     * @param \StructType\SellerFeeDiscountDashboardType $sellerFeeDiscount
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function setSellerFeeDiscount(\StructType\SellerFeeDiscountDashboardType $sellerFeeDiscount = null)
    {
        $this->SellerFeeDiscount = $sellerFeeDiscount;
        return $this;
    }
    /**
     * Get PowerSellerStatus value
     * @return \StructType\PowerSellerDashboardType|null
     */
    public function getPowerSellerStatus()
    {
        return $this->PowerSellerStatus;
    }
    /**
     * Set PowerSellerStatus value
     * @param \StructType\PowerSellerDashboardType $powerSellerStatus
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function setPowerSellerStatus(\StructType\PowerSellerDashboardType $powerSellerStatus = null)
    {
        $this->PowerSellerStatus = $powerSellerStatus;
        return $this;
    }
    /**
     * Get PolicyCompliance value
     * @return \StructType\PolicyComplianceDashboardType|null
     */
    public function getPolicyCompliance()
    {
        return $this->PolicyCompliance;
    }
    /**
     * Set PolicyCompliance value
     * @param \StructType\PolicyComplianceDashboardType $policyCompliance
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function setPolicyCompliance(\StructType\PolicyComplianceDashboardType $policyCompliance = null)
    {
        $this->PolicyCompliance = $policyCompliance;
        return $this;
    }
    /**
     * Get BuyerSatisfaction value
     * @return \StructType\BuyerSatisfactionDashboardType|null
     */
    public function getBuyerSatisfaction()
    {
        return $this->BuyerSatisfaction;
    }
    /**
     * Set BuyerSatisfaction value
     * @param \StructType\BuyerSatisfactionDashboardType $buyerSatisfaction
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function setBuyerSatisfaction(\StructType\BuyerSatisfactionDashboardType $buyerSatisfaction = null)
    {
        $this->BuyerSatisfaction = $buyerSatisfaction;
        return $this;
    }
    /**
     * Get SellerAccount value
     * @return \StructType\SellerAccountDashboardType|null
     */
    public function getSellerAccount()
    {
        return $this->SellerAccount;
    }
    /**
     * Set SellerAccount value
     * @param \StructType\SellerAccountDashboardType $sellerAccount
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function setSellerAccount(\StructType\SellerAccountDashboardType $sellerAccount = null)
    {
        $this->SellerAccount = $sellerAccount;
        return $this;
    }
    /**
     * Get Performance value
     * @return \StructType\PerformanceDashboardType[]|null
     */
    public function getPerformance()
    {
        return $this->Performance;
    }
    /**
     * This method is responsible for validating the values passed to the setPerformance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerformance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerformanceForArrayConstraintsFromSetPerformance(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellerDashboardResponseTypePerformanceItem) {
            // validation for constraint: itemType
            if (!$getSellerDashboardResponseTypePerformanceItem instanceof \StructType\PerformanceDashboardType) {
                $invalidValues[] = is_object($getSellerDashboardResponseTypePerformanceItem) ? get_class($getSellerDashboardResponseTypePerformanceItem) : sprintf('%s(%s)', gettype($getSellerDashboardResponseTypePerformanceItem), var_export($getSellerDashboardResponseTypePerformanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Performance property can only contain items of type \StructType\PerformanceDashboardType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Performance value
     * @throws \InvalidArgumentException
     * @param \StructType\PerformanceDashboardType[] $performance
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function setPerformance(array $performance = array())
    {
        // validation for constraint: array
        if ('' !== ($performanceArrayErrorMessage = self::validatePerformanceForArrayConstraintsFromSetPerformance($performance))) {
            throw new \InvalidArgumentException($performanceArrayErrorMessage, __LINE__);
        }
        $this->Performance = $performance;
        return $this;
    }
    /**
     * Add item to Performance value
     * @throws \InvalidArgumentException
     * @param \StructType\PerformanceDashboardType $item
     * @return \StructType\GetSellerDashboardResponseType
     */
    public function addToPerformance(\StructType\PerformanceDashboardType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PerformanceDashboardType) {
            throw new \InvalidArgumentException(sprintf('The Performance property can only contain items of type \StructType\PerformanceDashboardType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Performance[] = $item;
        return $this;
    }
}
