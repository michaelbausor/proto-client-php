<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto

namespace Google\Longrunning;

require_once('google/api/annotations.pb.php');
require_once('google/protobuf/any.pb.php');
require_once('google/protobuf/empty.pb.php');
require_once('google/rpc/status.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Operation extends \Google\Protobuf\Internal\Message
{
    private $name = '';
    private $metadata = null;
    private $done = false;
    protected $result;

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function setMetadata(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->metadata = $var;
    }

    public function getDone()
    {
        return $this->done;
    }

    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;
    }

    public function getError()
    {
        return $this->readOneof(4);
    }

    public function setError(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(4, $var);
    }

    public function getResponse()
    {
        return $this->readOneof(5);
    }

    public function setResponse(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(5, $var);
    }

    public function getResult()
    {
        return $this->result;
    }

}

class GetOperationRequest extends \Google\Protobuf\Internal\Message
{
    private $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

class ListOperationsRequest extends \Google\Protobuf\Internal\Message
{
    private $name = '';
    private $filter = '';
    private $page_size = 0;
    private $page_token = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
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

    public function getPageSize()
    {
        return $this->page_size;
    }

    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
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

}

class ListOperationsResponse extends \Google\Protobuf\Internal\Message
{
    private $operations;
    private $next_page_token = '';

    public function getOperations()
    {
        return $this->operations;
    }

    public function setOperations(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Longrunning\Operation::class);
        $this->operations = $var;
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

class CancelOperationRequest extends \Google\Protobuf\Internal\Message
{
    private $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

class DeleteOperationRequest extends \Google\Protobuf\Internal\Message
{
    private $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad0090a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174" .
    "696f6e732e70726f746f1212676f6f676c652e6c6f6e6772756e6e696e67" .
    "1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f" .
    "1a19676f6f676c652f70726f746f6275662f616e792e70726f746f1a1b67" .
    "6f6f676c652f70726f746f6275662f656d7074792e70726f746f1a17676f" .
    "6f676c652f7270632f7374617475732e70726f746f22a8010a094f706572" .
    "6174696f6e120c0a046e616d6518012001280912260a086d657461646174" .
    "6118022001280b32142e676f6f676c652e70726f746f6275662e416e7912" .
    "0c0a04646f6e6518032001280812230a056572726f7218042001280b3212" .
    "2e676f6f676c652e7270632e537461747573480012280a08726573706f6e" .
    "736518052001280b32142e676f6f676c652e70726f746f6275662e416e79" .
    "480042080a06726573756c7422230a134765744f7065726174696f6e5265" .
    "7175657374120c0a046e616d65180120012809225c0a154c6973744f7065" .
    "726174696f6e7352657175657374120c0a046e616d65180420012809120e" .
    "0a0666696c74657218012001280912110a09706167655f73697a65180220" .
    "01280512120a0a706167655f746f6b656e18032001280922640a164c6973" .
    "744f7065726174696f6e73526573706f6e736512310a0a6f706572617469" .
    "6f6e7318012003280b321d2e676f6f676c652e6c6f6e6772756e6e696e67" .
    "2e4f7065726174696f6e12170a0f6e6578745f706167655f746f6b656e18" .
    "022001280922260a1643616e63656c4f7065726174696f6e526571756573" .
    "74120c0a046e616d6518012001280922260a1644656c6574654f70657261" .
    "74696f6e52657175657374120c0a046e616d65180120012809328c040a0a" .
    "4f7065726174696f6e7312780a0c4765744f7065726174696f6e12272e67" .
    "6f6f676c652e6c6f6e6772756e6e696e672e4765744f7065726174696f6e" .
    "526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f" .
    "7065726174696f6e222082d3e493021a12182f76312f7b6e616d653d6f70" .
    "65726174696f6e732f2a2a7d1286010a0e4c6973744f7065726174696f6e" .
    "7312292e676f6f676c652e6c6f6e6772756e6e696e672e4c6973744f7065" .
    "726174696f6e73526571756573741a2a2e676f6f676c652e6c6f6e677275" .
    "6e6e696e672e4c6973744f7065726174696f6e73526573706f6e7365221d" .
    "82d3e493021712152f76312f7b6e616d653d6f7065726174696f6e737d12" .
    "81010a0f43616e63656c4f7065726174696f6e122a2e676f6f676c652e6c" .
    "6f6e6772756e6e696e672e43616e63656c4f7065726174696f6e52657175" .
    "6573741a162e676f6f676c652e70726f746f6275662e456d707479222a82" .
    "d3e4930224221f2f76312f7b6e616d653d6f7065726174696f6e732f2a2a" .
    "7d3a63616e63656c3a012a12770a0f44656c6574654f7065726174696f6e" .
    "122a2e676f6f676c652e6c6f6e6772756e6e696e672e44656c6574654f70" .
    "65726174696f6e526571756573741a162e676f6f676c652e70726f746f62" .
    "75662e456d707479222082d3e493021a2a182f76312f7b6e616d653d6f70" .
    "65726174696f6e732f2a2a7d422b0a16636f6d2e676f6f676c652e6c6f6e" .
    "6772756e6e696e67420f4f7065726174696f6e7350726f746f5001620670" .
    "726f746f33"
));

