## 项目说明

兔兔找图微信小程序管理端。

## 项目描述

该仓库为兔兔找图微信小程序管理端。本项目后端有laravel框架构建完成，前端由图鸟UI构建完成。为更好的管理开源版本，代码将调整同步仓库，[最新仓库地址](https://github.com/tiku-cloud-platform/picture_db)。

## 功能说明

1、图片分类

2、图片采集

3、用户管理

4、微信消息订阅

5、轮播图管理

6、权限管理

7、文档管理

8、表情包管理

9、积分管理

## 项目说明

使用该项目需要自建服务器，搭建PHP+NGINX+MySQL环境。图片使用七牛云作为图床工具，七牛云直接注册个账号，一个月可以免费白P10个G的CDN，推荐大家直接使用七牛云。用户端使用了一款高颜值的UI框架，[图鸟UI](https://docs.ahuaaa.cn/guide/demo.html)，感谢图鸟UI框架的开源。

## 更新计划

基于现有的功能，兔兔找图将继续更新如下功能：

1、图片编辑

2、AI自动生成图片

3、创作者功能

4、自动工单系统

## 项目预览

![](http://qiniucloud.qqdeveloper.com//b82d832915fd90115ead39865c18178b.jpg)

## 更新历史

### 2023-04-16

- 增加首页菜单功能
- 增加用户推广渠道功能
- 实现用户修改微信小程序头像和昵称功能
- 优化壁纸系列模块

### 2023004-20

- 新增资源导航
- 新增小程序状态处理，根据诶新审核状态，控制页面显示内容
- 优化用户登录模块

## 安装部署

### 环境要求

- 项目后端使用的是Laravel8.x版本，最低要求是PHP7.3，推荐使用PHP7.4或者PHP8.0版本。MySQL最低要求是5.7版本，NGINX可以根据自己需要来选择版本，没有做强制要求。
- 后台以及用户端的图片都是采用的七牛云做存储，你需要去七牛云申请一个账号，一个月有10G的流量。
- 既然是微信小程序，肯定是需要注册一个微信小程序了。微信小程序可以是个人类型，也可以是企业类型，有条件的可以申请企业类型的微信小程序。
- 在阿里云、腾讯云平台申请一个域名，然后进行备案。
- 由于该项目是采用的自建服务器，如果你没服务器还需要购买一套服务器。最低配置2核4G的配置，带宽就随便了，肯定是带宽越大速度越快啰。

有了这些条件，那就开始进入环境部署环境。部署PHP环境是一个很麻烦的过程，如果你不想经历这么复杂的过程，你可以使用集成工具，例如[lnmp](https://www.lnmp.org/install.html)或者宝塔这样的工具。由于这些工具使用起来非常的简单，就不单独说明，直接按照官方文档操作即可。

## 环境配置

假设你已经按照好所有的环境，接下来你直接通过git命令，将项目拉取到你的服务器的应用程序存放目录。如果你是lnmp搭建的环境，需要使用如下的命令。
```shell
cd /home/wwwroot/ && git clone https://github.com/ququgithub/tutu_api.git
cd tutu_api && composer install
```
指向完上的操作，需要将tutu_api下面的文件`.env.example`拷贝一份，并命名为`.env`。下面提到的数据库配置、额外配置直接修改`.env`文件即可。
```shell
cp .env.example .env
```

### 数据库配置

代码拉取下来之后，并且使用`composer`安装好了依赖包，你就需要来配置数据库，数据库主要是用了Redis和MySQL，根据下面的文字注释，将你的信息填写到对应的配置项即可。
```shell
DB_CONNECTION=mysql
DB_HOST=数据库主机地址
DB_PORT=数据库端口
DB_DATABASE=数据库名称
DB_USERNAME=数据库账号
DB_PASSWORD=数据库密码

REDIS_HOST=Redis主机地址
REDIS_PASSWORD=Redis密码，没设置可以不填、填null或者直接删掉这项都可以
REDIS_PORT=Redis端口号
REDIS_DB=Redis数据库编号，可以默认为0
```

### 初始化数据库

如果你使用的是lnmp搭建的环境，应该可以通过服务器的IP+phpadmin，访问web版的数据库管理界面，进入之后创建一个数据。`数据库的名称一定要和你上面配置项DB_DATABASE的值保持一致`。记下来，进入服务器的tutu_api目录下面，执行迁移文件，会自动创建数据表。
```shell
php artisan migrate
```

### 额外配置

```shell
WX_ID=微信小程序的appid
WX_KEY=微信小程序的appsecret

JWT_KEY=jwt的key，这里随意填写一个字符串即可

QINIU_DOMAINS=七牛云上自定义的域名
QINIU_HTTPS=七牛云上自定义的域名(https协议)
QINIU_CUSTOM=七牛云上自定义的域名
QINIU_ACCESS_KEY=七牛云appkey
QINIU_SECRET_KEY=七牛云appsecret
QINIU_BUCKET=七牛云存储自定义的空间名称
QINIU_NOTIDY_URL=可以不填，这个是回调通知使用的，后续版本更新会用到
QINIU_URL=七牛云上自定义的域名

ADMIN_HTTPS=管理端是否强制使用域名，这里推荐设置为true。值只能是false或者true。

ADMIN_ID=默认创建人的id，这里可以先随机填一个，等你发布上线，你通过小程序注册之后，更改为你自己的id，作用后期再讲。
AUTHOR_ID=默认作者的id，这里可以先随机填一个，等你发布上线，你通过小程序注册之后，更改为你自己的id，作用后期再讲。
```

### 域名部署

- 由于微信小程序发起网络请求必须是https协议，因此你需要申请一个ssl证书，如果你是腾讯云的域名，你可以到腾讯云申请一个免费的证书，一个人可以申请50次免费证书，也足够使用了。
- 申请完之后，将ssl证书上传到服务器，至于什么目录，根据你自己来决定，只要在配置时设置好对应的路径即可。
- 接下来就是配置域名，lnmp包工具可以直接使用`lnmp vhost add`命令实现自动化部署，推荐你去官网查看这个命令如何使用。

## 小程序部署

上面提到了服务端如何部署，接下来总结一下小程序端是如何部署的。
- 首先找到`utils/request.js`文件，将里面的变量`baseUrl`设置为你自己的域名。
- 按照依赖包，在tutu_ui目录下执行`npm i`安装依赖包。
- 接着使用uniapp开发者工具，选择发行->编译成微信小程序，会自动打开本地微信小程序开发者工具，然后选择微信开发中工具上的发布按钮，在登录到微信小程序管理平台，进行发布即可。

## 最后说明

- 现在云开发是很多人的一个选择，不需要自己搭建环境，减少运维成本。这里为什么不用云开发呢？主要是考虑到后期项目某些核心功能，云开发是完全没法支持的，因此特意选择了自建服务器的模式。
- 为什么选择PHP呢？因为它开发快呀，笨蛋。这种项目一般来说，达不到什么百万级、千万级。PHP完全足够支撑了。
- PHP搭建环境其实是一个比较蛮烦的事情，因为推荐上面提到的lnmp或者宝塔来搭建，如果你遇到了什么问题，需要我提供帮助的，我会毫不吝啬给予帮助的。

**最后预祝你一切顺利，有什么问题，可以随时联系我(通过提issue的方式)，我会看到的。后续核心功能将陆续开放出来的。**








