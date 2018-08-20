<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proceedings Controller
 *
 * @property \App\Model\Table\ProceedingsTable $Proceedings
 *
 * @method \App\Model\Entity\Proceedings[] paginate($object = null, array $settings = [])
 */
class ProceedingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $proceedings = $this->paginate($this->Proceedings);

        $this->set(compact('proceedings'));
        $this->set('_serialize', ['proceedings']);
    }

    /**
     * View method
     *
     * @param string|null $id Proceedings id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proceedings = $this->Proceedings->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('proceedings', $proceedings);
        $this->set('_serialize', ['proceedings']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proceedings = $this->Proceedings->newEntity();
        if ($this->request->is('post')) {
            $proceedings = $this->Proceedings->patchEntity($proceedings, $this->request->getData());
            if ($this->Proceedings->save($proceedings)) {
                $this->Flash->success(__('The proceedings has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceedings could not be saved. Please, try again.'));
        }
        $users = $this->Proceedings->Users->find('list', ['limit' => 200]);
        $this->set(compact('proceedings', 'users'));
        $this->set('_serialize', ['proceedings']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceedings id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proceedings = $this->Proceedings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proceedings = $this->Proceedings->patchEntity($proceedings, $this->request->getData());
            if ($this->Proceedings->save($proceedings)) {
                $this->Flash->success(__('The proceedings has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceedings could not be saved. Please, try again.'));
        }
        $users = $this->Proceedings->Users->find('list', ['limit' => 200]);
        $this->set(compact('proceedings', 'users'));
        $this->set('_serialize', ['proceedings']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceedings id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proceedings = $this->Proceedings->get($id);
        if ($this->Proceedings->delete($proceedings)) {
            $this->Flash->success(__('The proceedings has been deleted.'));
        } else {
            $this->Flash->error(__('The proceedings could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
