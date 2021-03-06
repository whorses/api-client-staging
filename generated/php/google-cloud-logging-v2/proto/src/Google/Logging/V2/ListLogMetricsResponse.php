<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result returned from ListLogMetrics.
 *
 * Protobuf type <code>Google\Logging\V2\ListLogMetricsResponse</code>
 */
class ListLogMetricsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of logs-based metrics.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     */
    private $metrics;
    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LoggingMetrics::initOnce();
        parent::__construct();
    }

    /**
     * A list of logs-based metrics.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * A list of logs-based metrics.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogMetric metrics = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setMetrics(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Logging\V2\LogMetric::class);
        $this->metrics = $arr;
    }

    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included.  To get the next set of results, call this
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;
    }

}

