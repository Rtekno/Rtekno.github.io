<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'dbrtekno11' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?TJJ9ivY]Kk#:-]&pBcN$;(Qp!s-JXwSj>Q?}Xn0IFko6XWU0zncQn[*^$a=3`4j' );
define( 'SECURE_AUTH_KEY',  'KUnuO)z_w`KbvF!Or^ L}%FV9/Kx6VKl+Cr22R#BA,p.!|_Pspl^~&g0p8NVRx7b' );
define( 'LOGGED_IN_KEY',    'wI%rN%m={?4 ,%&:]eU;^t=sm4F.TP^S1myzS2}yt -q&*E`;CnVv`NGhB=x!e(L' );
define( 'NONCE_KEY',        'mn)>pL(7i<Ta?0!act9YC3#hf  ,2wW5L>K3gN~.1h{kT6ijnU;Uh{_oXS`pKwlA' );
define( 'AUTH_SALT',        'zZhN)S/d}WY1(Ml2aeG^N_v;4?O7ZgZF4tL!sM/GI0BT{*L;-_ZxGhK7IWwXf!_|' );
define( 'SECURE_AUTH_SALT', '7unc9WtMw[x-)o$9>,q<>O-h*#kjr#[#4l]LwA#79[bR($I-/cfP[0yAW@2duS6z' );
define( 'LOGGED_IN_SALT',   '_8p#TfpLJ*(++];l*u!@)7?$XQWbTfW=ZiKSt&LxJwDo{D#z%A/mbdDm:9;]Vb_P' );
define( 'NONCE_SALT',       'bZT%pGK;;WM@Sl$*-=Z`+AF/@>@`z[z2I|JK$T>9JD9DinywRn5@LJgs}`wGiyI*' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
