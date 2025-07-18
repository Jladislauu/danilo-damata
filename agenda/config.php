<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Online Appointment Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config
{
    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL = 'http://localhost';
    const LANGUAGE = 'portuguese-br';
    const DEBUG_MODE = false;
    const TIMEZONE = 'America/Sao_Paulo'; // Set the default timezone   
    const DATE_FORMAT = 'dd/mm/YYYY'; // Set the date format (d/m/Y, m/d/Y, Y-m-d)
    const TIME_FORMAT = 'HH:MM'; // Set the time format (H:i, h:i A)

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST = 'localhost';
    const DB_NAME = 'u292296724_agendadanilo';
    const DB_USERNAME = 'u292296724_agendadanilo';
    const DB_PASSWORD = '$ivr8XddwS9_+;E';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE = TRUE; // Enter TRUE or FALSE
    const GOOGLE_CLIENT_ID = '105873835739-sqt22v2v8b47cr7gtaepaipatl6mgefv.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET = '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';
}
