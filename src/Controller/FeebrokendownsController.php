<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Feebrokendowns Controller
 *
 * @property \App\Model\Table\FeebrokendownsTable $Feebrokendowns
 * @method \App\Model\Entity\Feebrokendown[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeebrokendownsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $feebrokendowns = $this->paginate($this->Feebrokendowns);

        $this->set(compact('feebrokendowns'));
    }

    /**
     * View method
     *
     * @param string|null $id Feebrokendown id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feebrokendown = $this->Feebrokendowns->get($id, [
            'contain' => ['Feeproposals'],
        ]);

        $this->set(compact('feebrokendown'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feebrokendown = $this->Feebrokendowns->newEmptyEntity();
        if ($this->request->is('post')) {
            $feebrokendown = $this->Feebrokendowns->patchEntity($feebrokendown, $this->request->getData());
            if ($this->Feebrokendowns->save($feebrokendown)) {
                $this->Flash->success(__('The feebrokendown has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feebrokendown could not be saved. Please, try again.'));
        }
        $this->set(compact('feebrokendown'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Feebrokendown id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feebrokendown = $this->Feebrokendowns->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feebrokendown = $this->Feebrokendowns->patchEntity($feebrokendown, $this->request->getData());
            if ($this->Feebrokendowns->save($feebrokendown)) {
                $this->Flash->success(__('The feebrokendown has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feebrokendown could not be saved. Please, try again.'));
        }
        $this->set(compact('feebrokendown'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Feebrokendown id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feebrokendown = $this->Feebrokendowns->get($id);
        if ($this->Feebrokendowns->delete($feebrokendown)) {
            $this->Flash->success(__('The feebrokendown has been deleted.'));
        } else {
            $this->Flash->error(__('The feebrokendown could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
