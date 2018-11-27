<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5shiv.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <script type="text/javascript" src="/lib/webuploader/0.1.5/webuploader.min.js"></script>
    <script type="text/javascript" src="/lib/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
    <!--/请在上方写此页面业务相关的脚本-->

    <title>{{$title}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<article class="page-container">
    <h3>{{$title}}</h3>
    <form class="form form-horizontal" id="form-article-add">
        @foreach ($inputs as $input)
            @if ($input['type'] === 'prikey')
            @elseif($input['type'] === 'select')
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>{{$input['name']}}：</label>
                    <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="{{$input['key']}}" class="select">
                    @foreach($input['datalist'] as $key=>$data)
                    <option value="{{$key}}">{{$data}}</option>
                    @endforeach
                </select>
				</span> </div>
                </div>
                @elseif($input['type'] === 'editortext')
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">{{$input['name']}}：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <script id="editor" name="{{$input['key']}}" type="text/plain" style="width:100%;height:400px;"></script>
                    </div>
                    <script type="text/javascript">
                        var ue = UE.getEditor('editor');
                    </script>
                </div>
                @else
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>{{$input['name']}}：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="articletitle" name="articletitle">
            </div>
        </div>
            @endif
        @endforeach
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>
                <button class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</article>
</body>
</html>