<?php 
    function getDB() {
        return $db = pg_connect("host=ec2-100-25-100-81.compute-1.amazonaws.com
                          dbname=d8kr7qj91p3pam
                          port=5432
                          user=wpjvqdtioqsteh
                          password=fc0dae1d91fba04a4b03b1d140a7291a1db7cd1238193abf1101f6297bcf5fd4")
                          or die("Connection failed!")
    }


   
 ?>
