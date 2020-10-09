<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WantItNowPostType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class WantItNowPostType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The PostID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $PostID;
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The ResponseCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ResponseCount;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * Constructor method for WantItNowPostType
     * @uses WantItNowPostType::setCategoryID()
     * @uses WantItNowPostType::setDescription()
     * @uses WantItNowPostType::setPostID()
     * @uses WantItNowPostType::setSite()
     * @uses WantItNowPostType::setStartTime()
     * @uses WantItNowPostType::setResponseCount()
     * @uses WantItNowPostType::setTitle()
     * @param string $categoryID
     * @param string $description
     * @param string $postID
     * @param string $site
     * @param string $startTime
     * @param int $responseCount
     * @param string $title
     */
    public function __construct($categoryID = null, $description = null, $postID = null, $site = null, $startTime = null, $responseCount = null, $title = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setDescription($description)
            ->setPostID($postID)
            ->setSite($site)
            ->setStartTime($startTime)
            ->setResponseCount($responseCount)
            ->setTitle($title);
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
     * @return \StructType\WantItNowPostType
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
     * @return \StructType\WantItNowPostType
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
     * Get PostID value
     * @return string|null
     */
    public function getPostID()
    {
        return $this->PostID;
    }
    /**
     * Set PostID value
     * @param string $postID
     * @return \StructType\WantItNowPostType
     */
    public function setPostID($postID = null)
    {
        // validation for constraint: string
        if (!is_null($postID) && !is_string($postID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postID, true), gettype($postID)), __LINE__);
        }
        $this->PostID = $postID;
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \StructType\WantItNowPostType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
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
     * @return \StructType\WantItNowPostType
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
     * Get ResponseCount value
     * @return int|null
     */
    public function getResponseCount()
    {
        return $this->ResponseCount;
    }
    /**
     * Set ResponseCount value
     * @param int $responseCount
     * @return \StructType\WantItNowPostType
     */
    public function setResponseCount($responseCount = null)
    {
        // validation for constraint: int
        if (!is_null($responseCount) && !(is_int($responseCount) || ctype_digit($responseCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseCount, true), gettype($responseCount)), __LINE__);
        }
        $this->ResponseCount = $responseCount;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\WantItNowPostType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
}
