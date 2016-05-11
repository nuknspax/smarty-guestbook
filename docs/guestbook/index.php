<?php

/**
 * Project: Guestbook Sample Smarty Application
 * Author: Monte Ohrt <monte [AT] ohrt [DOT] com>
 * File: index.php
 * Version: 1.1
 */

// define our application directory
define('GUESTBOOK_DIR', 'c:/wamp/www/guestbook/smarty/guestbook/');
// define smarty lib directory
define('SMARTY_DIR', 'c:/wamp/www/smarty/libs/');

define('URL_ROOT', 'http://localhost/guestbook/');
// include the setup script
include(GUESTBOOK_DIR . 'libs/guestbook_setup.php');
include(GUESTBOOK_DIR . 'libs/utils.php');

// create guestbook object
$guestbook = new Guestbook;


if(bAjax() && isset($_POST) && isset($_POST['input_type']))
{
    echo $guestbook->jsonInputsTemplate($_POST['input_type']);
    exit;
}

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

