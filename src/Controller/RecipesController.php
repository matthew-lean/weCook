<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Log\Log;
use Cake\Event\Event;
/**
 * Recipes Controller
 *
 * @property \App\Model\Table\RecipesTable $Recipes
 */
class RecipesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users.Colours','Users','ParentRecipes','ChildRecipes', 'Ingredients','ChildRecipes.Users','ChildRecipes.Users.Colours'],
            'limit' => 10,
            'order' => [
              'created' => 'desc'
            ]
        ];

        $recipes = $this->paginate($this->Recipes);

        $this->set(compact('recipes','users'));
        $this->set('_serialize', ['recipe']);
    }

    // Home

    public function home()
    {
        $this->paginate = [
            'contain' => ['Users.Colours','Users','ParentRecipes','ChildRecipes', 'Ingredients','ChildRecipes.Users','ChildRecipes.Users.Colours'],
            'limit' => 3,
            'order' => [
              'created' => 'desc'
            ]
        ];

        $recipes = $this->paginate($this->Recipes);


        $this->set(compact('recipes','users'));
        $this->set('_serialize', ['recipe']);
    }
    /**
     * View method
     *
     * @param string|null $id Recipe id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipe = $this->Recipes->get($id, [
            'contain' => ['Users.Colours','Users', 'ParentRecipes', 'Ingredients', 'ChildRecipes', 'ChildRecipes.Users.Colours','RecipesVersions', 'Steps']
        ]);

        $this->set('recipe', $recipe);
        $this->set('_serialize', ['recipe']);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipe = $this->Recipes->newEntity($this->request->data, [
        'associated' => ['Users.Colours','Steps','Ingredients','Users']
        ]);
        if ($this->request->is('post')) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->getData());
            // sets the post id to equal the parent id ?
            $parent_id = $recipe->id;
            if ($this->Recipes->save($recipe, ['associated' => ['Steps','Ingredients']])) {
                $this->Flash->success(__('The recipe has been saved!'));
                //redirect to the newly created recipe
                return $this->redirect(['action' => 'view',$recipe->id]);
            }
            $this->Flash->error(__('The recipe could not be saved... :( Please, try again.'));
        }
        $users = $this->Recipes->Users->find('list', ['limit' => 200]);
        $parentRecipes = $this->Recipes->ParentRecipes->find('list', ['limit' => 200]);
        $ingredients = $this->Recipes->Ingredients->find('list', ['limit' => 200]);
        $this->set(compact('recipe', 'users', 'parentRecipes', 'ingredients'));
        $this->set('_serialize', ['recipe']);
        $this->set('recipe', $recipe);
    }
    /**
     * Edit method
     *
     * @param string|null $id Recipe id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //Log the form data
        // Log::write('debug', $this->request->getData());
        $recipe = $this->Recipes->get($id, [
            'contain' => ['Users.Colours','Ingredients','Steps']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->getData());
            if ($this->Recipes->save($recipe)) {
                $this->Flash->success(__('The recipe edit has been made.'));
                //redirect to the edited recipe
                return $this->redirect(['action' => 'view',$recipe->id]);
            }
            $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
        }
        $users = $this->Recipes->Users->find('list', ['limit' => 200]);
        $ingredients = $this->Recipes->Ingredients->find('list', ['limit' => 200]);
        $parentRecipes = $this->Recipes->ParentRecipes->find('list', ['limit' => 200]);
        $this->set(compact('recipe', 'users', 'parentRecipes', 'ingredients'));
        $this->set('_serialize', ['recipe']);
    }
    // new fuction version to edit and save recipes
    public function version($id = null)
    {
        $recipe = $this->Recipes->get($id, [
            'contain' => ['Users.Colours','Ingredients','Steps','Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->getData());
            $recipe = $this->Recipes->newEntity($this->request->data, [
            'associated' => ['Steps','Ingredients','Users']
            ]);
            if ($this->Recipes->save($recipe, ['associated' => ['Steps','Ingredients']])) {
                $this->Flash->success(__('A version has been created'));
                //redirect to the edited recipe
                return $this->redirect(['action' => 'index',$recipe->id]);
            }
            $this->Flash->error(__('That recipe version was not made...'));
            return $this->redirect(['action' => 'index']);
        }
        $users = $this->Recipes->Users->find('list', ['limit' => 100]);
        $ingredients = $this->Recipes->Ingredients->find('list', ['limit' => 100]);
        $this->set(compact('recipe', 'users', 'ingredients', 'colours'));
        $this->set('_serialize', ['recipe']);
        $this->set('recipe', $recipe);
    }
    /**
     * Delete method
     *
     * @param string|null $id Recipe id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipe = $this->Recipes->get($id);
        if ($this->Recipes->delete($recipe)) {
            $this->Flash->success(__('The recipe has been deleted.'));
        } else {
            $this->Flash->error(__('The recipe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    //Public pages which don't require user login
    public function beforeFilter(Event $event){
      $this->Auth->allow(['home']);
    }
}
