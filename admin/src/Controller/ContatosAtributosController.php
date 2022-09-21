<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContatosAtributos Controller
 *
 * @property \App\Model\Table\ContatosAtributosTable $ContatosAtributos
 * @method \App\Model\Entity\ContatosAtributo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatosAtributosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StatusAtributos', 'TiposcontatosAtributos'],
        ];
        $contatosAtributos = $this->paginate($this->ContatosAtributos);

        $this->set(compact('contatosAtributos'));
    }

    /**
     * View method
     *
     * @param string|null $id Contatos Atributo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contatosAtributo = $this->ContatosAtributos->get($id, [
            'contain' => ['StatusAtributos', 'TiposcontatosAtributos'],
        ]);

        $this->set(compact('contatosAtributo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contatosAtributo = $this->ContatosAtributos->newEmptyEntity();
        if ($this->request->is('post')) {
            $contatosAtributo = $this->ContatosAtributos->patchEntity($contatosAtributo, $this->request->getData());
            if ($this->ContatosAtributos->save($contatosAtributo)) {
                $this->Flash->success(__('The contatos atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contatos atributo could not be saved. Please, try again.'));
        }
        $statusAtributos = $this->ContatosAtributos->StatusAtributos->find('list', ['limit' => 200])->all();
        $tiposcontatosAtributos = $this->ContatosAtributos->TiposcontatosAtributos->find('list', ['limit' => 200])->all();
        $this->set(compact('contatosAtributo', 'statusAtributos', 'tiposcontatosAtributos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contatos Atributo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contatosAtributo = $this->ContatosAtributos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contatosAtributo = $this->ContatosAtributos->patchEntity($contatosAtributo, $this->request->getData());
            if ($this->ContatosAtributos->save($contatosAtributo)) {
                $this->Flash->success(__('The contatos atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contatos atributo could not be saved. Please, try again.'));
        }
        $statusAtributos = $this->ContatosAtributos->StatusAtributos->find('list', ['limit' => 200])->all();
        $tiposcontatosAtributos = $this->ContatosAtributos->TiposcontatosAtributos->find('list', ['limit' => 200])->all();
        $this->set(compact('contatosAtributo', 'statusAtributos', 'tiposcontatosAtributos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contatos Atributo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contatosAtributo = $this->ContatosAtributos->get($id);
        if ($this->ContatosAtributos->delete($contatosAtributo)) {
            $this->Flash->success(__('The contatos atributo has been deleted.'));
        } else {
            $this->Flash->error(__('The contatos atributo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
