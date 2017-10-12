<?php

/* System configuration */
define('BASE_DIR', dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR); // Perhaps you don't need to change this.
define('DATE_FORMAT', 'd/m/Y H:i');
define('TIMEZONE', -3); // 'auto' for autodetect from user (not yet)
define('URL_BASE', 'http://localhost:8080/mvc/'); // remember to put the slash at the end
define('NOSEC_BASE', URL_BASE);
define('FRONTEND_CDN', URL_BASE.'assets/');
define('USERFILES_CDN', URL_BASE.'views/');
define('DEFAULT_LANGUAGE', 'pt-br');
define('TPL_EVAL_ENABLED', true); // allow php code in template file
define('DEFAULT_TYPE', 'text/html; charset=UTF-8');

/* API configuration */
define('API_TOKEN_TIME_LIMIT', "6 hours");
define('API_EXTENDED_TOKEN_LIMIT', "6 months");

/* Database */
define('MYSQL_HOST', 'localhost:3307');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', 'usbw');
define('MYSQL_DBNAME', 'db_melhorquenada');

/* SMTP Configuration */
define('ADMIN_EMAIL', 'jefrey.sobreira@gmail.com'); // errors will be sent here
define('SUPPORT_EMAIL', 'jefrey.sobreira@gmail.com'); // contacts will be sent here
define('SYS_EMAIL', 'naoresponda@localhost'); // 
define('SMTP_HOST', 'localhost');
define('SMTP_AUTH', FALSE);
define('SMTP_USERNAME', 'info@bitsaque.com.br');
define('SMTP_PASSWORD', '.a9btM^{gts+');
define('SMTP_FROM', SMTP_USERNAME);
define('SMTP_FROMNAME', 'Plataforma Teach');

/* API Keys */
// define('RECAPTCHA_PUBLIC', '6LdmWvYSAAAAACcx-wniM2ykesRjdMT0L8RmUSUs');
// define('RECAPTCHA_SECRET', '6LdmWvYSAAAAALfgTQkGIEUtET8JufuXIPNFxPDg');
define('RECAPTCHA_PUBLIC', '6LeQt_gSAAAAALPDHAelkV9gLJhujAnMTVcKkLFv');
define('RECAPTCHA_SECRET', '6LeQt_gSAAAAAErLm9xLn36RH_dQZf8rbTElMOGP');

define('FACEBOOK_PUBLIC', '267788523427610');
define('FACEBOOK_SECRET', 'cdb8245174bfebb2a8c80afdb785db18');
