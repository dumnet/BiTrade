<?php

// The currency you're going to pay with when buying new coins
// This can also be a crypto currency you have on Coinbase
// EUR or USD or even ETH or BTC
define('CURRENCY','EUR');

// The crypto currency the bot is going to trade.
// BTC or ETH only the moment
define('CRYPTO','BTC');

// The local timezone of this machine
// must be a string according to http://php.net/manual/en/timezones.php
define('TIMEZONE','Europe/Paris'); 

//how long between price checks in the watchdog?
define('SLEEPTIME',9);

// Coinbase 
// Visit 'https://www.coinbase.com/settings/api'
define('COINBASE_KEY','Key Api');
define('COINBASE_SECRET','Secret Key Api');


 // DB Connection        
 define('HOST', '127.0.0.1');    
 define('USERNAME', 'root');    
 define('PASSWORD', 'root');    
 define('DBNAME', 'coinbase');
