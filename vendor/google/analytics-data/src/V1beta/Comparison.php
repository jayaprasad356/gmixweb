<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines an individual comparison. Most requests will include multiple
 * comparisons so that the report compares between the comparisons.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.Comparison</code>
 */
class Comparison extends \Google\Protobuf\Internal\Message
{
    /**
     * Each comparison produces separate rows in the response. In the response,
     * this comparison is identified by this name. If name is unspecified, we will
     * use the saved comparisons display name.
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    private $name = null;
    protected $one_comparison;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Each comparison produces separate rows in the response. In the response,
     *           this comparison is identified by this name. If name is unspecified, we will
     *           use the saved comparisons display name.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $dimension_filter
     *           A basic comparison.
     *     @type string $comparison
     *           A saved comparison identified by the comparison's resource name.
     *           For example, 'comparisons/1234'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Each comparison produces separate rows in the response. In the response,
     * this comparison is identified by this name. If name is unspecified, we will
     * use the saved comparisons display name.
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Each comparison produces separate rows in the response. In the response,
     * this comparison is identified by this name. If name is unspecified, we will
     * use the saved comparisons display name.
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
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
     * A basic comparison.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 2;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getDimensionFilter()
    {
        return $this->readOneof(2);
    }

    public function hasDimensionFilter()
    {
        return $this->hasOneof(2);
    }

    /**
     * A basic comparison.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 2;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A saved comparison identified by the comparison's resource name.
     * For example, 'comparisons/1234'.
     *
     * Generated from protobuf field <code>string comparison = 3;</code>
     * @return string
     */
    public function getComparison()
    {
        return $this->readOneof(3);
    }

    public function hasComparison()
    {
        return $this->hasOneof(3);
    }

    /**
     * A saved comparison identified by the comparison's resource name.
     * For example, 'comparisons/1234'.
     *
     * Generated from protobuf field <code>string comparison = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setComparison($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOneComparison()
    {
        return $this->whichOneof("one_comparison");
    }

}
