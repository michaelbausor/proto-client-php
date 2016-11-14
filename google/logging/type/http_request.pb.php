<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/type/http_request.proto

namespace Google\Logging\Type;

require_once('google/api/annotations.pb.php');
//require_once('google/protobuf/duration.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class HttpRequest extends \Google\Protobuf\Internal\Message
{
    private $request_method = '';
    private $request_url = '';
    private $request_size = 0;
    private $status = 0;
    private $response_size = 0;
    private $user_agent = '';
    private $remote_ip = '';
    private $server_ip = '';
    private $referer = '';
    private $latency = null;
    private $cache_lookup = false;
    private $cache_hit = false;
    private $cache_validated_with_origin_server = false;
    private $cache_fill_bytes = 0;

    public function getRequestMethod()
    {
        return $this->request_method;
    }

    public function setRequestMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_method = $var;
    }

    public function getRequestUrl()
    {
        return $this->request_url;
    }

    public function setRequestUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_url = $var;
    }

    public function getRequestSize()
    {
        return $this->request_size;
    }

    public function setRequestSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->request_size = $var;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->status = $var;
    }

    public function getResponseSize()
    {
        return $this->response_size;
    }

    public function setResponseSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->response_size = $var;
    }

    public function getUserAgent()
    {
        return $this->user_agent;
    }

    public function setUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_agent = $var;
    }

    public function getRemoteIp()
    {
        return $this->remote_ip;
    }

    public function setRemoteIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_ip = $var;
    }

    public function getServerIp()
    {
        return $this->server_ip;
    }

    public function setServerIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_ip = $var;
    }

    public function getReferer()
    {
        return $this->referer;
    }

    public function setReferer($var)
    {
        GPBUtil::checkString($var, True);
        $this->referer = $var;
    }

    public function getLatency()
    {
        return $this->latency;
    }

    public function setLatency(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->latency = $var;
    }

    public function getCacheLookup()
    {
        return $this->cache_lookup;
    }

    public function setCacheLookup($var)
    {
        GPBUtil::checkBool($var);
        $this->cache_lookup = $var;
    }

    public function getCacheHit()
    {
        return $this->cache_hit;
    }

    public function setCacheHit($var)
    {
        GPBUtil::checkBool($var);
        $this->cache_hit = $var;
    }

    public function getCacheValidatedWithOriginServer()
    {
        return $this->cache_validated_with_origin_server;
    }

    public function setCacheValidatedWithOriginServer($var)
    {
        GPBUtil::checkBool($var);
        $this->cache_validated_with_origin_server = $var;
    }

    public function getCacheFillBytes()
    {
        return $this->cache_fill_bytes;
    }

    public function setCacheFillBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->cache_fill_bytes = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a92040a26676f6f676c652f6c6f6767696e672f747970652f687474705f" .
    "726571756573742e70726f746f1213676f6f676c652e6c6f6767696e672e" .
    "747970651a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70" .
    "726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e" .
    "2e70726f746f22dd020a0b487474705265717565737412160a0e72657175" .
    "6573745f6d6574686f6418012001280912130a0b726571756573745f7572" .
    "6c18022001280912140a0c726571756573745f73697a6518032001280312" .
    "0e0a0673746174757318042001280512150a0d726573706f6e73655f7369" .
    "7a6518052001280312120a0a757365725f6167656e741806200128091211" .
    "0a0972656d6f74655f697018072001280912110a097365727665725f6970" .
    "180d20012809120f0a0772656665726572180820012809122a0a076c6174" .
    "656e6379180e2001280b32192e676f6f676c652e70726f746f6275662e44" .
    "75726174696f6e12140a0c63616368655f6c6f6f6b7570180b2001280812" .
    "110a0963616368655f686974180920012808122a0a2263616368655f7661" .
    "6c6964617465645f776974685f6f726967696e5f736572766572180a2001" .
    "280812180a1063616368655f66696c6c5f6279746573180c20012803422d" .
    "0a17636f6d2e676f6f676c652e6c6f6767696e672e747970654210487474" .
    "705265717565737450726f746f5001620670726f746f33"
));

