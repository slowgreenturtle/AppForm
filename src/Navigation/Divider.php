<?php

namespace SGT\Navigation;

class Divider extends Item
{

    public $type = 'divider';

    protected $config_colors = 'sgtform.element.link.colors';
    protected $config_sizes  = 'sgtform.element.link.sizes';

    public static function create($link = '')
    {

        return new Divider($link);
    }

    public function display()
    {

        return '<hr>';
    }
}