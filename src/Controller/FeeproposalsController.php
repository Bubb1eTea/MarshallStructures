<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Feeproposals Controller
 *
 * @property \App\Model\Table\FeeproposalsTable $Feeproposals
 * @method \App\Model\Entity\Feeproposal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeeproposalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects'],
        ];
        $feeproposals = $this->paginate($this->Feeproposals);

        $this->set(compact('feeproposals'));
    }

    /**
     * View method
     *
     * @param string|null $id Feeproposal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feeproposal = $this->Feeproposals->get($id, [
            'contain' => ['Projects', 'Invoices'],
        ]);

        $this->set(compact('feeproposal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feeproposal = $this->Feeproposals->newEmptyEntity();
        if ($this->request->is('post')) {
            $feeproposal = $this->Feeproposals->patchEntity($feeproposal, $this->request->getData());
            if ($this->Feeproposals->save($feeproposal)) {
                $this->Flash->success(__('The feeproposal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feeproposal could not be saved. Please, try again.'));
        }
        $projects = $this->Feeproposals->Projects->find('list', ['limit' => 200]);
        $this->set(compact('feeproposal', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Feeproposal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feeproposal = $this->Feeproposals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feeproposal = $this->Feeproposals->patchEntity($feeproposal, $this->request->getData());
            if ($this->Feeproposals->save($feeproposal)) {
                $this->Flash->success(__('The feeproposal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feeproposal could not be saved. Please, try again.'));
        }
        $projects = $this->Feeproposals->Projects->find('list', ['limit' => 200]);
        $this->set(compact('feeproposal', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Feeproposal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feeproposal = $this->Feeproposals->get($id);
        if ($this->Feeproposals->delete($feeproposal)) {
            $this->Flash->success(__('The feeproposal has been deleted.'));
        } else {
            $this->Flash->error(__('The feeproposal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function feeproposalReportPreview()
    {

    }
}
