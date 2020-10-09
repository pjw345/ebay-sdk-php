<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data indicating whether an item has been revised since the listing became active and, if so, which among a subset of properties have been changed by the revision.
 * @subpackage Structs
 */
class ReviseStatusType extends AbstractStructBase
{
    /**
     * The ItemRevised
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the original listing has been revised. This field is always returned with the <b>ReviseStatus</b> container.
     * @var bool
     */
    public $ItemRevised;
    /**
     * The BuyItNowAdded
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if a Buy It Now price has been added to the auction listing. This field is only returned if the original auction listing did not have a Buy It Now price, but a revision to that original
     * listing included adding a Buy It Now price.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowAdded;
    /**
     * The BuyItNowLowered
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Buy It Now price on the
     * original auction listing was lowered as part of a revision to the original auction listing.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowLowered;
    /**
     * The ReserveLowered
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original
     * auction listing was lowered as part of a revision to the original auction listing.
     * - minOccurs: 0
     * @var bool
     */
    public $ReserveLowered;
    /**
     * The ReserveRemoved
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original
     * auction listing was removed as part of a revision to the original auction listing.
     * - minOccurs: 0
     * @var bool
     */
    public $ReserveRemoved;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReviseStatusType
     * @uses ReviseStatusType::setItemRevised()
     * @uses ReviseStatusType::setBuyItNowAdded()
     * @uses ReviseStatusType::setBuyItNowLowered()
     * @uses ReviseStatusType::setReserveLowered()
     * @uses ReviseStatusType::setReserveRemoved()
     * @uses ReviseStatusType::setAny()
     * @param bool $itemRevised
     * @param bool $buyItNowAdded
     * @param bool $buyItNowLowered
     * @param bool $reserveLowered
     * @param bool $reserveRemoved
     * @param \DOMDocument $any
     */
    public function __construct($itemRevised = null, $buyItNowAdded = null, $buyItNowLowered = null, $reserveLowered = null, $reserveRemoved = null, \DOMDocument $any = null)
    {
        $this
            ->setItemRevised($itemRevised)
            ->setBuyItNowAdded($buyItNowAdded)
            ->setBuyItNowLowered($buyItNowLowered)
            ->setReserveLowered($reserveLowered)
            ->setReserveRemoved($reserveRemoved)
            ->setAny($any);
    }
    /**
     * Get ItemRevised value
     * @return bool|null
     */
    public function getItemRevised()
    {
        return $this->ItemRevised;
    }
    /**
     * Set ItemRevised value
     * @param bool $itemRevised
     * @return \StructType\ReviseStatusType
     */
    public function setItemRevised($itemRevised = null)
    {
        // validation for constraint: boolean
        if (!is_null($itemRevised) && !is_bool($itemRevised)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($itemRevised, true), gettype($itemRevised)), __LINE__);
        }
        $this->ItemRevised = $itemRevised;
        return $this;
    }
    /**
     * Get BuyItNowAdded value
     * @return bool|null
     */
    public function getBuyItNowAdded()
    {
        return $this->BuyItNowAdded;
    }
    /**
     * Set BuyItNowAdded value
     * @param bool $buyItNowAdded
     * @return \StructType\ReviseStatusType
     */
    public function setBuyItNowAdded($buyItNowAdded = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowAdded) && !is_bool($buyItNowAdded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowAdded, true), gettype($buyItNowAdded)), __LINE__);
        }
        $this->BuyItNowAdded = $buyItNowAdded;
        return $this;
    }
    /**
     * Get BuyItNowLowered value
     * @return bool|null
     */
    public function getBuyItNowLowered()
    {
        return $this->BuyItNowLowered;
    }
    /**
     * Set BuyItNowLowered value
     * @param bool $buyItNowLowered
     * @return \StructType\ReviseStatusType
     */
    public function setBuyItNowLowered($buyItNowLowered = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowLowered) && !is_bool($buyItNowLowered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowLowered, true), gettype($buyItNowLowered)), __LINE__);
        }
        $this->BuyItNowLowered = $buyItNowLowered;
        return $this;
    }
    /**
     * Get ReserveLowered value
     * @return bool|null
     */
    public function getReserveLowered()
    {
        return $this->ReserveLowered;
    }
    /**
     * Set ReserveLowered value
     * @param bool $reserveLowered
     * @return \StructType\ReviseStatusType
     */
    public function setReserveLowered($reserveLowered = null)
    {
        // validation for constraint: boolean
        if (!is_null($reserveLowered) && !is_bool($reserveLowered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserveLowered, true), gettype($reserveLowered)), __LINE__);
        }
        $this->ReserveLowered = $reserveLowered;
        return $this;
    }
    /**
     * Get ReserveRemoved value
     * @return bool|null
     */
    public function getReserveRemoved()
    {
        return $this->ReserveRemoved;
    }
    /**
     * Set ReserveRemoved value
     * @param bool $reserveRemoved
     * @return \StructType\ReviseStatusType
     */
    public function setReserveRemoved($reserveRemoved = null)
    {
        // validation for constraint: boolean
        if (!is_null($reserveRemoved) && !is_bool($reserveRemoved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserveRemoved, true), gettype($reserveRemoved)), __LINE__);
        }
        $this->ReserveRemoved = $reserveRemoved;
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
     * @return \StructType\ReviseStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
