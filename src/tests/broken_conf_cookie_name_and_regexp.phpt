--TEST--
Borken configuration - encrypted cookie with name and regexp
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_cookie_name_and_regexp.ini
--FILE--
--EXPECT--
PHP Fatal error:  [snuffleupagus][config] name and name_r are mutually exclusive on line 2 in Unknown on line 0

Fatal error: [snuffleupagus][config] name and name_r are mutually exclusive on line 2 in Unknown on line 0