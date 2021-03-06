<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getDefinition() 获取指定时间点截图模板 ID。
 * @method void setDefinition(integer $Definition) 设置指定时间点截图模板 ID。
 * @method array getTimeOffsetSet() 获取截图时间点列表，单位为<font color=red>毫秒</font>。
 * @method void setTimeOffsetSet(array $TimeOffsetSet) 设置截图时间点列表，单位为<font color=red>毫秒</font>。
 * @method array getWatermarkSet() 获取水印列表，支持多张图片或文字水印，最大可支持 10 张。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWatermarkSet(array $WatermarkSet) 设置水印列表，支持多张图片或文字水印，最大可支持 10 张。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *对视频按指定时间点截图任务输入参数类型
 */
class SnapshotByTimeOffsetTaskInput extends AbstractModel
{
    /**
     * @var integer 指定时间点截图模板 ID。
     */
    public $Definition;

    /**
     * @var array 截图时间点列表，单位为<font color=red>毫秒</font>。
     */
    public $TimeOffsetSet;

    /**
     * @var array 水印列表，支持多张图片或文字水印，最大可支持 10 张。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WatermarkSet;
    /**
     * @param integer $Definition 指定时间点截图模板 ID。
     * @param array $TimeOffsetSet 截图时间点列表，单位为<font color=red>毫秒</font>。
     * @param array $WatermarkSet 水印列表，支持多张图片或文字水印，最大可支持 10 张。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("TimeOffsetSet",$param) and $param["TimeOffsetSet"] !== null) {
            $this->TimeOffsetSet = $param["TimeOffsetSet"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }
    }
}
