<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Associates Controller
 *
 * @property \App\Model\Table\AssociatesTable $Associates
 * @method \App\Model\Entity\Associate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssociatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companys'],
            'sort'=>'id',
            'direction'=>'desc'
        ];
        $associates = $this->paginate($this->Associates);

        $this->set(compact('associates'));
    }

    /**
     * View method
     *
     * @param string|null $id Associate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $associate = $this->Associates->get($id, [
            'contain' => ['Companys', 'Projects'],
            'sort'=>'id',
            'direction'=>'desc'
        ]);

        $this->set(compact('associate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $associate = $this->Associates->newEmptyEntity();
        if ($this->request->is('post')) {
            $associate = $this->Associates->patchEntity($associate, $this->request->getData());
            if ($this->Associates->save($associate)) {
                $this->Flash->success(__('The associate has been saved.'));

                $session = $this->request->getSession();

                if($session->read('previous_url') !== null && $session->read('previous_url') =='projects.add'){
                    return $this->redirect(['action'=>'../projects/add']);
                } elseif($session->read('previous_url') !== null && $session->read('projects_id') !== null && $session->read('previous_url') =='projects.edit'){
                    return $this->redirect(['action'=>'../projects/edit'.'/'.$session->read('projects_id')]);
                }
                else {
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The associate could not be saved. Please, try again.'));
        }
        $companys = $this->Associates->Companys->find('list', ['limit' => 200]);
        $projects = $this->Associates->Projects->find('list', ['limit' => 200]);
        $this->set(compact('associate', 'companys', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Associate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $associate = $this->Associates->get($id, [
            'contain' => ['Projects'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $associate = $this->Associates->patchEntity($associate, $this->request->getData());
            if ($this->Associates->save($associate)) {
                $this->Flash->success(__('The associate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The associate could not be saved. Please, try again.'));
        }
        $companys = $this->Associates->Companys->find('list', ['limit' => 200]);
        $projects = $this->Associates->Projects->find('list', ['limit' => 200]);
        $this->set(compact('associate', 'companys', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Associate id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $associate = $this->Associates->get($id);
        if ($this->Associates->delete($associate)) {
            $this->Flash->success(__('The associate has been deleted.'));
        } else {
            $this->Flash->error(__('The associate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
