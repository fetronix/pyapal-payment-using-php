<?php 
/* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration 
define('PAYPAL_ID', 'ACCOUNT EMAIL');// USE THE BUSINESS ACCOUNT EMAIL FOR YOUR PROJECT 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://PAYPAL/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://PAYPAL/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://PAYPAL/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// Database configuration 
define('DB_HOST', 'HOST'); 
define('DB_USERNAME', 'USERNAME'); 
define('DB_PASSWORD', 'PASSWORD'); 
define('DB_NAME', 'YOUR DATABASE'); 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");