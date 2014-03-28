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
* [AdminLTE](http://almsaeedstudio.com) as the new admin panel's design & layout; includes two skins - i.e., Black, Blue. A new skin (entitled "Flat") have been added specifically for use in BackEndManager.
* [Beautiful Flat Icons by ElegantThemes](http://www.elegantthemes.com/blog/freebie-of-the-week/beautiful-flat-icons-for-free) are used in the dashboard apps of the admin panel.
* *Other features to be added as needed*

## Setup, Installation & Configuration

### System Requirements

* Apache 2.x with mod_rewrite and mod_vhost_alias enabled (current release tested on 2.2.26)
* PHP 5.x (current release tested on 5.4.19)
* MySQL 5.x (current release tested on 5.0.10)

### Installation Instructions

Start by cloning the project from its git repository, as such:

	git clone https://github.com/reine/BackEndManager.git

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

*--- More content to follow ---*

## Screenshots

*Login screen using Flatly as theme with Modern Business as template.*
![screenshot - login](/docs/screens/screenshot-login.png?raw=true)

*Dashboard screen using the Black skin in the admin panel.*
![screenshot - dashboard](/docs/screens/screenshot-dashboard.png?raw=true)

*Dashboard screen with the default Flat skin in the admin panel.*
![screenshot - dashboard - flat](/docs/screens/screenshot-dashboard-flat.png?raw=true)

![screenshot - settings](/docs/screens/screenshot-settings.png?raw=true)

## Support

This is a work in progress - use at your own risk.

If you found any bugs, please report them at the [Issues](https://github.com/reine/BackEndManager/issues) section of the project repository. Do note that I may not always reply to them as needed because I also work on my client projects.

## Copyright & License

BackEndManager is released under GPL v2. Wherever a third-party code is used, owner of the said code retains his/her own copyright & license. As much as possible, we will only use open source codes.
