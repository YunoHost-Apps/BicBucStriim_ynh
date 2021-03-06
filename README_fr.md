# BicBucStriim pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/bicbucstriim.svg)](https://dash.yunohost.org/appci/app/bicbucstriim) ![](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/bicbucstriim.maintain.svg)  
[![Installer BicBucStriim avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=bicbucstriim)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer BicBucStriim rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Interface web pour accéder à votre collection d'e-book.

**Version incluse :** 1.5.3~ynh1

**Démo :** https://demo.example.com

## Captures d'écran

![](./doc/screenshots/bbs-121-recent.png)

## Avertissements / informations importantes

BicBucStriim est une application PHP simple qui s'exécute dans l'environnement Apache/PHP fourni par le NAS (ou tout autre serveur). Cela suppose que vous gérez votre collection de livres électroniques avec Calibre. L'application lit les données [Calibre](https://calibre-ebook.com/) et les publie sous forme HTML. Pour accéder au catalogue de livres électroniques, il vous suffit de pointer votre lecteur de livres électroniques sur votre NAS, de sélectionner l'un de vos livres électroniques et de le télécharger.

## Configuration

Une installation de BicBucStriim fraîchement installée affichera la page de connexion. Les informations de connexion initiales de l'administrateur sont

     nom d'utilisateur : admin
     mot de passe : admin
## Documentations et ressources

* Site officiel de l'app : http://projekte.textmulch.de/bicbucstriim/
* Documentation officielle utilisateur : https://yunohost.org/apps
* Documentation officielle de l'admin : https://yunohost.org/packaging_apps
* Dépôt de code officiel de l'app : https://github.com/rvolz/BicBucStriim
* Documentation YunoHost pour cette app : https://yunohost.org/app_bicbucstriim
* Signaler un bug : https://github.com/YunoHost-Apps/bicbucstriim_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
ou
sudo yunohost app upgrade bicbucstriim -u https://github.com/YunoHost-Apps/bicbucstriim_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps