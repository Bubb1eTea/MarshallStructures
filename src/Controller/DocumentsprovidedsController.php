<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documentsprovideds Controller
 *
 * @property \App\Model\Table\DocumentsprovidedsTable $Documentsprovideds
 * @method \App\Model\Entity\Documentsprovided[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsprovidedsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $documentsprovideds = $this->paginate($this->Documentsprovideds);

        $this->set(compact('documentsprovideds'));
    }

    /**
     * View method
     *
     * @param string|null $id Documentsprovided id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentsprovided = $this->Documentsprovideds->get($id, [
            'contain' => ['Feeproposals'],
        ]);

        $this->set(compact('documentsprovided'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentsprovided = $this->Documentsprovideds->newEmptyEntity();
        if ($this->request->is('post')) {
            $documentsprovided = $this->Documentsprovideds->patchEntity($documentsprovided, $this->request->getData());
            if ($this->Documentsprovideds->save($documentsprovided)) {
                $this->Flash->success(__('The documentsprovided has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentsprovided could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsprovided'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documentsprovided id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentsprovided = $this->Documentsprovideds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentsprovided = $this->Documentsprovideds->patchEntity($documentsprovided, $this->request->getData());
            if ($this->Documentsprovideds->save($documentsprovided)) {
                $this->Flash->success(__('The documentsprovided has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentsprovided could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsprovided'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documentsprovided id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentsprovided = $this->Documentsprovideds->get($id);
        if ($this->Documentsprovideds->delete($documentsprovided)) {
            $this->Flash->success(__('The documentsprovided has been deleted.'));
        } else {
            $this->Flash->error(__('The documentsprovided could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
