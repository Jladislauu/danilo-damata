<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-06-27 14:49:45 --> Notifications - Could not email confirmation details of appointment (14) : SMTP Error: Could not authenticate.
ERROR - 2025-06-27 14:49:45 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Booking.php(463): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Booking->register()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-27 14:50:01 --> Notifications - Could not email confirmation details of appointment (14) : SMTP Error: Could not authenticate.
ERROR - 2025-06-27 14:50:01 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(307): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->save_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-27 14:50:11 --> Notifications - Could not email confirmation details of appointment (14) : SMTP Error: Could not authenticate.
ERROR - 2025-06-27 14:50:11 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(307): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->save_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-27 14:50:29 --> Notifications - Could not email confirmation details of appointment (14) : SMTP Error: Could not authenticate.
ERROR - 2025-06-27 14:50:29 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(307): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->save_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-27 15:26:02 --> Notifications - Could not email cancellation details of appointment (14) : SMTP Error: Could not authenticate.
ERROR - 2025-06-27 15:26:02 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(182): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(229): Email_messages->send_appointment_deleted()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(387): Notifications->notify_appointment_deleted()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->delete_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-27 23:59:11 --> Could not find the language line "please_select"
ERROR - 2025-06-27 23:59:11 --> Could not find the language line "please_select"
ERROR - 2025-06-27 23:59:33 --> Could not find the language line "please_select"
ERROR - 2025-06-27 23:59:33 --> Could not find the language line "please_select"
