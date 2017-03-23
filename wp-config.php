<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zerphyrc_ss_dbnamed9f');

/** MySQL database username */
define('DB_USER', 'zerphyrc_ss_dd9f');

/** MySQL database password */
define('DB_PASSWORD', 'pAYT5POdse2A');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Qk-g];CE(Sf+dkU]@R-+$iNa>myWjaOwyRNeE*HvJXyMPFv$wFXK;&|_NI-qQeI;tip;mIxSIz]AlAByGN|Hg_pX;e-wnKBhbcCpFQ=xq)xcsoP&Dw/r${_l?C{fIf-x');
define('SECURE_AUTH_KEY', '[eFL@dl<B/HwqP[$>rbDg{zBMxsLNLvoZTUI!-CPAPeA+HSGp[=+ZGnPgtQnd<T+%iDj-zSgGu>nJ{<!eqEqZSNj%J]V;pD!{%w;FeVLYe&!wmnbKaP[hGWMTXR=EC!E');
define('LOGGED_IN_KEY', '(jjHiQ@-Pc=rvD%uH>dVSbC]TM+K%bTNK_/;HVrk[)hGu(}Jbn/<fb!fPTPMzsF=XmEi]<!SO]TzP+bCJ<L|YItSwxU^YSharRP^_NN}z|f(MQh)taw&{+s==&o}+-zk');
define('NONCE_KEY', 'iiTA)]+dI>}ceygr$GwE&GnQ|G&AZvO>G/^|Nw_<?|HBP]{g<nRcXs)j@v|^}qNa)Sn[Ovtfg&E%[+F(+Ck{SAZ|xTxbNKBSFZgoN}w=SojnN@OfqkreQ)ccT_TpOeoM');
define('AUTH_SALT', '[GZSeicRM?@(}r]+?-oCc/MB/Z)]pRmVz(k)fM(B%e%}+OH/|CkwzCbp!mSXzjEuC!N(ntsw^aDKZciXfhO$J_ZYa_VGm>J$vL*WZ/IhO|<b-zLKENy-DT/$nd<+sMOe');
define('SECURE_AUTH_SALT', '%n)ZCAR&B[OcOD]<?jcPPtZW;;DH?<n*qy)yj!aGT<CXpWl/Nt?HZ)zaAQ$rubbuNNlS/%EddVMY}$QsFSv_o@{mu^Izwe=n@xQee[J*]OM]DHBQ-S?fhUevHdv%Oz+N');
define('LOGGED_IN_SALT', 'n(d>Aw&)]IK$Y@C!@^MOd*rqT[!SIXNNFYdS_cSLSuo!pCodC|UGR=FImy[cx%Xv*IKr!R&eyZf$VQVw?ne$x_;[V=FpDpcWeldUu)pQ+@)F}@f%dhUqtLWzVagOI^B*');
define('NONCE_SALT', 'TUb&uf)AnOHufCD={=<+zQoPO)ki@e%+SA-vTcL&v*-/L|@gZ)Vb%+g|OoP&&|En$^Kg/@UaisP?RvDNEnUq]tS{XduO;ka&]k$BbHWN>@*!UGE$<Lj%wLO)FrpbKwos');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_scim_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
