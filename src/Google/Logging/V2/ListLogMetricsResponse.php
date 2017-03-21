<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Result returned from ListLogMetrics.
 * </pre>
 *
 * Protobuf type <code>google.logging.v2.ListLogMetricsResponse</code>
 */
class ListLogMetricsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of logs-based metrics.
     * </pre>
     *
     * <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     */
    private $metrics;
    /**
     * <pre>
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LoggingMetrics::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of logs-based metrics.
     * </pre>
     *
     * <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * <pre>
     * A list of logs-based metrics.
     * </pre>
     *
     * <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     */
    public function setMetrics(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Logging\V2\LogMetric::class);
        $this->metrics = $var;
    }

    /**
     * <pre>
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * <pre>
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}

