<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'test' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tOeLM_TA=S:>?80D `v5>Xq <9)Wa=Sh#WzIU>}t1%T=BAzCBIY@mI=gM5}j2on4' );
define( 'SECURE_AUTH_KEY',  '(eP;<E<PQ<pPIkQnfzb+wW[+s[k/yL|>S7]i7##*|_J)<me)@hEsdX$tg)p`aY8-' );
define( 'LOGGED_IN_KEY',    '7gBz)$z@}/.;L+zjTPCpNnhBB`dGd#eV.bMnYz88t)2c!0-3>:?[)$roPi-8z@aJ' );
define( 'NONCE_KEY',        'Q{<gw*y6@y*kWA^w:OXe0Ah).2I#CI5!_4!|$7@;{*QWBO2M/8Q.$Tid^qRA&.kI' );
define( 'AUTH_SALT',        'Y*G~^czIs%iLIv~Ku2Aw5NB.wOJy1Ne2c#7@H<iC>SeX&0U~ct/:SH[(=9EOX`Oz' );
define( 'SECURE_AUTH_SALT', 'jrTgL>O;8!lWR%RH1Oyo&[rPyn%/Fo|D_RYi<e!2;mpv<j-JUt%y.U=S/S <v<?b' );
define( 'LOGGED_IN_SALT',   'mMo.gz@#$Y~ZAjUy[TRIc@Sut:]6prqx6hfZh,+ZcFC+o)Q x88Nm1Z:~RVDeaxx' );
define( 'NONCE_SALT',       'pnZ`Okpl?[9ueHLwOV8@g,pxnm]g!Wi1#_FGZ=$rKl^F{<Z8o{c:? aX8x^Yy9b3' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
