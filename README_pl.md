<!--
To README zostało automatycznie wygenerowane przez <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Nie powinno być ono edytowane ręcznie.
-->

# BicBucStriim dla YunoHost

[![Poziom integracji](https://apps.yunohost.org/badge/integration/bicbucstriim)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/)
![Status działania](https://apps.yunohost.org/badge/state/bicbucstriim)
![Status utrzymania](https://apps.yunohost.org/badge/maintained/bicbucstriim)

[![Zainstaluj BicBucStriim z YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Przeczytaj plik README w innym języku.](./ALL_README.md)*

> *Ta aplikacja pozwala na szybką i prostą instalację BicBucStriim na serwerze YunoHost.*  
> *Jeżeli nie masz YunoHost zapoznaj się z [poradnikiem](https://yunohost.org/install) instalacji.*

## Przegląd

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.


**Dostarczona wersja:** 3.5.2~ynh1

## Zrzuty ekranu

![Zrzut ekranu z BicBucStriim](./doc/screenshots/bbs-121-recent.png)

## Dokumentacja i zasoby

- Repozytorium z kodem źródłowym: <https://github.com/mikespub-org/rvolz-BicBucStriim>
- Sklep YunoHost: <https://apps.yunohost.org/app/bicbucstriim>
- Zgłaszanie błędów: <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Informacje od twórców

Wyślij swój pull request do [gałęzi `testing`](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

Aby wypróbować gałąź `testing` postępuj zgodnie z instrukcjami:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
lub
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Więcej informacji o tworzeniu paczek aplikacji:** <https://yunohost.org/packaging_apps>
