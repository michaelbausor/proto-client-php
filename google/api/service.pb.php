<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/service.proto

namespace Google\Api;

require_once('google/api/annotations.pb.php');
require_once('google/api/auth.pb.php');
require_once('google/api/backend.pb.php');
require_once('google/api/context.pb.php');
require_once('google/api/control.pb.php');
require_once('google/api/documentation.pb.php');
require_once('google/api/endpoint.pb.php');
require_once('google/api/http.pb.php');
require_once('google/api/label.pb.php');
require_once('google/api/log.pb.php');
require_once('google/api/logging.pb.php');
require_once('google/api/metric.pb.php');
require_once('google/api/monitored_resource.pb.php');
require_once('google/api/monitoring.pb.php');
require_once('google/api/system_parameter.pb.php');
require_once('google/api/usage.pb.php');
require_once('google/protobuf/any.pb.php');
require_once('google/protobuf/api.pb.php');
require_once('google/protobuf/type.pb.php');
require_once('google/protobuf/wrappers.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Service extends \Google\Protobuf\Internal\Message
{
    private $config_version = null;
    private $name = '';
    private $id = '';
    private $title = '';
    private $producer_project_id = '';
    private $apis;
    private $types;
    private $enums;
    private $documentation = null;
    private $backend = null;
    private $http = null;
    private $authentication = null;
    private $context = null;
    private $usage = null;
    private $endpoints;
    private $control = null;
    private $logs;
    private $metrics;
    private $monitored_resources;
    private $logging = null;
    private $monitoring = null;
    private $system_parameters = null;

    public function getConfigVersion()
    {
        return $this->config_version;
    }

    public function setConfigVersion(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\UInt32Value::class);
        $this->config_version = $var;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;
    }

    public function getProducerProjectId()
    {
        return $this->producer_project_id;
    }

    public function setProducerProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->producer_project_id = $var;
    }

    public function getApis()
    {
        return $this->apis;
    }

    public function setApis(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Protobuf\Api::class);
        $this->apis = $var;
    }

    public function getTypes()
    {
        return $this->types;
    }

    public function setTypes(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Protobuf\Type::class);
        $this->types = $var;
    }

    public function getEnums()
    {
        return $this->enums;
    }

    public function setEnums(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Protobuf\Enum::class);
        $this->enums = $var;
    }

    public function getDocumentation()
    {
        return $this->documentation;
    }

    public function setDocumentation(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Documentation::class);
        $this->documentation = $var;
    }

    public function getBackend()
    {
        return $this->backend;
    }

    public function setBackend(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Backend::class);
        $this->backend = $var;
    }

    public function getHttp()
    {
        return $this->http;
    }

    public function setHttp(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Http::class);
        $this->http = $var;
    }

    public function getAuthentication()
    {
        return $this->authentication;
    }

    public function setAuthentication(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Authentication::class);
        $this->authentication = $var;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function setContext(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Context::class);
        $this->context = $var;
    }

    public function getUsage()
    {
        return $this->usage;
    }

    public function setUsage(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Usage::class);
        $this->usage = $var;
    }

    public function getEndpoints()
    {
        return $this->endpoints;
    }

    public function setEndpoints(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Api\Endpoint::class);
        $this->endpoints = $var;
    }

    public function getControl()
    {
        return $this->control;
    }

    public function setControl(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Control::class);
        $this->control = $var;
    }

    public function getLogs()
    {
        return $this->logs;
    }

    public function setLogs(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Api\LogDescriptor::class);
        $this->logs = $var;
    }

    public function getMetrics()
    {
        return $this->metrics;
    }

    public function setMetrics(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Api\MetricDescriptor::class);
        $this->metrics = $var;
    }

    public function getMonitoredResources()
    {
        return $this->monitored_resources;
    }

    public function setMonitoredResources(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Api\MonitoredResourceDescriptor::class);
        $this->monitored_resources = $var;
    }

    public function getLogging()
    {
        return $this->logging;
    }

    public function setLogging(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Logging::class);
        $this->logging = $var;
    }

    public function getMonitoring()
    {
        return $this->monitoring;
    }

    public function setMonitoring(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Monitoring::class);
        $this->monitoring = $var;
    }

    public function getSystemParameters()
    {
        return $this->system_parameters;
    }

    public function setSystemParameters(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\SystemParameters::class);
        $this->system_parameters = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae00b0a18676f6f676c652f6170692f736572766963652e70726f746f12" .
    "0a676f6f676c652e6170691a1c676f6f676c652f6170692f616e6e6f7461" .
    "74696f6e732e70726f746f1a15676f6f676c652f6170692f617574682e70" .
    "726f746f1a18676f6f676c652f6170692f6261636b656e642e70726f746f" .
    "1a18676f6f676c652f6170692f636f6e746578742e70726f746f1a18676f" .
    "6f676c652f6170692f636f6e74726f6c2e70726f746f1a1e676f6f676c65" .
    "2f6170692f646f63756d656e746174696f6e2e70726f746f1a19676f6f67" .
    "6c652f6170692f656e64706f696e742e70726f746f1a15676f6f676c652f" .
    "6170692f687474702e70726f746f1a16676f6f676c652f6170692f6c6162" .
    "656c2e70726f746f1a14676f6f676c652f6170692f6c6f672e70726f746f" .
    "1a18676f6f676c652f6170692f6c6f6767696e672e70726f746f1a17676f" .
    "6f676c652f6170692f6d65747269632e70726f746f1a23676f6f676c652f" .
    "6170692f6d6f6e69746f7265645f7265736f757263652e70726f746f1a1b" .
    "676f6f676c652f6170692f6d6f6e69746f72696e672e70726f746f1a2167" .
    "6f6f676c652f6170692f73797374656d5f706172616d657465722e70726f" .
    "746f1a16676f6f676c652f6170692f75736167652e70726f746f1a19676f" .
    "6f676c652f70726f746f6275662f616e792e70726f746f1a19676f6f676c" .
    "652f70726f746f6275662f6170692e70726f746f1a1a676f6f676c652f70" .
    "726f746f6275662f747970652e70726f746f1a1e676f6f676c652f70726f" .
    "746f6275662f77726170706572732e70726f746f22e1060a075365727669" .
    "636512340a0e636f6e6669675f76657273696f6e18142001280b321c2e67" .
    "6f6f676c652e70726f746f6275662e55496e74333256616c7565120c0a04" .
    "6e616d65180120012809120a0a026964182120012809120d0a057469746c" .
    "65180220012809121b0a1370726f64756365725f70726f6a6563745f6964" .
    "18162001280912220a046170697318032003280b32142e676f6f676c652e" .
    "70726f746f6275662e41706912240a05747970657318042003280b32152e" .
    "676f6f676c652e70726f746f6275662e5479706512240a05656e756d7318" .
    "052003280b32152e676f6f676c652e70726f746f6275662e456e756d1230" .
    "0a0d646f63756d656e746174696f6e18062001280b32192e676f6f676c65" .
    "2e6170692e446f63756d656e746174696f6e12240a076261636b656e6418" .
    "082001280b32132e676f6f676c652e6170692e4261636b656e64121e0a04" .
    "6874747018092001280b32102e676f6f676c652e6170692e487474701232" .
    "0a0e61757468656e7469636174696f6e180b2001280b321a2e676f6f676c" .
    "652e6170692e41757468656e7469636174696f6e12240a07636f6e746578" .
    "74180c2001280b32132e676f6f676c652e6170692e436f6e746578741220" .
    "0a057573616765180f2001280b32112e676f6f676c652e6170692e557361" .
    "676512270a09656e64706f696e747318122003280b32142e676f6f676c65" .
    "2e6170692e456e64706f696e7412240a07636f6e74726f6c18152001280b" .
    "32132e676f6f676c652e6170692e436f6e74726f6c12270a046c6f677318" .
    "172003280b32192e676f6f676c652e6170692e4c6f674465736372697074" .
    "6f72122d0a076d65747269637318182003280b321c2e676f6f676c652e61" .
    "70692e4d657472696344657363726970746f7212440a136d6f6e69746f72" .
    "65645f7265736f757263657318192003280b32272e676f6f676c652e6170" .
    "692e4d6f6e69746f7265645265736f7572636544657363726970746f7212" .
    "240a076c6f6767696e67181b2001280b32132e676f6f676c652e6170692e" .
    "4c6f6767696e67122a0a0a6d6f6e69746f72696e67181c2001280b32162e" .
    "676f6f676c652e6170692e4d6f6e69746f72696e6712370a117379737465" .
    "6d5f706172616d6574657273181d2001280b321c2e676f6f676c652e6170" .
    "692e53797374656d506172616d657465727342270a0e636f6d2e676f6f67" .
    "6c652e617069420c5365727669636550726f746f5001a202044741504962" .
    "0670726f746f33"
));

