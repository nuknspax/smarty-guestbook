<?php

/**
 * Project: Guestbook Sample Smarty Application
 * Author: Monte Ohrt <monte [AT] ohrt [DOT] com>
 * File: index.php
 * Version: 1.1
 */

// define our application directory
define('GUESTBOOK_DIR', '/Users/nuknspax/www/nuknspax/guestbook/smarty/guestbook/');
// define smarty lib directory
define('SMARTY_DIR', '/Users/nuknspax/www/nuknspax/smarty/libs/');

define('URL_ROOT', 'http://nk/guestbook/');
// include the setup script
include(GUESTBOOK_DIR . 'libs/guestbook_setup.php');

// create guestbook object
$guestbook = new Guestbook;

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'view';

switch($_action) {
    case 'add':
        // adding a guestbook entry
        $guestbook->displayForm();
        break;
    case 'create_input':
        // adding a guestbook entry
        $guestbook->addFormInput();
        break;
    case 'submit':
        // submitting a guestbook entry
        $guestbook->mungeFormData($_POST);
        if($guestbook->isValidForm($_POST)) {
            $guestbook->addEntry($_POST);
            $guestbook->displayBook($guestbook->getEntries());
        } else {
            $guestbook->displayForm($_POST);
        }
        break;
    case 'view':
    default:
        // viewing the guestbook
        $guestbook->displayBook($guestbook->getEntries());        
        break;   
}
