<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadCondominios Controller
 *
 * @property \App\Model\Table\CadCondominiosTable $CadCondominios
 * @method \App\Model\Entity\CadCondominio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadCondominiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CadContatos', 'CadEnderecos'],
        ];
        $cadCondominios = $this->paginate($this->CadCondominios);

        $this->set(compact('cadCondominios'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Condominio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadCondominio = $this->CadCondominios->get($id, [
            'contain' => ['CadContatos', 'CadEnderecos', 'CadBlocos', 'CadFornecedores'],
        ]);

        $this->set(compact('cadCondominio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadCondominio = $this->CadCondominios->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadCondominio = $this->CadCondominios->patchEntity($cadCondominio, $this->request->getData());
            if ($this->CadCondominios->save($cadCondominio)) {
                $this->Flash->success(__('The cad condominio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad condominio could not be saved. Please, try again.'));
        }
        $cadContatos = $this->CadCondominios->CadContatos->find('list', ['limit' => 200])->all();
        $cadEnderecos = $this->CadCondominios->CadEnderecos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadCondominio', 'cadContatos', 'cadEnderecos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Condominio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadCondominio = $this->CadCondominios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadCondominio = $this->CadCondominios->patchEntity($cadCondominio, $this->request->getData());
            if ($this->CadCondominios->save($cadCondominio)) {
                $this->Flash->success(__('The cad condominio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad condominio could not be saved. Please, try again.'));
        }
        $cadContatos = $this->CadCondominios->CadContatos->find('list', ['limit' => 200])->all();
        $cadEnderecos = $this->CadCondominios->CadEnderecos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadCondominio', 'cadContatos', 'cadEnderecos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Condominio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadCondominio = $this->CadCondominios->get($id);
        if ($this->CadCondominios->delete($cadCondominio)) {
            $this->Flash->success(__('The cad condominio has been deleted.'));
        } else {
            $this->Flash->error(__('The cad condominio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
