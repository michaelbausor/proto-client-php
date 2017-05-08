<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Specifies (some of) the contents of a single row/column family intersection
 * of a table.
 * </pre>
 *
 * Protobuf type <code>google.bigtable.v2.Family</code>
 */
class Family extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The unique key which identifies this family within its row. This is the
     * same key that's used to identify the family in, for example, a RowFilter
     * which sets its "family_name_regex_filter" field.
     * Must match `[-_.a-zA-Z0-9]+`, except that AggregatingRowProcessors may
     * produce cells in a sentinel family with an empty name.
     * Must be no greater than 64 characters in length.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Must not be empty. Sorted in order of increasing "qualifier".
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.Column columns = 2;</code>
     */
    private $columns;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The unique key which identifies this family within its row. This is the
     * same key that's used to identify the family in, for example, a RowFilter
     * which sets its "family_name_regex_filter" field.
     * Must match `[-_.a-zA-Z0-9]+`, except that AggregatingRowProcessors may
     * produce cells in a sentinel family with an empty name.
     * Must be no greater than 64 characters in length.
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
     * The unique key which identifies this family within its row. This is the
     * same key that's used to identify the family in, for example, a RowFilter
     * which sets its "family_name_regex_filter" field.
     * Must match `[-_.a-zA-Z0-9]+`, except that AggregatingRowProcessors may
     * produce cells in a sentinel family with an empty name.
     * Must be no greater than 64 characters in length.
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
     * Must not be empty. Sorted in order of increasing "qualifier".
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.Column columns = 2;</code>
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * <pre>
     * Must not be empty. Sorted in order of increasing "qualifier".
     * </pre>
     *
     * <code>repeated .google.bigtable.v2.Column columns = 2;</code>
     */
    public function setColumns(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V2\Column::class);
        $this->columns = $arr;
    }

}

