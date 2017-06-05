<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Event\Event;

/**
 * Colours Controller
 *
 * @property \App\Model\Table\ColoursTable $Colours
 */
class AboutController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

    }

    //Public pages which don't require user login
    public function beforeFilter(Event $event){
      $this->Auth->allow(['index']);
    }

    /**
     * View method
     *
     * @param string|null $id Colour id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

    }
  }
