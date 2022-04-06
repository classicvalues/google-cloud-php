<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/common.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption information for a Cloud Spanner database or backup.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.EncryptionInfo</code>
 */
class EncryptionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The type of encryption.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionInfo.Type encryption_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encryption_type = 0;
    /**
     * Output only. If present, the status of a recent encrypt/decrypt call on underlying data
     * for this database or backup. Regardless of status, data is always encrypted
     * at rest.
     *
     * Generated from protobuf field <code>.google.rpc.Status encryption_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encryption_status = null;
    /**
     * Output only. A Cloud KMS key version that is being used to protect the database or
     * backup.
     *
     * Generated from protobuf field <code>string kms_key_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $kms_key_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $encryption_type
     *           Output only. The type of encryption.
     *     @type \Google\Rpc\Status $encryption_status
     *           Output only. If present, the status of a recent encrypt/decrypt call on underlying data
     *           for this database or backup. Regardless of status, data is always encrypted
     *           at rest.
     *     @type string $kms_key_version
     *           Output only. A Cloud KMS key version that is being used to protect the database or
     *           backup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The type of encryption.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionInfo.Type encryption_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->encryption_type;
    }

    /**
     * Output only. The type of encryption.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionInfo.Type encryption_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEncryptionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo\Type::class);
        $this->encryption_type = $var;

        return $this;
    }

    /**
     * Output only. If present, the status of a recent encrypt/decrypt call on underlying data
     * for this database or backup. Regardless of status, data is always encrypted
     * at rest.
     *
     * Generated from protobuf field <code>.google.rpc.Status encryption_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getEncryptionStatus()
    {
        return $this->encryption_status;
    }

    public function hasEncryptionStatus()
    {
        return isset($this->encryption_status);
    }

    public function clearEncryptionStatus()
    {
        unset($this->encryption_status);
    }

    /**
     * Output only. If present, the status of a recent encrypt/decrypt call on underlying data
     * for this database or backup. Regardless of status, data is always encrypted
     * at rest.
     *
     * Generated from protobuf field <code>.google.rpc.Status encryption_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setEncryptionStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->encryption_status = $var;

        return $this;
    }

    /**
     * Output only. A Cloud KMS key version that is being used to protect the database or
     * backup.
     *
     * Generated from protobuf field <code>string kms_key_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyVersion()
    {
        return $this->kms_key_version;
    }

    /**
     * Output only. A Cloud KMS key version that is being used to protect the database or
     * backup.
     *
     * Generated from protobuf field <code>string kms_key_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_version = $var;

        return $this;
    }

}

