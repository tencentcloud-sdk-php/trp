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
 * CreateCustomPack请求参数结构体
 *
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 * @method integer getAmount() 获取生码数量, 普通码包时必填
 * @method void setAmount(integer $Amount) 设置生码数量, 普通码包时必填
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getPackType() 获取码包类型 0: 普通码包 1: 层级码包
 * @method void setPackType(integer $PackType) 设置码包类型 0: 普通码包 1: 层级码包
 * @method integer getPackLevel() 获取码包层级
 * @method void setPackLevel(integer $PackLevel) 设置码包层级
 * @method array getPackSpec() 获取层级码包规则
 * @method void setPackSpec(array $PackSpec) 设置层级码包规则
 * @method string getCustomId() 获取码规则ID,  和CodeParts二选一必填
 * @method void setCustomId(string $CustomId) 设置码规则ID,  和CodeParts二选一必填
 * @method array getCodeParts() 获取码段配置，和CustomId二选一必填
 * @method void setCodeParts(array $CodeParts) 设置码段配置，和CustomId二选一必填
 * @method string getBatchId() 获取批次ID，如果传了生码后会同时绑定批次，并激活码
 * @method void setBatchId(string $BatchId) 设置批次ID，如果传了生码后会同时绑定批次，并激活码
 * @method integer getSerialType() 获取是否有流水码 0:无 1:有
 * @method void setSerialType(integer $SerialType) 设置是否有流水码 0:无 1:有
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getRelateType() 获取是否预生成码关系
0: 否, 1:是
默认为1，仅对层级码有效
 * @method void setRelateType(integer $RelateType) 设置是否预生成码关系
0: 否, 1:是
默认为1，仅对层级码有效
 * @method integer getSceneCode() 获取场景值
 * @method void setSceneCode(integer $SceneCode) 设置场景值
 */
class CreateCustomPackRequest extends AbstractModel
{
    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @var integer 生码数量, 普通码包时必填
     */
    public $Amount;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 码包类型 0: 普通码包 1: 层级码包
     */
    public $PackType;

    /**
     * @var integer 码包层级
     */
    public $PackLevel;

    /**
     * @var array 层级码包规则
     */
    public $PackSpec;

    /**
     * @var string 码规则ID,  和CodeParts二选一必填
     */
    public $CustomId;

    /**
     * @var array 码段配置，和CustomId二选一必填
     */
    public $CodeParts;

    /**
     * @var string 批次ID，如果传了生码后会同时绑定批次，并激活码
     */
    public $BatchId;

    /**
     * @var integer 是否有流水码 0:无 1:有
     */
    public $SerialType;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 是否预生成码关系
0: 否, 1:是
默认为1，仅对层级码有效
     */
    public $RelateType;

    /**
     * @var integer 场景值
     */
    public $SceneCode;

    /**
     * @param string $MerchantId 商户ID
     * @param integer $Amount 生码数量, 普通码包时必填
     * @param integer $CorpId 企业ID
     * @param integer $PackType 码包类型 0: 普通码包 1: 层级码包
     * @param integer $PackLevel 码包层级
     * @param array $PackSpec 层级码包规则
     * @param string $CustomId 码规则ID,  和CodeParts二选一必填
     * @param array $CodeParts 码段配置，和CustomId二选一必填
     * @param string $BatchId 批次ID，如果传了生码后会同时绑定批次，并激活码
     * @param integer $SerialType 是否有流水码 0:无 1:有
     * @param string $ProductId 产品ID
     * @param integer $RelateType 是否预生成码关系
0: 否, 1:是
默认为1，仅对层级码有效
     * @param integer $SceneCode 场景值
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("PackType",$param) and $param["PackType"] !== null) {
            $this->PackType = $param["PackType"];
        }

        if (array_key_exists("PackLevel",$param) and $param["PackLevel"] !== null) {
            $this->PackLevel = $param["PackLevel"];
        }

        if (array_key_exists("PackSpec",$param) and $param["PackSpec"] !== null) {
            $this->PackSpec = [];
            foreach ($param["PackSpec"] as $key => $value){
                $obj = new PackSpec();
                $obj->deserialize($value);
                array_push($this->PackSpec, $obj);
            }
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("CodeParts",$param) and $param["CodeParts"] !== null) {
            $this->CodeParts = [];
            foreach ($param["CodeParts"] as $key => $value){
                $obj = new CodePart();
                $obj->deserialize($value);
                array_push($this->CodeParts, $obj);
            }
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("SerialType",$param) and $param["SerialType"] !== null) {
            $this->SerialType = $param["SerialType"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("RelateType",$param) and $param["RelateType"] !== null) {
            $this->RelateType = $param["RelateType"];
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }
    }
}
