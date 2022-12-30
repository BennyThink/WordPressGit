## 说明

这是我在Git主题的基础上随随便便乱改的主题
Demo请见[土豆不好吃](https://dmesg.app)

🎉支持PHP 8.2 和PHP 7.x 🎉

## 使用用法 ##

下载或者clone之后重命名为`WordPressGit-master`，放到`wp-content/themes`下，后台中启用。
**在使用自带的功能更新主题之后，主题文件夹名字会变成`WordPressGit-master`，为了保证不出问题，推荐重命名（当然你直接用git
pull更新那就没这回事了）**

## 增加功能 ##

* 下雪特效
  全站下雪特效，在有视频的界面会自动关闭
* needshare分享
  一款功能更强大、样式更美观的分享工具
* 纪念日
  有些时候，我们需要黑白的网站
* 混合头像系统
  评论者们如果填QQ邮箱，那么就会显示QQ头像哦（设置中可以开启或者关闭此功能）
* 来路访问
  通过referer，访客可以看到自己是从哪里来的
* 自动更新
  主题支持自动更新（当然我还是推荐用`git pull`）
* 动态格言
  刷新一次，就出现一个新的格言，附加到公告栏里，哇~

以及各种细节上的改进

## TODO ##

- [ ] Google Chrome Web通知
- [x] 修复移动版评论嵌套问题，把间隔改小，最多嵌套三层这也就差不多了
- [ ] 迁移到fontawesome 5

## 疑难解答 ##

1.HTTPS
HTTPS站点按理说不进行任何修改就可以的，如果出现mix content，那请给我反馈（Chrome控制台）

2.页脚
到设置中进行修改。

3.留言板等
新建一个页面，选择模板“页面（新版）”、设置允许评论，就可以了。可能需要你到`php.ini`中启用`scandir`函数

4.最方便的更新方式
`git pull`

5.主题更新失败？

```shell
chown www:www -R WordPressGit-master&& chmod 755 -R WordPressGit-master
```

6.移动设备下雪、黑白文章页面不生效
这非常有可能是你启用了WP Super Cache类似的缓存插件，恰巧你访问的页面是对应显示结果时缓存下来的html文件。
尝试禁用缓存插件或者直接无视这个问题。

7.开启了下雪特效，但是没效果？
看下是不是你的博文中在比较靠前的位置插入了视频？请在这之前添加一个more标签，就可以了。

8.不显示缩略图（缩略图裂了）
把`cache`目录的权限设置成足够PHP程序写入，一般就是www用户600以上就可以了

9.评论者头像是裂的！
在Windows服务器上很有可能出现这类问题，在[commit 12965a](https://github.com/BennyThink/WordPressGit/commit/12965a3a6ce4e61e005de4c5ba86262e016a070b)
中发现；换到Linux试试吧，应该没问题的。

## 许可证 ##

我在原作者的`style.css`中看到了GPLv2的字样，在原作者回信之前暂时默认为GPLv2

----------

# 原始readme

首先，请饶恕我用了这个无比拗口的标题来形容这款主题，因为这就是他的真实写照！

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015051808553935.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015051808553935.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 前言

<div id="sc_notice">这款主题是我对欲思主题的二次修改版本，起名为`Git`，是因为我是使用Git来托管代码的，写得最多的就是Git了，所以就这么定名了。这款主题是我正式建站使用的主题，这款主题的发展一定程度上代表了我从一个WordPress小白到如今的成长历史，所以将这款主题免费分享出来，希望朋友们能喜欢。</div>

## 首先介绍的就是强大好用的小工具，差不多该有的都有了吧

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716181245.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716181245.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 应有尽有的短代码，弹窗下载也不是不可以的

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716191948.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716191948.png "Git:l一款比付费主题更像是付费主题的WordPress免费主题")

## 作为一个“好色主义”者，强大的自定义配色是不可缺少的

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/201503181407247.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/201503181407247.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## SEO？？这个完全不是事

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716222753.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716222753.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 两种超大幻灯片方案，任你选择

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716235495.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716235495.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 博客/CMS两种风格任你选择

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/201504271625045.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/201504271625045.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 支持9个社交媒体，包括支付宝

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716264192.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716264192.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 这么漂亮的footer，想不想要？

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/201504271628436.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/201504271628436.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 作为一个伪coder，代码高亮是必不可少滴

<div id="sc_notice">为了保证代码以及短代码的延续使用，博猪特地写了短代码插件以及代码高亮插件【代码高亮插件已提交至WordPress官方】</div>

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716361151.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716361151.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 巨多的广告位，具体多少个，我也记不住了，大致十几个吧

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716390317.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716390317.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 对HTML5视频以及优酷土豆视频的完美响应式支持

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716510754.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716510754.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")
[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015050902061220.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015050902061220.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 一个简单的弹窗下载

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015050902055195.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015050902055195.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

<div id="sc_error">弹窗下载功能现已全面升级为下面这个</div>

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015051804283257.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015051804283257.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

试一下吧

[文件下载](#fancydlbox)<div id="fancydlbox" style="cursor:default;display:none;width:800px;"><div class="part" style="padding:20px 0;">

## 下载声明:

<div class="fancydlads" align="left">

本站所有软件和资料均为软件作者提供或网友推荐发布而来，仅供学习和研究使用，不得用于任何商业用途。如本站不慎侵犯你的版权请联系我，我将及时处理，并撤下相关内容！

</div></div><div class="part" style="padding:20px 0;">

## 文件信息：

<div class="dlnotice" align="left">

文件名称：这里填写文件名
文件大小:这里填写文件大小
发布日期:这里填写的是文件的发布日期

</div></div><div class="part" id="download_button_part">[<span></span>文件的主下载名称](这里填写的主下载链接)</div><div class="part" style="padding:20px 0;"><div class="moredl" style="text-align:center;">[更多地址] : 这里填写的文件的辅助下载链接，A标签即可！</div></div><div class="dlfooter">本站文件全部采用7Z压缩，推荐使用7-Zip解压文件。</div></div>

## 一个非常简单的下载面板

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015050902024880.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015050902024880.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 完美支持七牛云

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716511313.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716511313.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 完美支持SMTP邮件

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042716553436.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042716553436.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 各种实用的功能

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717024035.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717024035.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## HTML/xml网站地图

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717043192.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717043192.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 自带网站图标的友情链接页面

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717061122.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717061122.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 登录页面必应美图

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717091792.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717091792.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 更完善的注册页面，验证机制

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015043004182134.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015043004182134.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 开源代码，随时查阅

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717113635.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717113635.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")
[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717124215.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717124215.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 支持的主题在线更新

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717255826.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717255826.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 主题后台贴心小贴士

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717273153.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717273153.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")
[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015043004194528.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015043004194528.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 强大的前端HTML安全压缩，极致优化网页

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015043004263084.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015043004263084.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 网站后台加密

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015051804322266.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015051804322266.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

如果不是管理员的话会是这个页面
[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015051804334847.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015051804334847.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 自带百度站内搜索集成方案

<div id="sc_notice">本功能需要自己申请百度站内搜索</div>[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015050902104017.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015050902104017.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015050902104388.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015050902104388.jpg "Git:一款比付费主题更像是付费主题的WordPress免费主题")

<div id="sc_notice">更多精彩，自己发掘吧</div>

## 后台截图

[![Git:一款比付费主题更像是付费主题的WordPress免费主题](http://googlo.me/wp-content/uploads/2015042717291046.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")](http://googlo.me/wp-content/uploads/2015042717291046.png "Git:一款比付费主题更像是付费主题的WordPress免费主题")

## 相关链接

[主题食用说明](http://googlo.me/archives/3275.html)[主题下载](https://coding.net/u/googlo/p/Git/git/archive/master)

<div id="sc_error">注意：主题下载后，请重命名为Git-master，在上传WordPress！！</div>
