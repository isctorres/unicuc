<?php
include "adodb.inc.php";
include "adodb-lib.inc.php";
$db=ADONewConnection('mysqli');
$db->connect('localhost','root','C0yote71','mantis_13x');
var_dump( _adodb_getcount($db, 'select toto "from somewhere" from table') );
