--TEST--
Cookie encryption
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_encrypted_cookies.ini
display_errors=1
display_startup_errors=1
error_reporting=E_ALL
--COOKIE--
super_cookie=jWjORGsgZyqzk3WA63XZBmUoSknXWnXDfAAAAAAAAAAAAAAAAAAAAAA7LiMDfkpP94jDnMVH%2Fm41GeL0Y00q3mbOFYz%2FS9mQGySu;awful_cookie=awful_cookie_value;
--ENV--
return <<<EOF
REMOTE_ADDR=127.0.0.1
EOF;
--FILE--
<?php var_dump($_COOKIE); ?>
--EXPECT--
Fatal error: [snuffleupagus][cookie_encryption] Something went wrong with the decryption of super_cookie in Unknown on line 0