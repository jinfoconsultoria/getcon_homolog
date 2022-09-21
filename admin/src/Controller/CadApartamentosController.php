<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadApartamentos Controller
 *
 * @property \App\Model\Table\CadApartamentosTable $CadApartamentos
 * @method \App\Model\Entity\CadApartamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadApartamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CadBlocos'],
        ];
        $cadApartamentos = $this->paginate($this->CadApartamentos);

        $this->set(compact('cadApartamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Apartamento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadApartamento = $this->CadApartamentos->get($id, [
            'contain' => ['CadBlocos', 'CadServicos', 'CadUsuarios'],
        ]);

        $this->set(compact('cadApartamento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadApartamento = $this->CadApartamentos->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadApartamento = $this->CadApartamentos->patchEntity($cadApartamento, $this->request->getData());
            if ($this->CadApartamentos->save($cadApartamento)) {
                $this->Flash->success(__('The cad apartamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad apartamento could not be saved. Please, try again.'));
        }
        $cadBlocos = $this->CadApartamentos->CadBlocos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadApartamento', 'cadBlocos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Apartamento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadApartamento = $this->CadApartamentos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadApartamento = $this->CadApartamentos->patchEntity($cadApartamento, $this->request->getData());
            if ($this->CadApartamentos->save($cadApartamento)) {
                $this->Flash->success(__('The cad apartamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad apartamento could not be saved. Please, try again.'));
        }
        $cadBlocos = $this->CadApartamentos->CadBlocos->find('list', ['limit' => 200])->all();
        $this->set(compact('cadApartamento', 'cadBlocos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Apartamento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadApartamento = $this->CadApartamentos->get($id);
        if ($this->CadApartamentos->delete($cadApartamento)) {
            $this->Flash->success(__('The cad apartamento has been deleted.'));
        } else {
            $this->Flash->error(__('The cad apartamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
