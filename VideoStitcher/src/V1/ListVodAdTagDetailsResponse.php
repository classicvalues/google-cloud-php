<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for VideoStitcherService.listVodAdTagDetails.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.ListVodAdTagDetailsResponse</code>
 */
class ListVodAdTagDetailsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A List of ad tag details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.VodAdTagDetail vod_ad_tag_details = 1;</code>
     */
    private $vod_ad_tag_details;
    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Stitcher\V1\VodAdTagDetail[]|\Google\Protobuf\Internal\RepeatedField $vod_ad_tag_details
     *           A List of ad tag details.
     *     @type string $next_page_token
     *           The pagination token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * A List of ad tag details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.VodAdTagDetail vod_ad_tag_details = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVodAdTagDetails()
    {
        return $this->vod_ad_tag_details;
    }

    /**
     * A List of ad tag details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.VodAdTagDetail vod_ad_tag_details = 1;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\VodAdTagDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVodAdTagDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Stitcher\V1\VodAdTagDetail::class);
        $this->vod_ad_tag_details = $arr;

        return $this;
    }

    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

