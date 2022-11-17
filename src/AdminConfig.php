<?php

namespace Superwen\AdminConfig;

use Encore\Admin\Extension;

class AdminConfig extends Extension
{
    public $name = 'admin-config';

    public $menu = [
        'title' => 'Adminconfig',
        'path'  => 'admin-config',
        'icon'  => 'fa-gears',
    ];
}