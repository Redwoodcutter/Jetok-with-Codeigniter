# Jetok-with-Codeigniter
öncelikle application->config.php icerisindeki base_url yi kendi url'ini yapmayı unutmayın!<br>

$config['base_url'] = 'http://localhost/example/';<br>

ilk yapacaginiz şey kullandıgınız veri tabanında users adlı bir tablo hazirladiktan sonra içersinde<br>

user_id, username, password, email, created_date,gender adında tablolar olusturmak<br>

daha sonrasında database baglantılarını şu kısımda "database.php" de ki 'database' => 'login', kısmını kendi database ismini yazmanız gerekmektedir.<br>

$db['default'] = array( <br>
	'dsn'	=> '', <br>
	'hostname' => 'localhost', <br>
	'username' => 'root', <br>
	'password' => '', <br>
	'database' => 'login', //burdaki login benim databasede kullandıgım isimdir. tabloyu user adına acmanız gerekmekte ve login yerine basta tanımladıgınız database ismini yazmanız gerekmektedir!!<br>
	'dbdriver' => 'mysqli',<br>
	'dbprefix' => '',<br>
	'pconnect' => FALSE,<br>
	'db_debug' => (ENVIRONMENT !== 'production'),<br>
	'cache_on' => FALSE,<br>
	'cachedir' => '',<br>
	'char_set' => 'utf8',<br>
	'dbcollat' => 'utf8_general_ci',<br>
	'swap_pre' => '',<br>
	'encrypt' => FALSE,<br>
	'compress' => FALSE,<br>
	'stricton' => FALSE,<br>
	'failover' => array(),<br>
	'save_queries' => TRUE<br>
);

