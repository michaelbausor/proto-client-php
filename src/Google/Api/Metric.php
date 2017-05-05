<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/metric.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A specific metric, identified by specifying values for all of the
 * labels of a [`MetricDescriptor`][google.api.MetricDescriptor].
 * </pre>
 *
 * Protobuf type <code>google.api.Metric</code>
 */
class Metric extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * An existing metric type, see [google.api.MetricDescriptor][google.api.MetricDescriptor].
     * For example, `custom.googleapis.com/invoice/paid/amount`.
     * </pre>
     *
     * <code>string type = 3;</code>
     */
    private $type = '';
    /**
     * <pre>
     * The set of label values that uniquely identify this metric. All
     * labels listed in the `MetricDescriptor` must be assigned values.
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 2;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Google\Api\Metric::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * An existing metric type, see [google.api.MetricDescriptor][google.api.MetricDescriptor].
     * For example, `custom.googleapis.com/invoice/paid/amount`.
     * </pre>
     *
     * <code>string type = 3;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * An existing metric type, see [google.api.MetricDescriptor][google.api.MetricDescriptor].
     * For example, `custom.googleapis.com/invoice/paid/amount`.
     * </pre>
     *
     * <code>string type = 3;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

    /**
     * <pre>
     * The set of label values that uniquely identify this metric. All
     * labels listed in the `MetricDescriptor` must be assigned values.
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 2;</code>
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * <pre>
     * The set of label values that uniquely identify this metric. All
     * labels listed in the `MetricDescriptor` must be assigned values.
     * </pre>
     *
     * <code>map&lt;string, string&gt; labels = 2;</code>
     */
    public function setLabels(&$var)
    {
        $this->labels = $var;
    }

}

