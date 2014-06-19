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
<div class="navbar navbar-default navbar-fixed-top visible-xs visible-sm hidden-print" role="navigation" style="max-height:100%; overflow: auto;">
    <div class="container">
        <div class="navbar-header mobile-menu-header">
            <? if ($params->show_logo) : ?>
            <a class="navbar-brand logo" href="<? echo JUri::base(); ?>"><img src="<?= $params->logo; ?>" class="img-responsive" style="float: left;"></a>
            <? endif; ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex1-collapse" style="float: right; margin-top: 10px;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <? if ($params->show_search) : ?>
            <a class="navbar-toggle button no-decoration" style="float: right; padding: 7px 14px; margin-left: 15px; margin-top: 10px;" href="<?= JRoute::_('index.php?option=com_search'); ?>">
                <i class="icon-search"></i>
            </a>
            <? endif; ?>

            <? if ($params->show_languages) : ?>
            <div class="languages-selector" style="margin-top: 16px; display:inline-block; float: right;">
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

<script src="media/mod_menu_mobile/js/mobile-menu.js"></script>
<script>
    new MobileMenu();
</script>
