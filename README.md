
### KongQi Laravel admin 2.0
集成了，图片上传，多图上传，批量Excel导入，批量插入，修改，添加，搜索，权限管理RBAC,验证码，插件一个综合完善后台，助你开发快人一步。     
准许协议MIT，允许你修改和包装，但需要注明版权。

- 作者:空气  
- QQ:531833998  
- QQ群：650547109  欢迎交流，也欢迎定制系统，全职在家提供技术。
- 版权：好学科技所有
- 详细文档地址 https://www.heibaiketang.com/note/cover/8.html
- 后台演示地址 http://testlaravel.haoxuekeji.cn/admin 
- 账号:kongqi
- 密码:kongqi1688




## 关于后台管理系统

利用laravel框架，打造一款快速开发后台操作，内置了RBAC权限管理，集成了列表api,批量删除，批量增加，Excel批量导入，排序，列表编辑，图片上传，图片多图上传，编辑器，插件安装等。
- 界面采用Bootstrap4 ，结合Layui，简单方便，上手容易
- 对经常用到的一些功能，进行了封装和改造，让代码写的更少。
- 拿到就能快速开发，无需繁琐的搭建一个后台管理系统。
- 代码极少就能完成增删改查。
- 搜索功能进行了改变，减少一大堆的判断，让你写起来更爽
- blade视图自动找到文件模板，免去写很多的视图定位文件，全部自动化。
- blade公用模板，让你经常写的代码全部一次搞定
- ui生成库可以随便插拔更换。
- 利用控制器就能把blade 模板搞定

### 系统说明

- PHP7.2以上版本
- MySQL v5.7.7及更高版本
- Laravel 6.0,低于这个版本也可以，但不能低于 laravel 5.4版本
### 最新学习社区-黑白课堂
http://www.heibaiketang.com

## 安装

## 本地环境
- php 7.2 +
- composer 
- mysql5.77 +




## 安装  
1.  拉取代码  

github.com ( 有时候很慢)
```git
git clone https://github.com/kong-qi/kongqi_laravel_admin2.git  写上你的目录（将会安装此目录）
```

Gitee.com (国内的)  
```
git clone https://gitee.com/kong_qi/kongqi_laravel_admin2.git 写上你的目录（将会安装此目录）
```
![描述](https://www.heibaiketang.com/upload/images/20200522/14aebd375b8dc9c10c67aea22edeb3e655431.png)  

2.  项目下执行安装 Laravel 依赖  

```
composer install 
```

3.  新建一个数据库，数据库引擎必须是 `InnoDB` , 字符集  `utf8mb4`


因为有些同学，他们用了 `mysql 8` ,但是默认的引擎使用的 `myisam` ,所以新建库的时候需要改下这个，如果不懂如何操作，就百度下，如何修改数据库默认搜索引擎。 否则安装的时候会报 `索引长度问题`

4.  绑定一个本地域名到目录下 `public` 

5. 设置重写  

> Apaceh   

Apaceh  环境可以不用写，默认自带了，如果没有，则在 `public/.htaccess`创建,如果你还不会创建这个文件，请使用搜索一下怎么创建，window下是不允许直接创建 `.`开头的文件。

```apache 
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

```

> Nginx

```
location / {
	if (!-e $request_filename){
		rewrite  ^(.*)$  /index.php?s=$1  last;   break;
	}
}
```

6.如果默认下没有创建到 `.env`,新建一个 `.env`

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:yv0KPA1resjp946uTMXkuqHZ5Fq0WsGoLO4EnwJ+f94=
APP_DEBUG=1
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=demo
DB_USERNAME=root
DB_PASSWORD=123456
DB_PREFIX=
#严格模式取消
DB_STRICT=false
BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=6379
REDIS_PORT=6379
REDIS_PREFIX=laravel
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

#配置后台地址
ADMIN_URL=null
#资源文件是否增加http域名前缀
RES_HTTP_URL=null

#上传设置
# 上传目录
UPLOAD_DIR=/upload
# 最大上传大小,单位M
UPLOAD_MAX_SIZE=50

# 上传文件系统驱动，filesystems
FILESYSTEM_DRIVER=local

# 系统语言
LANG=cn

KONGQI_SERVER=eyJob3N0Ijoid3d3LmtxcDIudGVzdCIsImlwIjoiMTI3LjAuMC4xIiwicG9ydCI6IjgwIn0=
# 是否开启DEBUGBAR调试
DEBUGBAR_ENABLED=0
# 是否关闭插件应用，1表示是开启，0表示关闭
OPEN_PLUGIN=1

```
如果你想要去掉插件模块，查看这篇介绍；

7.  打开你绑定的域名 

在浏览器输入 `http://你的域名/system/install` 进行安装，将会出现如下画面 

![描述](https://www.heibaiketang.com/upload/images/20200522/cc1b64f5ba9cb4cf9c91cd583a5875ab11169.png)    
全部进行下一步到完成操作。

![描述](https://www.heibaiketang.com/upload/images/20200522/efc46a787138a549b306612230dbb3f943994.png)  

8. 登录后台完毕  

![描述](https://www.heibaiketang.com/upload/images/20200522/750b9e6ff3f7d1f0f8cb23766b97c88697186.png)   
![描述](https://www.heibaiketang.com/upload/images/20200522/de10895f694f7c2cc1d7d3c397cc54de36044.png)  

安装完成，感谢您的使用

## 问题
- 如果文件无法上传，检查你的public/upload是否创建了目录，是否有权限写入,如果没有创建，则需要创建下这个目录
- storage 需要写权限
- public/upload 需要写权限


## 系统截图  

![安装.png](https://www.heibaiketang.com/upload/images/20200522/2faf3220b9d1110a3a5f67357167e2bc87500.png)  
![安装3.png](https://www.heibaiketang.com/upload/images/20200522/2faf3220b9d1110a3a5f67357167e2bc61471.png)  
![安装2.png](https://www.heibaiketang.com/upload/images/20200522/2faf3220b9d1110a3a5f67357167e2bc24827.png)  
![安装4.png](https://www.heibaiketang.com/upload/images/20200522/747de1c6d5cb00ae5b0d684a885f3a3672842.png)  
![login.png](https://www.heibaiketang.com/upload/images/20200522/670c240e4ded9fa7d1f1cc7b9552d5de54721.png)  
![导入.png](https://www.heibaiketang.com/upload/images/20200522/1fbfb7c542ed9bdf0ab1ffb768a0eeb361517.png)  
![分类.png](https://www.heibaiketang.com/upload/images/20200522/b3a70a421fbb7c2b1d2430f3a01915dc52753.png)  
![权限.png](https://www.heibaiketang.com/upload/images/20200522/c4cdb042e091e9619fbda44efcff1f5084342.png)  
![插件](https://www.heibaiketang.com/upload/images/20200522/7e617d0fbeac2514ad4a1e5a0bca160c62075.png)  
![插件演示](https://www.heibaiketang.com/upload/images/20200522/35913f6c9613aea4c81eae25d21f271327529.png)  


## 贡献

感谢laravel,Bootstrap,Bootstrap sb2 admin,Layui,Jquery

## License

MIT协议 [MIT license](https://opensource.org/licenses/MIT).
