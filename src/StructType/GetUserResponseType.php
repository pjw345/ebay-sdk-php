<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>GetUser</b> call. This response includes detailed information about the user, including Feedback data, eBay registration date, selling feature eligibility, valid subsriptions, etc.
 * @subpackage Structs
 */
class GetUserResponseType extends AbstractResponseType
{
    /**
     * The User
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information about the user specified in the call request (through the <b>UserID</b> field) or the eBay user account that is tied to the <strong>eBayAuthToken</strong> value that is passed in the
     * call request. <br><br> Some sensitive data will be masked/omitted if the returned eBay user is not the person making the <b>GetUser</b> call. More information on another eBay user will be revealed to the person making the call if that person has an
     * order relationship for an eBay listing specified in the <strong>ItemID</strong> field of the call request.
     * - minOccurs: 0
     * @var \StructType\UserType
     */
    public $User;
    /**
     * Constructor method for GetUserResponseType
     * @uses GetUserResponseType::setUser()
     * @param \StructType\UserType $user
     */
    public function __construct(\StructType\UserType $user = null)
    {
        $this
            ->setUser($user);
    }
    /**
     * Get User value
     * @return \StructType\UserType|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \StructType\UserType $user
     * @return \StructType\GetUserResponseType
     */
    public function setUser(\StructType\UserType $user = null)
    {
        $this->User = $user;
        return $this;
    }
}
