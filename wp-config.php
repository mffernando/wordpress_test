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
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '*=$+G4|Sr~d,p`3$yu{O1NeD.zB#DM /Wm%0K6G*s]QQ;$9=AFCF{A%p}%y,zm!8');
define('SECURE_AUTH_KEY',  '&<d`_{I>NQHQ,_A9{9ertZv!-X_`F&.^}$*kwtJ|,ODg&N^VzV|G&*p7NVFKmi6P');
define('LOGGED_IN_KEY',    'PBme~K0 [9i(PWfz^fVy(I)>3?|ZZNF3kiOGFxE:#y|g3 <fE1AER{6}qSCM,cB!');
define('NONCE_KEY',        ';D[[l,|E4#AeHZP(WoUxPMdxI%u2SR%{e^`R{^N[-Dogbp3BQ+#/6}VRjh62,]s9');
define('AUTH_SALT',        '^dRo?MuQmS,4(DdAj.kUD!_DZxap?vLnym:9j%v}s7fSV eELk2r8o6PJas8L&oU');
define('SECURE_AUTH_SALT', 'hD&;f2Qg$hVB@hl0<l(M(kF3k*.|c#GhiwTmyejq}U[6EMzr}KhgJ2FQ9uIedVN[');
define('LOGGED_IN_SALT',   'YQb-fj++4x<=HR0[Uaiw^oP=#4~K(+K,z]Ow^S)4u<PS?6b)]DTK4K!ty_18)xjd');
define('NONCE_SALT',       'vJ)9C=cm0+o|3S-L_=?Qf`+5J*Zn~Phuu^Ur9%vagF9ATRK M=(!S0(R4swt_`QB');

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

