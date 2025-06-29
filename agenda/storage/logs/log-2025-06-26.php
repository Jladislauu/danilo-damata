<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-06-26 12:51:03 --> JSON exception: {"success":false,"message":"Credenciais inv\u00e1lidas fornecidas, por favor, tente novamente.","trace":"InvalidArgumentException 'Credenciais inv\u00e1lidas fornecidas, por favor, tente novamente.' in \/home\/u292296724\/domains\/danilodamata.com\/public_html\/agenda\/application\/controllers\/Login.php(84)\n#0 \/home\/u292296724\/domains\/danilodamata.com\/public_html\/agenda\/system\/core\/CodeIgniter.php(481): Login->validate()\n#1 \/home\/u292296724\/domains\/danilodamata.com\/public_html\/agenda\/index.php(331): require_once('\/home\/u29229672...')\n#2 {main}"}
ERROR - 2025-06-26 13:33:10 --> Notifications - Could not email cancellation details of appointment (12) : SMTP Error: Could not authenticate.
ERROR - 2025-06-26 13:33:10 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(182): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(229): Email_messages->send_appointment_deleted()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(387): Notifications->notify_appointment_deleted()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->delete_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-26 13:33:15 --> Notifications - Could not email cancellation details of appointment (11) : SMTP Error: Could not authenticate.
ERROR - 2025-06-26 13:33:15 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(182): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(229): Email_messages->send_appointment_deleted()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(387): Notifications->notify_appointment_deleted()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->delete_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-26 14:00:36 --> Severity: Warning --> unlink(/home/u292296724/domains/danilodamata.com/public_html/agenda/application/config/../../storage/cache/rate_limit_key_280414c87d716c1396369df502f56dd): No such file or directory /home/u292296724/domains/danilodamata.com/public_html/agenda/system/libraries/Cache/drivers/Cache_file.php 279
ERROR - 2025-06-26 23:41:02 --> Could not find the language line "please_select"
ERROR - 2025-06-26 23:41:02 --> Could not find the language line "please_select"
ERROR - 2025-06-26 23:41:09 --> Could not find the language line "please_select"
ERROR - 2025-06-26 23:41:09 --> Could not find the language line "please_select"
ERROR - 2025-06-26 23:42:40 --> Could not find the language line "please_select"
ERROR - 2025-06-26 23:42:40 --> Could not find the language line "please_select"
ERROR - 2025-06-26 23:42:53 --> Could not find the language line "please_select"
ERROR - 2025-06-26 23:42:53 --> Could not find the language line "please_select"
