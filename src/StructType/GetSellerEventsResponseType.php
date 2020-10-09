<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerEventsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the items in an <b>ItemArrayType</b> object for the a seller events that have occurred and that meet any filters specified. There can be zero, one, or multiple <b>ItemType</b> objects. Each <b>ItemType</b> object contains the
 * detail data for one item listing.
 * @subpackage Structs
 */
class GetSellerEventsResponseType extends AbstractResponseType
{
    /**
     * The TimeTo
     * Meta information extracted from the WSDL
     * - documentation: Indicates the latest (most recent) date for any date-based filtering specified as input. Specifically, this field contains the value you specified in the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter, if you
     * used a time filter in the request. If no time filter was specified, <b>TimeTo</b> returns the current time.
     * - minOccurs: 0
     * @var string
     */
    public $TimeTo;
    /**
     * The ItemArray
     * Meta information extracted from the WSDL
     * - documentation: Collection of items whose last modified time matches the filters specified in the request. Returns empty if no items were modified within the time range of the request.<br/><br/> If 1 to 2999 items are returned, then the results are
     * complete. If 3000 or more items are returned, it usually means additional items exist within the time range you requested, but they were not all returned. <br/><br/> To retrieve complete results, use a smaller time range in the request so that fewer
     * than 3000 are returned per response.
     * - minOccurs: 0
     * @var \ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * Constructor method for GetSellerEventsResponseType
     * @uses GetSellerEventsResponseType::setTimeTo()
     * @uses GetSellerEventsResponseType::setItemArray()
     * @param string $timeTo
     * @param \ArrayType\ItemArrayType $itemArray
     */
    public function __construct($timeTo = null, \ArrayType\ItemArrayType $itemArray = null)
    {
        $this
            ->setTimeTo($timeTo)
            ->setItemArray($itemArray);
    }
    /**
     * Get TimeTo value
     * @return string|null
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }
    /**
     * Set TimeTo value
     * @param string $timeTo
     * @return \StructType\GetSellerEventsResponseType
     */
    public function setTimeTo($timeTo = null)
    {
        // validation for constraint: string
        if (!is_null($timeTo) && !is_string($timeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeTo, true), gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \ArrayType\ItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \ArrayType\ItemArrayType $itemArray
     * @return \StructType\GetSellerEventsResponseType
     */
    public function setItemArray(\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
}
