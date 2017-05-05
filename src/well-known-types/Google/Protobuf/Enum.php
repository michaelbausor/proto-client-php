<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: type.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Enum type definition.
 * </pre>
 *
 * Protobuf type <code>google.protobuf.Enum</code>
 */
class Enum extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Enum type name.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Enum value definitions.
     * </pre>
     *
     * <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     */
    private $enumvalue;
    /**
     * <pre>
     * Protocol buffer options.
     * </pre>
     *
     * <code>repeated .google.protobuf.Option options = 3;</code>
     */
    private $options;
    /**
     * <pre>
     * The source context.
     * </pre>
     *
     * <code>.google.protobuf.SourceContext source_context = 4;</code>
     */
    private $source_context = null;
    /**
     * <pre>
     * The source syntax.
     * </pre>
     *
     * <code>.google.protobuf.Syntax syntax = 5;</code>
     */
    private $syntax = 0;

    public function __construct() {
        \GPBMetadata\Type::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Enum type name.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Enum type name.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * Enum value definitions.
     * </pre>
     *
     * <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     */
    public function getEnumvalue()
    {
        return $this->enumvalue;
    }

    /**
     * <pre>
     * Enum value definitions.
     * </pre>
     *
     * <code>repeated .google.protobuf.EnumValue enumvalue = 2;</code>
     */
    public function setEnumvalue(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\EnumValue::class);
        $this->enumvalue = $var;
    }

    /**
     * <pre>
     * Protocol buffer options.
     * </pre>
     *
     * <code>repeated .google.protobuf.Option options = 3;</code>
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * <pre>
     * Protocol buffer options.
     * </pre>
     *
     * <code>repeated .google.protobuf.Option options = 3;</code>
     */
    public function setOptions(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Option::class);
        $this->options = $var;
    }

    /**
     * <pre>
     * The source context.
     * </pre>
     *
     * <code>.google.protobuf.SourceContext source_context = 4;</code>
     */
    public function getSourceContext()
    {
        return $this->source_context;
    }

    /**
     * <pre>
     * The source context.
     * </pre>
     *
     * <code>.google.protobuf.SourceContext source_context = 4;</code>
     */
    public function setSourceContext(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\SourceContext::class);
        $this->source_context = $var;
    }

    /**
     * <pre>
     * The source syntax.
     * </pre>
     *
     * <code>.google.protobuf.Syntax syntax = 5;</code>
     */
    public function getSyntax()
    {
        return $this->syntax;
    }

    /**
     * <pre>
     * The source syntax.
     * </pre>
     *
     * <code>.google.protobuf.Syntax syntax = 5;</code>
     */
    public function setSyntax($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Syntax::class);
        $this->syntax = $var;
    }

}

