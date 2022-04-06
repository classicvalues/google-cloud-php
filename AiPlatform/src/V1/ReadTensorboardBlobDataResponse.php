<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [TensorboardService.ReadTensorboardBlobData][google.cloud.aiplatform.v1.TensorboardService.ReadTensorboardBlobData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadTensorboardBlobDataResponse</code>
 */
class ReadTensorboardBlobDataResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Blob messages containing blob bytes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardBlob blobs = 1;</code>
     */
    private $blobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardBlob[]|\Google\Protobuf\Internal\RepeatedField $blobs
     *           Blob messages containing blob bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Blob messages containing blob bytes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardBlob blobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlobs()
    {
        return $this->blobs;
    }

    /**
     * Blob messages containing blob bytes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TensorboardBlob blobs = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\TensorboardBlob[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\TensorboardBlob::class);
        $this->blobs = $arr;

        return $this;
    }

}

