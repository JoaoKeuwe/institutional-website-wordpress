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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

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
define( 'AUTH_KEY',         ' o2M]XK2?AufQ[Y#$+5d=RHK|c^0$&kCmdP&rP4svxd]H,qh$RWvE=^( 63pNGz`' );
define( 'SECURE_AUTH_KEY',  'DdY[6T)%|l@rf o^e<b 0g-jy-XZPJg:A7AMk^OXw_t jRs]5sR|(8,{&*$l(mtc' );
define( 'LOGGED_IN_KEY',    '|$ix,14UBJ}CW|n>>9jRF)*sm}P.e(2?::g`|.P0*zp){~5p>]KjCwh d(jrI`uy' );
define( 'NONCE_KEY',        't$MT(9]bQ)(F_bH#cNGNVj>ZxwF$ZrD(m  xT#97bdZPv?yETNr/ehP&k[QA&j&9' );
define( 'AUTH_SALT',        '|?PsYoxs{|EM;ow~sDQ=0YK@Q3sPa5qyl?>XN6R~Bp>>g&ugu0~X:H0yX&d5Nn~T' );
define( 'SECURE_AUTH_SALT', 'YmegI~?bInLMdh2XH[)9@/FAz^@AvxzeUgaecZNZzg_giF<RhpX]v>q_1tHZ?;{O' );
define( 'LOGGED_IN_SALT',   'C}Q^L|]gLaI}kj2IaP9h.EA<2 $MWM%h=FFdVo:7&ad (%DiZY9hOo&=h?J@tsUf' );
define( 'NONCE_SALT',       'U;-kE3[Sy:xzQu3/--~%TYrYvoeTp%g&|lS#hi/8ou.S(wU$a7m`i^pqWxQAy,f!' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
