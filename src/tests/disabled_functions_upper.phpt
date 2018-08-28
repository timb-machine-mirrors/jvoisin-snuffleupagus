--TEST--
Disable functions - uppercase
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/disabled_functions.ini
--FILE--
<?php 
sYSTEm("id");
pRINTf("printf in simulation mode\n");
pRINT("print in disabled mode\n");
vaR_DUmp("this is a super test");
echo sTRPOs("pouet", "o");
?>
--EXPECTF--
Fatal error: [snuffleupagus][disabled_function] Aborted execution on call of the function 'system' in %a/disabled_functions_upper.php on line 2