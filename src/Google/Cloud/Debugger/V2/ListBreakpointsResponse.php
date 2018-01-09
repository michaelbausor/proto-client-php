<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for listing breakpoints.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.ListBreakpointsResponse</code>
 */
class ListBreakpointsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of breakpoints matching the request.
     * The fields `id` and `location` are guaranteed to be set on each breakpoint.
     * The fields: `stack_frames`, `evaluated_expressions` and `variable_table`
     * are cleared on each breakpoint regardless of its status.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Breakpoint breakpoints = 1;</code>
     */
    private $breakpoints;
    /**
     * A wait token that can be used in the next call to `list` (REST) or
     * `ListBreakpoints` (RPC) to block until the list of breakpoints has changes.
     *
     * Generated from protobuf field <code>string next_wait_token = 2;</code>
     */
    private $next_wait_token = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Debugger::initOnce();
        parent::__construct();
    }

    /**
     * List of breakpoints matching the request.
     * The fields `id` and `location` are guaranteed to be set on each breakpoint.
     * The fields: `stack_frames`, `evaluated_expressions` and `variable_table`
     * are cleared on each breakpoint regardless of its status.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Breakpoint breakpoints = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBreakpoints()
    {
        return $this->breakpoints;
    }

    /**
     * List of breakpoints matching the request.
     * The fields `id` and `location` are guaranteed to be set on each breakpoint.
     * The fields: `stack_frames`, `evaluated_expressions` and `variable_table`
     * are cleared on each breakpoint regardless of its status.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Breakpoint breakpoints = 1;</code>
     * @param \Google\Cloud\Debugger\V2\Breakpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBreakpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Debugger\V2\Breakpoint::class);
        $this->breakpoints = $arr;

        return $this;
    }

    /**
     * A wait token that can be used in the next call to `list` (REST) or
     * `ListBreakpoints` (RPC) to block until the list of breakpoints has changes.
     *
     * Generated from protobuf field <code>string next_wait_token = 2;</code>
     * @return string
     */
    public function getNextWaitToken()
    {
        return $this->next_wait_token;
    }

    /**
     * A wait token that can be used in the next call to `list` (REST) or
     * `ListBreakpoints` (RPC) to block until the list of breakpoints has changes.
     *
     * Generated from protobuf field <code>string next_wait_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextWaitToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_wait_token = $var;

        return $this;
    }

}

