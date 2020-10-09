<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationsUsageResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns an array of notifications sent to a given application identified by the appID (comes in the credentials). The result can be used by third-party developers troubleshoot issues with notifications. <br/><br/> Zero, one or many
 * notifications can be returned in the array. The set of notifications returned is limited to those that were sent between the <b>StartTime</b> and <b>EndTime</b> specified in the request. <br/><br/> If <b>StartTime</b> or <b>EndTime</b> filters were
 * not found in the request, then the response will contain the data for only one day (Now-1day). By default, maximum duration is limited to 3 days (Now-3days). These min (1day) and max(3days) applies to <b>Notifications</b>,
 * <b>MarkDownMarkUpHistory</b> and <b>NotificationStatistics</b>. <br/><br/> Notifications are sent only if the <b>ItemID</b> is included in the request. If there is no <b>ItemID</b>, then only <b>Statistics</b> and <b>MarkDownMarkUpHistory</b>
 * information is included.
 * @subpackage Structs
 */
class GetNotificationsUsageResponseType extends AbstractResponseType
{
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Returns the start date and time for the notification information that is returned by this call.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Returns the end date and time for the notification information that is returned by this call.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The NotificationDetailsArray
     * Meta information extracted from the WSDL
     * - documentation: List of notification objects representing the notifications sent to an application for the given time period. It will only be returned if ItemID was specified in the input request.
     * - minOccurs: 0
     * @var \ArrayType\NotificationDetailsArrayType
     */
    public $NotificationDetailsArray;
    /**
     * The MarkUpMarkDownHistory
     * Meta information extracted from the WSDL
     * - documentation: List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     * - minOccurs: 0
     * @var \StructType\MarkUpMarkDownHistoryType
     */
    public $MarkUpMarkDownHistory;
    /**
     * The NotificationStatistics
     * Meta information extracted from the WSDL
     * - documentation: Summary information about number of notifications that were successfully delivered, queued, failed, connection attempts made, connection timeouts, http errors for the given appID and given time period. By default, statistics for only
     * one day (Now-1day) is included. Maximum time duration allowed is 3 days (Now-3days).
     * - minOccurs: 0
     * @var \StructType\NotificationStatisticsType
     */
    public $NotificationStatistics;
    /**
     * Constructor method for GetNotificationsUsageResponseType
     * @uses GetNotificationsUsageResponseType::setStartTime()
     * @uses GetNotificationsUsageResponseType::setEndTime()
     * @uses GetNotificationsUsageResponseType::setNotificationDetailsArray()
     * @uses GetNotificationsUsageResponseType::setMarkUpMarkDownHistory()
     * @uses GetNotificationsUsageResponseType::setNotificationStatistics()
     * @param string $startTime
     * @param string $endTime
     * @param \ArrayType\NotificationDetailsArrayType $notificationDetailsArray
     * @param \StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory
     * @param \StructType\NotificationStatisticsType $notificationStatistics
     */
    public function __construct($startTime = null, $endTime = null, \ArrayType\NotificationDetailsArrayType $notificationDetailsArray = null, \StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory = null, \StructType\NotificationStatisticsType $notificationStatistics = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setNotificationDetailsArray($notificationDetailsArray)
            ->setMarkUpMarkDownHistory($markUpMarkDownHistory)
            ->setNotificationStatistics($notificationStatistics);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\GetNotificationsUsageResponseType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\GetNotificationsUsageResponseType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get NotificationDetailsArray value
     * @return \ArrayType\NotificationDetailsArrayType|null
     */
    public function getNotificationDetailsArray()
    {
        return $this->NotificationDetailsArray;
    }
    /**
     * Set NotificationDetailsArray value
     * @param \ArrayType\NotificationDetailsArrayType $notificationDetailsArray
     * @return \StructType\GetNotificationsUsageResponseType
     */
    public function setNotificationDetailsArray(\ArrayType\NotificationDetailsArrayType $notificationDetailsArray = null)
    {
        $this->NotificationDetailsArray = $notificationDetailsArray;
        return $this;
    }
    /**
     * Get MarkUpMarkDownHistory value
     * @return \StructType\MarkUpMarkDownHistoryType|null
     */
    public function getMarkUpMarkDownHistory()
    {
        return $this->MarkUpMarkDownHistory;
    }
    /**
     * Set MarkUpMarkDownHistory value
     * @param \StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory
     * @return \StructType\GetNotificationsUsageResponseType
     */
    public function setMarkUpMarkDownHistory(\StructType\MarkUpMarkDownHistoryType $markUpMarkDownHistory = null)
    {
        $this->MarkUpMarkDownHistory = $markUpMarkDownHistory;
        return $this;
    }
    /**
     * Get NotificationStatistics value
     * @return \StructType\NotificationStatisticsType|null
     */
    public function getNotificationStatistics()
    {
        return $this->NotificationStatistics;
    }
    /**
     * Set NotificationStatistics value
     * @param \StructType\NotificationStatisticsType $notificationStatistics
     * @return \StructType\GetNotificationsUsageResponseType
     */
    public function setNotificationStatistics(\StructType\NotificationStatisticsType $notificationStatistics = null)
    {
        $this->NotificationStatistics = $notificationStatistics;
        return $this;
    }
}
