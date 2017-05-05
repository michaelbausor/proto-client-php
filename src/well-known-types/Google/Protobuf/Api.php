<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Api is a light-weight descriptor for a protocol buffer service.
 * </pre>
 *
 * Protobuf type <code>google.protobuf.Api</code>
 */
class Api extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The fully qualified name of this api, including package name
     * followed by the api's simple name.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The methods of this api, in unspecified order.
     * </pre>
     *
     * <code>repeated .google.protobuf.Method methods = 2;</code>
     */
    private $methods;
    /**
     * <pre>
     * Any metadata attached to the API.
     * </pre>
     *
     * <code>repeated .google.protobuf.Option options = 3;</code>
     */
    private $options;
    /**
     * <pre>
     * A version string for this api. If specified, must have the form
     * `major-version.minor-version`, as in `1.10`. If the minor version
     * is omitted, it defaults to zero. If the entire version field is
     * empty, the major version is derived from the package name, as
     * outlined below. If the field is not empty, the version in the
     * package name will be verified to be consistent with what is
     * provided here.
     * The versioning schema uses [semantic
     * versioning](http://semver.org) where the major version number
     * indicates a breaking change and the minor version an additive,
     * non-breaking change. Both version numbers are signals to users
     * what to expect from different versions, and should be carefully
     * chosen based on the product plan.
     * The major version is also reflected in the package name of the
     * API, which must end in `v&lt;major-version&gt;`, as in
     * `google.feature.v1`. For major versions 0 and 1, the suffix can
     * be omitted. Zero major versions must only be used for
     * experimental, none-GA apis.
     * </pre>
     *
     * <code>string version = 4;</code>
     */
    private $version = '';
    /**
     * <pre>
     * Source context for the protocol buffer service represented by this
     * message.
     * </pre>
     *
     * <code>.google.protobuf.SourceContext source_context = 5;</code>
     */
    private $source_context = null;
    /**
     * <pre>
     * Included APIs. See [Mixin][].
     * </pre>
     *
     * <code>repeated .google.protobuf.Mixin mixins = 6;</code>
     */
    private $mixins;
    /**
     * <pre>
     * The source syntax of the service.
     * </pre>
     *
     * <code>.google.protobuf.Syntax syntax = 7;</code>
     */
    private $syntax = 0;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The fully qualified name of this api, including package name
     * followed by the api's simple name.
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
     * The fully qualified name of this api, including package name
     * followed by the api's simple name.
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
     * The methods of this api, in unspecified order.
     * </pre>
     *
     * <code>repeated .google.protobuf.Method methods = 2;</code>
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * <pre>
     * The methods of this api, in unspecified order.
     * </pre>
     *
     * <code>repeated .google.protobuf.Method methods = 2;</code>
     */
    public function setMethods(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Method::class);
        $this->methods = $var;
    }

    /**
     * <pre>
     * Any metadata attached to the API.
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
     * Any metadata attached to the API.
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
     * A version string for this api. If specified, must have the form
     * `major-version.minor-version`, as in `1.10`. If the minor version
     * is omitted, it defaults to zero. If the entire version field is
     * empty, the major version is derived from the package name, as
     * outlined below. If the field is not empty, the version in the
     * package name will be verified to be consistent with what is
     * provided here.
     * The versioning schema uses [semantic
     * versioning](http://semver.org) where the major version number
     * indicates a breaking change and the minor version an additive,
     * non-breaking change. Both version numbers are signals to users
     * what to expect from different versions, and should be carefully
     * chosen based on the product plan.
     * The major version is also reflected in the package name of the
     * API, which must end in `v&lt;major-version&gt;`, as in
     * `google.feature.v1`. For major versions 0 and 1, the suffix can
     * be omitted. Zero major versions must only be used for
     * experimental, none-GA apis.
     * </pre>
     *
     * <code>string version = 4;</code>
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <pre>
     * A version string for this api. If specified, must have the form
     * `major-version.minor-version`, as in `1.10`. If the minor version
     * is omitted, it defaults to zero. If the entire version field is
     * empty, the major version is derived from the package name, as
     * outlined below. If the field is not empty, the version in the
     * package name will be verified to be consistent with what is
     * provided here.
     * The versioning schema uses [semantic
     * versioning](http://semver.org) where the major version number
     * indicates a breaking change and the minor version an additive,
     * non-breaking change. Both version numbers are signals to users
     * what to expect from different versions, and should be carefully
     * chosen based on the product plan.
     * The major version is also reflected in the package name of the
     * API, which must end in `v&lt;major-version&gt;`, as in
     * `google.feature.v1`. For major versions 0 and 1, the suffix can
     * be omitted. Zero major versions must only be used for
     * experimental, none-GA apis.
     * </pre>
     *
     * <code>string version = 4;</code>
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;
    }

    /**
     * <pre>
     * Source context for the protocol buffer service represented by this
     * message.
     * </pre>
     *
     * <code>.google.protobuf.SourceContext source_context = 5;</code>
     */
    public function getSourceContext()
    {
        return $this->source_context;
    }

    /**
     * <pre>
     * Source context for the protocol buffer service represented by this
     * message.
     * </pre>
     *
     * <code>.google.protobuf.SourceContext source_context = 5;</code>
     */
    public function setSourceContext(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\SourceContext::class);
        $this->source_context = $var;
    }

    /**
     * <pre>
     * Included APIs. See [Mixin][].
     * </pre>
     *
     * <code>repeated .google.protobuf.Mixin mixins = 6;</code>
     */
    public function getMixins()
    {
        return $this->mixins;
    }

    /**
     * <pre>
     * Included APIs. See [Mixin][].
     * </pre>
     *
     * <code>repeated .google.protobuf.Mixin mixins = 6;</code>
     */
    public function setMixins(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Mixin::class);
        $this->mixins = $var;
    }

    /**
     * <pre>
     * The source syntax of the service.
     * </pre>
     *
     * <code>.google.protobuf.Syntax syntax = 7;</code>
     */
    public function getSyntax()
    {
        return $this->syntax;
    }

    /**
     * <pre>
     * The source syntax of the service.
     * </pre>
     *
     * <code>.google.protobuf.Syntax syntax = 7;</code>
     */
    public function setSyntax($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Syntax::class);
        $this->syntax = $var;
    }

}

