<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/metric_value.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents a set of metric values in the same metric.
 * Each metric value in the set should have a unique combination of start time,
 * end time, and label values.
 * </pre>
 *
 * Protobuf type <code>google.api.servicecontrol.v1.MetricValueSet</code>
 */
class MetricValueSet extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The metric name defined in the service configuration.
     * </pre>
     *
     * <code>string metric_name = 1;</code>
     */
    private $metric_name = '';
    /**
     * <pre>
     * The values in this metric.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     */
    private $metric_values;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicecontrol\V1\MetricValue::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The metric name defined in the service configuration.
     * </pre>
     *
     * <code>string metric_name = 1;</code>
     */
    public function getMetricName()
    {
        return $this->metric_name;
    }

    /**
     * <pre>
     * The metric name defined in the service configuration.
     * </pre>
     *
     * <code>string metric_name = 1;</code>
     */
    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;
    }

    /**
     * <pre>
     * The values in this metric.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     */
    public function getMetricValues()
    {
        return $this->metric_values;
    }

    /**
     * <pre>
     * The values in this metric.
     * </pre>
     *
     * <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     */
    public function setMetricValues(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Servicecontrol\V1\MetricValue::class);
        $this->metric_values = $arr;
    }

}

