<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadUsuarios Controller
 *
 * @property \App\Model\Table\CadUsuariosTable $CadUsuarios
 * @method \App\Model\Entity\CadUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadUsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CadApartamentos'],
        ];
        $cadUsuarios = $this->paginate($this->CadUsuarios);

        $this->set(compact('cadUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadUsuario = $this->CadUsuarios->get($id, [
            'contain' => ['CadApartamentos'],
        ]);

        $this->set(compact('cadUsuario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadUsuario = $this->CadUsuarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadUsuario = $this->CadUsuarios->patchEntity($cadUsuario, $this->request->getData());
            if ($this->CadUsuarios->save($cadUsuario)) {
                $this->Flash->success(__('The cad usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad usuario could not be saved. Please, try again.'));
        }
        $cadApartamentos = $this->CadUsuarios->CadApartamentos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadUsuario', 'cadApartamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadUsuario = $this->CadUsuarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadUsuario = $this->CadUsuarios->patchEntity($cadUsuario, $this->request->getData());
            if ($this->CadUsuarios->save($cadUsuario)) {
                $this->Flash->success(__('The cad usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad usuario could not be saved. Please, try again.'));
        }
        $cadApartamentos = $this->CadUsuarios->CadApartamentos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadUsuario', 'cadApartamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadUsuario = $this->CadUsuarios->get($id);
        if ($this->CadUsuarios->delete($cadUsuario)) {
            $this->Flash->success(__('The cad usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The cad usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
