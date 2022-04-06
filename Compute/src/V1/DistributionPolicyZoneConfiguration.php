<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.DistributionPolicyZoneConfiguration</code>
 */
class DistributionPolicyZoneConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL of the zone. The zone must exist in the region where the managed instance group is located.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $zone
     *           The URL of the zone. The zone must exist in the region where the managed instance group is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL of the zone. The zone must exist in the region where the managed instance group is located.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * The URL of the zone. The zone must exist in the region where the managed instance group is located.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

