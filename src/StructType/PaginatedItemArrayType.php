<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedItemArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a paginated list of items.
 * @subpackage Structs
 */
class PaginatedItemArrayType extends AbstractStructBase
{
    /**
     * The ItemArray
     * Meta information extracted from the WSDL
     * - documentation: An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
     * - minOccurs: 0
     * @var \ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: This container shows the total numer of items that matched the input criteria and the total number of the results set. Users can use the <b>Pagination.PageNumber</b> field in the request to toggle through different pages in the
     * results set.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaginatedItemArrayType
     * @uses PaginatedItemArrayType::setItemArray()
     * @uses PaginatedItemArrayType::setPaginationResult()
     * @uses PaginatedItemArrayType::setAny()
     * @param \ArrayType\ItemArrayType $itemArray
     * @param \StructType\PaginationResultType $paginationResult
     * @param \DOMDocument $any
     */
    public function __construct(\ArrayType\ItemArrayType $itemArray = null, \StructType\PaginationResultType $paginationResult = null, \DOMDocument $any = null)
    {
        $this
            ->setItemArray($itemArray)
            ->setPaginationResult($paginationResult)
            ->setAny($any);
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
     * @return \StructType\PaginatedItemArrayType
     */
    public function setItemArray(\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \StructType\PaginationResultType $paginationResult
     * @return \StructType\PaginatedItemArrayType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
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
     * @return \StructType\PaginatedItemArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
