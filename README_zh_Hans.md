<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 BicBucStriim

[![集成程度](https://apps.yunohost.org/badge/integration/bicbucstriim)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/)
![工作状态](https://apps.yunohost.org/badge/state/bicbucstriim)
![维护状态](https://apps.yunohost.org/badge/maintained/bicbucstriim)

[![使用 YunoHost 安装 BicBucStriim](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 BicBucStriim。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.


**分发版本：** 3.5.2~ynh1

## 截图

![BicBucStriim 的截图](./doc/screenshots/bbs-121-recent.png)

## 文档与资源

- 上游应用代码库： <https://github.com/mikespub-org/rvolz-BicBucStriim>
- YunoHost 商店： <https://apps.yunohost.org/app/bicbucstriim>
- 报告 bug： <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
或
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
