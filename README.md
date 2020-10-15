# BicBucStriim for YunoHost

[![Integration level](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://dash.yunohost.org/appci/app/bicbucstriim) ![](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)

## Overview
BicBucStriim streams books, digital books. It fills a gap in the functionality of current NAS devices that provide access to music, videos and photos -- but not books. BicBucStriim fills this gap and provides web-based access to your e-book collection.

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS. It assumes that you manage your e-book collection with Calibre. The application reads the Calibre data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.

**Shipped version:** 1.3.6

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

