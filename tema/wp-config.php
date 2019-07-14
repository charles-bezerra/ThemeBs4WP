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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '0801');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '^.3Q;~fAS$9I99/<XhiS9 0D]pGbP9]vo,MS 7Zy#%.P&f<Pmg2?{.si}6D}>y>U');
define('SECURE_AUTH_KEY',  'zE9Qlz1K7P2YmHi25#[%kL!V ~HS[BMIeq u}iBOEv0Q8W3_ID`OiCJc~BcEApL+');
define('LOGGED_IN_KEY',    'Gi=h81qq+d`CYC55*+mo30JrtrYA|Y>Vw+aD?QIh41:Ds7WL%0{5g!_ya{nQwQ$y');
define('NONCE_KEY',        'H?2U=?[]#pzz{CUuHtV7t_v2w{8[w+4Yl^EJm(W6pUN&;!]2%3eb1eP0Y9m2>V1X');
define('AUTH_SALT',        'qjE~4g6d3]3kzasC{eN&ZW>#!B@PiUR1b1sLR<sBYLn6XuJDUX33OkU8`iu)Mz<9');
define('SECURE_AUTH_SALT', 'qz+^H;TJqK!8)zwGXT.tR}?9|f]%zF0EJ09&mkZX?Dxlza]BZ8b>ol5B*C?fCK4]');
define('LOGGED_IN_SALT',   '~IE2F^J`PLk=`-*WDE]:!kw#*Is<Y]W<5d%zz&dq|CIQ[~t9.UXh^tX=3viE^l)H');
define('NONCE_SALT',       '*ks#,|i2eqB+2|E!A|]31xa_TjqRj{4Rvt~rXicp<]+XPhz:&wo-Q,X@,0LdeEGS');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
