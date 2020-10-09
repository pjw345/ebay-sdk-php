<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntriesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the array of <b>AccountEntry</b> objects that are conditionally returned in the <b>GetAccount</b> response.
 * @subpackage Structs
 */
class AccountEntriesType extends AbstractStructBase
{
    /**
     * The AccountEntry
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AccountEntryType[]
     */
    public $AccountEntry;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AccountEntriesType
     * @uses AccountEntriesType::setAccountEntry()
     * @uses AccountEntriesType::setAny()
     * @param \StructType\AccountEntryType[] $accountEntry
     * @param \DOMDocument $any
     */
    public function __construct(array $accountEntry = array(), \DOMDocument $any = null)
    {
        $this
            ->setAccountEntry($accountEntry)
            ->setAny($any);
    }
    /**
     * Get AccountEntry value
     * @return \StructType\AccountEntryType[]|null
     */
    public function getAccountEntry()
    {
        return $this->AccountEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountEntryForArrayConstraintsFromSetAccountEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountEntriesTypeAccountEntryItem) {
            // validation for constraint: itemType
            if (!$accountEntriesTypeAccountEntryItem instanceof \StructType\AccountEntryType) {
                $invalidValues[] = is_object($accountEntriesTypeAccountEntryItem) ? get_class($accountEntriesTypeAccountEntryItem) : sprintf('%s(%s)', gettype($accountEntriesTypeAccountEntryItem), var_export($accountEntriesTypeAccountEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountEntry property can only contain items of type \StructType\AccountEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AccountEntry value
     * @throws \InvalidArgumentException
     * @param \StructType\AccountEntryType[] $accountEntry
     * @return \StructType\AccountEntriesType
     */
    public function setAccountEntry(array $accountEntry = array())
    {
        // validation for constraint: array
        if ('' !== ($accountEntryArrayErrorMessage = self::validateAccountEntryForArrayConstraintsFromSetAccountEntry($accountEntry))) {
            throw new \InvalidArgumentException($accountEntryArrayErrorMessage, __LINE__);
        }
        $this->AccountEntry = $accountEntry;
        return $this;
    }
    /**
     * Add item to AccountEntry value
     * @throws \InvalidArgumentException
     * @param \StructType\AccountEntryType $item
     * @return \StructType\AccountEntriesType
     */
    public function addToAccountEntry(\StructType\AccountEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AccountEntryType) {
            throw new \InvalidArgumentException(sprintf('The AccountEntry property can only contain items of type \StructType\AccountEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountEntry[] = $item;
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
     * @return \StructType\AccountEntriesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
