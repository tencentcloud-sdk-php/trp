<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCodePacks请求参数结构体
 *
 * @method integer getPageSize() 获取每页数量
 * @method void setPageSize(integer $PageSize) 设置每页数量
 * @method integer getPageNumber() 获取页数
 * @method void setPageNumber(integer $PageNumber) 设置页数
 * @method string getKeyword() 获取查询关键字
 * @method void setKeyword(string $Keyword) 设置查询关键字
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getSerialType() 获取是否有流水码 0:无 1:有
 * @method void setSerialType(integer $SerialType) 设置是否有流水码 0:无 1:有
 * @method string getResType() 获取资源类型 batch:批次, order_in 入库, order_out: 出入
 * @method void setResType(string $ResType) 设置资源类型 batch:批次, order_in 入库, order_out: 出入
 * @method string getResId() 获取资源ID ResType是 batch 时对应是批次ID, 是 order_in, order_out时，则是订单ID
 * @method void setResId(string $ResId) 设置资源ID ResType是 batch 时对应是批次ID, 是 order_in, order_out时，则是订单ID
 * @method integer getSceneCode() 获取应用场景
 * @method void setSceneCode(integer $SceneCode) 设置应用场景
 * @method string getStatus() 获取码包状态
 * @method void setStatus(string $Status) 设置码包状态
 */
class DescribeCodePacksRequest extends AbstractModel
{
    /**
     * @var integer 每页数量
     */
    public $PageSize;

    /**
     * @var integer 页数
     */
    public $PageNumber;

    /**
     * @var string 查询关键字
     */
    public $Keyword;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 是否有流水码 0:无 1:有
     */
    public $SerialType;

    /**
     * @var string 资源类型 batch:批次, order_in 入库, order_out: 出入
     */
    public $ResType;

    /**
     * @var string 资源ID ResType是 batch 时对应是批次ID, 是 order_in, order_out时，则是订单ID
     */
    public $ResId;

    /**
     * @var integer 应用场景
     */
    public $SceneCode;

    /**
     * @var string 码包状态
     */
    public $Status;

    /**
     * @param integer $PageSize 每页数量
     * @param integer $PageNumber 页数
     * @param string $Keyword 查询关键字
     * @param integer $CorpId 企业ID
     * @param integer $SerialType 是否有流水码 0:无 1:有
     * @param string $ResType 资源类型 batch:批次, order_in 入库, order_out: 出入
     * @param string $ResId 资源ID ResType是 batch 时对应是批次ID, 是 order_in, order_out时，则是订单ID
     * @param integer $SceneCode 应用场景
     * @param string $Status 码包状态
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("SerialType",$param) and $param["SerialType"] !== null) {
            $this->SerialType = $param["SerialType"];
        }

        if (array_key_exists("ResType",$param) and $param["ResType"] !== null) {
            $this->ResType = $param["ResType"];
        }

        if (array_key_exists("ResId",$param) and $param["ResId"] !== null) {
            $this->ResId = $param["ResId"];
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
