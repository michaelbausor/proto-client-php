<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

require_once('google/api/annotations.pb.php');
require_once('google/protobuf/any.pb.php');
require_once('google/protobuf/struct.pb.php');
require_once('google/rpc/status.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class AuditLog extends \Google\Protobuf\Internal\Message
{
    private $service_name = '';
    private $method_name = '';
    private $resource_name = '';
    private $num_response_items = 0;
    private $status = null;
    private $authentication_info = null;
    private $authorization_info;
    private $request_metadata = null;
    private $request = null;
    private $response = null;
    private $service_data = null;

    public function getServiceName()
    {
        return $this->service_name;
    }

    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;
    }

    public function getMethodName()
    {
        return $this->method_name;
    }

    public function setMethodName($var)
    {
        GPBUtil::checkString($var, True);
        $this->method_name = $var;
    }

    public function getResourceName()
    {
        return $this->resource_name;
    }

    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;
    }

    public function getNumResponseItems()
    {
        return $this->num_response_items;
    }

    public function setNumResponseItems($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_response_items = $var;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;
    }

    public function getAuthenticationInfo()
    {
        return $this->authentication_info;
    }

    public function setAuthenticationInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\AuthenticationInfo::class);
        $this->authentication_info = $var;
    }

    public function getAuthorizationInfo()
    {
        return $this->authorization_info;
    }

    public function setAuthorizationInfo(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Cloud\Audit\AuthorizationInfo::class);
        $this->authorization_info = $var;
    }

    public function getRequestMetadata()
    {
        return $this->request_metadata;
    }

    public function setRequestMetadata(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\RequestMetadata::class);
        $this->request_metadata = $var;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->request = $var;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->response = $var;
    }

    public function getServiceData()
    {
        return $this->service_data;
    }

    public function setServiceData(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->service_data = $var;
    }

}

class AuthenticationInfo extends \Google\Protobuf\Internal\Message
{
    private $principal_email = '';

    public function getPrincipalEmail()
    {
        return $this->principal_email;
    }

    public function setPrincipalEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_email = $var;
    }

}

class AuthorizationInfo extends \Google\Protobuf\Internal\Message
{
    private $resource = '';
    private $permission = '';
    private $granted = false;

    public function getResource()
    {
        return $this->resource;
    }

    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;
    }

    public function getPermission()
    {
        return $this->permission;
    }

    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;
    }

    public function getGranted()
    {
        return $this->granted;
    }

    public function setGranted($var)
    {
        GPBUtil::checkBool($var);
        $this->granted = $var;
    }

}

class RequestMetadata extends \Google\Protobuf\Internal\Message
{
    private $caller_ip = '';
    private $caller_supplied_user_agent = '';

    public function getCallerIp()
    {
        return $this->caller_ip;
    }

    public function setCallerIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_ip = $var;
    }

    public function getCallerSuppliedUserAgent()
    {
        return $this->caller_supplied_user_agent;
    }

    public function setCallerSuppliedUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_supplied_user_agent = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af7060a22676f6f676c652f636c6f75642f61756469742f61756469745f" .
    "6c6f672e70726f746f1212676f6f676c652e636c6f75642e61756469741a" .
    "1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a" .
    "19676f6f676c652f70726f746f6275662f616e792e70726f746f1a1c676f" .
    "6f676c652f70726f746f6275662f7374727563742e70726f746f1a17676f" .
    "6f676c652f7270632f7374617475732e70726f746f22d4030a0841756469" .
    "744c6f6712140a0c736572766963655f6e616d6518072001280912130a0b" .
    "6d6574686f645f6e616d6518082001280912150a0d7265736f757263655f" .
    "6e616d65180b20012809121a0a126e756d5f726573706f6e73655f697465" .
    "6d73180c2001280312220a0673746174757318022001280b32122e676f6f" .
    "676c652e7270632e53746174757312430a1361757468656e746963617469" .
    "6f6e5f696e666f18032001280b32262e676f6f676c652e636c6f75642e61" .
    "756469742e41757468656e7469636174696f6e496e666f12410a12617574" .
    "686f72697a6174696f6e5f696e666f18092003280b32252e676f6f676c65" .
    "2e636c6f75642e61756469742e417574686f72697a6174696f6e496e666f" .
    "123d0a10726571756573745f6d6574616461746118042001280b32232e67" .
    "6f6f676c652e636c6f75642e61756469742e526571756573744d65746164" .
    "61746112280a077265717565737418102001280b32172e676f6f676c652e" .
    "70726f746f6275662e53747275637412290a08726573706f6e7365181120" .
    "01280b32172e676f6f676c652e70726f746f6275662e537472756374122a" .
    "0a0c736572766963655f64617461180f2001280b32142e676f6f676c652e" .
    "70726f746f6275662e416e79222d0a1241757468656e7469636174696f6e" .
    "496e666f12170a0f7072696e636970616c5f656d61696c18012001280922" .
    "4a0a11417574686f72697a6174696f6e496e666f12100a087265736f7572" .
    "636518012001280912120a0a7065726d697373696f6e180220012809120f" .
    "0a076772616e74656418032001280822480a0f526571756573744d657461" .
    "6461746112110a0963616c6c65725f697018012001280912220a1a63616c" .
    "6c65725f737570706c6965645f757365725f6167656e7418022001280942" .
    "290a16636f6d2e676f6f676c652e636c6f75642e6175646974420d417564" .
    "69744c6f6750726f746f5001620670726f746f33"
));

