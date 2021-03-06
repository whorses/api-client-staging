<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to the ListInspectFindings request.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.ListInspectFindingsResponse</code>
 */
class ListInspectFindingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The results.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.InspectResult result = 1;</code>
     */
    private $result = null;
    /**
     * If not empty, indicates that there may be more results that match the
     * request; this value should be passed in a new `ListInspectFindingsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * The results.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.InspectResult result = 1;</code>
     * @return \Google\Privacy\Dlp\V2beta1\InspectResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The results.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.InspectResult result = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\InspectResult $var
     */
    public function setResult(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\InspectResult::class);
        $this->result = $var;
    }

    /**
     * If not empty, indicates that there may be more results that match the
     * request; this value should be passed in a new `ListInspectFindingsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there may be more results that match the
     * request; this value should be passed in a new `ListInspectFindingsRequest`.
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

