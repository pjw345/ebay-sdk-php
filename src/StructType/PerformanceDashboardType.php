<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformanceDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Performance</b> container returned in the <b>GetSellerDashboard</b> response. The <b>Performance</b> container consists of the seller's overall selling performance rating on all eBay sites on which the seller is
 * sellling, as well as any alerts related to performance.
 * @subpackage Structs
 */
class PerformanceDashboardType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: The eBay site(s) on which the seller's performance is being evaluated. <br /> A seller's performance status is evaluated for three specific regions: US, UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is repeated
     * to show all sites in each region, if applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Site;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the seller's performance rating. This rating is an overall performance for the eBay site(s) found in the <b>Site</b> field(s).
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: The <b>Performance.Alert</b> container is only returned if eBay has posted one or more informational or warning messages related to the seller's performance rating.
     * - minOccurs: 0
     * @var \StructType\SellerDashboardAlertType
     */
    public $Alert;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PerformanceDashboardType
     * @uses PerformanceDashboardType::setSite()
     * @uses PerformanceDashboardType::setStatus()
     * @uses PerformanceDashboardType::setAlert()
     * @uses PerformanceDashboardType::setAny()
     * @param string[] $site
     * @param string $status
     * @param \StructType\SellerDashboardAlertType $alert
     * @param \DOMDocument $any
     */
    public function __construct(array $site = array(), $status = null, \StructType\SellerDashboardAlertType $alert = null, \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setStatus($status)
            ->setAlert($alert)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string[]|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * This method is responsible for validating the values passed to the setSite method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSite method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSiteForArrayConstraintsFromSetSite(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performanceDashboardTypeSiteItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SiteCodeType::valueIsValid($performanceDashboardTypeSiteItem)) {
                $invalidValues[] = is_object($performanceDashboardTypeSiteItem) ? get_class($performanceDashboardTypeSiteItem) : sprintf('%s(%s)', gettype($performanceDashboardTypeSiteItem), var_export($performanceDashboardTypeSiteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\SiteCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Site value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $site
     * @return \StructType\PerformanceDashboardType
     */
    public function setSite(array $site = array())
    {
        // validation for constraint: array
        if ('' !== ($siteArrayErrorMessage = self::validateSiteForArrayConstraintsFromSetSite($site))) {
            throw new \InvalidArgumentException($siteArrayErrorMessage, __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Add item to Site value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\PerformanceDashboardType
     */
    public function addToSite($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site[] = $item;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\PerformanceStatusCodeType::valueIsValid()
     * @uses \EnumType\PerformanceStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\PerformanceDashboardType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PerformanceStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PerformanceStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\PerformanceStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Alert value
     * @return \StructType\SellerDashboardAlertType|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @param \StructType\SellerDashboardAlertType $alert
     * @return \StructType\PerformanceDashboardType
     */
    public function setAlert(\StructType\SellerDashboardAlertType $alert = null)
    {
        $this->Alert = $alert;
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
     * @return \StructType\PerformanceDashboardType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
