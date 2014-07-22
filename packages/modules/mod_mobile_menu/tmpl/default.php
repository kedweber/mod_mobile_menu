<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die; ?>

<?
    $languageModule = '';

    if ($params->show_languages) {
        $document = JFactory::getDocument();
        $renderer = $document->loadRenderer('modules');
        $position = "language";
        $options = array('style' => 'raw');
        $languageModule = $renderer->render($position, $options, null);
    }
?>

<script src="media://mod_mobile_menu/js/mobile-menu.js" />
<div class="navbar navbar-default navbar-fixed-top hidden-lg hidden-md hidden-print" role="navigation">
    <div class="container">
        <div class="navbar-header mobile-menu-header">
            <? if ($params->show_logo) : ?>
            <a class="navbar-brand logo" href="<? echo JUri::base(); ?>"><?= @service('com://admin/cloudinary.controller.image')->path($params->logo)->cache(0)->attribs(array("class" => "img-responsive pull-left"))->display(); ?></a>
            <? endif; ?>
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <? if ($params->show_search) : ?>
            <a class="navbar-toggle button no-decoration pull-right search" href="<?= JRoute::_('index.php?option=com_search'); ?>">
                <i class="icon-search"></i>
            </a>
            <? endif; ?>

            <? if ($params->show_languages) : ?>
            <div class="languages-selector pull-right">
                <?= $languageModule; ?>
            </div>
            <? endif; ?>
        </div>

        <nav role="navigation" class="collapse navbar-collapse mobile-menu" id="navbar-ex1-collapse">
            <ul class="nav menu navbar-nav">
                <? foreach($menu as $item): ?>
                    <?= @helper('menu.item', array('item' => $item, 'active' => $active)); ?>
                <? endforeach; ?>
            </ul>
        </nav>
    </div>
</div>

<script>
    new MobileMenu();
</script>
