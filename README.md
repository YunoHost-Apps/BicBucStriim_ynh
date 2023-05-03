<!--
N.B.: This README was automatically generated by https://github.com/YunoHost/apps/tree/master/tools/README-generator
It shall NOT be edited by hand.
-->

# BicBucStriim for YunoHost

[![Integration level](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://dash.yunohost.org/appci/app/bicbucstriim) ![Working status](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![Maintenance status](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)

[![Install BicBucStriim with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install BicBucStriim quickly and simply on a YunoHost server.
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview

BicBucStriim streams books, digital books. It was primarily designed to fill a gap in the functionality of NAS devices that provide access to music, videos and photos -- but not books. BicBucStriim fills this gap and provides web-based access to your e-book collection.
BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.

**Shipped version:** 1.5.3~ynh2

## Screenshots

![Screenshot of BicBucStriim](./doc/screenshots/bbs-121-recent.png)

## Documentation and resources

* Official app website: <http://projekte.textmulch.de/bicbucstriim/>
* Upstream app code repository: <https://github.com/rvolz/BicBucStriim>
* YunoHost documentation for this app: <https://yunohost.org/app_bicbucstriim>
* Report a bug: <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

To try the testing branch, please proceed like that.

``` bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
or
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**More info regarding app packaging:** <https://yunohost.org/packaging_apps>
