<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Associatecompanys Controller
 *
 * @property \App\Model\Table\AssociatecompanysTable $Associatecompanys
 * @method \App\Model\Entity\Associatecompany[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssociatecompanysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $associatecompanys = $this->paginate($this->Associatecompanys);

        $this->set(compact('associatecompanys'));
    }

    /**
     * View method
     *
     * @param string|null $id Associatecompany id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $associatecompany = $this->Associatecompanys->get($id, [
            'contain' => ['Associates'],
        ]);

        $this->set(compact('associatecompany'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $associatecompany = $this->Associatecompanys->newEmptyEntity();
        if ($this->request->is('post')) {
            $associatecompany = $this->Associatecompanys->patchEntity($associatecompany, $this->request->getData());
            if ($this->Associatecompanys->save($associatecompany)) {
                $this->Flash->success(__('The associatecompany has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The associatecompany could not be saved. Please, try again.'));
        }
        $this->set(compact('associatecompany'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Associatecompany id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $associatecompany = $this->Associatecompanys->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $associatecompany = $this->Associatecompanys->patchEntity($associatecompany, $this->request->getData());
            if ($this->Associatecompanys->save($associatecompany)) {
                $this->Flash->success(__('The associatecompany has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The associatecompany could not be saved. Please, try again.'));
        }
        $this->set(compact('associatecompany'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Associatecompany id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $associatecompany = $this->Associatecompanys->get($id);
        if ($this->Associatecompanys->delete($associatecompany)) {
            $this->Flash->success(__('The associatecompany has been deleted.'));
        } else {
            $this->Flash->error(__('The associatecompany could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
