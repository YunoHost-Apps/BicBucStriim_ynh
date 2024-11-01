<!--
N.B.: README ini dibuat secara otomatis oleh <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Ini TIDAK boleh diedit dengan tangan.
-->

# BicBucStriim untuk YunoHost

[![Tingkat integrasi](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/) ![Status kerja](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![Status pemeliharaan](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)

[![Pasang BicBucStriim dengan YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Baca README ini dengan bahasa yang lain.](./ALL_README.md)*

> *Paket ini memperbolehkan Anda untuk memasang BicBucStriim secara cepat dan mudah pada server YunoHost.*  
> *Bila Anda tidak mempunyai YunoHost, silakan berkonsultasi dengan [panduan](https://yunohost.org/install) untuk mempelajari bagaimana untuk memasangnya.*

## Ringkasan

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.


**Versi terkirim:** 3.5.2~ynh1

## Tangkapan Layar

![Tangkapan Layar pada BicBucStriim](./doc/screenshots/bbs-121-recent.png)

## Dokumentasi dan sumber daya

- Depot kode aplikasi hulu: <https://github.com/mikespub-org/rvolz-BicBucStriim>
- Gudang YunoHost: <https://apps.yunohost.org/app/bicbucstriim>
- Laporkan bug: <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Info developer

Silakan kirim pull request ke [`testing` branch](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

Untuk mencoba branch `testing`, silakan dilanjutkan seperti:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
atau
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Info lebih lanjut mengenai pemaketan aplikasi:** <https://yunohost.org/packaging_apps>
