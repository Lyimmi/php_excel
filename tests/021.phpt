--TEST--
Font constructor test
--INI--
date.timezone=America/Toronto
--SKIPIF--
<?php if (!extension_loaded("excel")) die("skip - Excel extension not found"); ?>
--FILE--
<?php 
	$x = new ExcelBook();

	try {
		$format = new ExcelFont();
	} catch (Exception $e) {
		var_dump($e->getMessage());
	}

	try {
		$format = new ExcelFont('cdsd');
	} catch (Exception $e) {
		var_dump($e->getMessage());
	}
?>
--EXPECTF--
string(61) "ExcelFont::__construct() expects exactly 1 parameter, 0 given"

Catchable fatal error: Argument 1 passed to ExcelFont::__construct() must be an instance of ExcelBook, string given in %s on line %d
