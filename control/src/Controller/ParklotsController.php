<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parklots Controller
 *
 * @property \App\Model\Table\ParklotsTable $Parklots
 *
 * @method \App\Model\Entity\Parklot[] paginate($object = null, array $settings = [])
 */
class ParklotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $parklots = $this->paginate($this->Parklots);

        $this->set(compact('parklots'));
        $this->set('_serialize', ['parklots']);
    }

    /**
     * View method
     *
     * @param string|null $id Parklot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parklot = $this->Parklots->get($id, [
            'contain' => ['Logs', 'Tickets']
        ]);

        $this->set('parklot', $parklot);
        $this->set('_serialize', ['parklot']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parklot = $this->Parklots->newEntity();
        if ($this->request->is('post')) {
            $parklot = $this->Parklots->patchEntity($parklot, $this->request->getData());
            if ($this->Parklots->save($parklot)) {
                $this->Flash->success(__('The parklot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parklot could not be saved. Please, try again.'));
        }
        $this->set(compact('parklot'));
        $this->set('_serialize', ['parklot']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Parklot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parklot = $this->Parklots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parklot = $this->Parklots->patchEntity($parklot, $this->request->getData());
            if ($this->Parklots->save($parklot)) {
                $this->Flash->success(__('The parklot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parklot could not be saved. Please, try again.'));
        }
        $this->set(compact('parklot'));
        $this->set('_serialize', ['parklot']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Parklot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parklot = $this->Parklots->get($id);
        if ($this->Parklots->delete($parklot)) {
            $this->Flash->success(__('The parklot has been deleted.'));
        } else {
            $this->Flash->error(__('The parklot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
