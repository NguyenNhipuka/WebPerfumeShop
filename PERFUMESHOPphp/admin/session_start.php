<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Nhipuka
 * Date: 17-Apr-17
 * Time: 20:05
 */

session_start();
ob_start();
if(!isset($_SESSION['Username'])||$_SESSION['Username']!='admin') {
    header('location: ../site/DangNhap.php');
}
