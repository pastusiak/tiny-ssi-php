<?php
require_once('../src/TinySSI.php');

$parser = new Pastusiak\TinySSI();
echo $parser->parse('ssi_test_body.html');
