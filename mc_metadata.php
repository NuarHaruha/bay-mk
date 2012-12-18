<?php
/*
Plugin Name: MDAG Metadata Utils
Plugin URI: http://mdag.my
Description: Metadata Utilities
Version: 1.0.0
Author: Nuar, MDAG Consultancy
Author URI: http://mdag.my
License: MIT License
License URI: http://mdag.mit-license.org/
*/

/**
 *  mc_metadata
 *
 * @package     isralife
 * @category    util
 *
 * @author      Nuarharuha <nhnoah+bay-isra@gmail.com>
 * @copyright   Copyright (C) 2012, Nuarharuha, MDAG Consultancy
 * @license     http://mdag.mit-license.org/ MIT License
 * @filesource  http://code.mdag.my/baydura_isralife/src
 * @version     1.0
 * @access      public
 */

class mc_metadata
{
    protected $version = 1.0;

    public $path_type;

    public $plugin_path;

    public function __construct(){ $this->_init(); }

    private function _init()
    {
        $this->plugin_path  = plugin_dir_path(__FILE__);
        $this->path_type    = $this->plugin_path.'type/';

        $this->_loadEnumClass();
    }

    private function _loadEnumClass()
    {
        $enums = array(
            'pathtype',     // path
            'mkey',         // meta keys
            'wtype'         // e-wallet
        );

        foreach($enums as $slug){
            require $this->path_type . sprintf('%s.php',$slug);
        }
    }
}

new mc_metadata();