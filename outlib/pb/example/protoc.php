<?
// just create from the proto file a pb_prot[NAME].php file
require_once('../parser/pb_parser.php');

$test = new PBParser();
$test->parse('./test.proto');
var_dump( $test );
$test = new PBParser();
$test->parse('./test_new.proto');
var_dump( $test );

$test = new PBParser();
$test->parse('./game.proto');

var_dump('File parsing done!');
?>
