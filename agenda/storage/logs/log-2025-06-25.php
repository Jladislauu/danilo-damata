<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-06-25 04:09:07 --> Could not find the language line "please_select"
ERROR - 2025-06-25 04:09:07 --> Could not find the language line "please_select"
ERROR - 2025-06-25 18:55:49 --> Notifications - Could not email confirmation details of appointment (8) : SMTP Error: Could not authenticate.
ERROR - 2025-06-25 18:55:49 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Booking.php(463): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Booking->register()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-25 19:10:01 --> Notifications - Could not email cancellation details of appointment (8) : SMTP Error: Could not authenticate.
ERROR - 2025-06-25 19:10:01 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(182): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(229): Email_messages->send_appointment_deleted()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(387): Notifications->notify_appointment_deleted()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->delete_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-25 19:26:02 --> Notifications - Could not email confirmation details of appointment (9) : SMTP Error: Could not authenticate.
ERROR - 2025-06-25 19:26:02 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Booking.php(463): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Booking->register()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-25 19:26:21 --> Notifications - Could not email cancellation details of appointment (9) : SMTP Error: Could not authenticate.
ERROR - 2025-06-25 19:26:21 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(182): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(229): Email_messages->send_appointment_deleted()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(387): Notifications->notify_appointment_deleted()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->delete_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-25 19:42:34 --> Notifications - Could not email confirmation details of appointment (11) : SMTP Error: Could not authenticate.
ERROR - 2025-06-25 19:42:34 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(307): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->save_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-25 20:27:21 --> JSON exception: {"success":false,"message":"The provided service ID was not found in the database: 1","trace":"InvalidArgumentException 'The provided service ID was not found in the database: 1' in \/home\/u292296724\/domains\/danilodamata.com\/public_html\/agenda\/application\/models\/Services_model.php(221)\n#0 \/home\/u292296724\/domains\/danilodamata.com\/public_html\/agenda\/application\/controllers\/Booking.php(623): Services_model->find()\n#1 \/home\/u292296724\/domains\/danilodamata.com\/public_html\/agenda\/system\/core\/CodeIgniter.php(481): Booking->get_available_hours()\n#2 \/home\/u292296724\/domains\/danilodamata.com\/public_html\/agenda\/index.php(331): require_once('\/home\/u29229672...')\n#3 {main}"}
ERROR - 2025-06-25 21:44:23 --> Notifications - Could not email confirmation details of appointment (12) : SMTP Error: Could not authenticate.
ERROR - 2025-06-25 21:44:23 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Booking.php(463): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Booking->register()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
ERROR - 2025-06-25 22:09:11 --> Notifications - Could not email confirmation details of appointment (11) : SMTP Error: Could not authenticate.
ERROR - 2025-06-25 22:09:11 --> #0 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(2058): PHPMailer\PHPMailer\PHPMailer->smtpConnect()
#1 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1687): PHPMailer\PHPMailer\PHPMailer->smtpSend()
#2 /home/u292296724/domains/danilodamata.com/public_html/agenda/vendor/phpmailer/phpmailer/src/PHPMailer.php(1521): PHPMailer\PHPMailer\PHPMailer->postSend()
#3 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#4 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/libraries/Notifications.php(83): Email_messages->send_appointment_saved()
#5 /home/u292296724/domains/danilodamata.com/public_html/agenda/application/controllers/Calendar.php(307): Notifications->notify_appointment_saved()
#6 /home/u292296724/domains/danilodamata.com/public_html/agenda/system/core/CodeIgniter.php(481): Calendar->save_appointment()
#7 /home/u292296724/domains/danilodamata.com/public_html/agenda/index.php(331): require_once('/home/u29229672...')
#8 {main}
