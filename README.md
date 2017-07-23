# Jetok-with-Codeigniter
öncelikle application->config.php icerisindeki base_url yi kendi url'ini yapmayı unutmayın!

$config['base_url'] = 'http://localhost/example/';

ilk yapacaginiz şey kullandıgınız veri tabanında users adlı bir tablo hazirladiktan sonra içersinde

user_id, username, password, email, created_date,gender adında tablolar olusturmak

daha sonrasında database baglantılarını şu kısımda "database.php" de ki 'database' => 'login', kısmını kendi database ismini yazmanız gerekmektedir.

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'login', //burdaki login benim databasede kullandıgım isimdir. tabloyu user adına acmanız gerekmekte ve login yerine basta tanımladıgınız database ismini yazmanız gerekmektedir!!
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

