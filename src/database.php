
$host = 'mysqlassign.mysql.database.azure.com';
$username = 'mysql@mysqlassign';
$password = 'qwerty@123';
$db_name = 'mysqlassign';

//Initializes MySQLi
$conn = mysqli_init();

//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'mysqlassign.mysql.database.azure.com', 'mysql@mysqlassign', 'qwerty@123', 'mysqlassign', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
