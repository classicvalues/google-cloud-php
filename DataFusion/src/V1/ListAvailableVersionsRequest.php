<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the list available versions request.
 *
 * Generated from protobuf message <code>google.cloud.datafusion.v1.ListAvailableVersionsRequest</code>
 */
class ListAvailableVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location for which to retrieve instance information
     * in the format projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The next_page_token value to use if there are additional
     * results to retrieve for this list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Whether or not to return the latest patch of every available minor version.
     * If true, only the latest patch will be returned. Ex. if allowed versions is
     * [6.1.1, 6.1.2, 6.2.0] then response will be [6.1.2, 6.2.0]
     *
     * Generated from protobuf field <code>bool latest_patch_only = 4;</code>
     */
    private $latest_patch_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project and location for which to retrieve instance information
     *           in the format projects/{project}/locations/{location}.
     *     @type int $page_size
     *           The maximum number of items to return.
     *     @type string $page_token
     *           The next_page_token value to use if there are additional
     *           results to retrieve for this list request.
     *     @type bool $latest_patch_only
     *           Whether or not to return the latest patch of every available minor version.
     *           If true, only the latest patch will be returned. Ex. if allowed versions is
     *           [6.1.1, 6.1.2, 6.2.0] then response will be [6.1.2, 6.2.0]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datafusion\V1\Datafusion::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location for which to retrieve instance information
     * in the format projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location for which to retrieve instance information
     * in the format projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value to use if there are additional
     * results to retrieve for this list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value to use if there are additional
     * results to retrieve for this list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Whether or not to return the latest patch of every available minor version.
     * If true, only the latest patch will be returned. Ex. if allowed versions is
     * [6.1.1, 6.1.2, 6.2.0] then response will be [6.1.2, 6.2.0]
     *
     * Generated from protobuf field <code>bool latest_patch_only = 4;</code>
     * @return bool
     */
    public function getLatestPatchOnly()
    {
        return $this->latest_patch_only;
    }

    /**
     * Whether or not to return the latest patch of every available minor version.
     * If true, only the latest patch will be returned. Ex. if allowed versions is
     * [6.1.1, 6.1.2, 6.2.0] then response will be [6.1.2, 6.2.0]
     *
     * Generated from protobuf field <code>bool latest_patch_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setLatestPatchOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->latest_patch_only = $var;

        return $this;
    }

}

