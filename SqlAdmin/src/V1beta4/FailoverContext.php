<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance failover context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.FailoverContext</code>
 */
class FailoverContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The current settings version of this instance. Request will be rejected if
     * this version doesn't match the current settings version.
     *
     * Generated from protobuf field <code>int64 settings_version = 1;</code>
     */
    private $settings_version = 0;
    /**
     * This is always `sql#failoverContext`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     */
    private $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $settings_version
     *           The current settings version of this instance. Request will be rejected if
     *           this version doesn't match the current settings version.
     *     @type string $kind
     *           This is always `sql#failoverContext`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The current settings version of this instance. Request will be rejected if
     * this version doesn't match the current settings version.
     *
     * Generated from protobuf field <code>int64 settings_version = 1;</code>
     * @return int|string
     */
    public function getSettingsVersion()
    {
        return $this->settings_version;
    }

    /**
     * The current settings version of this instance. Request will be rejected if
     * this version doesn't match the current settings version.
     *
     * Generated from protobuf field <code>int64 settings_version = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSettingsVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->settings_version = $var;

        return $this;
    }

    /**
     * This is always `sql#failoverContext`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#failoverContext`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

