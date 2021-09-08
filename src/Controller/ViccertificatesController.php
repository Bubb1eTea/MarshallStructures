<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Viccertificates Controller
 *
 * @property \App\Model\Table\ViccertificatesTable $Viccertificates
 * @method \App\Model\Entity\Viccertificate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ViccertificatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Companys'],
        ];
        $viccertificates = $this->paginate($this->Viccertificates);

        $this->set(compact('viccertificates'));
    }

    /**
     * View method
     *
     * @param string|null $id Viccertificate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $viccertificate = $this->Viccertificates->get($id, [
            'contain' => ['Projects', 'Companys', 'Designstandards'],
        ]);

        $this->set(compact('viccertificate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $viccertificate = $this->Viccertificates->newEmptyEntity();
        if ($this->request->is('post')) {
            $viccertificate = $this->Viccertificates->patchEntity($viccertificate, $this->request->getData());
            if ($this->Viccertificates->save($viccertificate)) {
                $this->Flash->success(__('The viccertificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The viccertificate could not be saved. Please, try again.'));
        }
        $projects = $this->Viccertificates->Projects->find('list', ['limit' => 200]);
        $companys = $this->Viccertificates->Companys->find('list', ['limit' => 200]);
        $designstandards = $this->Viccertificates->Designstandards->find('list', ['limit' => 200]);
        $this->set(compact('viccertificate', 'projects', 'companys',  'designstandards'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Viccertificate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $viccertificate = $this->Viccertificates->get($id, [
            'contain' => ['Designstandards'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $viccertificate = $this->Viccertificates->patchEntity($viccertificate, $this->request->getData());
            if ($this->Viccertificates->save($viccertificate)) {
                $this->Flash->success(__('The viccertificate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The viccertificate could not be saved. Please, try again.'));
        }
        $projects = $this->Viccertificates->Projects->find('list', ['limit' => 200]);
        $companys = $this->Viccertificates->Companys->find('list', ['limit' => 200]);
        $designstandards = $this->Viccertificates->Designstandards->find('list', ['limit' => 200]);
        $this->set(compact('viccertificate', 'projects', 'companys',  'designstandards'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Viccertificate id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $viccertificate = $this->Viccertificates->get($id);
        if ($this->Viccertificates->delete($viccertificate)) {
            $this->Flash->success(__('The viccertificate has been deleted.'));
        } else {
            $this->Flash->error(__('The viccertificate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function viccertReportPreview($id=null)
    {
        $viccertificate = $this->Viccertificates->get($id, [
            'contain' => ['Projects', 'Companys', 'Designstandards'],
        ]);

        $clientname = $this->Viccertificates->find('all');
        $clientname->join(['table'=>'Projects', 'type'=>'INNER', 'conditions'=>'Projects.id = project_id']);
        $clientname->select(['Clients.firstname', 'Clients.lastname', 'Clients.phonenumber']);
        $clientname->join(['table'=>'Clients', 'type'=>'INNER', 'conditions'=>'Clients.id=client_id']);
        $clientname->where(['Viccertificates.id = '=>$id]);

        $company = $this->Viccertificates->find('all');
        $company->join(['table'=>'Projects', 'type'=>'INNER', 'conditions'=>'Projects.id = project_id']);
        $company->join(['table'=>'Clients', 'type'=>'INNER', 'conditions'=>'Clients.id=client_id']);
        $company->join(['table'=>'Companys', 'type'=>'INNER', 'conditions'=>'Companys.id=company_id']);
        $company->select(['Companys.companyname','Companys.streetname', 'Companys.suburb', 'Companys.state', 'Companys.postcode']);
        $company->where(['Viccertificates.id = '=>$id]);

        $this->set(compact('viccertificate'));
        $this->set(compact('clientname'));
        $this->set(compact('company'));
    }
}
