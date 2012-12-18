<?php
/**
 * PATHTYPE
 *
 * @package     isralife
 * @category    utils
 *
 * @author      Nuarharuha <nhnoah+bay-isra@gmail.com>
 * @copyright   Copyright (C) 2012, Nuarharuha, MDAG Consultancy
 * @license     http://mdag.mit-license.org/ MIT License
 * @filesource  https://github.com/NuarHaruha/bay-mk/blob/master/type/pathype.php
 * @version     1.0
 * @access      public
 */
class PATHTYPE
{
    protected $version              = 1.0;

    const UPGRADE                   = 'wp-admin/includes/upgrade.php';

    final private function __construct()
    {
        throw new Exception( 'Enum and Subclasses cannot be instantiated.' );
    }

    public static function F_UPGRADE()
    {
        return ABSPATH . self::UPGRADE;
    }
}
