<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DispatchTimeMaxDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about the maximum number of business days required to ship an item to domestic buyers after receiving a cleared payment.
 * @subpackage Structs
 */
class DispatchTimeMaxDetailsType extends AbstractStructBase
{
    /**
     * The DispatchTimeMax
     * Meta information extracted from the WSDL
     * - documentation: Integer value that indicates the maximum number of business days that the eBay site allows as a seller's handling time. The clock starts ticking when the buyer pays for the order. This means that if a buyer pays for the order on a
     * Wednesday, the seller would have to ship the item by the next day (Thursday) if the <b>DispatchTimeMax</b> value is set to <code>1</code>. Typical values for this field are 0, 1, 2, 3, 4, 5, 10, 15, or 20. <br/><br/> A <b>DispatchTimeMax</b> value of
     * <code>0</code> indicates <em>same day handling</em> for an item. In this case, the seller's handling time commitment depends on the <em>order cut off time</em> set in the seller's user preferences. This defaults to 2:00 PM local time on most eBay
     * sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the
     * following day (excluding weekends and local holidays). <br/><br/> <span class="tablenote"> <strong>Note:</strong> If a same day shipping carrier is selected, and the carrier delivers on one or both weekend days, sellers on the eBay US site are
     * assumed to be open for business on the same days, and those days will be used when calculating total shipping time. </span> If using <b>GeteBayDetails</b> specifically to return this value, the caller sets the DetailName field in the request to
     * <b>DispatchTimeMaxDetails</b>. <br/><br/> When creating, revising, or relisting an item, the seller cannot set the <b>Item.DispatchTimeMax</b> value higher than the value returned in this field.
     * - minOccurs: 0
     * @var int
     */
    public $DispatchTimeMax;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Value and unit (e.g., 10 Days) for the maximum dispatch time. Useful for display purposes.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The ExtendedHandling
     * Meta information extracted from the WSDL
     * - documentation: A value of <code>true</code> indicates that the seller has specified a handling time of 4 business days or more (an <em>exception handling time</em>). Sellers should be aware that long handling times might adversely affect the buying
     * decisions of potential customers.
     * - minOccurs: 0
     * @var bool
     */
    public $ExtendedHandling;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DispatchTimeMaxDetailsType
     * @uses DispatchTimeMaxDetailsType::setDispatchTimeMax()
     * @uses DispatchTimeMaxDetailsType::setDescription()
     * @uses DispatchTimeMaxDetailsType::setDetailVersion()
     * @uses DispatchTimeMaxDetailsType::setUpdateTime()
     * @uses DispatchTimeMaxDetailsType::setExtendedHandling()
     * @uses DispatchTimeMaxDetailsType::setAny()
     * @param int $dispatchTimeMax
     * @param string $description
     * @param string $detailVersion
     * @param string $updateTime
     * @param bool $extendedHandling
     * @param \DOMDocument $any
     */
    public function __construct($dispatchTimeMax = null, $description = null, $detailVersion = null, $updateTime = null, $extendedHandling = null, \DOMDocument $any = null)
    {
        $this
            ->setDispatchTimeMax($dispatchTimeMax)
            ->setDescription($description)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setExtendedHandling($extendedHandling)
            ->setAny($any);
    }
    /**
     * Get DispatchTimeMax value
     * @return int|null
     */
    public function getDispatchTimeMax()
    {
        return $this->DispatchTimeMax;
    }
    /**
     * Set DispatchTimeMax value
     * @param int $dispatchTimeMax
     * @return \StructType\DispatchTimeMaxDetailsType
     */
    public function setDispatchTimeMax($dispatchTimeMax = null)
    {
        // validation for constraint: int
        if (!is_null($dispatchTimeMax) && !(is_int($dispatchTimeMax) || ctype_digit($dispatchTimeMax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dispatchTimeMax, true), gettype($dispatchTimeMax)), __LINE__);
        }
        $this->DispatchTimeMax = $dispatchTimeMax;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\DispatchTimeMaxDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \StructType\DispatchTimeMaxDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\DispatchTimeMaxDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get ExtendedHandling value
     * @return bool|null
     */
    public function getExtendedHandling()
    {
        return $this->ExtendedHandling;
    }
    /**
     * Set ExtendedHandling value
     * @param bool $extendedHandling
     * @return \StructType\DispatchTimeMaxDetailsType
     */
    public function setExtendedHandling($extendedHandling = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendedHandling) && !is_bool($extendedHandling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extendedHandling, true), gettype($extendedHandling)), __LINE__);
        }
        $this->ExtendedHandling = $extendedHandling;
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
     * @return \StructType\DispatchTimeMaxDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
