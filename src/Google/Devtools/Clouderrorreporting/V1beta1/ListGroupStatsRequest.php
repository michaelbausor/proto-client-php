<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Devtools\Clouderrorreporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies a set of `ErrorGroupStats` to return.
 * </pre>
 *
 * Protobuf type <code>google.devtools.clouderrorreporting.v1beta1.ListGroupStatsRequest</code>
 */
class ListGroupStatsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * [Required] The resource name of the Google Cloud Platform project. Written
     * as &lt;code&gt;projects/&lt;/code&gt; plus the
     * &lt;a href="https://support.google.com/cloud/answer/6158840"&gt;Google Cloud
     * Platform project ID&lt;/a&gt;.
     * Example: &lt;code&gt;projects/my-project-123&lt;/code&gt;.
     * </pre>
     *
     * <code>string project_name = 1;</code>
     */
    private $project_name = '';
    /**
     * <pre>
     * [Optional] List all &lt;code&gt;ErrorGroupStats&lt;/code&gt; with these IDs.
     * </pre>
     *
     * <code>repeated string group_id = 2;</code>
     */
    private $group_id;
    /**
     * <pre>
     * [Optional] List only &lt;code&gt;ErrorGroupStats&lt;/code&gt; which belong to a service
     * context that matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3;</code>
     */
    private $service_filter = null;
    /**
     * <pre>
     * [Optional] List data for the given time range.
     * If not set a default time range is used. The field time_range_begin
     * in the response will specify the beginning of this time range.
     * Only &lt;code&gt;ErrorGroupStats&lt;/code&gt; with a non-zero count in the given time
     * range are returned, unless the request contains an explicit group_id list.
     * If a group_id list is given, also &lt;code&gt;ErrorGroupStats&lt;/code&gt; with zero
     * occurrences are returned.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 5;</code>
     */
    private $time_range = null;
    /**
     * <pre>
     * [Optional] The preferred duration for a single returned `TimedCount`.
     * If not set, no timed counts are returned.
     * </pre>
     *
     * <code>.google.protobuf.Duration timed_count_duration = 6;</code>
     */
    private $timed_count_duration = null;
    /**
     * <pre>
     * [Optional] The alignment of the timed counts to be returned.
     * Default is `ALIGNMENT_EQUAL_AT_END`.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.TimedCountAlignment alignment = 7;</code>
     */
    private $alignment = 0;
    /**
     * <pre>
     * [Optional] Time where the timed counts shall be aligned if rounded
     * alignment is chosen. Default is 00:00 UTC.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp alignment_time = 8;</code>
     */
    private $alignment_time = null;
    /**
     * <pre>
     * [Optional] The sort order in which the results are returned.
     * Default is `COUNT_DESC`.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroupOrder order = 9;</code>
     */
    private $order = 0;
    /**
     * <pre>
     * [Optional] The maximum number of results to return per response.
     * Default is 20.
     * </pre>
     *
     * <code>int32 page_size = 11;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * [Optional] A `next_page_token` provided by a previous response. To view
     * additional results, pass this token along with the identical query
     * parameters as the first request.
     * </pre>
     *
     * <code>string page_token = 12;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * [Required] The resource name of the Google Cloud Platform project. Written
     * as &lt;code&gt;projects/&lt;/code&gt; plus the
     * &lt;a href="https://support.google.com/cloud/answer/6158840"&gt;Google Cloud
     * Platform project ID&lt;/a&gt;.
     * Example: &lt;code&gt;projects/my-project-123&lt;/code&gt;.
     * </pre>
     *
     * <code>string project_name = 1;</code>
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * <pre>
     * [Required] The resource name of the Google Cloud Platform project. Written
     * as &lt;code&gt;projects/&lt;/code&gt; plus the
     * &lt;a href="https://support.google.com/cloud/answer/6158840"&gt;Google Cloud
     * Platform project ID&lt;/a&gt;.
     * Example: &lt;code&gt;projects/my-project-123&lt;/code&gt;.
     * </pre>
     *
     * <code>string project_name = 1;</code>
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;
    }

    /**
     * <pre>
     * [Optional] List all &lt;code&gt;ErrorGroupStats&lt;/code&gt; with these IDs.
     * </pre>
     *
     * <code>repeated string group_id = 2;</code>
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <pre>
     * [Optional] List all &lt;code&gt;ErrorGroupStats&lt;/code&gt; with these IDs.
     * </pre>
     *
     * <code>repeated string group_id = 2;</code>
     */
    public function setGroupId(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->group_id = $var;
    }

    /**
     * <pre>
     * [Optional] List only &lt;code&gt;ErrorGroupStats&lt;/code&gt; which belong to a service
     * context that matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3;</code>
     */
    public function getServiceFilter()
    {
        return $this->service_filter;
    }

    /**
     * <pre>
     * [Optional] List only &lt;code&gt;ErrorGroupStats&lt;/code&gt; which belong to a service
     * context that matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3;</code>
     */
    public function setServiceFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Clouderrorreporting\V1beta1\ServiceContextFilter::class);
        $this->service_filter = $var;
    }

    /**
     * <pre>
     * [Optional] List data for the given time range.
     * If not set a default time range is used. The field time_range_begin
     * in the response will specify the beginning of this time range.
     * Only &lt;code&gt;ErrorGroupStats&lt;/code&gt; with a non-zero count in the given time
     * range are returned, unless the request contains an explicit group_id list.
     * If a group_id list is given, also &lt;code&gt;ErrorGroupStats&lt;/code&gt; with zero
     * occurrences are returned.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 5;</code>
     */
    public function getTimeRange()
    {
        return $this->time_range;
    }

    /**
     * <pre>
     * [Optional] List data for the given time range.
     * If not set a default time range is used. The field time_range_begin
     * in the response will specify the beginning of this time range.
     * Only &lt;code&gt;ErrorGroupStats&lt;/code&gt; with a non-zero count in the given time
     * range are returned, unless the request contains an explicit group_id list.
     * If a group_id list is given, also &lt;code&gt;ErrorGroupStats&lt;/code&gt; with zero
     * occurrences are returned.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 5;</code>
     */
    public function setTimeRange(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Clouderrorreporting\V1beta1\QueryTimeRange::class);
        $this->time_range = $var;
    }

    /**
     * <pre>
     * [Optional] The preferred duration for a single returned `TimedCount`.
     * If not set, no timed counts are returned.
     * </pre>
     *
     * <code>.google.protobuf.Duration timed_count_duration = 6;</code>
     */
    public function getTimedCountDuration()
    {
        return $this->timed_count_duration;
    }

    /**
     * <pre>
     * [Optional] The preferred duration for a single returned `TimedCount`.
     * If not set, no timed counts are returned.
     * </pre>
     *
     * <code>.google.protobuf.Duration timed_count_duration = 6;</code>
     */
    public function setTimedCountDuration(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timed_count_duration = $var;
    }

    /**
     * <pre>
     * [Optional] The alignment of the timed counts to be returned.
     * Default is `ALIGNMENT_EQUAL_AT_END`.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.TimedCountAlignment alignment = 7;</code>
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * <pre>
     * [Optional] The alignment of the timed counts to be returned.
     * Default is `ALIGNMENT_EQUAL_AT_END`.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.TimedCountAlignment alignment = 7;</code>
     */
    public function setAlignment($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Clouderrorreporting\V1beta1\TimedCountAlignment::class);
        $this->alignment = $var;
    }

    /**
     * <pre>
     * [Optional] Time where the timed counts shall be aligned if rounded
     * alignment is chosen. Default is 00:00 UTC.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp alignment_time = 8;</code>
     */
    public function getAlignmentTime()
    {
        return $this->alignment_time;
    }

    /**
     * <pre>
     * [Optional] Time where the timed counts shall be aligned if rounded
     * alignment is chosen. Default is 00:00 UTC.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp alignment_time = 8;</code>
     */
    public function setAlignmentTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->alignment_time = $var;
    }

    /**
     * <pre>
     * [Optional] The sort order in which the results are returned.
     * Default is `COUNT_DESC`.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroupOrder order = 9;</code>
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * <pre>
     * [Optional] The sort order in which the results are returned.
     * Default is `COUNT_DESC`.
     * </pre>
     *
     * <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroupOrder order = 9;</code>
     */
    public function setOrder($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Clouderrorreporting\V1beta1\ErrorGroupOrder::class);
        $this->order = $var;
    }

    /**
     * <pre>
     * [Optional] The maximum number of results to return per response.
     * Default is 20.
     * </pre>
     *
     * <code>int32 page_size = 11;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * [Optional] The maximum number of results to return per response.
     * Default is 20.
     * </pre>
     *
     * <code>int32 page_size = 11;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * [Optional] A `next_page_token` provided by a previous response. To view
     * additional results, pass this token along with the identical query
     * parameters as the first request.
     * </pre>
     *
     * <code>string page_token = 12;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * [Optional] A `next_page_token` provided by a previous response. To view
     * additional results, pass this token along with the identical query
     * parameters as the first request.
     * </pre>
     *
     * <code>string page_token = 12;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

