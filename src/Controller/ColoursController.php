<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colours Controller
 *
 * @property \App\Model\Table\ColoursTable $Colours
 */
class ColoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $colours = $this->paginate($this->Colours);

        $this->set(compact('colours'));
        $this->set('_serialize', ['colours']);
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
        $colour = $this->Colours->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('colour', $colour);
        $this->set('_serialize', ['colour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colour = $this->Colours->newEntity();
        if ($this->request->is('post')) {
            $colour = $this->Colours->patchEntity($colour, $this->request->getData());
            if ($this->Colours->save($colour)) {
                $this->Flash->success(__('The colour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colour could not be saved. Please, try again.'));
        }
        $this->set(compact('colour'));
        $this->set('_serialize', ['colour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Colour id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colour = $this->Colours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colour = $this->Colours->patchEntity($colour, $this->request->getData());
            if ($this->Colours->save($colour)) {
                $this->Flash->success(__('The colour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colour could not be saved. Please, try again.'));
        }
        $this->set(compact('colour'));
        $this->set('_serialize', ['colour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Colour id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colour = $this->Colours->get($id);
        if ($this->Colours->delete($colour)) {
            $this->Flash->success(__('The colour has been deleted.'));
        } else {
            $this->Flash->error(__('The colour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
