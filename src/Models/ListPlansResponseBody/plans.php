<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponseBody\plans\tags;
use AlibabaCloud\Tea\Model;

class plans extends Model
{
    /**
     * @description The peak bandwidth. Unit: Mbit/s.
     *
     * @example 3
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $core;

    /**
     * @description The unit of the plan price. Valid values:
     *
     *   CNY
     *   USD
     *
     * >  CNY is for the China site (aliyun.com). USD is for the international site (alibabacloud.com).
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The size of the disk. Unit: GB.
     *
     * @example 40
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The category of the disk. Valid values:
     *
     *   SSD: standard SSDs
     *   ESSD: enhanced SSDs
     *
     * @example ESSD
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The monthly data transfer quota. Unit: GB.
     *
     * @example 400
     *
     * @var int
     */
    public $flow;

    /**
     * @var string
     */
    public $ispType;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 1
     *
     * @var float
     */
    public $memory;

    /**
     * @description The monthly price of the plan.
     *
     * @example 60
     *
     * @var string
     */
    public $originPrice;

    /**
     * @description The ID of the plan.
     *
     * @example swas.s2.c2m1s40b3t04
     *
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $publicIpNum;

    /**
     * @description The operating system types supported by the plan.
     *
     * @example ["Linux","Windows"]
     *
     * @var string
     */
    public $supportPlatform;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'core' => 'Core',
        'currency' => 'Currency',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
        'flow' => 'Flow',
        'ispType' => 'IspType',
        'memory' => 'Memory',
        'originPrice' => 'OriginPrice',
        'planId' => 'PlanId',
        'planType' => 'PlanType',
        'publicIpNum' => 'PublicIpNum',
        'supportPlatform' => 'SupportPlatform',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->ispType) {
            $res['IspType'] = $this->ispType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->publicIpNum) {
            $res['PublicIpNum'] = $this->publicIpNum;
        }
        if (null !== $this->supportPlatform) {
            $res['SupportPlatform'] = $this->supportPlatform;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['IspType'])) {
            $model->ispType = $map['IspType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['PublicIpNum'])) {
            $model->publicIpNum = $map['PublicIpNum'];
        }
        if (isset($map['SupportPlatform'])) {
            $model->supportPlatform = $map['SupportPlatform'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
