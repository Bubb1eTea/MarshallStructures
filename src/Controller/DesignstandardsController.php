<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Designstandards Controller
 *
 * @property \App\Model\Table\DesignstandardsTable $Designstandards
 * @method \App\Model\Entity\Designstandard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DesignstandardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $designstandards = $this->paginate($this->Designstandards);

        $this->set(compact('designstandards'));
    }

    /**
     * View method
     *
     * @param string|null $id Designstandard id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $designstandard = $this->Designstandards->get($id, [
            'contain' => ['Ntcertificates'],
        ]);

        $this->set(compact('designstandard'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $designstandard = $this->Designstandards->newEmptyEntity();
        if ($this->request->is('post')) {
            $designstandard = $this->Designstandards->patchEntity($designstandard, $this->request->getData());
            if ($this->Designstandards->save($designstandard)) {
                $this->Flash->success(__('The designstandard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The designstandard could not be saved. Please, try again.'));
        }
        $ntcertificates = $this->Designstandards->Ntcertificates->find('list', ['limit' => 200]);
        $this->set(compact('designstandard', 'ntcertificates'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Designstandard id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $designstandard = $this->Designstandards->get($id, [
            'contain' => ['Ntcertificates'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $designstandard = $this->Designstandards->patchEntity($designstandard, $this->request->getData());
            if ($this->Designstandards->save($designstandard)) {
                $this->Flash->success(__('The designstandard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The designstandard could not be saved. Please, try again.'));
        }
        $ntcertificates = $this->Designstandards->Ntcertificates->find('list', ['limit' => 200]);
        $this->set(compact('designstandard', 'ntcertificates'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Designstandard id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $designstandard = $this->Designstandards->get($id);
        if ($this->Designstandards->delete($designstandard)) {
            $this->Flash->success(__('The designstandard has been deleted.'));
        } else {
            $this->Flash->error(__('The designstandard could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
