<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: type.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A protocol buffer option, which can be attached to a message, field,
 * enumeration, etc.
 * </pre>
 *
 * Protobuf type <code>google.protobuf.Option</code>
 */
class Option extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The option's name. For protobuf built-in options (options defined in
     * descriptor.proto), this is the short name. For example, `"map_entry"`.
     * For custom options, it should be the fully-qualified name. For example,
     * `"google.api.http"`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The option's value packed in an Any message. If the value is a primitive,
     * the corresponding wrapper type defined in google/protobuf/wrappers.proto
     * should be used. If the value is an enum, it should be stored as an int32
     * value using the google.protobuf.Int32Value type.
     * </pre>
     *
     * <code>.google.protobuf.Any value = 2;</code>
     */
    private $value = null;

    public function __construct() {
        \GPBMetadata\Type::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The option's name. For protobuf built-in options (options defined in
     * descriptor.proto), this is the short name. For example, `"map_entry"`.
     * For custom options, it should be the fully-qualified name. For example,
     * `"google.api.http"`.
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
     * The option's name. For protobuf built-in options (options defined in
     * descriptor.proto), this is the short name. For example, `"map_entry"`.
     * For custom options, it should be the fully-qualified name. For example,
     * `"google.api.http"`.
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
     * The option's value packed in an Any message. If the value is a primitive,
     * the corresponding wrapper type defined in google/protobuf/wrappers.proto
     * should be used. If the value is an enum, it should be stored as an int32
     * value using the google.protobuf.Int32Value type.
     * </pre>
     *
     * <code>.google.protobuf.Any value = 2;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * The option's value packed in an Any message. If the value is a primitive,
     * the corresponding wrapper type defined in google/protobuf/wrappers.proto
     * should be used. If the value is an enum, it should be stored as an int32
     * value using the google.protobuf.Int32Value type.
     * </pre>
     *
     * <code>.google.protobuf.Any value = 2;</code>
     */
    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->value = $var;
    }

}

