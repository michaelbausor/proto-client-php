<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Logging\V2;

require_once('google/api/annotations.pb.php');
require_once('google/protobuf/empty.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class LogMetric extends \Google\Protobuf\Internal\Message
{
    private $name = '';
    private $description = '';
    private $filter = '';
    private $version = 0;

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Google\Logging\V2\LogMetric_ApiVersion::class);
        $this->version = $var;
    }

}

class LogMetric_ApiVersion
{
    const V2 = 0;
    const V1 = 1;
}

class ListLogMetricsRequest extends \Google\Protobuf\Internal\Message
{
    private $parent = '';
    private $page_token = '';
    private $page_size = 0;

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
    }

    public function getPageToken()
    {
        return $this->page_token;
    }

    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

    public function getPageSize()
    {
        return $this->page_size;
    }

    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

}

class ListLogMetricsResponse extends \Google\Protobuf\Internal\Message
{
    private $metrics;
    private $next_page_token = '';

    public function getMetrics()
    {
        return $this->metrics;
    }

    public function setMetrics(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Logging\V2\LogMetric::class);
        $this->metrics = $var;
    }

    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}

class GetLogMetricRequest extends \Google\Protobuf\Internal\Message
{
    private $metric_name = '';

    public function getMetricName()
    {
        return $this->metric_name;
    }

    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;
    }

}

class CreateLogMetricRequest extends \Google\Protobuf\Internal\Message
{
    private $parent = '';
    private $metric = null;

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
    }

    public function getMetric()
    {
        return $this->metric;
    }

    public function setMetric(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Logging\V2\LogMetric::class);
        $this->metric = $var;
    }

}

class UpdateLogMetricRequest extends \Google\Protobuf\Internal\Message
{
    private $metric_name = '';
    private $metric = null;

    public function getMetricName()
    {
        return $this->metric_name;
    }

    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;
    }

    public function getMetric()
    {
        return $this->metric;
    }

    public function setMetric(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Logging\V2\LogMetric::class);
        $this->metric = $var;
    }

}

class DeleteLogMetricRequest extends \Google\Protobuf\Internal\Message
{
    private $metric_name = '';

    public function getMetricName()
    {
        return $this->metric_name;
    }

    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a8e0c0a27676f6f676c652f6c6f6767696e672f76322f6c6f6767696e67" .
    "5f6d6574726963732e70726f746f1211676f6f676c652e6c6f6767696e67" .
    "2e76321a1c676f6f676c652f6170692f616e6e6f746174696f6e732e7072" .
    "6f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f" .
    "746f2296010a094c6f674d6574726963120c0a046e616d65180120012809" .
    "12130a0b6465736372697074696f6e180220012809120e0a0666696c7465" .
    "7218032001280912380a0776657273696f6e18042001280e32272e676f6f" .
    "676c652e6c6f6767696e672e76322e4c6f674d65747269632e4170695665" .
    "7273696f6e221c0a0a41706956657273696f6e12060a025632100012060a" .
    "0256311001224e0a154c6973744c6f674d65747269637352657175657374" .
    "120e0a06706172656e7418012001280912120a0a706167655f746f6b656e" .
    "18022001280912110a09706167655f73697a6518032001280522600a164c" .
    "6973744c6f674d657472696373526573706f6e7365122d0a076d65747269" .
    "637318012003280b321c2e676f6f676c652e6c6f6767696e672e76322e4c" .
    "6f674d657472696312170a0f6e6578745f706167655f746f6b656e180220" .
    "012809222a0a134765744c6f674d65747269635265717565737412130a0b" .
    "6d65747269635f6e616d6518012001280922560a164372656174654c6f67" .
    "4d657472696352657175657374120e0a06706172656e7418012001280912" .
    "2c0a066d657472696318022001280b321c2e676f6f676c652e6c6f676769" .
    "6e672e76322e4c6f674d6574726963225b0a165570646174654c6f674d65" .
    "747269635265717565737412130a0b6d65747269635f6e616d6518012001" .
    "2809122c0a066d657472696318022001280b321c2e676f6f676c652e6c6f" .
    "6767696e672e76322e4c6f674d6574726963222d0a1644656c6574654c6f" .
    "674d65747269635265717565737412130a0b6d65747269635f6e616d6518" .
    "012001280932d4050a104d657472696373536572766963655632128e010a" .
    "0e4c6973744c6f674d65747269637312282e676f6f676c652e6c6f676769" .
    "6e672e76322e4c6973744c6f674d657472696373526571756573741a292e" .
    "676f6f676c652e6c6f6767696e672e76322e4c6973744c6f674d65747269" .
    "6373526573706f6e7365222782d3e4930221121f2f76322f7b706172656e" .
    "743d70726f6a656374732f2a7d2f6d6574726963731284010a0c4765744c" .
    "6f674d657472696312262e676f6f676c652e6c6f6767696e672e76322e47" .
    "65744c6f674d6574726963526571756573741a1c2e676f6f676c652e6c6f" .
    "6767696e672e76322e4c6f674d6574726963222e82d3e493022812262f76" .
    "322f7b6d65747269635f6e616d653d70726f6a656374732f2a2f6d657472" .
    "6963732f2a7d128b010a0f4372656174654c6f674d657472696312292e67" .
    "6f6f676c652e6c6f6767696e672e76322e4372656174654c6f674d657472" .
    "6963526571756573741a1c2e676f6f676c652e6c6f6767696e672e76322e" .
    "4c6f674d6574726963222f82d3e4930229221f2f76322f7b706172656e74" .
    "3d70726f6a656374732f2a7d2f6d6574726963733a066d65747269631292" .
    "010a0f5570646174654c6f674d657472696312292e676f6f676c652e6c6f" .
    "6767696e672e76322e5570646174654c6f674d6574726963526571756573" .
    "741a1c2e676f6f676c652e6c6f6767696e672e76322e4c6f674d65747269" .
    "63223682d3e49302301a262f76322f7b6d65747269635f6e616d653d7072" .
    "6f6a656374732f2a2f6d6574726963732f2a7d3a066d6574726963128401" .
    "0a0f44656c6574654c6f674d657472696312292e676f6f676c652e6c6f67" .
    "67696e672e76322e44656c6574654c6f674d657472696352657175657374" .
    "1a162e676f6f676c652e70726f746f6275662e456d707479222e82d3e493" .
    "02282a262f76322f7b6d65747269635f6e616d653d70726f6a656374732f" .
    "2a2f6d6574726963732f2a7d425b0a15636f6d2e676f6f676c652e6c6f67" .
    "67696e672e7632420e4c6f6767696e674d65747269637350015a30676f6f" .
    "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
    "617069732f6c6f6767696e672f7632620670726f746f33"
));

