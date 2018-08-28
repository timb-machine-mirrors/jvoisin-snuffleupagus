--TEST--
Disable functions check on `ret`.
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/disabled_functions_ret.ini
--FILE--
<?php 
echo stripos("pouet", "p");
?>
--EXPECTF--
Fatal error: [snuffleupagus][disabled_function] Aborted execution on return of the function 'stripos', because the function returned '0', which matched a rule in %a/disabled_functions_ret2.php on line 2