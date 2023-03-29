<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use EmailQueue\EmailQueue;
//use Cake\Mailer\Mailer;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login', 'register']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect after login success
            if ($result->getData()->role_id < 3) {
                $redirect = $this->request->getQuery('redirect', [
                    'prefix' => 'Admin',
                    'controller' => 'Users',
                    'action' => 'index',
                ]);
            } else {
                $redirect = $this->request->getQuery('redirect', [
                    'controller' => 'Pages',
                    //'action' => 'index',
                ]);
            }

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }

    public function register()
    {
        // Envío de correo con Mailer de CakePHP.
        //$mailer = new Mailer();
        //$mailer
        //->setEmailFormat('html')
        //->setTo('bob@example.com')
        //->setFrom('app@domain.com')
        //->viewBuilder()
        //->setTemplate('welcome')
        //->setLayout('fancy')
        //;
        //$mailer->deliver();

        /*
        // Test Email Queue.

        // Email options
        $options = [
            'subject' => 'Prueba',
            'format' => 'html',
            'from_name' => 'Tester Passed',
            'from_email' => 'test@test.com',
            'subject' => 'Testing email queue...',
            'template' => 'register',
            //'layout' => 'register',
        ];

        // Variables pasadas a la vista.
        $data = [
            'name' => 'Tester',
            'lastname' => 'Passed',
            'email' => 'test@test.com',
            'phone' => '1122223333'
        ];

        //EmailQueue::enqueue($to, $data, $options);
        EmailQueue::enqueue('test@mailtrap.com', $data, $options);
        */

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->role_id = 3;

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                // Email options
                $options = [
                    'subject' => 'Prueba',
                    'format' => 'html',
                    'from_name' => 'Tester Passed',
                    'from_email' => 'test@test.com',
                    'subject' => 'Testing email queue...',
                    'template' => 'register',
                    //'layout' => 'register',
                ];

                // Variables pasadas a la vista.
                $data = [
                    'name' => $user->name,
                    'lastname' => $user->lastname,
                    'email' => $user->email,
                    'phone' => $user->phone
                ];

                //EmailQueue::enqueue($to, $data, $options);
                EmailQueue::enqueue($user->email, [], $options);
                // Lanzar los correos con el siguiente comando en la consola:
                // cake EmailQueue.sender

                // https://github.com/lorenzo/cakephp-email-queue
                
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'roles'));
    }

    public function profile()
    {
        $user = $this->Users->get($this->request->getSession()->read('Auth.id'));

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'roles'));
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
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
}
