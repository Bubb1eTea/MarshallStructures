<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Projects Controller
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients'],
            'sort'=>'id',
            'direction'=>'desc'
        ];
        $projects = $this->paginate($this->Projects);

        $key = $this->request->getQuery('key');

        if($key){
            $query = $this->Projects->find("all")
                ->where(['Or'=>['projectname like'=>'%'.$key.'%','streetname like'=>'%'.$key.'%','suburb like'=>'%'.$key.'%','postcode like'=>'%'.$key.'%','state like'=>'%'.$key.'%','msnumber'=>$key+0]]);
        }else{
            $query = $this->Projects;
        }

        $projects = $this->paginate($query);

        $this->set(compact('projects'));
    }

    /**
     * View method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['Clients', 'Associates', 'Feeproposals', 'Invoices'],
        ]);

        $this->set(compact('project'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $project = $this->Projects->newEmptyEntity();
        if ($this->request->is('post')) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                if(isset($_SESSION['previous_url'])&& $_SESSION['previous_url']=='associates.add'){
                    return $this->redirect(['action'=>'../associates/add']);
                } elseif(isset($_SESSION['previous_url'])&& $_SESSION['previous_url']=='feeproposals.add'){
                    return $this->redirect(['action'=>'../feeproposals/add']);
                } elseif(isset($_SESSION['previous_url'])&& $_SESSION['previous_url']=='invoices.add'){
                    return $this->redirect(['action'=>'../invoices/add']);
                } else {
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $clients = $this->Projects->Clients->find('list', ['limit' => 200]);
        $associates = $this->Projects->Associates->find('list', ['limit' => 200]);
        $this->set(compact('project', 'clients', 'associates'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['Associates'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $clients = $this->Projects->Clients->find('list', ['limit' => 200]);
        $associates = $this->Projects->Associates->find('list', ['limit' => 200]);
        $this->set(compact('project', 'clients', 'associates'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $project = $this->Projects->get($id);
        if ($this->Projects->delete($project)) {
            $this->Flash->success(__('The project has been deleted.'));
        } else {
            $this->Flash->error(__('The project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
