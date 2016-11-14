<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/http.proto

namespace Google\Api;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Http extends \Google\Protobuf\Internal\Message
{
    private $rules;

    public function getRules()
    {
        return $this->rules;
    }

    public function setRules(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Api\HttpRule::class);
        $this->rules = $var;
    }

}

class HttpRule extends \Google\Protobuf\Internal\Message
{
    private $selector = '';
    private $body = '';
    private $additional_bindings;
    protected $pattern;

    public function getSelector()
    {
        return $this->selector;
    }

    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;
    }

    public function getGet()
    {
        return $this->readOneof(2);
    }

    public function setGet($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);
    }

    public function getPut()
    {
        return $this->readOneof(3);
    }

    public function setPut($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);
    }

    public function getPost()
    {
        return $this->readOneof(4);
    }

    public function setPost($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);
    }

    public function getDelete()
    {
        return $this->readOneof(5);
    }

    public function setDelete($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);
    }

    public function getPatch()
    {
        return $this->readOneof(6);
    }

    public function setPatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);
    }

    public function getCustom()
    {
        return $this->readOneof(8);
    }

    public function setCustom(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\CustomHttpPattern::class);
        $this->writeOneof(8, $var);
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;
    }

    public function getAdditionalBindings()
    {
        return $this->additional_bindings;
    }

    public function setAdditionalBindings(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Google\Api\HttpRule::class);
        $this->additional_bindings = $var;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

}

class CustomHttpPattern extends \Google\Protobuf\Internal\Message
{
    private $kind = '';
    private $path = '';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9f030a15676f6f676c652f6170692f687474702e70726f746f120a676f" .
    "6f676c652e617069222b0a044874747012230a0572756c65731801200328" .
    "0b32142e676f6f676c652e6170692e4874747052756c6522ea010a084874" .
    "747052756c6512100a0873656c6563746f72180120012809120d0a036765" .
    "741802200128094800120d0a037075741803200128094800120e0a04706f" .
    "7374180420012809480012100a0664656c6574651805200128094800120f" .
    "0a0570617463681806200128094800122f0a06637573746f6d1808200128" .
    "0b321d2e676f6f676c652e6170692e437573746f6d487474705061747465" .
    "726e4800120c0a04626f647918072001280912310a136164646974696f6e" .
    "616c5f62696e64696e6773180b2003280b32142e676f6f676c652e617069" .
    "2e4874747052756c6542090a077061747465726e222f0a11437573746f6d" .
    "487474705061747465726e120c0a046b696e64180120012809120c0a0470" .
    "61746818022001280942270a0e636f6d2e676f6f676c652e617069420948" .
    "74747050726f746f5001f80101a2020447415049620670726f746f33"
));

