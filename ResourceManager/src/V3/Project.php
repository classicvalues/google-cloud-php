<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/projects.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A project is a high-level Google Cloud entity. It is a
 * container for ACLs, APIs, App Engine Apps, VMs, and other
 * Google Cloud Platform resources.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.Project</code>
 */
class Project extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The unique resource name of the project. It is an int64 generated number
     * prefixed by "projects/".
     * Example: `projects/415104041262`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Optional. A reference to a parent Resource. eg., `organizations/123` or
     * `folders/876`.
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $parent = '';
    /**
     * Immutable. The unique, user-assigned id of the project.
     * It must be 6 to 30 lowercase ASCII letters, digits, or hyphens.
     * It must start with a letter.
     * Trailing hyphens are prohibited.
     * Example: `tokyo-rain-123`
     *
     * Generated from protobuf field <code>string project_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $project_id = '';
    /**
     * Output only. The project lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Project.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Optional. A user-assigned display name of the project.
     * When present it must be between 4 to 30 characters.
     * Allowed characters are: lowercase and uppercase letters, numbers,
     * hyphen, single-quote, double-quote, space, and exclamation point.
     * Example: `My Project`
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The most recent time this resource was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The time at which this resource was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $delete_time = null;
    /**
     * Output only. A checksum computed by the server based on the current value of the Project
     * resource. This may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $etag = '';
    /**
     * Optional. The labels associated with this project.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: \[a-z\](\[-a-z0-9\]*\[a-z0-9\])?.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression (\[a-z\](\[-a-z0-9\]*\[a-z0-9\])?)?.
     * No more than 256 labels can be associated with a given resource.
     * Clients should store labels in a representation such as JSON that does not
     * depend on specific characters being disallowed.
     * Example: `"myBusinessDimension" : "businessValue"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The unique resource name of the project. It is an int64 generated number
     *           prefixed by "projects/".
     *           Example: `projects/415104041262`
     *     @type string $parent
     *           Optional. A reference to a parent Resource. eg., `organizations/123` or
     *           `folders/876`.
     *     @type string $project_id
     *           Immutable. The unique, user-assigned id of the project.
     *           It must be 6 to 30 lowercase ASCII letters, digits, or hyphens.
     *           It must start with a letter.
     *           Trailing hyphens are prohibited.
     *           Example: `tokyo-rain-123`
     *     @type int $state
     *           Output only. The project lifecycle state.
     *     @type string $display_name
     *           Optional. A user-assigned display name of the project.
     *           When present it must be between 4 to 30 characters.
     *           Allowed characters are: lowercase and uppercase letters, numbers,
     *           hyphen, single-quote, double-quote, space, and exclamation point.
     *           Example: `My Project`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The most recent time this resource was modified.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. The time at which this resource was requested for deletion.
     *     @type string $etag
     *           Output only. A checksum computed by the server based on the current value of the Project
     *           resource. This may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels associated with this project.
     *           Label keys must be between 1 and 63 characters long and must conform
     *           to the following regular expression: \[a-z\](\[-a-z0-9\]*\[a-z0-9\])?.
     *           Label values must be between 0 and 63 characters long and must conform
     *           to the regular expression (\[a-z\](\[-a-z0-9\]*\[a-z0-9\])?)?.
     *           No more than 256 labels can be associated with a given resource.
     *           Clients should store labels in a representation such as JSON that does not
     *           depend on specific characters being disallowed.
     *           Example: `"myBusinessDimension" : "businessValue"`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Projects::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The unique resource name of the project. It is an int64 generated number
     * prefixed by "projects/".
     * Example: `projects/415104041262`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The unique resource name of the project. It is an int64 generated number
     * prefixed by "projects/".
     * Example: `projects/415104041262`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. A reference to a parent Resource. eg., `organizations/123` or
     * `folders/876`.
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Optional. A reference to a parent Resource. eg., `organizations/123` or
     * `folders/876`.
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Immutable. The unique, user-assigned id of the project.
     * It must be 6 to 30 lowercase ASCII letters, digits, or hyphens.
     * It must start with a letter.
     * Trailing hyphens are prohibited.
     * Example: `tokyo-rain-123`
     *
     * Generated from protobuf field <code>string project_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Immutable. The unique, user-assigned id of the project.
     * It must be 6 to 30 lowercase ASCII letters, digits, or hyphens.
     * It must start with a letter.
     * Trailing hyphens are prohibited.
     * Example: `tokyo-rain-123`
     *
     * Generated from protobuf field <code>string project_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Output only. The project lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Project.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The project lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Project.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ResourceManager\V3\Project\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. A user-assigned display name of the project.
     * When present it must be between 4 to 30 characters.
     * Allowed characters are: lowercase and uppercase letters, numbers,
     * hyphen, single-quote, double-quote, space, and exclamation point.
     * Example: `My Project`
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. A user-assigned display name of the project.
     * When present it must be between 4 to 30 characters.
     * Allowed characters are: lowercase and uppercase letters, numbers,
     * hyphen, single-quote, double-quote, space, and exclamation point.
     * Example: `My Project`
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The most recent time this resource was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The most recent time this resource was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this resource was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. The time at which this resource was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Output only. A checksum computed by the server based on the current value of the Project
     * resource. This may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. A checksum computed by the server based on the current value of the Project
     * resource. This may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. The labels associated with this project.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: \[a-z\](\[-a-z0-9\]*\[a-z0-9\])?.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression (\[a-z\](\[-a-z0-9\]*\[a-z0-9\])?)?.
     * No more than 256 labels can be associated with a given resource.
     * Clients should store labels in a representation such as JSON that does not
     * depend on specific characters being disallowed.
     * Example: `"myBusinessDimension" : "businessValue"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels associated with this project.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: \[a-z\](\[-a-z0-9\]*\[a-z0-9\])?.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression (\[a-z\](\[-a-z0-9\]*\[a-z0-9\])?)?.
     * No more than 256 labels can be associated with a given resource.
     * Clients should store labels in a representation such as JSON that does not
     * depend on specific characters being disallowed.
     * Example: `"myBusinessDimension" : "businessValue"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

