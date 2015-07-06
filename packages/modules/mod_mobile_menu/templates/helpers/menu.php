<?php

/**
 * Com
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 * @category
 * @package
 * @subpackage
 */

defined('KOOWA') or die('Restricted Access');

class ModMobile_menuTemplateHelperMenu extends KTemplateHelperDefault
{
    public function item($config = array())
    {
        $config = new KConfig($config);
        $item   = $config->item;
        $active = $config->active;

        $classes = 'item-' . $item->id;
        if ($item->id === $active->id) {
            $classes .= ' current';
        }

        if ($item->deeper) {
            $classes .= ' dropdown';
        }

        $classes = ' class="' . $classes . '"';

        $html = '<li' . $classes . '>';

        if($item->type == 'component') {
            $html .= '<a href="' . JRoute::_('index.php?Itemid=' . $item->id) . '">' . $item->title . '</a>';
        } else if($item->type == 'url') {
            $html .= '<a href="'. $item->link .'" target="_blank">' . $item->title . '</a>';
        } else if($item->type == 'separator') {
            $html .= '<a>' . $item->title . '</a>';
        }

        if ($item->deeper) {
            $html .= '<span class="glyphicon glyphicon-plus dropdown-toggle" data-toggle="dropdown"></span>';
            $html .= '<ul class="nav-child dropdown-menu">';
        } else if ($item->shallower) {
            $html .= '</ul>';
            $html .= '<div class="clearfix"></div>';
            $html .= '</li>';
        } else {
            $html .= '</li>';
        }

        return $html;
    }
}