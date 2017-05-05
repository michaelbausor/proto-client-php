<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Result returned from `ListLogEntries`.
 * </pre>
 *
 * Protobuf type <code>google.logging.v2.ListLogEntriesResponse</code>
 */
class ListLogEntriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of log entries.
     * </pre>
     *
     * <code>repeated .google.logging.v2.LogEntry entries = 1;</code>
     */
    private $entries;
    /**
     * <pre>
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * If a value for `next_page_token` appears and the `entries` field is empty,
     * it means that the search found no log entries so far but it did not have
     * time to search all the possible log entries.  Retry the method with this
     * value for `page_token` to continue the search.  Alternatively, consider
     * speeding up the search by changing your filter to specify a single log name
     * or resource type, or to narrow the time range of the search.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of log entries.
     * </pre>
     *
     * <code>repeated .google.logging.v2.LogEntry entries = 1;</code>
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * <pre>
     * A list of log entries.
     * </pre>
     *
     * <code>repeated .google.logging.v2.LogEntry entries = 1;</code>
     */
    public function setEntries(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Logging\V2\LogEntry::class);
        $this->entries = $arr;
    }

    /**
     * <pre>
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * If a value for `next_page_token` appears and the `entries` field is empty,
     * it means that the search found no log entries so far but it did not have
     * time to search all the possible log entries.  Retry the method with this
     * value for `page_token` to continue the search.  Alternatively, consider
     * speeding up the search by changing your filter to specify a single log name
     * or resource type, or to narrow the time range of the search.
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
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     * If a value for `next_page_token` appears and the `entries` field is empty,
     * it means that the search found no log entries so far but it did not have
     * time to search all the possible log entries.  Retry the method with this
     * value for `page_token` to continue the search.  Alternatively, consider
     * speeding up the search by changing your filter to specify a single log name
     * or resource type, or to narrow the time range of the search.
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

