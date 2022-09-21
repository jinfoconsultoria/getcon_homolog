<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TiposcontatosAtributos Controller
 *
 * @property \App\Model\Table\TiposcontatosAtributosTable $TiposcontatosAtributos
 * @method \App\Model\Entity\TiposcontatosAtributo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposcontatosAtributosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StatusAtributos'],
        ];
        $tiposcontatosAtributos = $this->paginate($this->TiposcontatosAtributos);

        $this->set(compact('tiposcontatosAtributos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposcontatos Atributo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposcontatosAtributo = $this->TiposcontatosAtributos->get($id, [
            'contain' => ['StatusAtributos'],
        ]);

        $this->set(compact('tiposcontatosAtributo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposcontatosAtributo = $this->TiposcontatosAtributos->newEmptyEntity();
        if ($this->request->is('post')) {
            $tiposcontatosAtributo = $this->TiposcontatosAtributos->patchEntity($tiposcontatosAtributo, $this->request->getData());
            if ($this->TiposcontatosAtributos->save($tiposcontatosAtributo)) {
                $this->Flash->success(__('The tiposcontatos atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposcontatos atributo could not be saved. Please, try again.'));
        }
        $statusAtributos = $this->TiposcontatosAtributos->StatusAtributos->find('list', ['limit' => 200])->all();
        $this->set(compact('tiposcontatosAtributo', 'statusAtributos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposcontatos Atributo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposcontatosAtributo = $this->TiposcontatosAtributos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposcontatosAtributo = $this->TiposcontatosAtributos->patchEntity($tiposcontatosAtributo, $this->request->getData());
            if ($this->TiposcontatosAtributos->save($tiposcontatosAtributo)) {
                $this->Flash->success(__('The tiposcontatos atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposcontatos atributo could not be saved. Please, try again.'));
        }
        $statusAtributos = $this->TiposcontatosAtributos->StatusAtributos->find('list', ['limit' => 200])->all();
        $this->set(compact('tiposcontatosAtributo', 'statusAtributos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposcontatos Atributo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposcontatosAtributo = $this->TiposcontatosAtributos->get($id);
        if ($this->TiposcontatosAtributos->delete($tiposcontatosAtributo)) {
            $this->Flash->success(__('The tiposcontatos atributo has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposcontatos atributo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
