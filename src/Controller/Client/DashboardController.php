<?php
namespace App\Controller\Client;

use App\Controller;
use Cake\Event\Event;

class DashboardController extends AppController
{


    public function beforeFilter(Event $event)
    {
          parent::beforeFilter($event);  
    }

    public function welcome()
    {
       
    }
}
