<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>幽梦图床</title>
<meta name="description" content="幽梦图床是一款永久免费图床、无需注册、即时预览、全网CDN高速稳定保存、无需插件,支持JPG, GIF, PNG等文件格式。">
<meta name="keywords" content="免费图床,上传远程图片,图片外链,外链相册,贴图,幽梦图床,永久免费图床,新浪微博图床">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://www.layuicdn.com/layui/layui.js"></script>
</head>
<body>
<style>
body,html{height:100%;}
body {background-color: rgba(0,0,0,0);background-attachment: fixed;word-wrap: break-word;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;background-repeat: no-repeat;}
*{box-sizing:border-box;margin:0;padding:0;}
body{background-color:rgba(0,0,0,0);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;word-wrap:break-word;-webkit-background-size:cover;-moz-background-size:cover;}
ul{list-style:none;}
.umqun-show li:nth-child(1) span{background-image:url(https://tva1.sinaimg.cn/large/0075auPSly1fqb64naajfj31040swb2a);}
.umqun-show li:nth-child(2) span{background-image:url(https://tva1.sinaimg.cn/large/0072Vf1pgy1fodqnwsypsj31hc10qe82);}
.umqun-show li:nth-child(3) span{background-image:url(https://tva1.sinaimg.cn/large/0072Vf1pgy1fodqngr3vjj31kw0zkhdt);}
.umqun-show li:nth-child(4) span{background-image:url(https://tva1.sinaimg.cn/large/0072Vf1pgy1fodqig7h5nj318g0p0qv5);}
.umqun-show li:nth-child(5) span{background-image:url(https://tva1.sinaimg.cn/large/0072Vf1pgy1foxkcjl88lj31kw0w0x12);}
.umqun-show li:nth-child(6) span{background-image:url(https://tva1.sinaimg.cn/large/0072Vf1pgy1foxk7mecohj31hc0u048p);}
.umqun-show,.umqun-show:after{position:fixed;top:0;left:0;z-index:-2;width:100%;height:100%;}
.umqun-show:after{content:'';}
.umqun-show li span{position:absolute;top:0;left:0;z-index:-2;width:100%;height:100%;background-position:50% 50%;background-size:cover;background-repeat:none;color:transparent;opacity:0;-webkit-backface-visibility:hidden;-webkit-animation:imageAnimation 36s linear infinite 0s;-moz-animation:imageAnimation 36s linear infinite 0s;-o-animation:imageAnimation 36s linear infinite 0s;-ms-animation:imageAnimation 36s linear infinite 0s;animation:imageAnimation 36s linear infinite 0s;}
.umqun-show li:nth-child(2) span{-webkit-animation-delay:6s;-moz-animation-delay:6s;-o-animation-delay:6s;-ms-animation-delay:6s;animation-delay:6s;}
.umqun-show li:nth-child(3) span{-webkit-animation-delay:12s;-moz-animation-delay:12s;-o-animation-delay:12s;-ms-animation-delay:12s;animation-delay:12s;}
.umqun-show li:nth-child(4) span{-webkit-animation-delay:18s;-moz-animation-delay:18s;-o-animation-delay:18s;-ms-animation-delay:18s;animation-delay:18s;}
.umqun-show li:nth-child(5) span{-webkit-animation-delay:24s;-moz-animation-delay:24s;-o-animation-delay:24s;-ms-animation-delay:24s;animation-delay:24s;}
.umqun-show li:nth-child(6) span{-webkit-animation-delay:30s;-moz-animation-delay:30s;-o-animation-delay:30s;-ms-animation-delay:30s;animation-delay:30s;}
@-webkit-keyframes imageAnimation{0%{opacity:0;-webkit-animation-timing-function:ease-in;}
8%{opacity:1;-webkit-transform:scale(1.05);-webkit-animation-timing-function:ease-out;}
17%{opacity:1;-webkit-transform:scale(1.1) rotate(0);}
25%{opacity:0;-webkit-transform:scale(1.1) rotate(0);}
100%{opacity:0;}
}
.container{position:absolute;top:45%;right:0;left:0;margin:auto 0;padding:15px;width:100%;vertical-align:middle;text-align:center;}
.container .layui-upload-drag{position:relative;padding:10px 15px;width:300px;border:2px dashed #fff;background-color:transparent;color:#fff;text-align:center;cursor:pointer;}
.container .layui-upload-drag .layui-icon{color:#fff;font-size:30px;}
.json-container{position:relative;overflow:hidden;padding:15px;width:260px;height:auto;}
.json-container p{overflow:hidden;margin-bottom:10px;}
.json-container p img{width:100%;max-width:100%;border:0;}
</style>
<div class="container">
    <div class="layui-upload-drag" id="upload">
            <i class="layui-icon"></i>
                <p>点击此处上传</p>
        </div>
</div>
<ul class="umqun-show"><li><span></span></li><li><span></span></li><li><span></span></li><li><span></span></li><li><span></span></li><li><span></span></li></ul>
<script type="text/javascript">
layui.use('upload', function(){
    var upload = layui.upload;
        var uploadInst = upload.render({
            elem: '#upload',
                url: 'https://img.oioweb.cn/api.php',
                multiple: false,
                size: 3072,
                exts: 'jpg|png|gif|jpeg',
                data: {type:'huluxia'},
                before: function(obj){ layer.load(3);},
                done: function(res){                    
                        layer.closeAll('loading');
                        if(res.code == 1){
                            layer.open({
                                type: 1, 
                                        title :''+res.msg+'', 
                                        shade: 0, 
                                        move: false,
                                        content: '<div class="json-container"><p><input type="text" value="'+res.imgurl+'" class="layui-input"></p><p><img src="'+res.imgurl+'" alt=""></p></div>'
                                });
                        }
                },
                error: function(res){
                    layer.msg(''+ res.msg +'', {icon: 2});
                }
        });
});
</script>
</body>
</html>