<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberMessagesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a list of the messages buyers have posted about your active item listings.
 * @subpackage Structs
 */
class GetMemberMessagesResponseType extends AbstractResponseType
{
    /**
     * The MemberMessage
     * Meta information extracted from the WSDL
     * - documentation: The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     * - minOccurs: 0
     * @var \ArrayType\MemberMessageExchangeArrayType
     */
    public $MemberMessage;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Shows the pagination of data returned by requests.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreItems
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the response has more items.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreItems;
    /**
     * Constructor method for GetMemberMessagesResponseType
     * @uses GetMemberMessagesResponseType::setMemberMessage()
     * @uses GetMemberMessagesResponseType::setPaginationResult()
     * @uses GetMemberMessagesResponseType::setHasMoreItems()
     * @param \ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @param \StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     */
    public function __construct(\ArrayType\MemberMessageExchangeArrayType $memberMessage = null, \StructType\PaginationResultType $paginationResult = null, $hasMoreItems = null)
    {
        $this
            ->setMemberMessage($memberMessage)
            ->setPaginationResult($paginationResult)
            ->setHasMoreItems($hasMoreItems);
    }
    /**
     * Get MemberMessage value
     * @return \ArrayType\MemberMessageExchangeArrayType|null
     */
    public function getMemberMessage()
    {
        return $this->MemberMessage;
    }
    /**
     * Set MemberMessage value
     * @param \ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @return \StructType\GetMemberMessagesResponseType
     */
    public function setMemberMessage(\ArrayType\MemberMessageExchangeArrayType $memberMessage = null)
    {
        $this->MemberMessage = $memberMessage;
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
     * @return \StructType\GetMemberMessagesResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems()
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \StructType\GetMemberMessagesResponseType
     */
    public function setHasMoreItems($hasMoreItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreItems, true), gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
        return $this;
    }
}
