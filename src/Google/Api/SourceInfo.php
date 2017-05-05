<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/source_info.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Source information used to create a Service Config
 * </pre>
 *
 * Protobuf type <code>google.api.SourceInfo</code>
 */
class SourceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * All files used during config generation.
     * </pre>
     *
     * <code>repeated .google.protobuf.Any source_files = 1;</code>
     */
    private $source_files;

    public function __construct() {
        \GPBMetadata\Google\Api\SourceInfo::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * All files used during config generation.
     * </pre>
     *
     * <code>repeated .google.protobuf.Any source_files = 1;</code>
     */
    public function getSourceFiles()
    {
        return $this->source_files;
    }

    /**
     * <pre>
     * All files used during config generation.
     * </pre>
     *
     * <code>repeated .google.protobuf.Any source_files = 1;</code>
     */
    public function setSourceFiles(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->source_files = $arr;
    }

}

