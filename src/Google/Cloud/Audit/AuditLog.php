<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Common audit log format for Google Cloud Platform API operations.
 * </pre>
 *
 * Protobuf type <code>google.cloud.audit.AuditLog</code>
 */
class AuditLog extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the API service performing the operation. For example,
     * `"datastore.googleapis.com"`.
     * </pre>
     *
     * <code>string service_name = 7;</code>
     */
    private $service_name = '';
    /**
     * <pre>
     * The name of the service method or operation.
     * For API calls, this should be the name of the API method.
     * For example,
     *     "google.datastore.v1.Datastore.RunQuery"
     *     "google.logging.v1.LoggingService.DeleteLog"
     * </pre>
     *
     * <code>string method_name = 8;</code>
     */
    private $method_name = '';
    /**
     * <pre>
     * The resource or collection that is the target of the operation.
     * The name is a scheme-less URI, not including the API service name.
     * For example:
     *     "shelves/SHELF_ID/books"
     *     "shelves/SHELF_ID/books/BOOK_ID"
     * </pre>
     *
     * <code>string resource_name = 11;</code>
     */
    private $resource_name = '';
    /**
     * <pre>
     * The number of items returned from a List or Query API method,
     * if applicable.
     * </pre>
     *
     * <code>int64 num_response_items = 12;</code>
     */
    private $num_response_items = 0;
    /**
     * <pre>
     * The status of the overall operation.
     * </pre>
     *
     * <code>.google.rpc.Status status = 2;</code>
     */
    private $status = null;
    /**
     * <pre>
     * Authentication information.
     * </pre>
     *
     * <code>.google.cloud.audit.AuthenticationInfo authentication_info = 3;</code>
     */
    private $authentication_info = null;
    /**
     * <pre>
     * Authorization information. If there are multiple
     * resources or permissions involved, then there is
     * one AuthorizationInfo element for each {resource, permission} tuple.
     * </pre>
     *
     * <code>repeated .google.cloud.audit.AuthorizationInfo authorization_info = 9;</code>
     */
    private $authorization_info;
    /**
     * <pre>
     * Metadata about the operation.
     * </pre>
     *
     * <code>.google.cloud.audit.RequestMetadata request_metadata = 4;</code>
     */
    private $request_metadata = null;
    /**
     * <pre>
     * The operation request. This may not include all request parameters,
     * such as those that are too large, privacy-sensitive, or duplicated
     * elsewhere in the log record.
     * It should never include user-generated data, such as file contents.
     * When the JSON object represented here has a proto equivalent, the proto
     * name will be indicated in the `&#64;type` property.
     * </pre>
     *
     * <code>.google.protobuf.Struct request = 16;</code>
     */
    private $request = null;
    /**
     * <pre>
     * The operation response. This may not include all response elements,
     * such as those that are too large, privacy-sensitive, or duplicated
     * elsewhere in the log record.
     * It should never include user-generated data, such as file contents.
     * When the JSON object represented here has a proto equivalent, the proto
     * name will be indicated in the `&#64;type` property.
     * </pre>
     *
     * <code>.google.protobuf.Struct response = 17;</code>
     */
    private $response = null;
    /**
     * <pre>
     * Other service-specific data about the request, response, and other
     * activities.
     * </pre>
     *
     * <code>.google.protobuf.Any service_data = 15;</code>
     */
    private $service_data = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the API service performing the operation. For example,
     * `"datastore.googleapis.com"`.
     * </pre>
     *
     * <code>string service_name = 7;</code>
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * <pre>
     * The name of the API service performing the operation. For example,
     * `"datastore.googleapis.com"`.
     * </pre>
     *
     * <code>string service_name = 7;</code>
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;
    }

    /**
     * <pre>
     * The name of the service method or operation.
     * For API calls, this should be the name of the API method.
     * For example,
     *     "google.datastore.v1.Datastore.RunQuery"
     *     "google.logging.v1.LoggingService.DeleteLog"
     * </pre>
     *
     * <code>string method_name = 8;</code>
     */
    public function getMethodName()
    {
        return $this->method_name;
    }

    /**
     * <pre>
     * The name of the service method or operation.
     * For API calls, this should be the name of the API method.
     * For example,
     *     "google.datastore.v1.Datastore.RunQuery"
     *     "google.logging.v1.LoggingService.DeleteLog"
     * </pre>
     *
     * <code>string method_name = 8;</code>
     */
    public function setMethodName($var)
    {
        GPBUtil::checkString($var, True);
        $this->method_name = $var;
    }

    /**
     * <pre>
     * The resource or collection that is the target of the operation.
     * The name is a scheme-less URI, not including the API service name.
     * For example:
     *     "shelves/SHELF_ID/books"
     *     "shelves/SHELF_ID/books/BOOK_ID"
     * </pre>
     *
     * <code>string resource_name = 11;</code>
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * <pre>
     * The resource or collection that is the target of the operation.
     * The name is a scheme-less URI, not including the API service name.
     * For example:
     *     "shelves/SHELF_ID/books"
     *     "shelves/SHELF_ID/books/BOOK_ID"
     * </pre>
     *
     * <code>string resource_name = 11;</code>
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;
    }

    /**
     * <pre>
     * The number of items returned from a List or Query API method,
     * if applicable.
     * </pre>
     *
     * <code>int64 num_response_items = 12;</code>
     */
    public function getNumResponseItems()
    {
        return $this->num_response_items;
    }

    /**
     * <pre>
     * The number of items returned from a List or Query API method,
     * if applicable.
     * </pre>
     *
     * <code>int64 num_response_items = 12;</code>
     */
    public function setNumResponseItems($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_response_items = $var;
    }

    /**
     * <pre>
     * The status of the overall operation.
     * </pre>
     *
     * <code>.google.rpc.Status status = 2;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <pre>
     * The status of the overall operation.
     * </pre>
     *
     * <code>.google.rpc.Status status = 2;</code>
     */
    public function setStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;
    }

    /**
     * <pre>
     * Authentication information.
     * </pre>
     *
     * <code>.google.cloud.audit.AuthenticationInfo authentication_info = 3;</code>
     */
    public function getAuthenticationInfo()
    {
        return $this->authentication_info;
    }

    /**
     * <pre>
     * Authentication information.
     * </pre>
     *
     * <code>.google.cloud.audit.AuthenticationInfo authentication_info = 3;</code>
     */
    public function setAuthenticationInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\AuthenticationInfo::class);
        $this->authentication_info = $var;
    }

    /**
     * <pre>
     * Authorization information. If there are multiple
     * resources or permissions involved, then there is
     * one AuthorizationInfo element for each {resource, permission} tuple.
     * </pre>
     *
     * <code>repeated .google.cloud.audit.AuthorizationInfo authorization_info = 9;</code>
     */
    public function getAuthorizationInfo()
    {
        return $this->authorization_info;
    }

    /**
     * <pre>
     * Authorization information. If there are multiple
     * resources or permissions involved, then there is
     * one AuthorizationInfo element for each {resource, permission} tuple.
     * </pre>
     *
     * <code>repeated .google.cloud.audit.AuthorizationInfo authorization_info = 9;</code>
     */
    public function setAuthorizationInfo(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Audit\AuthorizationInfo::class);
        $this->authorization_info = $arr;
    }

    /**
     * <pre>
     * Metadata about the operation.
     * </pre>
     *
     * <code>.google.cloud.audit.RequestMetadata request_metadata = 4;</code>
     */
    public function getRequestMetadata()
    {
        return $this->request_metadata;
    }

    /**
     * <pre>
     * Metadata about the operation.
     * </pre>
     *
     * <code>.google.cloud.audit.RequestMetadata request_metadata = 4;</code>
     */
    public function setRequestMetadata(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\RequestMetadata::class);
        $this->request_metadata = $var;
    }

    /**
     * <pre>
     * The operation request. This may not include all request parameters,
     * such as those that are too large, privacy-sensitive, or duplicated
     * elsewhere in the log record.
     * It should never include user-generated data, such as file contents.
     * When the JSON object represented here has a proto equivalent, the proto
     * name will be indicated in the `&#64;type` property.
     * </pre>
     *
     * <code>.google.protobuf.Struct request = 16;</code>
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * <pre>
     * The operation request. This may not include all request parameters,
     * such as those that are too large, privacy-sensitive, or duplicated
     * elsewhere in the log record.
     * It should never include user-generated data, such as file contents.
     * When the JSON object represented here has a proto equivalent, the proto
     * name will be indicated in the `&#64;type` property.
     * </pre>
     *
     * <code>.google.protobuf.Struct request = 16;</code>
     */
    public function setRequest(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->request = $var;
    }

    /**
     * <pre>
     * The operation response. This may not include all response elements,
     * such as those that are too large, privacy-sensitive, or duplicated
     * elsewhere in the log record.
     * It should never include user-generated data, such as file contents.
     * When the JSON object represented here has a proto equivalent, the proto
     * name will be indicated in the `&#64;type` property.
     * </pre>
     *
     * <code>.google.protobuf.Struct response = 17;</code>
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * <pre>
     * The operation response. This may not include all response elements,
     * such as those that are too large, privacy-sensitive, or duplicated
     * elsewhere in the log record.
     * It should never include user-generated data, such as file contents.
     * When the JSON object represented here has a proto equivalent, the proto
     * name will be indicated in the `&#64;type` property.
     * </pre>
     *
     * <code>.google.protobuf.Struct response = 17;</code>
     */
    public function setResponse(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->response = $var;
    }

    /**
     * <pre>
     * Other service-specific data about the request, response, and other
     * activities.
     * </pre>
     *
     * <code>.google.protobuf.Any service_data = 15;</code>
     */
    public function getServiceData()
    {
        return $this->service_data;
    }

    /**
     * <pre>
     * Other service-specific data about the request, response, and other
     * activities.
     * </pre>
     *
     * <code>.google.protobuf.Any service_data = 15;</code>
     */
    public function setServiceData(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->service_data = $var;
    }

}

