<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
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
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = 'https://selectallservices.com/book';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = TRUE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = 'db5009452917.hosting-data.io';
    const DB_NAME       = 'dbs8017061';
    const DB_USERNAME   = 'dbu793606';
    const DB_PASSWORD   = 'Killpop2#';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = TRUE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = 'Booking';
    const GOOGLE_CLIENT_ID      = '998074235215-g6c1ovqgl1bmdd9hmpgvvci7qifij4er.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET  = '7tSEjhODU2DdMhgTUNGjkVDW';
    const GOOGLE_API_KEY        = 'AIzaSyBTwPb8kRvUV5bYtNc7S0on9je7_n8Nwdo';
}
/* End of file config.php */
/* Location: ./config.php */
