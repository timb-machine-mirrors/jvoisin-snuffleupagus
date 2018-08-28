--TEST--
Disable functions - eval
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_disabled_functions_eval_filename.ini
--FILE--
<?php 
$var = 123456789;
eval('$var = 1337 + 1337;');
print("Variable: $var\n");
?>
--EXPECTF--
Fatal error: [snuffleupagus][disabled_function] Aborted execution on call of the function 'eval' in %a/disabled_functions_eval_filename.php(3) : eval()'d code on line 1