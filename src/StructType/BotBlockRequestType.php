<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BotBlockRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>BotBlock</b> container of the <b>PlaceOffer</b> call request. The <b>BotBlock</b> container is conditionally required in a <b>PlaceOffer</b> call request if the previous <b>PlaceOffer</b> call resulted in a
 * <b>BotBlock</b> container being returned in the response. The <b>BotBlock</b> container in the response will contain an authentication token and a URL that will need to be passed into the <b>BotBlock</b> container of the <b>PlaceOffer</b> call
 * request in the subsequent call.
 * @subpackage Structs
 */
class BotBlockRequestType extends AbstractStructBase
{
    /**
     * The BotBlockToken
     * Meta information extracted from the WSDL
     * - documentation: This string value is an encrypted token that eBay generates and returns in the <b>BotBlock.BotBlockToken</b> field of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in
     * order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another
     * <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     * - minOccurs: 0
     * @var string
     */
    public $BotBlockToken;
    /**
     * The BotBlockUserInput
     * Meta information extracted from the WSDL
     * - documentation: This string value is a URL that eBay generates and returns in either the <b>BotBlock.BotBlockUrl</b> or <b>BotBlock.BotBlockAudioUrl</b> field (returned for site-impaired users) of the <b>PlaceOffer</b> call response when eBay is
     * requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the
     * authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     * - minOccurs: 0
     * @var string
     */
    public $BotBlockUserInput;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BotBlockRequestType
     * @uses BotBlockRequestType::setBotBlockToken()
     * @uses BotBlockRequestType::setBotBlockUserInput()
     * @uses BotBlockRequestType::setAny()
     * @param string $botBlockToken
     * @param string $botBlockUserInput
     * @param \DOMDocument $any
     */
    public function __construct($botBlockToken = null, $botBlockUserInput = null, \DOMDocument $any = null)
    {
        $this
            ->setBotBlockToken($botBlockToken)
            ->setBotBlockUserInput($botBlockUserInput)
            ->setAny($any);
    }
    /**
     * Get BotBlockToken value
     * @return string|null
     */
    public function getBotBlockToken()
    {
        return $this->BotBlockToken;
    }
    /**
     * Set BotBlockToken value
     * @param string $botBlockToken
     * @return \StructType\BotBlockRequestType
     */
    public function setBotBlockToken($botBlockToken = null)
    {
        // validation for constraint: string
        if (!is_null($botBlockToken) && !is_string($botBlockToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($botBlockToken, true), gettype($botBlockToken)), __LINE__);
        }
        $this->BotBlockToken = $botBlockToken;
        return $this;
    }
    /**
     * Get BotBlockUserInput value
     * @return string|null
     */
    public function getBotBlockUserInput()
    {
        return $this->BotBlockUserInput;
    }
    /**
     * Set BotBlockUserInput value
     * @param string $botBlockUserInput
     * @return \StructType\BotBlockRequestType
     */
    public function setBotBlockUserInput($botBlockUserInput = null)
    {
        // validation for constraint: string
        if (!is_null($botBlockUserInput) && !is_string($botBlockUserInput)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($botBlockUserInput, true), gettype($botBlockUserInput)), __LINE__);
        }
        $this->BotBlockUserInput = $botBlockUserInput;
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
     * @return \StructType\BotBlockRequestType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
