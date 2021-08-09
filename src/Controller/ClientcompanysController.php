<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clientcompanys Controller
 *
 * @property \App\Model\Table\ClientcompanysTable $Clientcompanys
 * @method \App\Model\Entity\Clientcompany[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientcompanysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $clientcompanys = $this->paginate($this->Clientcompanys);

        $this->set(compact('clientcompanys'));
    }

    /**
     * View method
     *
     * @param string|null $id Clientcompany id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientcompany = $this->Clientcompanys->get($id, [
            'contain' => ['Clients'],
        ]);

        $this->set(compact('clientcompany'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientcompany = $this->Clientcompanys->newEmptyEntity();
        if ($this->request->is('post')) {
            $clientcompany = $this->Clientcompanys->patchEntity($clientcompany, $this->request->getData());
            if ($this->Clientcompanys->save($clientcompany)) {
                $this->Flash->success(__('The clientcompany has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientcompany could not be saved. Please, try again.'));
        }
        $this->set(compact('clientcompany'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientcompany id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientcompany = $this->Clientcompanys->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientcompany = $this->Clientcompanys->patchEntity($clientcompany, $this->request->getData());
            if ($this->Clientcompanys->save($clientcompany)) {
                $this->Flash->success(__('The clientcompany has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientcompany could not be saved. Please, try again.'));
        }
        $this->set(compact('clientcompany'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientcompany id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientcompany = $this->Clientcompanys->get($id);
        if ($this->Clientcompanys->delete($clientcompany)) {
            $this->Flash->success(__('The clientcompany has been deleted.'));
        } else {
            $this->Flash->error(__('The clientcompany could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
