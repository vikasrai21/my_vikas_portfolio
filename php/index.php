<?php

$con = mysqli_connect('remotemysql.com', '1kQx2H6PXt', ' axSulzr5L0');

if ($con) {
    echo "connection sucessful!";
}
else{
    echo "No connection made!";
}

?>