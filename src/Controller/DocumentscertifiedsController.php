<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documentscertifieds Controller
 *
 * @property \App\Model\Table\DocumentscertifiedsTable $Documentscertifieds
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentscertifiedsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Viccertificates'],
        ];
        $documentscertifieds = $this->paginate($this->Documentscertifieds);

        $this->set(compact('documentscertifieds'));
    }

    /**
     * View method
     *
     * @param string|null $id Documentscertified id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentscertified = $this->Documentscertifieds->get($id, [
            'contain' => ['Viccertificates'],
        ]);

        $this->set(compact('documentscertified'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentscertified = $this->Documentscertifieds->newEmptyEntity();
        if ($this->request->is('post')) {
            $documentscertified = $this->Documentscertifieds->patchEntity($documentscertified, $this->request->getData());
            if ($this->Documentscertifieds->save($documentscertified)) {
                $this->Flash->success(__('The documentscertified has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentscertified could not be saved. Please, try again.'));
        }
        $viccertificates = $this->Documentscertifieds->Viccertificates->find('list', ['limit' => 200]);
        $this->set(compact('documentscertified', 'viccertificates'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documentscertified id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentscertified = $this->Documentscertifieds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentscertified = $this->Documentscertifieds->patchEntity($documentscertified, $this->request->getData());
            if ($this->Documentscertifieds->save($documentscertified)) {
                $this->Flash->success(__('The documentscertified has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentscertified could not be saved. Please, try again.'));
        }
        $viccertificates = $this->Documentscertifieds->Viccertificates->find('list', ['limit' => 200]);
        $this->set(compact('documentscertified', 'viccertificates'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documentscertified id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentscertified = $this->Documentscertifieds->get($id);
        if ($this->Documentscertifieds->delete($documentscertified)) {
            $this->Flash->success(__('The documentscertified has been deleted.'));
        } else {
            $this->Flash->error(__('The documentscertified could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
