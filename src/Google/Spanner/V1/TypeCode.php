<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/type.proto

namespace Google\Spanner\V1;

/**
 * <pre>
 * `TypeCode` is used as part of [Type][google.spanner.v1.Type] to
 * indicate the type of a Cloud Spanner value.
 * Each legal value of a type can be encoded to or decoded from a JSON
 * value, using the encodings described below. All Cloud Spanner values can
 * be `null`, regardless of type; `null`s are always encoded as a JSON
 * `null`.
 * </pre>
 *
 * Protobuf enum <code>google.spanner.v1.TypeCode</code>
 */
class TypeCode
{
    /**
     * <pre>
     * Not specified.
     * </pre>
     *
     * <code>TYPE_CODE_UNSPECIFIED = 0;</code>
     */
    const TYPE_CODE_UNSPECIFIED = 0;
    /**
     * <pre>
     * Encoded as JSON `true` or `false`.
     * </pre>
     *
     * <code>BOOL = 1;</code>
     */
    const BOOL = 1;
    /**
     * <pre>
     * Encoded as `string`, in decimal format.
     * </pre>
     *
     * <code>INT64 = 2;</code>
     */
    const INT64 = 2;
    /**
     * <pre>
     * Encoded as `number`, or the strings `"NaN"`, `"Infinity"`, or
     * `"-Infinity"`.
     * </pre>
     *
     * <code>FLOAT64 = 3;</code>
     */
    const FLOAT64 = 3;
    /**
     * <pre>
     * Encoded as `string` in RFC 3339 timestamp format. The time zone
     * must be present, and must be `"Z"`.
     * </pre>
     *
     * <code>TIMESTAMP = 4;</code>
     */
    const TIMESTAMP = 4;
    /**
     * <pre>
     * Encoded as `string` in RFC 3339 date format.
     * </pre>
     *
     * <code>DATE = 5;</code>
     */
    const DATE = 5;
    /**
     * <pre>
     * Encoded as `string`.
     * </pre>
     *
     * <code>STRING = 6;</code>
     */
    const STRING = 6;
    /**
     * <pre>
     * Encoded as a base64-encoded `string`, as described in RFC 4648,
     * section 4.
     * </pre>
     *
     * <code>BYTES = 7;</code>
     */
    const BYTES = 7;
    /**
     * <pre>
     * Encoded as `list`, where the list elements are represented
     * according to [array_element_type][google.spanner.v1.Type.array_element_type].
     * </pre>
     *
     * <code>ARRAY = 8;</code>
     */
    const ARRAY = 8;
    /**
     * <pre>
     * Encoded as `list`, where list element `i` is represented according
     * to [struct_type.fields[i]][google.spanner.v1.StructType.fields].
     * </pre>
     *
     * <code>STRUCT = 9;</code>
     */
    const STRUCT = 9;
}

