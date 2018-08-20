<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Logs', 'Orders', 'Proceedings', 'Queries', 'Tickets', 'Vehicles']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Login method
     */
    public function login()
    {
        if ($this->Auth->user()) {
			return $this->redirect('/pages/resume');
		}
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if($user) {
				if ($user['type'] == 'admin') {
					$this->Auth->setUser($user);
					return $this->redirect($this->Auth->redirectUrl());
				} else {
					$this->Flash->error('Apenas administradores possuem permissão para acessar o sistema.', [
						'params' => [
							'title' => 'Login'
						]
					]);
				}
            } else {
                $this->Flash->error('E-mail ou senha inválidos. Por favor, verifique.', [
                    'params' => [
                        'title' => 'Login'
                    ]
                ]);
			}
		}
    }

    /**
     * Logout method
     */
    public function logout()
	{
        $this->Flash->success('Logout efetuado com sucesso, volte sempre!', [
            'params' => [
                'title' => 'Logout'
            ]
        ]);
		return $this->redirect($this->Auth->logout());
	}

    /**
     * Edit account
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function account($id = null)
    {
        if ($this->Auth->user('id') != $id) {
            $this->redirect(['controller' => 'Users', 'action' => 'account', $this->Auth->user('id')]);
			return;
        }
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O usuário foi salvo com sucesso.'));
                return $this->redirect(['action' => 'account']);
            }
            $this->Flash->error(__('Não foi possível salvar o usuário. Por favor, tente novamente.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Clients method
     */
    public function clients()
    {
        $query = $this->Users->find()->where(['type' => 'user']);
        $users = $this->paginate($query);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * Fiscal method
     */
    public function fiscal()
    {
        $query = $this->Users->find()->where(['type' => 'fiscal']);
        $users = $this->paginate($query);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * Administrators method
     */
    public function administrators()
    {
        $query = $this->Users->find()->where(['type' => 'admin']);
        $users = $this->paginate($query);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

}
