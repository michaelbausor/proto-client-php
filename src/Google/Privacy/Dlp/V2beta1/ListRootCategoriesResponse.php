<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response for ListRootCategories request.
 * </pre>
 *
 * Protobuf type <code>google.privacy.dlp.v2beta1.ListRootCategoriesResponse</code>
 */
class ListRootCategoriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * List of all into type categories supported by the API.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 1;</code>
     */
    private $categories;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * List of all into type categories supported by the API.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 1;</code>
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * <pre>
     * List of all into type categories supported by the API.
     * </pre>
     *
     * <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 1;</code>
     */
    public function setCategories(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\CategoryDescription::class);
        $this->categories = $var;
    }

}

