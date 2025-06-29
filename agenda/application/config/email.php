<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Agendamentos Danilo Damata';
$config['protocol'] = 'smtp'; // or 'smtp'
$config['mailtype'] = 'html'; // or 'text'
$config['smtp_debug'] = '0'; // or '1'
$config['smtp_auth'] = TRUE; //or FALSE for anonymous relay.
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'neuropsicologodanilodamata@gmail.com';
$config['smtp_pass'] = 'mmes yokd wseg pgjq';
$config['smtp_crypto'] = 'tls'; // or 'tls'
$config['smtp_port'] = 587;
$config['from_name'] = 'Neuropsicólogo Danilo Damata';
$config['from_address'] = 'neuropsicologodanilodamata@gmail.com';
$config['reply_to'] = 'neuropsicologodanilodamata@gmail.com';
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
