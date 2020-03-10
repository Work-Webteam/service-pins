<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RegistrationPeriods Controller
 *
 * @property \App\Model\Table\RegistrationPeriodsTable $RegistrationPeriods
 *
 * @method \App\Model\Entity\RegistrationPeriod[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrationPeriodsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $registrationPeriods = $this->paginate($this->RegistrationPeriods);

        $this->set(compact('registrationPeriods'));
    }

    /**
     * View method
     *
     * @param string|null $id Registration Period id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrationPeriod = $this->RegistrationPeriods->get($id, [
            'contain' => [],
        ]);

        $this->set('registrationPeriod', $registrationPeriod);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrationPeriod = $this->RegistrationPeriods->newEmptyEntity();
        if ($this->request->is('post')) {
            $registrationPeriod = $this->RegistrationPeriods->patchEntity($registrationPeriod, $this->request->getData());
            if ($this->RegistrationPeriods->save($registrationPeriod)) {
                $this->Flash->success(__('The registration period has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration period could not be saved. Please, try again.'));
        }
        $this->set(compact('registrationPeriod'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registration Period id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrationPeriod = $this->RegistrationPeriods->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrationPeriod = $this->RegistrationPeriods->patchEntity($registrationPeriod, $this->request->getData());
            if ($this->RegistrationPeriods->save($registrationPeriod)) {
                $this->Flash->success(__('The registration period has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration period could not be saved. Please, try again.'));
        }
        $this->set(compact('registrationPeriod'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registration Period id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrationPeriod = $this->RegistrationPeriods->get($id);
        if ($this->RegistrationPeriods->delete($registrationPeriod)) {
            $this->Flash->success(__('The registration period has been deleted.'));
        } else {
            $this->Flash->error(__('The registration period could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
