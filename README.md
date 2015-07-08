# Mobile menu

A Joomla! module that acts as a placeholder for a normal menu in a mobile setting. The classic menu is hidden, whereas a
hamburger menu is displayed. This module is written on [Twitter Bootstrap 3](http://getbootstrap.com).

The Mobile menu module was written my [Moyo Web Architects](http://moyoweb.nl).

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* jQuery >= 1.11.0
* A Joomla template written in Bootstrap 3.
* CCK Components
    * Cloudinary >= 1.0.2

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

from this repository;

```json
{
    "name": "moyo/mod_mobile_menu",
    "type": "vcs",
    "url": "https://github.com/kedweber/mod_mobile_menu.git"
}
```

or from the official repository;

```json
{
    "name": "moyo/mod_mobile_menu",
    "type": "vcs",
    "url": "https://github.com/moyoweb/mod_mobile_menu.git"
}
```

The require section should contain the following line:

```json
    "moyo/mod_mobile_menu": "1.0.*",
```

Afterwards, one just needs to run the command `composer update` from the root of your Joomla project. This will 
effectively create a `composer.lock` file which will contain the collected dependencies and the hash codes for 
each latest release \(depending on the require section's format\) for each particular repo. Should installations 
problems occur due to a bad ordering of the dependencies, one may need to go into the lock file and manualy change 
the order of the components. Running `composer update` again will again cause a reordering of the lock file, beware of this factor when running an update. Thereafter, you can run the command `composer install`. 

If you have not setup an alias to use the command composer, then you will need to replace the word composer in the previous commands with the 
commands with `php composer.phar` followed by the desired action \(eg. update or install\).

### jsymlinker

Another option is to run the [jsymlink script](https://github.com/derjoachim/moyo-git-tools) in the root folder, available via the original Moyo developer, Joachim van de Haterd's repository, under 
the [Moyo Git Tools](https://github.com/derjoachim/moyo-git-tools).

### Configuration

After installing and discovering, you can add the mobile menu to your site through the module manager. The module type
is 'mod mobile menu'.

The following settings are configurable:

* **Menu** Choose the menu to display.
* **Show language selector** Toggles a language switcher.
* **Show search** Toggles a search button
* **Show Logo** Toggles the display of a logo in the mobile menu
* **Image** If 'Show Logo' is enabled, this image is shown.

