<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ministries Controller
 *
 * @property \App\Model\Table\MinistriesTable $Ministries
 *
 * @method \App\Model\Entity\Ministry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MinistriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ministries = $this->paginate($this->Ministries);

        $this->set(compact('ministries'));
    }

    /**
     * View method
     *
     * @param string|null $id Ministry id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ministry = $this->Ministries->get($id, [
            'contain' => ['Registrations', 'UserRoles'],
        ]);

        $this->set('ministry', $ministry);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ministry = $this->Ministries->newEmptyEntity();
        if ($this->request->is('post')) {
            $ministry = $this->Ministries->patchEntity($ministry, $this->request->getData());
            if ($this->Ministries->save($ministry)) {
                $this->Flash->success(__('The ministry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ministry could not be saved. Please, try again.'));
        }
        $this->set(compact('ministry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ministry id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ministry = $this->Ministries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ministry = $this->Ministries->patchEntity($ministry, $this->request->getData());
            if ($this->Ministries->save($ministry)) {
                $this->Flash->success(__('The ministry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ministry could not be saved. Please, try again.'));
        }
        $this->set(compact('ministry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ministry id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ministry = $this->Ministries->get($id);
        if ($this->Ministries->delete($ministry)) {
            $this->Flash->success(__('The ministry has been deleted.'));
        } else {
            $this->Flash->error(__('The ministry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
