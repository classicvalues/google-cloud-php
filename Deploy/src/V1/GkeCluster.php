<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information specifying a GKE Cluster.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.GkeCluster</code>
 */
class GkeCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Information specifying a GKE Cluster. Format is
     * `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.resource_reference) = {</code>
     */
    private $cluster = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster
     *           Information specifying a GKE Cluster. Format is
     *           `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Information specifying a GKE Cluster. Format is
     * `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Information specifying a GKE Cluster. Format is
     * `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

}

