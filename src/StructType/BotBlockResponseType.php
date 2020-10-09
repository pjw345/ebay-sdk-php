<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BotBlockResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>BotBlock</b> container that is returned in the <b>PlaceOffer</b> call response if eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b>
 * call. The authentication token and URL values that are returned in the <b>PlaceOffer</b> call response are then passed in the <b>BotBlock</b> container of a subsequent <b>PlaceOffer</b> call.
 * @subpackage Structs
 */
class BotBlockResponseType extends AbstractStructBase
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
     * The BotBlockUrl
     * Meta information extracted from the WSDL
     * - documentation: This string value is a URL to an image that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the
     * <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockUrl</b> and then run another <b>PlaceOffer</b> call, but
     * this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field. For site-impaired users, the <b>BotBlockAudioUrl</b> field might be returned instead, in which case, the
     * <b>BotBlockAudioUrl</b> value should be passed into the<b>BotBlockUserInput</b> field instead.
     * - minOccurs: 0
     * @var string
     */
    public $BotBlockUrl;
    /**
     * The BotBlockAudioUrl
     * Meta information extracted from the WSDL
     * - documentation: This string value is a URL to an audio clip that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the
     * <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockAudioUrl</b> and then run another <b>PlaceOffer</b> call,
     * but this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field. <br><br> <span class="tablenote"><b>Note:</b> This field will generally only be returned for
     * site-impaired users. If this field is not returned, but the <b>BotBlockUrl</b> field is returned instead, the <b>BotBlockUrl</b> value should be passed into the <b>BotBlockUserInput</b> field of the subsequent <b>PlaceOffer</b> call instead. </span>
     * - minOccurs: 0
     * @var string
     */
    public $BotBlockAudioUrl;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BotBlockResponseType
     * @uses BotBlockResponseType::setBotBlockToken()
     * @uses BotBlockResponseType::setBotBlockUrl()
     * @uses BotBlockResponseType::setBotBlockAudioUrl()
     * @uses BotBlockResponseType::setAny()
     * @param string $botBlockToken
     * @param string $botBlockUrl
     * @param string $botBlockAudioUrl
     * @param \DOMDocument $any
     */
    public function __construct($botBlockToken = null, $botBlockUrl = null, $botBlockAudioUrl = null, \DOMDocument $any = null)
    {
        $this
            ->setBotBlockToken($botBlockToken)
            ->setBotBlockUrl($botBlockUrl)
            ->setBotBlockAudioUrl($botBlockAudioUrl)
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
     * @return \StructType\BotBlockResponseType
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
     * Get BotBlockUrl value
     * @return string|null
     */
    public function getBotBlockUrl()
    {
        return $this->BotBlockUrl;
    }
    /**
     * Set BotBlockUrl value
     * @param string $botBlockUrl
     * @return \StructType\BotBlockResponseType
     */
    public function setBotBlockUrl($botBlockUrl = null)
    {
        // validation for constraint: string
        if (!is_null($botBlockUrl) && !is_string($botBlockUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($botBlockUrl, true), gettype($botBlockUrl)), __LINE__);
        }
        $this->BotBlockUrl = $botBlockUrl;
        return $this;
    }
    /**
     * Get BotBlockAudioUrl value
     * @return string|null
     */
    public function getBotBlockAudioUrl()
    {
        return $this->BotBlockAudioUrl;
    }
    /**
     * Set BotBlockAudioUrl value
     * @param string $botBlockAudioUrl
     * @return \StructType\BotBlockResponseType
     */
    public function setBotBlockAudioUrl($botBlockAudioUrl = null)
    {
        // validation for constraint: string
        if (!is_null($botBlockAudioUrl) && !is_string($botBlockAudioUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($botBlockAudioUrl, true), gettype($botBlockAudioUrl)), __LINE__);
        }
        $this->BotBlockAudioUrl = $botBlockAudioUrl;
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
     * @return \StructType\BotBlockResponseType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
