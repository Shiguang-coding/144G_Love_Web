# 介绍说明
一个可以生成表白网页，个人网页，趣味网页的全自动制作工具。

![image-20240530190505678](https://img2023.cnblogs.com/blog/2233039/202405/2233039-20240530190521506-1550531852.png)



# 改造说明

基于 [114G_Love](https://github.com/chenzhuwei/114G_Love) 进行改造

1. 调整全局配置模板
2. 更改图片外链与音乐外链工具
3. 添加友情链接配置
4. 修复部分网页取值错误问题
5. 修复无法加载背景音乐问题
6. 修复无法加载图片问题
7. ...



# 部署说明

1. 绑定号域名
2. 将文件上传到服务器wwwroot
3. 子目录下的所有文件、文件夹赋予读写权限
4. 放行端口及安全组

尽量不用https，可能会出现调用出错的情况




生成后的数据保存在 `data`目录下，以json格式进行存储

预览页面地址：http://106.15.61.102:8001/web.php?id= + json文件名称



后台登录地址：http://ip:port/admin/
登陆账号: admin
登陆密码: admin