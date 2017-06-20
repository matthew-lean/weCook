<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Colours']
        ];

        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Colours', 'Recipes','Recipes.Ingredients','Recipes.ChildRecipes','Recipes.Users.Colours','Recipes.ChildRecipes.Users','Recipes.ChildRecipes.Users.Colours']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $colours = $this->Users->Colours->find('list', ['limit' => 200]);
        $this->set(compact('user', 'colours'));
        $this->set('_serialize', ['user']);
    }
    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('New user created!'));
                return $this->redirect(['controller'=>'users','action' => 'login']);
            }
            $this->Flash->error(__('Unable to register user :('));
        }
        $colours = $this->Users->Colours->find('list', ['limit' => 200]);
        $this->set(compact('user', 'colours'));
        $this->set('_serialize', ['user']);
    }
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $colours = $this->Users->Colours->find('list', ['limit' => 200]);
        $this->set(compact('user', 'colours'));
        $this->set('_serialize', ['user']);
    }
    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

  public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'recipes','action' => 'index']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout(){
        $this->Flash->success('You are logged out');
        return $this->redirect($this->Auth->logout());
    }
    // Public pages which don't require user login
    public function beforeFilter(Event $event){
      $this->Auth->allow(['register']);
    }
    //Finds the current user in the session
    public function findUser(){
    //Store the user id in the session
    $this->Session->write('User.id', $userId);
    //read the user id from the Session
    $userId = $this->Session->read('User.id');
    }
}
