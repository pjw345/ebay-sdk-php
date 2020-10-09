<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddToWatchListResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the response of the <b>AddToWatchList</b> call. Along with data indicating the success or failure of adding one or more items to a user's Watch List, this response also includes the number of items currently in the
 * user's Watch List and the maximum number of items allowed in the Watch List.
 * @subpackage Structs
 */
class AddToWatchListResponseType extends AbstractResponseType
{
    /**
     * The WatchListCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of items in the user's Watch List (after those specified in the call request have been successfully added).
     * - minOccurs: 0
     * @var int
     */
    public $WatchListCount;
    /**
     * The WatchListMaximum
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the maximum number of items allowed in a user's Watch List. This value can vary by site and is subject to change. Currently on the US site, up to 200 items can be on the user's Watch List at any given
     * time.
     * - minOccurs: 0
     * @var int
     */
    public $WatchListMaximum;
    /**
     * Constructor method for AddToWatchListResponseType
     * @uses AddToWatchListResponseType::setWatchListCount()
     * @uses AddToWatchListResponseType::setWatchListMaximum()
     * @param int $watchListCount
     * @param int $watchListMaximum
     */
    public function __construct($watchListCount = null, $watchListMaximum = null)
    {
        $this
            ->setWatchListCount($watchListCount)
            ->setWatchListMaximum($watchListMaximum);
    }
    /**
     * Get WatchListCount value
     * @return int|null
     */
    public function getWatchListCount()
    {
        return $this->WatchListCount;
    }
    /**
     * Set WatchListCount value
     * @param int $watchListCount
     * @return \StructType\AddToWatchListResponseType
     */
    public function setWatchListCount($watchListCount = null)
    {
        // validation for constraint: int
        if (!is_null($watchListCount) && !(is_int($watchListCount) || ctype_digit($watchListCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($watchListCount, true), gettype($watchListCount)), __LINE__);
        }
        $this->WatchListCount = $watchListCount;
        return $this;
    }
    /**
     * Get WatchListMaximum value
     * @return int|null
     */
    public function getWatchListMaximum()
    {
        return $this->WatchListMaximum;
    }
    /**
     * Set WatchListMaximum value
     * @param int $watchListMaximum
     * @return \StructType\AddToWatchListResponseType
     */
    public function setWatchListMaximum($watchListMaximum = null)
    {
        // validation for constraint: int
        if (!is_null($watchListMaximum) && !(is_int($watchListMaximum) || ctype_digit($watchListMaximum))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($watchListMaximum, true), gettype($watchListMaximum)), __LINE__);
        }
        $this->WatchListMaximum = $watchListMaximum;
        return $this;
    }
}
