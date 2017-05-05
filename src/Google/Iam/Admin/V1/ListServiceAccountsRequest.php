<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The service account list request.
 * </pre>
 *
 * Protobuf type <code>google.iam.admin.v1.ListServiceAccountsRequest</code>
 */
class ListServiceAccountsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Optional limit on the number of service accounts to include in the
     * response. Further accounts can subsequently be obtained by including the
     * [ListServiceAccountsResponse.next_page_token][google.iam.admin.v1.ListServiceAccountsResponse.next_page_token]
     * in a subsequent request.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * Optional pagination token returned in an earlier
     * [ListServiceAccountsResponse.next_page_token][google.iam.admin.v1.ListServiceAccountsResponse.next_page_token].
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
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
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
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
     * Optional limit on the number of service accounts to include in the
     * response. Further accounts can subsequently be obtained by including the
     * [ListServiceAccountsResponse.next_page_token][google.iam.admin.v1.ListServiceAccountsResponse.next_page_token]
     * in a subsequent request.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Optional limit on the number of service accounts to include in the
     * response. Further accounts can subsequently be obtained by including the
     * [ListServiceAccountsResponse.next_page_token][google.iam.admin.v1.ListServiceAccountsResponse.next_page_token]
     * in a subsequent request.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * Optional pagination token returned in an earlier
     * [ListServiceAccountsResponse.next_page_token][google.iam.admin.v1.ListServiceAccountsResponse.next_page_token].
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * Optional pagination token returned in an earlier
     * [ListServiceAccountsResponse.next_page_token][google.iam.admin.v1.ListServiceAccountsResponse.next_page_token].
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

