<?php
/**
 *  MKEY
 *
 * @package     isralife
 * @category    metadata
 *
 * @author      Nuarharuha <nhnoah+bay-isra@gmail.com>
 * @copyright   Copyright (C) 2012, Nuarharuha, MDAG Consultancy
 * @license     http://mdag.mit-license.org/ MIT License
 * @filesource  https://github.com/NuarHaruha/bay-mk/blob/master/type/mkey.php
 * @version     1.0
 * @access      public
 */
final class MKEY
{
    protected $version          = 1.0;
    /**
     * Transaction meta key store in *_usermeta
     *
     * @access public
     * @var string
     */
    const PV                    = 'mc_pv';
    const BV                    = 'mc_bv';
    const RM                    = 'mc_rm';
    const WALLET                = 'wallet';
    const POINTS                = 'mc_points';
    const PENALTY_PV            = 'mc_penalty_pv';
    const PENALTY_RM            = 'mc_penalty_rm';
    const CURRENCY              = 'mc_currency';

    const MIN_WITHDRAWAL        = 'mc_min_withdrawal';
    const MIN_TRANSFER          = 'mc_min_transfer';

    /**
     * Transaction logging type
     * @var string
     */
    const TRANS_BY              = 'transaction_by';

    const TRANS_NOTES           = 'transaction_note';

    /**
     * DB table version meta keys
     * @var string
     */
    const OP_EWALLET_DB_VERSION = 'mc_ewallet_db_version';
}