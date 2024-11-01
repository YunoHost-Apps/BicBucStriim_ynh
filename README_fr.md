<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# BicBucStriim pour YunoHost

[![Niveau d’intégration](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://ci-apps.yunohost.org/ci/apps/bicbucstriim/) ![Statut du fonctionnement](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![Statut de maintenance](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)

[![Installer BicBucStriim avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer BicBucStriim rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

BicBucStriim est une application PHP simple qui s'exécute dans l'environnement Apache/PHP fourni par le NAS (ou tout autre serveur). Cela suppose que vous gérez votre collection de livres électroniques avec Calibre. L'application lit les données [Calibre](https://calibre-ebook.com/) et les publie sous forme HTML. Pour accéder au catalogue de livres électroniques, il vous suffit de pointer votre lecteur de livres électroniques sur votre NAS, de sélectionner l'un de vos livres électroniques et de le télécharger.


**Version incluse :** 3.5.2~ynh1

## Captures d’écran

![Capture d’écran de BicBucStriim](./doc/screenshots/bbs-121-recent.png)

## Documentations et ressources

- Dépôt de code officiel de l’app : <https://github.com/mikespub-org/rvolz-BicBucStriim>
- YunoHost Store : <https://apps.yunohost.org/app/bicbucstriim>
- Signaler un bug : <https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
ou
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
