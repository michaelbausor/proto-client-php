<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A query for entities.
 * </pre>
 *
 * Protobuf type <code>google.datastore.v1.Query</code>
 */
class Query extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The projection to return. Defaults to returning all properties.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Projection projection = 2;</code>
     */
    private $projection;
    /**
     * <pre>
     * The kinds to query (if empty, returns entities of all kinds).
     * Currently at most 1 kind may be specified.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.KindExpression kind = 3;</code>
     */
    private $kind;
    /**
     * <pre>
     * The filter to apply.
     * </pre>
     *
     * <code>.google.datastore.v1.Filter filter = 4;</code>
     */
    private $filter = null;
    /**
     * <pre>
     * The order to apply to the query results (if empty, order is unspecified).
     * </pre>
     *
     * <code>repeated .google.datastore.v1.PropertyOrder order = 5;</code>
     */
    private $order;
    /**
     * <pre>
     * The properties to make distinct. The query results will contain the first
     * result for each distinct combination of values for the given properties
     * (if empty, all results are returned).
     * </pre>
     *
     * <code>repeated .google.datastore.v1.PropertyReference distinct_on = 6;</code>
     */
    private $distinct_on;
    /**
     * <pre>
     * A starting point for the query results. Query cursors are
     * returned in query result batches and
     * [can only be used to continue the same query](https://cloud.google.com/datastore/docs/concepts/queries#cursors_limits_and_offsets).
     * </pre>
     *
     * <code>bytes start_cursor = 7;</code>
     */
    private $start_cursor = '';
    /**
     * <pre>
     * An ending point for the query results. Query cursors are
     * returned in query result batches and
     * [can only be used to limit the same query](https://cloud.google.com/datastore/docs/concepts/queries#cursors_limits_and_offsets).
     * </pre>
     *
     * <code>bytes end_cursor = 8;</code>
     */
    private $end_cursor = '';
    /**
     * <pre>
     * The number of results to skip. Applies before limit, but after all other
     * constraints. Optional. Must be &gt;= 0 if specified.
     * </pre>
     *
     * <code>int32 offset = 10;</code>
     */
    private $offset = 0;
    /**
     * <pre>
     * The maximum number of results to return. Applies after all other
     * constraints. Optional.
     * Unspecified is interpreted as no limit.
     * Must be &gt;= 0 if specified.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value limit = 12;</code>
     */
    private $limit = null;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The projection to return. Defaults to returning all properties.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Projection projection = 2;</code>
     */
    public function getProjection()
    {
        return $this->projection;
    }

    /**
     * <pre>
     * The projection to return. Defaults to returning all properties.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.Projection projection = 2;</code>
     */
    public function setProjection(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\Projection::class);
        $this->projection = $arr;
    }

    /**
     * <pre>
     * The kinds to query (if empty, returns entities of all kinds).
     * Currently at most 1 kind may be specified.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.KindExpression kind = 3;</code>
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * <pre>
     * The kinds to query (if empty, returns entities of all kinds).
     * Currently at most 1 kind may be specified.
     * </pre>
     *
     * <code>repeated .google.datastore.v1.KindExpression kind = 3;</code>
     */
    public function setKind(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\KindExpression::class);
        $this->kind = $arr;
    }

    /**
     * <pre>
     * The filter to apply.
     * </pre>
     *
     * <code>.google.datastore.v1.Filter filter = 4;</code>
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * The filter to apply.
     * </pre>
     *
     * <code>.google.datastore.v1.Filter filter = 4;</code>
     */
    public function setFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Datastore\V1\Filter::class);
        $this->filter = $var;
    }

    /**
     * <pre>
     * The order to apply to the query results (if empty, order is unspecified).
     * </pre>
     *
     * <code>repeated .google.datastore.v1.PropertyOrder order = 5;</code>
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * <pre>
     * The order to apply to the query results (if empty, order is unspecified).
     * </pre>
     *
     * <code>repeated .google.datastore.v1.PropertyOrder order = 5;</code>
     */
    public function setOrder(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\PropertyOrder::class);
        $this->order = $arr;
    }

    /**
     * <pre>
     * The properties to make distinct. The query results will contain the first
     * result for each distinct combination of values for the given properties
     * (if empty, all results are returned).
     * </pre>
     *
     * <code>repeated .google.datastore.v1.PropertyReference distinct_on = 6;</code>
     */
    public function getDistinctOn()
    {
        return $this->distinct_on;
    }

    /**
     * <pre>
     * The properties to make distinct. The query results will contain the first
     * result for each distinct combination of values for the given properties
     * (if empty, all results are returned).
     * </pre>
     *
     * <code>repeated .google.datastore.v1.PropertyReference distinct_on = 6;</code>
     */
    public function setDistinctOn(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Datastore\V1\PropertyReference::class);
        $this->distinct_on = $arr;
    }

    /**
     * <pre>
     * A starting point for the query results. Query cursors are
     * returned in query result batches and
     * [can only be used to continue the same query](https://cloud.google.com/datastore/docs/concepts/queries#cursors_limits_and_offsets).
     * </pre>
     *
     * <code>bytes start_cursor = 7;</code>
     */
    public function getStartCursor()
    {
        return $this->start_cursor;
    }

    /**
     * <pre>
     * A starting point for the query results. Query cursors are
     * returned in query result batches and
     * [can only be used to continue the same query](https://cloud.google.com/datastore/docs/concepts/queries#cursors_limits_and_offsets).
     * </pre>
     *
     * <code>bytes start_cursor = 7;</code>
     */
    public function setStartCursor($var)
    {
        GPBUtil::checkString($var, False);
        $this->start_cursor = $var;
    }

    /**
     * <pre>
     * An ending point for the query results. Query cursors are
     * returned in query result batches and
     * [can only be used to limit the same query](https://cloud.google.com/datastore/docs/concepts/queries#cursors_limits_and_offsets).
     * </pre>
     *
     * <code>bytes end_cursor = 8;</code>
     */
    public function getEndCursor()
    {
        return $this->end_cursor;
    }

    /**
     * <pre>
     * An ending point for the query results. Query cursors are
     * returned in query result batches and
     * [can only be used to limit the same query](https://cloud.google.com/datastore/docs/concepts/queries#cursors_limits_and_offsets).
     * </pre>
     *
     * <code>bytes end_cursor = 8;</code>
     */
    public function setEndCursor($var)
    {
        GPBUtil::checkString($var, False);
        $this->end_cursor = $var;
    }

    /**
     * <pre>
     * The number of results to skip. Applies before limit, but after all other
     * constraints. Optional. Must be &gt;= 0 if specified.
     * </pre>
     *
     * <code>int32 offset = 10;</code>
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <pre>
     * The number of results to skip. Applies before limit, but after all other
     * constraints. Optional. Must be &gt;= 0 if specified.
     * </pre>
     *
     * <code>int32 offset = 10;</code>
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;
    }

    /**
     * <pre>
     * The maximum number of results to return. Applies after all other
     * constraints. Optional.
     * Unspecified is interpreted as no limit.
     * Must be &gt;= 0 if specified.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value limit = 12;</code>
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <pre>
     * The maximum number of results to return. Applies after all other
     * constraints. Optional.
     * Unspecified is interpreted as no limit.
     * Must be &gt;= 0 if specified.
     * </pre>
     *
     * <code>.google.protobuf.Int32Value limit = 12;</code>
     */
    public function setLimit(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->limit = $var;
    }

}

