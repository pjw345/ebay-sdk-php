<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDescriptionTemplatesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type for the <b>GetDescriptionTemplates</b> call. This call retrieves detailed information on the Listing Designer templates that are available for use by the seller.
 * @subpackage Structs
 */
class GetDescriptionTemplatesRequestType extends AbstractRequestType
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: A <b>CategoryID</b> value can be specified if the seller would like to only see the Listing Designer templates that are available for that eBay category. This field will be ignored if the <b>MotorVehicles</b> boolean field is also
     * included in the call request and set to <code>true</code>.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - documentation: This dateTime filter can be included and used if the user only wants to check for recently-added Listing Designer templates. If this filter is used, only the Listing Designer templates that have been added/modified after the
     * specified timestamp will be returned in the response. <br/><br/> Typically, you will pass in the timestamp value that was returned the last time you refreshed the list of Listing Designer templates.
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The MotorVehicles
     * Meta information extracted from the WSDL
     * - documentation: This boolean field should be included and set to <code>true</code> if the user would only like to see the Listing Designer templates that are available for motor vehicle categories. This field will override any <b>CategoryID</b>
     * value that is specified in the call request. <br> <br> <span class="tablenote"><b>Note:</b> Motor vehicle-related Listing Designer templates are only available for eBay Motors on the US and Canada (English) marketplaces. To retrieve eBay US Motors
     * Listing Designer templates, the <b>SITEID</b> HTTP header value must be set to <code>100</code>, which is the identifier of the eBay US Motors vertical (ebay.com/motors). </span>
     * - minOccurs: 0
     * @var bool
     */
    public $MotorVehicles;
    /**
     * Constructor method for GetDescriptionTemplatesRequestType
     * @uses GetDescriptionTemplatesRequestType::setCategoryID()
     * @uses GetDescriptionTemplatesRequestType::setLastModifiedTime()
     * @uses GetDescriptionTemplatesRequestType::setMotorVehicles()
     * @param string $categoryID
     * @param string $lastModifiedTime
     * @param bool $motorVehicles
     */
    public function __construct($categoryID = null, $lastModifiedTime = null, $motorVehicles = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setLastModifiedTime($lastModifiedTime)
            ->setMotorVehicles($motorVehicles);
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
     * @return \StructType\GetDescriptionTemplatesRequestType
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
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \StructType\GetDescriptionTemplatesRequestType
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get MotorVehicles value
     * @return bool|null
     */
    public function getMotorVehicles()
    {
        return $this->MotorVehicles;
    }
    /**
     * Set MotorVehicles value
     * @param bool $motorVehicles
     * @return \StructType\GetDescriptionTemplatesRequestType
     */
    public function setMotorVehicles($motorVehicles = null)
    {
        // validation for constraint: boolean
        if (!is_null($motorVehicles) && !is_bool($motorVehicles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($motorVehicles, true), gettype($motorVehicles)), __LINE__);
        }
        $this->MotorVehicles = $motorVehicles;
        return $this;
    }
}
