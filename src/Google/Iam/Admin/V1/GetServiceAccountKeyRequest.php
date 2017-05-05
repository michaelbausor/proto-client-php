<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The service account key get by id request.
 * </pre>
 *
 * Protobuf type <code>google.iam.admin.v1.GetServiceAccountKeyRequest</code>
 */
class GetServiceAccountKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name of the service account key in the following format:
     * `projects/{project}/serviceAccounts/{account}/keys/{key}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The output format of the public key requested.
     * X509_PEM is the default output format.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountPublicKeyType public_key_type = 2;</code>
     */
    private $public_key_type = 0;

    public function __construct() {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name of the service account key in the following format:
     * `projects/{project}/serviceAccounts/{account}/keys/{key}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
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
     * The resource name of the service account key in the following format:
     * `projects/{project}/serviceAccounts/{account}/keys/{key}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
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
     * The output format of the public key requested.
     * X509_PEM is the default output format.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountPublicKeyType public_key_type = 2;</code>
     */
    public function getPublicKeyType()
    {
        return $this->public_key_type;
    }

    /**
     * <pre>
     * The output format of the public key requested.
     * X509_PEM is the default output format.
     * </pre>
     *
     * <code>.google.iam.admin.v1.ServiceAccountPublicKeyType public_key_type = 2;</code>
     */
    public function setPublicKeyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\ServiceAccountPublicKeyType::class);
        $this->public_key_type = $var;
    }

}

