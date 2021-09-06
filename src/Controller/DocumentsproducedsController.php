<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documentsproduceds Controller
 *
 * @property \App\Model\Table\DocumentsproducedsTable $Documentsproduceds
 * @method \App\Model\Entity\Documentsproduced[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsproducedsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $documentsproduceds = $this->paginate($this->Documentsproduceds);

        $this->set(compact('documentsproduceds'));
    }

    /**
     * View method
     *
     * @param string|null $id Documentsproduced id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentsproduced = $this->Documentsproduceds->get($id, [
            'contain' => ['Viccertificates'],
        ]);

        $this->set(compact('documentsproduced'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentsproduced = $this->Documentsproduceds->newEmptyEntity();
        if ($this->request->is('post')) {
            $documentsproduced = $this->Documentsproduceds->patchEntity($documentsproduced, $this->request->getData());
            if ($this->Documentsproduceds->save($documentsproduced)) {
                $this->Flash->success(__('The documentsproduced has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentsproduced could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsproduced'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documentsproduced id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentsproduced = $this->Documentsproduceds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentsproduced = $this->Documentsproduceds->patchEntity($documentsproduced, $this->request->getData());
            if ($this->Documentsproduceds->save($documentsproduced)) {
                $this->Flash->success(__('The documentsproduced has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documentsproduced could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsproduced'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documentsproduced id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentsproduced = $this->Documentsproduceds->get($id);
        if ($this->Documentsproduceds->delete($documentsproduced)) {
            $this->Flash->success(__('The documentsproduced has been deleted.'));
        } else {
            $this->Flash->error(__('The documentsproduced could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
