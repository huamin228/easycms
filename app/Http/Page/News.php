<?php

namespace App\Http\Page;


class News
{
    /**
     * @var array
     * 编辑项定义
     */
    public $input = [
      [
          "key"=> "id",
          "name"=> "唯一id",
          "type"=>"prikey", //主键key
          "size"=>10,
          "readonly"=> true,
          "tip"=> "唯一编号，自动生成，不可修改"
      ],
      [
          "key"=> "title",
          "name"=> "标题",
          "type"=>"text",
          "size"=>10,
          "readonly"=> true,
          "tip"=> "标题不可为空"
      ],
      [
          "key"=> "category",
          "name"=> "分类",
          "type"=>"select",
          "datalist"=>[
              "1"=>"技术文摘",
              "2"=>"财经资讯",
              "3"=>"情感故事",
          ],
          "size"=>10,
          "readonly"=> true,
          "tip"=> "分类不可为空"
      ],
      [
          "key"=> "contents",
          "name"=> "内容",
          "type"=>"editortext",
          "size"=>1000,
          "readonly"=> true,
          "tip"=> "内容不可为空"
      ],
    ];

    /**
     * @var array
     * 列表查询配置
     */
    public $model = [
        "set"=>"",
        "keys"=>"",
        "pk"=>"id",
        "where"=>[],
        "limit"=>""
    ];
}
