<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'intranet_homologacao' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'baratagarcia' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', 'Bg#9066' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', '192.168.0.17' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b|os&]ZoaB 8}DGs1*5~6PgabP8.%hIXO{KF#$^eRRQw0Ay4U2u(MY;OC@d@FXu|' );
define( 'SECURE_AUTH_KEY',  'sEF)N!6LlD[-dAh5JMqItHk,jOn/G*Dt|3lzP!`B)w*uZL %{HOz{zyYDO`W1Jt/' );
define( 'LOGGED_IN_KEY',    'AK>7)5&a$xe#jektWa2tP.C7P#BG=hqs0%==X})en%@a8+CKM7m%aW$ApWC9%`23' );
define( 'NONCE_KEY',        'lL:&6%9wc|Eq:g^lO{ VmWIZcGRwaBs=v;-Td#W<K=u(k*}v5Uze)%wDJJDquG`5' );
define( 'AUTH_SALT',        '6e{Q1MpHlL0A+?6t#s&rRoeP(_Sb~I328qWwt2(PR>c>?J#g.{K~zEEu4TYLD(A/' );
define( 'SECURE_AUTH_SALT', 'Sg)E5CJsK~9eQ{^.B;t|rOBX}{gNtBvzi%nmtVfX2y36cAk<<@kujcw=De=6UyfG' );
define( 'LOGGED_IN_SALT',   'suR-/WDNk>$!]^.n$g<kb!Q%efBv|{#W8mt[E_DDrKBt[PF;ui%D%G}bJMW(]r?b' );
define( 'NONCE_SALT',       '*GSOj7`P7P4)7ji-Zhb0Xm^,H6x c.2Re<fWXOOlcn|*_?^#j[/+x*.PB1> tnUX' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
