<?php
/**

 * User: Natalia Ferraz
 */

namespace App\Controllers;

use App\Models\AdressModel,
    App\Models\ContactModel,
    App\Models\EmailModel,
    App\Models\PhoneModel,
    App\Models\DAO\AdressesDAO,
    App\Models\DAO\ContactsDAO,
    App\Models\DAO\EmailsDAO,
    App\Models\DAO\PhonesDAO;


class Contacts
{
    public function index(){
        echo 'index contacts';

    }
}