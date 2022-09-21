<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadEnderecos Controller
 *
 * @property \App\Model\Table\CadEnderecosTable $CadEnderecos
 * @method \App\Model\Entity\CadEndereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadEnderecosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cadEnderecos = $this->paginate($this->CadEnderecos);

        $this->set(compact('cadEnderecos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Endereco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadEndereco = $this->CadEnderecos->get($id, [
            'contain' => ['CadCondominios', 'CadFornecedores'],
        ]);

        $this->set(compact('cadEndereco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadEndereco = $this->CadEnderecos->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadEndereco = $this->CadEnderecos->patchEntity($cadEndereco, $this->request->getData());
            if ($this->CadEnderecos->save($cadEndereco)) {
                $this->Flash->success(__('The cad endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad endereco could not be saved. Please, try again.'));
        }
        $this->set(compact('cadEndereco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Endereco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadEndereco = $this->CadEnderecos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadEndereco = $this->CadEnderecos->patchEntity($cadEndereco, $this->request->getData());
            if ($this->CadEnderecos->save($cadEndereco)) {
                $this->Flash->success(__('The cad endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad endereco could not be saved. Please, try again.'));
        }
        $this->set(compact('cadEndereco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Endereco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadEndereco = $this->CadEnderecos->get($id);
        if ($this->CadEnderecos->delete($cadEndereco)) {
            $this->Flash->success(__('The cad endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The cad endereco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
