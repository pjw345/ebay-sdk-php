<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemResponseContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>AddItemResponseContainer</b> containers that are returned in an <b>AddItems</b> call. An <b>AddItemResponseContainer</b> container is returned for each item created through an <b>AddItems</b> call. Each item
 * being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller. To match up the <b>AddItemResponseContainer</b> to the <b>AddItemRequestContainer</b>, look for
 * a <b>AddItemResponseContainer.CorrelationID</b> value that matches the <b>AddItemRequestContainer.MessageID</b> value in the request.
 * @subpackage Structs
 */
class AddItemResponseContainerType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the new listing. This field is returned as long as the listing was successfully created. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>Item.ScheduleTime</b> field in the request and set
     * a custom start time of the listing (in the future).
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to
     * <code>GTC</code> (Good 'Til Cancelled) this value will be set one month ahead of the start time, and this value will continue to be updated one month ahead each time the GTC listing needs to be renewed. Fixed-price listings get renewed automatically
     * as long as there is still a quantity of <code>1</code> or above, or even if the quantity is <code>0</code>, but the 'out-of-stock control' feature is enabled. <br><br> Note that <code>GTC</code> is not a supported listing duration for auction
     * listings, but is the only supported listing duration for fixed-price listings except for a few motor vehicle categories on eBay Motors US, eBay UK, and eBay Italy. <br><br> <span class="tablenote"><b>Note: </b> As of July 1, 2019, the Good 'Til
     * Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the
     * following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this
     * change. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the
     * listing has a sale. <br> <br> All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'. <br> <br> <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the
     * <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type
     * shown for each fee will be <code>USD</code> and not <code>CAD</code>. </span>
     * - minOccurs: 0
     * @var \StructType\FeesType
     */
    public $Fees;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the primary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category
     * ID passed in as the primary listing category was automatically mapped to a new Category ID by eBay. If the primary category ID passed in the request is still active/valid, this field is not returned. <br/><br/> <span class="tablenote"><b>Note: </b>
     * The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for
     * eBay to map an outdated Primary or Secondary Category ID to the updated Category ID. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the secondary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID
     * passed in as the secondary listing category was automatically mapped to a new Category ID by eBay. If the secondary category ID passed in the request is still active/valid, this field is not returned. <br/><br/> <span class="tablenote"><b>Note: </b>
     * The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for
     * eBay to map an outdated Primary or Secondary Category ID to the updated Category ID. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Category2ID;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. With <b>AddItems</b>, a unique <b>MessageID</b> value is required for each <b>AddItemRequestContainer</b>
     * container that is used in the request. The <b>CorrelationID</b> value returned under each <b>AddItemResponseContainer</b> container is used to correlate each item request container with its corresponding response container. The same <b>MessageID</b>
     * value that you pass into a request will be returned in the <b>CorrelationID</b> field in the response.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level. <br> <br>
     * This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ErrorType[]
     */
    public $Errors;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: Supplemental information from eBay, if applicable. May elaborate on errors or provide useful hints for the seller. This data can accompany the call's normal data result set or a result set that contains only errors. The string can
     * return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML- based application should be able to include the HTML as-is in the HTML page that displays the results. A non-HTML application would need to parse the HTML and convert the
     * table elements and image references into UI elements particular to the programming language used. Because this data is returned as a string, the HTML markup elements are escaped with character entity references (e.g.,&lt;table&gt;&lt;tr&gt;...).
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The DiscountReason
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DiscountReason;
    /**
     * The ListingRecommendations
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated
     * seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling
     * (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge. <br><br> This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in
     * the <b>AddItems</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned for one or more of the newly created listings, it will be at the seller's discretion
     * about whether to revise the item(s) based on eBay's listing recommendation(s).
     * - minOccurs: 0
     * @var \StructType\ListingRecommendationsType
     */
    public $ListingRecommendations;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AddItemResponseContainerType
     * @uses AddItemResponseContainerType::setItemID()
     * @uses AddItemResponseContainerType::setStartTime()
     * @uses AddItemResponseContainerType::setEndTime()
     * @uses AddItemResponseContainerType::setFees()
     * @uses AddItemResponseContainerType::setCategoryID()
     * @uses AddItemResponseContainerType::setCategory2ID()
     * @uses AddItemResponseContainerType::setCorrelationID()
     * @uses AddItemResponseContainerType::setErrors()
     * @uses AddItemResponseContainerType::setMessage()
     * @uses AddItemResponseContainerType::setDiscountReason()
     * @uses AddItemResponseContainerType::setListingRecommendations()
     * @uses AddItemResponseContainerType::setAny()
     * @param string $itemID
     * @param string $startTime
     * @param string $endTime
     * @param \StructType\FeesType $fees
     * @param string $categoryID
     * @param string $category2ID
     * @param string $correlationID
     * @param \StructType\ErrorType[] $errors
     * @param string $message
     * @param string[] $discountReason
     * @param \StructType\ListingRecommendationsType $listingRecommendations
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $startTime = null, $endTime = null, \StructType\FeesType $fees = null, $categoryID = null, $category2ID = null, $correlationID = null, array $errors = array(), $message = null, array $discountReason = array(), \StructType\ListingRecommendationsType $listingRecommendations = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setFees($fees)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setCorrelationID($correlationID)
            ->setErrors($errors)
            ->setMessage($message)
            ->setDiscountReason($discountReason)
            ->setListingRecommendations($listingRecommendations)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\AddItemResponseContainerType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\AddItemResponseContainerType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\AddItemResponseContainerType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get Fees value
     * @return \StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \StructType\FeesType $fees
     * @return \StructType\AddItemResponseContainerType
     */
    public function setFees(\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \StructType\AddItemResponseContainerType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \StructType\AddItemResponseContainerType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \StructType\AddItemResponseContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorType[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addItemResponseContainerTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$addItemResponseContainerTypeErrorsItem instanceof \StructType\ErrorType) {
                $invalidValues[] = is_object($addItemResponseContainerTypeErrorsItem) ? get_class($addItemResponseContainerTypeErrorsItem) : sprintf('%s(%s)', gettype($addItemResponseContainerTypeErrorsItem), var_export($addItemResponseContainerTypeErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Errors property can only contain items of type \StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Errors value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorType[] $errors
     * @return \StructType\AddItemResponseContainerType
     */
    public function setErrors(array $errors = array())
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new \InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws \InvalidArgumentException
     * @param \StructType\ErrorType $item
     * @return \StructType\AddItemResponseContainerType
     */
    public function addToErrors(\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of type \StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Errors[] = $item;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\AddItemResponseContainerType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get DiscountReason value
     * @return string[]|null
     */
    public function getDiscountReason()
    {
        return $this->DiscountReason;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountReasonForArrayConstraintsFromSetDiscountReason(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addItemResponseContainerTypeDiscountReasonItem) {
            // validation for constraint: enumeration
            if (!\EnumType\DiscountReasonCodeType::valueIsValid($addItemResponseContainerTypeDiscountReasonItem)) {
                $invalidValues[] = is_object($addItemResponseContainerTypeDiscountReasonItem) ? get_class($addItemResponseContainerTypeDiscountReasonItem) : sprintf('%s(%s)', gettype($addItemResponseContainerTypeDiscountReasonItem), var_export($addItemResponseContainerTypeDiscountReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountReasonCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\DiscountReasonCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DiscountReason value
     * @uses \EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $discountReason
     * @return \StructType\AddItemResponseContainerType
     */
    public function setDiscountReason(array $discountReason = array())
    {
        // validation for constraint: array
        if ('' !== ($discountReasonArrayErrorMessage = self::validateDiscountReasonForArrayConstraintsFromSetDiscountReason($discountReason))) {
            throw new \InvalidArgumentException($discountReasonArrayErrorMessage, __LINE__);
        }
        $this->DiscountReason = $discountReason;
        return $this;
    }
    /**
     * Add item to DiscountReason value
     * @uses \EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\AddItemResponseContainerType
     */
    public function addToDiscountReason($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DiscountReasonCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountReasonCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason[] = $item;
        return $this;
    }
    /**
     * Get ListingRecommendations value
     * @return \StructType\ListingRecommendationsType|null
     */
    public function getListingRecommendations()
    {
        return $this->ListingRecommendations;
    }
    /**
     * Set ListingRecommendations value
     * @param \StructType\ListingRecommendationsType $listingRecommendations
     * @return \StructType\AddItemResponseContainerType
     */
    public function setListingRecommendations(\StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this->ListingRecommendations = $listingRecommendations;
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
     * @return \StructType\AddItemResponseContainerType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
