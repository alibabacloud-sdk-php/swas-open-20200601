<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N that you want to add to the simple application server. Valid values of N: 1 to 20.
     *
     * You cannot specify an empty string as a tag key. A tag key can be up to 64 characters in length. It cannot start with aliyun or acs: and cannot contain http:// or https://.
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag N that you want to add to the simple application server. Valid values of N: 1 to 20.
     *
     * You can specify an empty string as a tag value. A tag value can be up to 64 characters in length. It cannot start with aliyun or acs: and cannot contain http:// or https://.
     * @example TestValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}