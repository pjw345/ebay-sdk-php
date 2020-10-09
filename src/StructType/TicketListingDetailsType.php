<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketListingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>TicketListingDetails</b> container, which is used in an <b>Add</b>/<b>Revise</b>/<b>Relist</b> call to provide more details about event tickets.
 * @subpackage Structs
 */
class TicketListingDetailsType extends AbstractStructBase
{
    /**
     * The EventTitle
     * Meta information extracted from the WSDL
     * - documentation: The name of the event, as shown on the ticket. Typically the headliner. There is no maximum number of words or characters. However, the words in the name must be an exact match (or a subset consisting of complete words) to the words
     * in the product title in the catalog. The words in the name are matched using OR logic (the order of the words does not matter). As with all strings, you need to escape reserved characters such as ampersand. <br>
     * - minOccurs: 0
     * @var string
     */
    public $EventTitle;
    /**
     * The Venue
     * Meta information extracted from the WSDL
     * - documentation: The name of the venue, as shown on the ticket. The validation rules are the same as the rules for the event name. In addition, eBay supports both US English and UK English spelling variations for typical words found on tickets (such
     * as "theater" and "theatre"). As with all strings, you need to escape reserved characters such as ampersand. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Venue;
    /**
     * The PrintedDate
     * Meta information extracted from the WSDL
     * - documentation: The date of the event, as shown on the ticket. Use the date shown on the ticket, without attempting to adjust it for a different time zone (such as Pacific time or GMT).<br> <br> In most cases, you should be able to specify any
     * numeric date format in month/day/year order. eBay supports m or mm for the month, d or dd for the day, and yy or yyyy for the year, in all combinations. The delimiters must be forward slashes (/).
     * - minOccurs: 0
     * @var string
     */
    public $PrintedDate;
    /**
     * The PrintedTime
     * Meta information extracted from the WSDL
     * - documentation: The time of the event, as shown on the ticket. Use the time value shown on the ticket, without attempting to convert it to a different time zone (such as Pacific time or GMT). Do not round the value up or down (e.g., do not round
     * 7:01 PM to 7:00 PM).<br> <br> In most cases, you should be able to specify the time format exactly as shown on the ticket.
     * - minOccurs: 0
     * @var string
     */
    public $PrintedTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TicketListingDetailsType
     * @uses TicketListingDetailsType::setEventTitle()
     * @uses TicketListingDetailsType::setVenue()
     * @uses TicketListingDetailsType::setPrintedDate()
     * @uses TicketListingDetailsType::setPrintedTime()
     * @uses TicketListingDetailsType::setAny()
     * @param string $eventTitle
     * @param string $venue
     * @param string $printedDate
     * @param string $printedTime
     * @param \DOMDocument $any
     */
    public function __construct($eventTitle = null, $venue = null, $printedDate = null, $printedTime = null, \DOMDocument $any = null)
    {
        $this
            ->setEventTitle($eventTitle)
            ->setVenue($venue)
            ->setPrintedDate($printedDate)
            ->setPrintedTime($printedTime)
            ->setAny($any);
    }
    /**
     * Get EventTitle value
     * @return string|null
     */
    public function getEventTitle()
    {
        return $this->EventTitle;
    }
    /**
     * Set EventTitle value
     * @param string $eventTitle
     * @return \StructType\TicketListingDetailsType
     */
    public function setEventTitle($eventTitle = null)
    {
        // validation for constraint: string
        if (!is_null($eventTitle) && !is_string($eventTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTitle, true), gettype($eventTitle)), __LINE__);
        }
        $this->EventTitle = $eventTitle;
        return $this;
    }
    /**
     * Get Venue value
     * @return string|null
     */
    public function getVenue()
    {
        return $this->Venue;
    }
    /**
     * Set Venue value
     * @param string $venue
     * @return \StructType\TicketListingDetailsType
     */
    public function setVenue($venue = null)
    {
        // validation for constraint: string
        if (!is_null($venue) && !is_string($venue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($venue, true), gettype($venue)), __LINE__);
        }
        $this->Venue = $venue;
        return $this;
    }
    /**
     * Get PrintedDate value
     * @return string|null
     */
    public function getPrintedDate()
    {
        return $this->PrintedDate;
    }
    /**
     * Set PrintedDate value
     * @param string $printedDate
     * @return \StructType\TicketListingDetailsType
     */
    public function setPrintedDate($printedDate = null)
    {
        // validation for constraint: string
        if (!is_null($printedDate) && !is_string($printedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printedDate, true), gettype($printedDate)), __LINE__);
        }
        $this->PrintedDate = $printedDate;
        return $this;
    }
    /**
     * Get PrintedTime value
     * @return string|null
     */
    public function getPrintedTime()
    {
        return $this->PrintedTime;
    }
    /**
     * Set PrintedTime value
     * @param string $printedTime
     * @return \StructType\TicketListingDetailsType
     */
    public function setPrintedTime($printedTime = null)
    {
        // validation for constraint: string
        if (!is_null($printedTime) && !is_string($printedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printedTime, true), gettype($printedTime)), __LINE__);
        }
        $this->PrintedTime = $printedTime;
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
     * @return \StructType\TicketListingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
