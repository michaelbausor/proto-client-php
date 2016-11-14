<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitored_resource.proto

namespace Google\Api;

require_once('google/api/label.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class MonitoredResourceDescriptor extends \Google\Protobuf\Internal\Message
{
    private $name = '';
    private $type = '';
    private $display_name = '';
    private $description = '';
    private $labels;

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

    public function getDisplayName()
    {
        return $this->display_name;
    }

    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
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

    public function getLabels()
    {
        return $this->labels;
    }

    public function setLabels(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Api\LabelDescriptor::class);
        $this->labels = $var;
    }

}

class MonitoredResource extends \Google\Protobuf\Internal\Message
{
    private $type = '';
    private $labels;

    public function getType()
    {
        return $this->type;
    }

    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function setLabels(&$var)
    {
        $this->labels = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae1030a23676f6f676c652f6170692f6d6f6e69746f7265645f7265736f" .
    "757263652e70726f746f120a676f6f676c652e6170691a16676f6f676c65" .
    "2f6170692f6c6162656c2e70726f746f2291010a1b4d6f6e69746f726564" .
    "5265736f7572636544657363726970746f72120c0a046e616d6518052001" .
    "2809120c0a047479706518012001280912140a0c646973706c61795f6e61" .
    "6d6518022001280912130a0b6465736372697074696f6e18032001280912" .
    "2b0a066c6162656c7318042003280b321b2e676f6f676c652e6170692e4c" .
    "6162656c44657363726970746f72228b010a114d6f6e69746f7265645265" .
    "736f75726365120c0a047479706518012001280912390a066c6162656c73" .
    "18022003280b32292e676f6f676c652e6170692e4d6f6e69746f72656452" .
    "65736f757263652e4c6162656c73456e7472791a2d0a0b4c6162656c7345" .
    "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
    "28093a023801426c0a0e636f6d2e676f6f676c652e61706942164d6f6e69" .
    "746f7265645265736f7572636550726f746f50015a36676f6f676c652e67" .
    "6f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f" .
    "6170692f6d6f6e69746f726564726573f80101a202044741504962067072" .
    "6f746f33"
));

