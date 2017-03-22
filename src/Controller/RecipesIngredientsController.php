<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RecipesIngredients Controller
 *
 * @property \App\Model\Table\RecipesIngredientsTable $RecipesIngredients
 */
class RecipesIngredientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recipes', 'Ingredients']
        ];
        $recipesIngredients = $this->paginate($this->RecipesIngredients);

        $this->set(compact('recipesIngredients'));
        $this->set('_serialize', ['recipesIngredients']);
    }

    /**
     * View method
     *
     * @param string|null $id Recipes Ingredient id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipesIngredient = $this->RecipesIngredients->get($id, [
            'contain' => ['Recipes', 'Ingredients']
        ]);

        $this->set('recipesIngredient', $recipesIngredient);
        $this->set('_serialize', ['recipesIngredient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipesIngredient = $this->RecipesIngredients->newEntity();
        if ($this->request->is('post')) {
            $recipesIngredient = $this->RecipesIngredients->patchEntity($recipesIngredient, $this->request->getData());
            if ($this->RecipesIngredients->save($recipesIngredient)) {
                $this->Flash->success(__('The recipes ingredient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipes ingredient could not be saved. Please, try again.'));
        }
        $recipes = $this->RecipesIngredients->Recipes->find('list', ['limit' => 200]);
        $ingredients = $this->RecipesIngredients->Ingredients->find('list', ['limit' => 200]);
        $this->set(compact('recipesIngredient', 'recipes', 'ingredients'));
        $this->set('_serialize', ['recipesIngredient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipes Ingredient id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipesIngredient = $this->RecipesIngredients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipesIngredient = $this->RecipesIngredients->patchEntity($recipesIngredient, $this->request->getData());
            if ($this->RecipesIngredients->save($recipesIngredient)) {
                $this->Flash->success(__('The recipes ingredient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipes ingredient could not be saved. Please, try again.'));
        }
        $recipes = $this->RecipesIngredients->Recipes->find('list', ['limit' => 200]);
        $ingredients = $this->RecipesIngredients->Ingredients->find('list', ['limit' => 200]);
        $this->set(compact('recipesIngredient', 'recipes', 'ingredients'));
        $this->set('_serialize', ['recipesIngredient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipes Ingredient id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipesIngredient = $this->RecipesIngredients->get($id);
        if ($this->RecipesIngredients->delete($recipesIngredient)) {
            $this->Flash->success(__('The recipes ingredient has been deleted.'));
        } else {
            $this->Flash->error(__('The recipes ingredient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
