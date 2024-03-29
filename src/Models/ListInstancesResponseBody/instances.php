<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\image;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\resourceSpec;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The status of the server. Valid values:
     *
     *   Normal: The server is normal.
     *   Expired: The server expires.
     *   Overdue: The payment of the server is overdue.
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The billing method of the simple application server.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Indicates whether the plan is a bundle plan.
     *
     * @example false
     *
     * @var bool
     */
    public $combination;

    /**
     * @description The ID of the bundle plan.
     *
     * @example com-f6c9a22****45b5b8de68ad608af1ba
     *
     * @var string
     */
    public $combinationInstanceId;

    /**
     * @description The time when the simple application server was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-03-08T05:31:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The DDoS protection status of the server. Valid values:
     *
     *   Normal: The DDoS protection status of the server is normal.
     *   BlackHole: The server is in blackhole filtering.
     *   Defense: The server is being scrubbed.
     *
     * @example Normal
     *
     * @var string
     */
    public $ddosStatus;

    /**
     * @description The reason why the server is disabled. Valid values:
     *
     *   FINANCIAL: The server is locked due to overdue payments.
     *   SECURITY: The server is locked due to security reasons.
     *   EXPIRED: The server has expired.
     *
     * @example EXPIRED
     *
     * @var string
     */
    public $disableReason;

    /**
     * @description The time when the server expires. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-05-08T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The description of the image.
     *
     * @var image
     */
    public $image;

    /**
     * @description The ID of an image.
     *
     * @example fe9c66133a9d4688872869726b52****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The internal IP address of the simple application server.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $innerIpAddress;

    /**
     * @description The ID of the simple application server.
     *
     * @example 2ad1ae67295445f598017499dc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example test-InstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The plan ID.
     *
     * @example swas.s2.c2m2s50b4t08
     *
     * @var string
     */
    public $planId;

    /**
     * @description The public IP address of the server.
     *
     * @example 42.1.XX.XX
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @description The region ID of the servers.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The specifications of the resource.
     *
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @description The status of the simple application server. Valid values:
     *
     *   Pending
     *   Starting
     *   Running
     *   Stopping
     *   Stopped
     *   Resetting
     *   Upgrading
     *   Disabled
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The universally unique identifier (UUID) of the server.
     *
     * @example 41f30524-5df7-49c9-9c6e-32****489001
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'businessStatus'        => 'BusinessStatus',
        'chargeType'            => 'ChargeType',
        'combination'           => 'Combination',
        'combinationInstanceId' => 'CombinationInstanceId',
        'creationTime'          => 'CreationTime',
        'ddosStatus'            => 'DdosStatus',
        'disableReason'         => 'DisableReason',
        'expiredTime'           => 'ExpiredTime',
        'image'                 => 'Image',
        'imageId'               => 'ImageId',
        'innerIpAddress'        => 'InnerIpAddress',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'planId'                => 'PlanId',
        'publicIpAddress'       => 'PublicIpAddress',
        'regionId'              => 'RegionId',
        'resourceSpec'          => 'ResourceSpec',
        'status'                => 'Status',
        'uuid'                  => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->combination) {
            $res['Combination'] = $this->combination;
        }
        if (null !== $this->combinationInstanceId) {
            $res['CombinationInstanceId'] = $this->combinationInstanceId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }
        if (null !== $this->disableReason) {
            $res['DisableReason'] = $this->disableReason;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Combination'])) {
            $model->combination = $map['Combination'];
        }
        if (isset($map['CombinationInstanceId'])) {
            $model->combinationInstanceId = $map['CombinationInstanceId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }
        if (isset($map['DisableReason'])) {
            $model->disableReason = $map['DisableReason'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = $map['InnerIpAddress'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
