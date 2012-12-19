<?php
/**
 * RPTYPE
 *
 * @package     isralife
 * @category    points
 *
 * @author      Nuarharuha <nhnoah+bay-isra@gmail.com>
 * @copyright   Copyright (C) 2012, Nuarharuha, MDAG Consultancy
 * @license     http://mdag.mit-license.org/ MIT License
 * @filesource  https://github.com/NuarHaruha/bay-mk/blob/master/type/wtype.php
 * @version     1.0
 * @access      public
 */
final class WTYPE
{
    protected $version          = 1.0;
    
    /**
     * Currency Type
     * @var int
     */
    const PV                    = 10;
    const BV                    = 20;
    const RM                    = 30;
    const POINTS                = 40;
    const CURRENCY              = 50;

    /**
     * Transaction TYPE
     * @var int
     */

    const BONUS_PV              = 300;
    const BONUS_BV              = 31;
    const BONUS_RM              = 302;
    const BONUS_CURRENCY        = 303;

    const PENALTY_PV            = 400;
    const PENALTY_BV            = 401;
    const PENALTY_RM            = 402;
    const PENALTY_CURRENCY      = 403;

    const TRANSFER_PV           = 500;
    const TRANSFER_BV           = 501;
    const TRANSFER_RM           = 502;
    const TRANSFER_CURRENCY     = 503;

    const DEPOSIT_PV            = 600;
    const DEPOSIT_BV            = 601;
    const DEPOSIT_RM            = 602;
    const DEPOSIT_CURRENCY      = 603;

    const WITHDRAWAL_PV         = 700;
    const WITHDRAWAL_BV         = 701;
    const WITHDRAWAL_RM         = 702;
    const WITHDRAWAL_CURRENCY   = 703;

    const TOPUP_PV              = 800;
    const TOPUP_BV              = 801;
    const TOPUP_RM              = 802;
    const TOPUP_CURRENCY        = 803;

    const RESET_PV              = 900;
    const RESET_BV              = 901;
    const RESET_RM              = 902;
    const RESET_CURRENCY        = 903;
    const GLOBAL_RESET          = 904;

    /**
     * e-wallet DB Table version number
     * uses for upgrading
     * @var string
     */
    const DB_VERSION            = 1.2;

    /**
     * Database table
     * @var string
     */
    const DB_PRIMARY            = 'mc_ewallet';

    const DB_META               = 'mc_ewallet_meta';

    /**
     * nonces key
     */
    const NONCE_WALLET          = 0xe12;
    const NONCE_BONUS           = 0x14f;

    /**
     * e-wallet manager role
     * @var string
     */
    const ROLE_MANAGER          = 'account_manager';

    const ROLE_MANAGER_NAME     = 'Account Manager';

    const MANAGER_CAP           = 'manage_ewallet';

    final private function __construct()
    {
        throw new Exception( 'Enum and Subclasses cannot be instantiated.' );
    }

    /**
     * @return int|float db version
     */
    public static function VERSION()
    {
        return (float) get_option(MKEY::OP_EWALLET_DB_VERSION);
    }

    /**
     * @uses $wpdb wp database object
     * @author Nuarharuha <nhnoah+bay-isra@gmail.com>
     * @since 0.1
     *
     * @param string $name const of WTYPE::DB_{$}
     * @return string db table name with base prefix (multi site prefix)
     */
    public static function DB($name)
    {   global $wpdb;
        return $wpdb->base_prefix.$name;
    }
}

