<!--
NB: Deze README is automatisch gegenereerd door <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Hij mag NIET handmatig aangepast worden.
-->

# BicBucStriim voor Yunohost

[![Integratieniveau](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/) ![Mate van functioneren](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![Onderhoudsstatus](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)

[![BicBucStriim met Yunohost installeren](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Deze README in een andere taal lezen.](./ALL_README.md)*

> *Met dit pakket kun je BicBucStriim snel en eenvoudig op een YunoHost-server installeren.*  
> *Als je nog geen YunoHost hebt, lees dan [de installatiehandleiding](https://yunohost.org/install), om te zien hoe je 'm installeert.*

## Overzicht

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.


**Geleverde versie:** 3.5.2~ynh1

## Schermafdrukken

![Schermafdrukken van BicBucStriim](./doc/screenshots/bbs-121-recent.png)

## Documentatie en bronnen

- Upstream app codedepot: <https://github.com/mikespub-org/rvolz-BicBucStriim>
- YunoHost-store: <https://apps.yunohost.org/app/bicbucstriim>
- Meld een bug: <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Ontwikkelaarsinformatie

Stuur je pull request alsjeblieft naar de [`testing`-branch](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

Om de `testing`-branch uit te proberen, ga als volgt te werk:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
of
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Verdere informatie over app-packaging:** <https://yunohost.org/packaging_apps>
