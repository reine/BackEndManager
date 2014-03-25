# BackEndManager for CodeIgniter

![screenshot - login](./docs/screens/screenshot-login.png =400x)

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

Herewith listed are the features to be added in this release:

* Touted as a **"multiple application - one core"** so that it will be easy to upgrade the system files without affecting the application files. Likewise, each app can stand alone with its own set of modules.
* Bootstrap 3 Framework
* Option to use Bootstrap Themes - e.g., Flatly from [Bootswatch](http://bootswatch.com/)
* Option to use Bootstrap Templates - e.g., Modern Business from [Start Bootstrap](http://startbootstrap.com/)
* Other features to be added as needed

## Setup, Installation & Configuration

Content to follow.

## Support

This is a work in progress - use at your own risk.

If you found any bugs, please report them at the [Issues](https://github.com/reine/BackEndManager/issues) section of the project repository. Do note that I may not always reply to them as needed because I also work on my client projects.

## Copyright & License

BackEndManager is released under GPL v2. Wherever a third-party code is used, owner of the said code retains his/her own copyright & license. As much as possible, we will only use open source codes.