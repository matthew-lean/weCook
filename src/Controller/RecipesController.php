<?php
namespace App\Controller;

use App\Controller\AppController;

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
            'contain' => ['Users']
        ];
        $recipes = $this->paginate($this->Recipes);

        $this->set(compact('recipes'));
        $this->set('_serialize', ['recipes']);
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

        $newStep = $this->Recipes->Steps->newEntity();
        $recipe = $this->Recipes->get($id, [
            'contain' => ['Users', 'Ingredients', 'Steps']
        ]);

        $this->set(compact('recipe', 'newStep'));
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newStep = $this->Recipes->Steps->newEntity();
        $recipe = $this->Recipes->newEntity();
        if ($this->request->is('post')) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->getData());
            if ($this->Recipes->save($recipe)) {
                $this->Flash->success(__('The recipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
        }
        $users = $this->Recipes->Users->find('list', ['limit' => 200]);
        $ingredients = $this->Recipes->Ingredients->find('list', ['limit' => 200]);
        $this->set(compact('recipe', 'users', 'ingredients'));
        $this->set('_serialize', ['recipe']);
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
        $recipe = $this->Recipes->get($id, [
            'contain' => ['Ingredients']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->getData());
            if ($this->Recipes->save($recipe)) {
                $this->Flash->success(__('The recipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipe could not be saved. Please, try again.'));
        }
        $users = $this->Recipes->Users->find('list', ['limit' => 200]);
        $ingredients = $this->Recipes->Ingredients->find('list', ['limit' => 200]);
        $this->set(compact('recipe', 'users', 'ingredients'));
        $this->set('_serialize', ['recipe']);
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
}
