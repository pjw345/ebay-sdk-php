<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: Shows the pagination of data returned by call requests. Pagination of returned data is not needed nor supported for every Trading API call. See the documentation for individual calls to determine whether pagination is supported,
 * required, or desirable.
 * @subpackage Structs
 */
class PaginationResultType extends AbstractStructBase
{
    /**
     * The TotalNumberOfPages
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total number of pages of data that could be returned by repeated requests. Returned with a value of 0 if no pages are available.
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfPages;
    /**
     * The TotalNumberOfEntries
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total number of entries that could be returned by repeated call requests. Returned with a value of 0 if no entries are available.
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfEntries;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaginationResultType
     * @uses PaginationResultType::setTotalNumberOfPages()
     * @uses PaginationResultType::setTotalNumberOfEntries()
     * @uses PaginationResultType::setAny()
     * @param int $totalNumberOfPages
     * @param int $totalNumberOfEntries
     * @param \DOMDocument $any
     */
    public function __construct($totalNumberOfPages = null, $totalNumberOfEntries = null, \DOMDocument $any = null)
    {
        $this
            ->setTotalNumberOfPages($totalNumberOfPages)
            ->setTotalNumberOfEntries($totalNumberOfEntries)
            ->setAny($any);
    }
    /**
     * Get TotalNumberOfPages value
     * @return int|null
     */
    public function getTotalNumberOfPages()
    {
        return $this->TotalNumberOfPages;
    }
    /**
     * Set TotalNumberOfPages value
     * @param int $totalNumberOfPages
     * @return \StructType\PaginationResultType
     */
    public function setTotalNumberOfPages($totalNumberOfPages = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfPages) && !(is_int($totalNumberOfPages) || ctype_digit($totalNumberOfPages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberOfPages, true), gettype($totalNumberOfPages)), __LINE__);
        }
        $this->TotalNumberOfPages = $totalNumberOfPages;
        return $this;
    }
    /**
     * Get TotalNumberOfEntries value
     * @return int|null
     */
    public function getTotalNumberOfEntries()
    {
        return $this->TotalNumberOfEntries;
    }
    /**
     * Set TotalNumberOfEntries value
     * @param int $totalNumberOfEntries
     * @return \StructType\PaginationResultType
     */
    public function setTotalNumberOfEntries($totalNumberOfEntries = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfEntries) && !(is_int($totalNumberOfEntries) || ctype_digit($totalNumberOfEntries))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberOfEntries, true), gettype($totalNumberOfEntries)), __LINE__);
        }
        $this->TotalNumberOfEntries = $totalNumberOfEntries;
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
     * @return \StructType\PaginationResultType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
