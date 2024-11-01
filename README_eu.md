<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# BicBucStriim YunoHost-erako

[![Integrazio maila](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/) ![Funtzionamendu egoera](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![Mantentze egoera](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)

[![Instalatu BicBucStriim YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek BicBucStriim YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.


**Paketatutako bertsioa:** 3.5.2~ynh1

## Pantaila-argazkiak

![BicBucStriim(r)en pantaila-argazkia](./doc/screenshots/bbs-121-recent.png)

## Dokumentazioa eta baliabideak

- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/mikespub-org/rvolz-BicBucStriim>
- YunoHost Denda: <https://apps.yunohost.org/app/bicbucstriim>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
edo
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
