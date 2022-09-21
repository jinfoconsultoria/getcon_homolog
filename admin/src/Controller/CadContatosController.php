<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadContatos Controller
 *
 * @property \App\Model\Table\CadContatosTable $CadContatos
 * @method \App\Model\Entity\CadContato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadContatosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cadContatos = $this->paginate($this->CadContatos);

        $this->set(compact('cadContatos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Contato id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadContato = $this->CadContatos->get($id, [
            'contain' => ['CadCondominios'],
        ]);

        $this->set(compact('cadContato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadContato = $this->CadContatos->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadContato = $this->CadContatos->patchEntity($cadContato, $this->request->getData());
            if ($this->CadContatos->save($cadContato)) {
                $this->Flash->success(__('The cad contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad contato could not be saved. Please, try again.'));
        }
        $this->set(compact('cadContato'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Contato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadContato = $this->CadContatos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadContato = $this->CadContatos->patchEntity($cadContato, $this->request->getData());
            if ($this->CadContatos->save($cadContato)) {
                $this->Flash->success(__('The cad contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad contato could not be saved. Please, try again.'));
        }
        $this->set(compact('cadContato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Contato id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadContato = $this->CadContatos->get($id);
        if ($this->CadContatos->delete($cadContato)) {
            $this->Flash->success(__('The cad contato has been deleted.'));
        } else {
            $this->Flash->error(__('The cad contato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
