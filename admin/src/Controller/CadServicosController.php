<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadServicos Controller
 *
 * @property \App\Model\Table\CadServicosTable $CadServicos
 * @method \App\Model\Entity\CadServico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadServicosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CadFornecedores', 'CadApartamentos'],
        ];
        $cadServicos = $this->paginate($this->CadServicos);

        $this->set(compact('cadServicos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Servico id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadServico = $this->CadServicos->get($id, [
            'contain' => ['CadFornecedores', 'CadApartamentos'],
        ]);

        $this->set(compact('cadServico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadServico = $this->CadServicos->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadServico = $this->CadServicos->patchEntity($cadServico, $this->request->getData());
            if ($this->CadServicos->save($cadServico)) {
                $this->Flash->success(__('The cad servico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad servico could not be saved. Please, try again.'));
        }
        $cadFornecedores = $this->CadServicos->CadFornecedores->find('list', ['limit' => 200])->all();
        $cadApartamentos = $this->CadServicos->CadApartamentos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadServico', 'cadFornecedores', 'cadApartamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Servico id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadServico = $this->CadServicos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadServico = $this->CadServicos->patchEntity($cadServico, $this->request->getData());
            if ($this->CadServicos->save($cadServico)) {
                $this->Flash->success(__('The cad servico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad servico could not be saved. Please, try again.'));
        }
        $cadFornecedores = $this->CadServicos->CadFornecedores->find('list', ['limit' => 200])->all();
        $cadApartamentos = $this->CadServicos->CadApartamentos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadServico', 'cadFornecedores', 'cadApartamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Servico id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadServico = $this->CadServicos->get($id);
        if ($this->CadServicos->delete($cadServico)) {
            $this->Flash->success(__('The cad servico has been deleted.'));
        } else {
            $this->Flash->error(__('The cad servico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
