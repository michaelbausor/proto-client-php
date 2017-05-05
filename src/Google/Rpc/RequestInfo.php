<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Contains metadata about the request that clients can attach when filing a bug
 * or providing other forms of feedback.
 * </pre>
 *
 * Protobuf type <code>google.rpc.RequestInfo</code>
 */
class RequestInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * An opaque string that should only be interpreted by the service generating
     * it. For example, it can be used to identify requests in the service's logs.
     * </pre>
     *
     * <code>string request_id = 1;</code>
     */
    private $request_id = '';
    /**
     * <pre>
     * Any data that was used to serve this request. For example, an encrypted
     * stack trace that can be sent back to the service provider for debugging.
     * </pre>
     *
     * <code>string serving_data = 2;</code>
     */
    private $serving_data = '';

    public function __construct() {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * An opaque string that should only be interpreted by the service generating
     * it. For example, it can be used to identify requests in the service's logs.
     * </pre>
     *
     * <code>string request_id = 1;</code>
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * <pre>
     * An opaque string that should only be interpreted by the service generating
     * it. For example, it can be used to identify requests in the service's logs.
     * </pre>
     *
     * <code>string request_id = 1;</code>
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;
    }

    /**
     * <pre>
     * Any data that was used to serve this request. For example, an encrypted
     * stack trace that can be sent back to the service provider for debugging.
     * </pre>
     *
     * <code>string serving_data = 2;</code>
     */
    public function getServingData()
    {
        return $this->serving_data;
    }

    /**
     * <pre>
     * Any data that was used to serve this request. For example, an encrypted
     * stack trace that can be sent back to the service provider for debugging.
     * </pre>
     *
     * <code>string serving_data = 2;</code>
     */
    public function setServingData($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_data = $var;
    }

}

