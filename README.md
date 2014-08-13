# Mobile menu

A Joomla! module that acts as a placeholder for a normal menu in a mobile setting. The classic menu is hidden, whereas a
hamburger menu is displayed. This module is written on [Twitter Bootstrap 3](http://getbootstrap.com).

The Mobile menu module was written my [Moyo Web Architects](http://moyoweb.nl).

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* A Joomla template written in Bootstrap 3.

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

```json
{
    "name": "cta/mobile_menu",
    "type": "vcs",
    "url": "https://github.com/cta-int/mobile_menu.git"
}
```

The require section should contain the following line:

```json
    "cta/mobile_menu": "1.0.*",
```

Afterward, just run `composer update` from the root of your Joomla project.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

### Configuration

After installing and discovering, you can add the mobile menu to your site through the module manager. The module type
is 'mod mobile menu'.

The following settings are configurable:

* **Menu** Choose the menu to display.
* **Show language selector** Toggles a language switcher.
* **Show search** Toggles a search button
* **Show Logo** Toggles the display of a logo in the mobile menu
* **Image** If 'Show Logo' is enabled, this image is shown.

