<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadFornecedores Controller
 *
 * @property \App\Model\Table\CadFornecedoresTable $CadFornecedores
 * @method \App\Model\Entity\CadFornecedore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadFornecedoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CadCondominios', 'CadContatos', 'CadEnderecos'],
        ];
        $cadFornecedores = $this->paginate($this->CadFornecedores);

        $this->set(compact('cadFornecedores'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Fornecedore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadFornecedore = $this->CadFornecedores->get($id, [
            'contain' => ['CadCondominios', 'CadContatos', 'CadEnderecos', 'CadServicos'],
        ]);

        $this->set(compact('cadFornecedore'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadFornecedore = $this->CadFornecedores->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadFornecedore = $this->CadFornecedores->patchEntity($cadFornecedore, $this->request->getData());
            if ($this->CadFornecedores->save($cadFornecedore)) {
                $this->Flash->success(__('The cad fornecedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad fornecedore could not be saved. Please, try again.'));
        }
        $cadCondominios = $this->CadFornecedores->CadCondominios->find('list', ['limit' => 200])->all();
        $cadContatos = $this->CadFornecedores->CadContatos->find('list', ['limit' => 200])->all();
        $cadEnderecos = $this->CadFornecedores->CadEnderecos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadFornecedore', 'cadCondominios', 'cadContatos', 'cadEnderecos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Fornecedore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadFornecedore = $this->CadFornecedores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadFornecedore = $this->CadFornecedores->patchEntity($cadFornecedore, $this->request->getData());
            if ($this->CadFornecedores->save($cadFornecedore)) {
                $this->Flash->success(__('The cad fornecedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad fornecedore could not be saved. Please, try again.'));
        }
        $cadCondominios = $this->CadFornecedores->CadCondominios->find('list', ['limit' => 200])->all();
        $cadContatos = $this->CadFornecedores->CadContatos->find('list', ['limit' => 200])->all();
        $cadEnderecos = $this->CadFornecedores->CadEnderecos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadFornecedore', 'cadCondominios', 'cadContatos', 'cadEnderecos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Fornecedore id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadFornecedore = $this->CadFornecedores->get($id);
        if ($this->CadFornecedores->delete($cadFornecedore)) {
            $this->Flash->success(__('The cad fornecedore has been deleted.'));
        } else {
            $this->Flash->error(__('The cad fornecedore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
