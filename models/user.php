<?php
/**
 * Connect to Database Host
 * @param connect: connect to DB host return true or false.
 *
 */
   $connect = mysql_connect("localhost","root","mysql") or die ("Không thể kết nối đến Databse host!");

/**
 * Connect to Database
 * @param select_db: connect to DB, return tr
 *
 */
   if( $connect) {
      $select_db = mysql_select_db("php_mvc", $connect) or die ("Không thể kết nối đến cơ sở dữ liệu.");
   }
?>