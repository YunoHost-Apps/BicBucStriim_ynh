<!--
Важно: этот README был автоматически сгенерирован <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Он НЕ ДОЛЖЕН редактироваться вручную.
-->

# BicBucStriim для YunoHost

[![Уровень интеграции](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/) ![Состояние работы](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![Состояние сопровождения](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)

[![Установите BicBucStriim с YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Прочтите этот README на других языках.](./ALL_README.md)*

> *Этот пакет позволяет Вам установить BicBucStriim быстро и просто на YunoHost-сервер.*  
> *Если у Вас нет YunoHost, пожалуйста, посмотрите [инструкцию](https://yunohost.org/install), чтобы узнать, как установить его.*

## Обзор

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.


**Поставляемая версия:** 3.5.2~ynh1

## Снимки экрана

![Снимок экрана BicBucStriim](./doc/screenshots/bbs-121-recent.png)

## Документация и ресурсы

- Репозиторий кода главной ветки приложения: <https://github.com/mikespub-org/rvolz-BicBucStriim>
- Магазин YunoHost: <https://apps.yunohost.org/app/bicbucstriim>
- Сообщите об ошибке: <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Информация для разработчиков

Пришлите Ваш запрос на слияние в [ветку `testing`](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

Чтобы попробовать ветку `testing`, пожалуйста, сделайте что-то вроде этого:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
или
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Больше информации о пакетировании приложений:** <https://yunohost.org/packaging_apps>
