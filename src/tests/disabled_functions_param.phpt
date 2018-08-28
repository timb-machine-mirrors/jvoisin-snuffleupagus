--TEST--
Disable functions
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_disabled_functions_param.ini
--FILE--
<?php 
system("id");
system("echo win");
var_dump(array_sum([1,2,3,4,5]));
shell_exec("id");
echo shell_exec("echo 42");
strcmp("bla", "ble");
strncmp("bla", "ble", 2);
?>
--EXPECTF--
Fatal error: [snuffleupagus][disabled_function] Aborted execution on call of the function 'system', because its argument '$command' content (id) matched the rule '1' in %a/disabled_functions_param.php on line 2