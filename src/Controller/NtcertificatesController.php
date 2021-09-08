<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ntcertificates Controller
 *
 * @property \App\Model\Table\NtcertificatesTable $Ntcertificates
 * @method \App\Model\Entity\Ntcertificate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NtcertificatesController extends AppController
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
        $ntcertificates = $this->paginate($this->Ntcertificates);

        $this->set(compact('ntcertificates'));
    }

    /**
     * View method
     *
     * @param string|null $id Ntcertificate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ntcertificate = $this->Ntcertificates->get($id, [
            'contain' => ['Projects', 'Designstandards'],
        ]);

        $this->set(compact('ntcertificate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ntcertificate = $this->Ntcertificates->newEmptyEntity();
        if ($this->request->is('post')) {
            $ntcertificate = $this->Ntcertificates->patchEntity($ntcertificate, $this->request->getData());
            if ($this->Ntcertificates->save($ntcertificate)) {
                $this->Flash->success(__('The ntcertificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ntcertificate could not be saved. Please, try again.'));
        }
        $projects = $this->Ntcertificates->Projects->find('list', ['limit' => 200]);
        $designstandards = $this->Ntcertificates->Designstandards->find('list', ['limit' => 200]);
        $this->set(compact('ntcertificate', 'projects', 'designstandards'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ntcertificate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ntcertificate = $this->Ntcertificates->get($id, [
            'contain' => ['Designstandards'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ntcertificate = $this->Ntcertificates->patchEntity($ntcertificate, $this->request->getData());
            if ($this->Ntcertificates->save($ntcertificate)) {
                $this->Flash->success(__('The ntcertificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ntcertificate could not be saved. Please, try again.'));
        }
        $projects = $this->Ntcertificates->Projects->find('list', ['limit' => 200]);
        $designstandards = $this->Ntcertificates->Designstandards->find('list', ['limit' => 200]);
        $this->set(compact('ntcertificate', 'projects', 'designstandards'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ntcertificate id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ntcertificate = $this->Ntcertificates->get($id);
        if ($this->Ntcertificates->delete($ntcertificate)) {
            $this->Flash->success(__('The ntcertificate has been deleted.'));
        } else {
            $this->Flash->error(__('The ntcertificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


    }

    public function ntcertificatesReportPreview($id = null)
    {
        $ntcertificate = $this->Ntcertificates->get($id, [
            'contain' => ['Projects', 'Designstandards'],
        ]);

        $designbasis = $this->Ntcertificates->find('all');
        $designbasis->join(['table'=>'Designstandards_Ntcertificates', 'type'=>'INNER', 'conditions'=>'Ntcertificates.id = Designstandards_Ntcertificates.Ntcertificate_id']);
        $designbasis->join(['table'=>'Designstandards', 'type'=>'INNER', 'conditions'=>'Designstandards.id = Designstandards_Ntcertificates.designstandard_id']);
        $designbasis->select(['Designstandards.id','Designstandards.designdesc','Designstandards.designcode']);
        $designbasis->where(['Ntcertificates.id = '=>$id]);

        $this->set(compact('ntcertificate'));
        $this->set(compact('designbasis'));
    }
}
