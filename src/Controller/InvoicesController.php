<?php
declare(strict_types=1);

namespace App\Controller;

use http\Client;

/**
 * Invoices Controller
 *
 * @property \App\Model\Table\InvoicesTable $Invoices
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvoicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Feeproposals'],
        ];
        $invoices = $this->paginate($this->Invoices);

        $this->set(compact('invoices'));
    }

    /**
     * View method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invoice = $this->Invoices->get($id, [
            'contain' => ['Projects', 'Feeproposals'],
        ]);

        $this->set(compact('invoice'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invoice = $this->Invoices->newEmptyEntity();
        if ($this->request->is('post')) {
            $invoice = $this->Invoices->patchEntity($invoice, $this->request->getData());
            if ($this->Invoices->save($invoice)) {
                $this->Flash->success(__('The invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice could not be saved. Please, try again.'));
        }
        $projects = $this->Invoices->Projects->find('list', ['limit' => 200]);
        $feeproposals = $this->Invoices->Feeproposals->find('list', ['limit' => 200]);
        $this->set(compact('invoice', 'projects', 'feeproposals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invoice = $this->Invoices->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoice = $this->Invoices->patchEntity($invoice, $this->request->getData());
            if ($this->Invoices->save($invoice)) {
                $this->Flash->success(__('The invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice could not be saved. Please, try again.'));
        }
        $projects = $this->Invoices->Projects->find('list', ['limit' => 200]);
        $feeproposals = $this->Invoices->Feeproposals->find('list', ['limit' => 200]);
        $this->set(compact('invoice', 'projects', 'feeproposals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invoice = $this->Invoices->get($id);
        if ($this->Invoices->delete($invoice)) {
            $this->Flash->success(__('The invoice has been deleted.'));
        } else {
            $this->Flash->error(__('The invoice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Generate project PDF file method
     *
     */
    public function invoiceReport($id = null)
    {
        $this->viewBuilder()->enableAutoLayout(false);
        $invoice = $this->Invoices->get($id, [
            'contain' => ['Projects', 'Feeproposals']]);
        $this->viewBuilder()->setClassName('CakePdf.Pdf');
        $this->viewBuilder()->setOption(
            'pdfConfig',
            [
                'orientation' => 'portrait',
                'download' => true, // This can be omitted if "filename" is specified.
                'filename' => 'Invoice_' . $id . '.pdf' //// This can be omitted if you want file name based on URL.
            ]
        );

        $clientname = $this->Invoices->find('all');
        $clientname->join(['table'=>'Projects', 'type'=>'INNER', 'conditions'=>'Projects.id = project_id']);
        $clientname->select(['Clients.firstname', 'Clients.lastname', 'Clients.phonenumber']);
        $clientname->join(['table'=>'Clients', 'type'=>'INNER', 'conditions'=>'Clients.id=client_id']);
        $clientname->where(['Invoices.id = '=>$id]);

        $company = $this->Invoices->find('all');
        $company->join(['table'=>'Projects', 'type'=>'INNER', 'conditions'=>'Projects.id = project_id']);
        $company->join(['table'=>'Clients', 'type'=>'INNER', 'conditions'=>'Clients.id=client_id']);
        $company->join(['table'=>'Companys', 'type'=>'INNER', 'conditions'=>'Companys.id=company_id']);
        $company->select(['Companys.companyname','Companys.streetname', 'Companys.suburb', 'Companys.state', 'Companys.postcode']);
        $company->where(['Invoices.id = '=>$id]);

        $this->set('invoice', $invoice);
        $this->set(compact('clientname'));
        $this->set(compact('company'));
    }


    /**
     * Invoice_report_preview method
     *
     * @param string|null $id Invoice id.
     */
    public function invoiceReportPreview($id = null)
    {
        $invoice = $this->Invoices->get($id, [
            'contain' => ['Projects', 'Feeproposals'],
        ]);

        $clientname = $this->Invoices->find('all');
        $clientname->join(['table'=>'Projects', 'type'=>'INNER', 'conditions'=>'Projects.id = project_id']);
        $clientname->select(['Clients.firstname', 'Clients.lastname', 'Clients.phonenumber']);
        $clientname->join(['table'=>'Clients', 'type'=>'INNER', 'conditions'=>'Clients.id=client_id']);
        $clientname->where(['Invoices.id = '=>$id]);

        $company = $this->Invoices->find('all');
        $company->join(['table'=>'Projects', 'type'=>'INNER', 'conditions'=>'Projects.id = project_id']);
        $company->join(['table'=>'Clients', 'type'=>'INNER', 'conditions'=>'Clients.id=client_id']);
        $company->join(['table'=>'Companys', 'type'=>'INNER', 'conditions'=>'Companys.id=company_id']);
        $company->select(['Companys.companyname','Companys.streetname', 'Companys.suburb', 'Companys.state', 'Companys.postcode']);
        $company->where(['Invoices.id = '=>$id]);

        $this->set(compact('invoice'));
        $this->set(compact('clientname'));
        $this->set(compact('company'));

    }
}
