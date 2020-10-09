<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoListType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides information about an automated listing rule. Automated listing rules cannot be combined with automated relisting rules. A template can have one set of information per automated listing rule specified.
 * @subpackage Structs
 */
class SellingManagerAutoListType extends AbstractStructBase
{
    /**
     * The SourceSaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The source template ID for the rule that was retrieved. In the case of automated listing rules retrieved for an item, even if the item does not have an associated automation rule, an automated listing rule is inherited from the
     * source template.
     * - minOccurs: 0
     * @var int
     */
    public $SourceSaleTemplateID;
    /**
     * The KeepMinActive
     * Meta information extracted from the WSDL
     * - documentation: Specifies an automated listing rule that keeps a minimum number of listings on the site.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoListMinActiveItemsType
     */
    public $KeepMinActive;
    /**
     * The ListAccordingToSchedule
     * Meta information extracted from the WSDL
     * - documentation: Specifies an automated listing rule that lists items according to a specified schedule.
     * - minOccurs: 0
     * @var \StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public $ListAccordingToSchedule;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerAutoListType
     * @uses SellingManagerAutoListType::setSourceSaleTemplateID()
     * @uses SellingManagerAutoListType::setKeepMinActive()
     * @uses SellingManagerAutoListType::setListAccordingToSchedule()
     * @uses SellingManagerAutoListType::setAny()
     * @param int $sourceSaleTemplateID
     * @param \StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive
     * @param \StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     * @param \DOMDocument $any
     */
    public function __construct($sourceSaleTemplateID = null, \StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive = null, \StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule = null, \DOMDocument $any = null)
    {
        $this
            ->setSourceSaleTemplateID($sourceSaleTemplateID)
            ->setKeepMinActive($keepMinActive)
            ->setListAccordingToSchedule($listAccordingToSchedule)
            ->setAny($any);
    }
    /**
     * Get SourceSaleTemplateID value
     * @return int|null
     */
    public function getSourceSaleTemplateID()
    {
        return $this->SourceSaleTemplateID;
    }
    /**
     * Set SourceSaleTemplateID value
     * @param int $sourceSaleTemplateID
     * @return \StructType\SellingManagerAutoListType
     */
    public function setSourceSaleTemplateID($sourceSaleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($sourceSaleTemplateID) && !(is_int($sourceSaleTemplateID) || ctype_digit($sourceSaleTemplateID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourceSaleTemplateID, true), gettype($sourceSaleTemplateID)), __LINE__);
        }
        $this->SourceSaleTemplateID = $sourceSaleTemplateID;
        return $this;
    }
    /**
     * Get KeepMinActive value
     * @return \StructType\SellingManagerAutoListMinActiveItemsType|null
     */
    public function getKeepMinActive()
    {
        return $this->KeepMinActive;
    }
    /**
     * Set KeepMinActive value
     * @param \StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive
     * @return \StructType\SellingManagerAutoListType
     */
    public function setKeepMinActive(\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive = null)
    {
        $this->KeepMinActive = $keepMinActive;
        return $this;
    }
    /**
     * Get ListAccordingToSchedule value
     * @return \StructType\SellingManagerAutoListAccordingToScheduleType|null
     */
    public function getListAccordingToSchedule()
    {
        return $this->ListAccordingToSchedule;
    }
    /**
     * Set ListAccordingToSchedule value
     * @param \StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     * @return \StructType\SellingManagerAutoListType
     */
    public function setListAccordingToSchedule(\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule = null)
    {
        $this->ListAccordingToSchedule = $listAccordingToSchedule;
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
     * @return \StructType\SellingManagerAutoListType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
