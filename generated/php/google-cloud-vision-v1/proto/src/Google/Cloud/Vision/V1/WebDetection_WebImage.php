<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/web_detection.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for online images.
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\WebDetection\WebImage</code>
 */
class WebDetection_WebImage extends \Google\Protobuf\Internal\Message
{
    /**
     * The result image URL.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    private $url = '';
    /**
     * Overall relevancy score for the image.
     * Not normalized and not comparable across different image queries.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     */
    private $score = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\WebDetection::initOnce();
        parent::__construct();
    }

    /**
     * The result image URL.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The result image URL.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;
    }

    /**
     * Overall relevancy score for the image.
     * Not normalized and not comparable across different image queries.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Overall relevancy score for the image.
     * Not normalized and not comparable across different image queries.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @param float $var
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;
    }

}
