# BicBucStriim for YunoHost

[![Integration level](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://dash.yunohost.org/appci/app/bicbucstriim) ![](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)  
[![Install BicBucStriim with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install BicBucStriim quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
BicBucStriim streams books, digital books. It fills a gap in the functionality of current NAS devices that provide access to music, videos and photos -- but not books. BicBucStriim fills this gap and provides web-based access to your e-book collection.

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS. It assumes that you manage your e-book collection with Calibre. The application reads the Calibre data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.

**Shipped version:** 1.5.0

## Screenshots

![](Link to a screenshot of this app.)

## Demo

* [Official demo](Link to a demo site for this app.)

## Configuration

How to configure this app: From an admin panel, a plain file with SSH, or any other way.

## Documentation

 * Official documentation: Link to the official documentation of this app
 * YunoHost documentation: If specific documentation is needed, feel free to contribute.

## YunoHost specific features

#### Multi-user support

 * Are LDAP and HTTP auth supported?
 * Can the app be used by multiple users?

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/bicbucstriim%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/bicbucstriim%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/bicbucstriim/)

## Limitations

* Any known limitations.

## Additional information

* Other info you would like to add about this app.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues
 * App website: http://projekte.textmulch.de/bicbucstriim/
 * Upstream app repository: https://github.com/rvolz/BicBucStriim
 * YunoHost website: https://yunohost.org/

---

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
or
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```
