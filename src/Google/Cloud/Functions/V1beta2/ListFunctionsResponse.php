<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1beta2/functions.proto

namespace Google\Cloud\Functions\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for the `ListFunctions` method.
 * </pre>
 *
 * Protobuf type <code>google.cloud.functions.v1beta2.ListFunctionsResponse</code>
 */
class ListFunctionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The functions that match the request.
     * </pre>
     *
     * <code>repeated .google.cloud.functions.v1beta2.CloudFunction functions = 1;</code>
     */
    private $functions;
    /**
     * <pre>
     * If not empty, indicates that there may be more functions that match
     * the request; this value should be passed in a new
     * [google.cloud.functions.v1beta2.ListFunctionsRequest][]
     * to get more functions.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Functions\V1Beta2\Functions::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The functions that match the request.
     * </pre>
     *
     * <code>repeated .google.cloud.functions.v1beta2.CloudFunction functions = 1;</code>
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * <pre>
     * The functions that match the request.
     * </pre>
     *
     * <code>repeated .google.cloud.functions.v1beta2.CloudFunction functions = 1;</code>
     */
    public function setFunctions(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Functions\V1beta2\CloudFunction::class);
        $this->functions = $arr;
    }

    /**
     * <pre>
     * If not empty, indicates that there may be more functions that match
     * the request; this value should be passed in a new
     * [google.cloud.functions.v1beta2.ListFunctionsRequest][]
     * to get more functions.
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
     * If not empty, indicates that there may be more functions that match
     * the request; this value should be passed in a new
     * [google.cloud.functions.v1beta2.ListFunctionsRequest][]
     * to get more functions.
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

