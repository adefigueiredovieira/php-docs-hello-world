<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "expensetrackertest01-server.mysql.database.azure.com", "livvjxyvgl", "03L1W8K3AX155E03$", "expensetrackertest01-server", 3306, MYSQLI_CLIENT_SSL);
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
  ?>
