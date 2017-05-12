<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RecipesVersions Controller
 *
 * @property \App\Model\Table\RecipesVersionsTable $RecipesVersions
 */
class RecipesVersionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recipes', 'Versions']
        ];
        $recipesVersions = $this->paginate($this->RecipesVersions);

        $this->set(compact('recipesVersions'));
        $this->set('_serialize', ['recipesVersions']);
    }

    /**
     * View method
     *
     * @param string|null $id Recipes Version id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipesVersion = $this->RecipesVersions->get($id, [
            'contain' => ['Recipes', 'Versions']
        ]);

        $this->set('recipesVersion', $recipesVersion);
        $this->set('_serialize', ['recipesVersion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipesVersion = $this->RecipesVersions->newEntity();
        if ($this->request->is('post')) {
            $recipesVersion = $this->RecipesVersions->patchEntity($recipesVersion, $this->request->getData());
            if ($this->RecipesVersions->save($recipesVersion)) {
                $this->Flash->success(__('The recipes version has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipes version could not be saved. Please, try again.'));
        }
        $recipes = $this->RecipesVersions->Recipes->find('list', ['limit' => 200]);
        $versions = $this->RecipesVersions->Versions->find('list', ['limit' => 200]);
        $this->set(compact('recipesVersion', 'recipes', 'versions'));
        $this->set('_serialize', ['recipesVersion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipes Version id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipesVersion = $this->RecipesVersions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipesVersion = $this->RecipesVersions->patchEntity($recipesVersion, $this->request->getData());
            if ($this->RecipesVersions->save($recipesVersion)) {
                $this->Flash->success(__('The recipes version has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipes version could not be saved. Please, try again.'));
        }
        $recipes = $this->RecipesVersions->Recipes->find('list', ['limit' => 200]);
        $versions = $this->RecipesVersions->Versions->find('list', ['limit' => 200]);
        $this->set(compact('recipesVersion', 'recipes', 'versions'));
        $this->set('_serialize', ['recipesVersion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipes Version id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipesVersion = $this->RecipesVersions->get($id);
        if ($this->RecipesVersions->delete($recipesVersion)) {
            $this->Flash->success(__('The recipes version has been deleted.'));
        } else {
            $this->Flash->error(__('The recipes version could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
