<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StatusAtributos Controller
 *
 * @property \App\Model\Table\StatusAtributosTable $StatusAtributos
 * @method \App\Model\Entity\StatusAtributo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusAtributosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $statusAtributos = $this->paginate($this->StatusAtributos);

        $this->set(compact('statusAtributos'));
    }

    /**
     * View method
     *
     * @param string|null $id Status Atributo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusAtributo = $this->StatusAtributos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('statusAtributo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusAtributo = $this->StatusAtributos->newEmptyEntity();
        if ($this->request->is('post')) {
            $statusAtributo = $this->StatusAtributos->patchEntity($statusAtributo, $this->request->getData());
            if ($this->StatusAtributos->save($statusAtributo)) {
                $this->Flash->success(__('The status atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status atributo could not be saved. Please, try again.'));
        }
        $this->set(compact('statusAtributo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Status Atributo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusAtributo = $this->StatusAtributos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusAtributo = $this->StatusAtributos->patchEntity($statusAtributo, $this->request->getData());
            if ($this->StatusAtributos->save($statusAtributo)) {
                $this->Flash->success(__('The status atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status atributo could not be saved. Please, try again.'));
        }
        $this->set(compact('statusAtributo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Status Atributo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusAtributo = $this->StatusAtributos->get($id);
        if ($this->StatusAtributos->delete($statusAtributo)) {
            $this->Flash->success(__('The status atributo has been deleted.'));
        } else {
            $this->Flash->error(__('The status atributo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
