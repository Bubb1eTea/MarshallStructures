<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Scopeofservices Controller
 *
 * @property \App\Model\Table\ScopeofservicesTable $Scopeofservices
 * @method \App\Model\Entity\Scopeofservice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ScopeofservicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $scopeofservices = $this->paginate($this->Scopeofservices);

        $this->set(compact('scopeofservices'));
    }

    /**
     * View method
     *
     * @param string|null $id Scopeofservice id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scopeofservice = $this->Scopeofservices->get($id, [
            'contain' => ['Feeproposals'],
        ]);

        $this->set(compact('scopeofservice'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scopeofservice = $this->Scopeofservices->newEmptyEntity();
        if ($this->request->is('post')) {
            $scopeofservice = $this->Scopeofservices->patchEntity($scopeofservice, $this->request->getData());
            if ($this->Scopeofservices->save($scopeofservice)) {
                $this->Flash->success(__('The scopeofservice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scopeofservice could not be saved. Please, try again.'));
        }
        $this->set(compact('scopeofservice'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Scopeofservice id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scopeofservice = $this->Scopeofservices->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scopeofservice = $this->Scopeofservices->patchEntity($scopeofservice, $this->request->getData());
            if ($this->Scopeofservices->save($scopeofservice)) {
                $this->Flash->success(__('The scopeofservice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scopeofservice could not be saved. Please, try again.'));
        }
        $this->set(compact('scopeofservice'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Scopeofservice id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scopeofservice = $this->Scopeofservices->get($id);
        if ($this->Scopeofservices->delete($scopeofservice)) {
            $this->Flash->success(__('The scopeofservice has been deleted.'));
        } else {
            $this->Flash->error(__('The scopeofservice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
