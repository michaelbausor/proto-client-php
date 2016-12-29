<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/iam_policy.proto

namespace Google\Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for `GetIamPolicy` method.
 * </pre>
 *
 * Protobuf type <code>google.iam.v1.GetIamPolicyRequest</code>
 */
class GetIamPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * REQUIRED: The resource for which the policy is being requested.
     * `resource` is usually specified as a path. For example, a Project
     * resource is specified as `projects/{project}`.
     * </pre>
     *
     * <code>string resource = 1;</code>
     */
    private $resource = '';

    public function __construct() {
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * REQUIRED: The resource for which the policy is being requested.
     * `resource` is usually specified as a path. For example, a Project
     * resource is specified as `projects/{project}`.
     * </pre>
     *
     * <code>string resource = 1;</code>
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * <pre>
     * REQUIRED: The resource for which the policy is being requested.
     * `resource` is usually specified as a path. For example, a Project
     * resource is specified as `projects/{project}`.
     * </pre>
     *
     * <code>string resource = 1;</code>
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;
    }

}

