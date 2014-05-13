# BackEndManager for CodeIgniter

## Introduction

In 2008, Adam Price developed [BackendPro](http://ellislab.com/forums/viewthread/76078/) (BEP) and the last updated version was 0.6.1. As per Price, he said:

> BackendPro is a control panel for developers written in PHP for the CodeIgniter framework. Its not like a CMS where it provides you with a full working system but it does provide you with part of a system. What I mean by this is it provides you with functionality to do all the simple repetitive tasks like authentication, permissions and a basic look and feel for your websites control panel. So using your current PHP and CodeIgniter knowledge you can use BackendPro to built a fully working website quickly since you can concentrate on your application instead of the bits to manage the system.

Unfortunately, development has ceased sometime in 2011. There was a patch made by Price to allow BEP to function properly in PHP5 but the fork made by [Orlu Weli](https://github.com/broswilli/BackEndManager) didn't use this. The issues reported on the said fork were fixed in this release.

Furthermore, this release will add new technologies that were not in the original feature set (e.g., multiple application-one core, Bootstrap as front-end framework).

## Features

Herewith is a list of features from the original release:

* User Authentication with registration and account activation
* User Permissions by using Access Control Lists (Has Access Control area to manage your websites access permissions)
* Site Preferences (Stored in a database with simple to use UI to update and change preferences)
* Asset Library (Means loading assets onto pages is quick and simple, also has asset caching to speed up the loading of asset files)
* PHP to Javascript variable conversion (Easy way to pass PHP variables into your javascript scripts)
* ReCAPTCHA
* Status messages (Can display info/success/warning/error messages to the user)
* Breadcrumb trail creation

Herewith listed are the features added in this release:

* Touted as a **"multiple application - one core"** so that it will be easy to upgrade the system files without affecting the application files. Likewise, each app can stand alone with its own set of modules.
* Bootstrap 3 Framework
* Option to use Bootstrap Themes in the frontend - e.g., Flatly from [Bootswatch](http://bootswatch.com/)
* Option to use Bootstrap Templates in the frontend - e.g., Modern Business from [Start Bootstrap](http://startbootstrap.com/)
* [AdminLTE](http://almsaeedstudio.com) as the admin panel template; a new skin (entitled "Flat") have been added specifically for use in BackEndManager.
* [Beautiful Flat Icons by ElegantThemes](http://www.elegantthemes.com/blog/freebie-of-the-week/beautiful-flat-icons-for-free) are used in the dashboard apps of the admin panel.
* API-ready with REST server implementation.
* *Other features to be added as needed*

Features fixed from the BEP Price/Weli releases:

* ReCAPTCHA - Used new Google API codes. Updated config settings to make this feature work in the current release.
* Core Controllers Renamed - Capitalized the "c" in the main controllers' names to fix the problem on extended controller class not found.
* Auth Helper - A copy of the ACL helper was placed inside the main app's helper directory to fix the problem of functions not found.
* Added missing *cache* subdirectory inside the app's assets directory.


## Setup, Installation & Configuration

### System Requirements

* Apache 2.x with mod_rewrite and mod_vhost_alias enabled (current release tested on 2.2.26)
* PHP 5.x (current release tested on 5.4.19)
* MySQL 5.x (current release tested on 5.0.10)

### Installation Instructions

Start by cloning the project from its git repository, as such:

	git clone https://github.com/reine/BackEndManager.git

If you do not want to use git, you can [download a copy](https://github.com/reine/BackEndManager/archive/master.zip) of the latest release in ZIP format.

Launch MySQL and use a database client (e.g., Sequel Pro or phpMyAdmin) to dump the SQL file located at **docs/db/default/001-bem_default.sql**

Then create an Apache virtual host with **bem.dev** as the **ServerName** and redirect it to the **assets/default** directory, as such:

	<VirtualHost *:80>
		ServerAdmin webmaster@localhost
    	DocumentRoot "/Users/reine/Sites/BackEndManager/assets/default"
    	ServerName bem.dev
    	ServerAlias www.bem.dev
    	ErrorLog "/private/var/log/apache2/bem.dev-error_log"
    	CustomLog "/private/var/log/apache2/bem.dev-access_log" common
	</VirtualHost>

To make sure that the said server name (and its alias) is accessible via browser, edit your **/etc/hosts** file and add these at the bottom:

	127.0.0.1	bem.dev
	127.0.0.1	www.bem.dev

*For Windows users: This file is located at C:/Windows/system32/drivers/etc/hosts*

Restart Apache and point your browser to **http://bem.dev** or **http://www.bem.dev**

It is good practice to use a dummy domain during the development stage rather than serving the site using localhost (i.e., via http://localhost/bem). Likewise, it is a good way to test how the site will eventually work once it is migrated to the production server.

You should be able to see the frontend of the site with a login link in the upper right of the page.

####Initial Login Info####

	Username: Administrator
	Email: hello@mydevstudio.com
	Password: admin123

When you login, either use the username or the email to access the restricted content of the site.

###Configuration###

The configuration file was modified to allow both **secure** (https) and **unsecure** (http) access to the site pages. Likewise, it was modified to enable any domain (or subdomain) to serve its pages without manually altering the **base_url()** value. This feature avoids the hassle you will get when you want to host multiple domains (or subdomains) using one application only.

####API-Ready with REST Implementation####

The REST library is not autoloaded by default. It will only be executed if specifically called by the modules.

*--- More content to follow ---*

### Set Up A New App

To set up a new app (the system can handle as many apps as possible using only one core), here are the steps to accomplish them:

* Create a new app directory inside **apps**. (e.g. apps/extranet)
* Copy all files inside **apps/default** to the new app directory.
* Create a new assets directory inside **assets**. Make sure it has the same name as your new app directory. (e.g. assets/extranet)
* Copy all files inside **assets/default** to the new assets directory. Rename the **_install** directory to **install**.
* Create a new virtual host entry and redirect it to your new app's assets directory. Check out the sample below:

		<VirtualHost *:80>
			ServerAdmin webmaster@localhost
			DocumentRoot "/Users/reine/Sites/BackEndManager/assets/extranet"
			ServerName extranet.dev
			ServerAlias www.extranet.dev
		</VirtualHost>

* Likewise, create an entry in your **/etc/hosts** file to be able to use the app's development domain.

		127.0.0.1	extranet.dev
		127.0.0.1	www.extranet.dev

* Restart Apache and point your browser to your new app's install directory - **http://extranet.dev/install/**
* During the installation, change all references of **app-new** to **extranet** (the latter as the new name for your app). Provide the necessary database access information and create the admin account. Leave the encryption key field blank as the system will automatically generate this for new installations.
* If you encounter any installation errors (e.g., file or directory permissions), please fix them and start the install process again.

## Modules

Herewith listed are the modules for BackEndManager:

* [Content Management](https://github.com/reine/bem-cms)
* *Other modules to be added as needed*

## Screenshots

*Successful install screen (for new app setup)*
![screenshot - successful install](/docs/screens/screenshot-successful-install.png?raw=true)

*Login screen using Flatly as theme with Modern Business as template*
![screenshot - login](/docs/screens/screenshot-login.png?raw=true)

*Dashboard screen with the default Flat skin in the admin panel*
![screenshot - dashboard - flat](/docs/screens/screenshot-dashboard-flat.png?raw=true)

![screenshot - settings](/docs/screens/screenshot-settings.png?raw=true)

## Support

This is a work in progress - use at your own risk.

If you find any bugs, please report them at the [Issues](https://github.com/reine/BackEndManager/issues) section of the project repository. Do note that I may not always reply to them as needed because I also work on my client projects.

## Copyright & License

BackEndManager is released under GPL v2. Wherever a third-party code is used, owner of the said code retains his/her own copyright & license. As much as possible, we will only use open source codes.
