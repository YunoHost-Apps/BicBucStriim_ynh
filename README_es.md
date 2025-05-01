<!--
Este archivo README esta generado automaticamente<https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
No se debe editar a mano.
-->

# BicBucStriim para Yunohost

[![Nivel de integración](https://apps.yunohost.org/badge/integration/bicbucstriim)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/)
![Estado funcional](https://apps.yunohost.org/badge/state/bicbucstriim)
![Estado En Mantención](https://apps.yunohost.org/badge/maintained/bicbucstriim)

[![Instalar BicBucStriim con Yunhost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Leer este README en otros idiomas.](./ALL_README.md)*

> *Este paquete le permite instalarBicBucStriim rapidamente y simplement en un servidor YunoHost.*  
> *Si no tiene YunoHost, visita [the guide](https://yunohost.org/install) para aprender como instalarla.*

## Descripción general

BicBucStriim is a simple PHP application that runs in the Apache/PHP environment provided by the NAS (or any other server). It assumes that you manage your e-book collection with Calibre. The application reads the [Calibre](https://calibre-ebook.com/) data and publishes it in HTML form. To access the e-book catalog you simply point your ebook reader to your NAS, select one of your e-books and download it.


**Versión actual:** 3.5.2~ynh1

## Capturas

![Captura de BicBucStriim](./doc/screenshots/bbs-121-recent.png)

## Documentaciones y recursos

- Repositorio del código fuente oficial de la aplicación : <https://github.com/mikespub-org/rvolz-BicBucStriim>
- Catálogo YunoHost: <https://apps.yunohost.org/app/bicbucstriim>
- Reportar un error: <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Información para desarrolladores

Por favor enviar sus correcciones a la [rama `testing`](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

Para probar la rama `testing`, sigue asÍ:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
o
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Mas informaciones sobre el empaquetado de aplicaciones:** <https://yunohost.org/packaging_apps>
