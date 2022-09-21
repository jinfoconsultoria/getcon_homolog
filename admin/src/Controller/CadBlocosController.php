<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CadBlocos Controller
 *
 * @property \App\Model\Table\CadBlocosTable $CadBlocos
 * @method \App\Model\Entity\CadBloco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadBlocosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CadCondominios'],
        ];
        $cadBlocos = $this->paginate($this->CadBlocos);

        $this->set(compact('cadBlocos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cad Bloco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadBloco = $this->CadBlocos->get($id, [
            'contain' => ['CadCondominios'],
        ]);

        $this->set(compact('cadBloco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadBloco = $this->CadBlocos->newEmptyEntity();
        if ($this->request->is('post')) {
            $cadBloco = $this->CadBlocos->patchEntity($cadBloco, $this->request->getData());
            if ($this->CadBlocos->save($cadBloco)) {
                $this->Flash->success(__('The cad bloco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad bloco could not be saved. Please, try again.'));
        }
        $cadCondominios = $this->CadBlocos->CadCondominios->find('list', ['limit' => 200])->all();
        $this->set(compact('cadBloco', 'cadCondominios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cad Bloco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadBloco = $this->CadBlocos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadBloco = $this->CadBlocos->patchEntity($cadBloco, $this->request->getData());
            if ($this->CadBlocos->save($cadBloco)) {
                $this->Flash->success(__('The cad bloco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cad bloco could not be saved. Please, try again.'));
        }
        $cadCondominios = $this->CadBlocos->CadCondominios->find('list', ['limit' => 200])->all();
        $this->set(compact('cadBloco', 'cadCondominios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cad Bloco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadBloco = $this->CadBlocos->get($id);
        if ($this->CadBlocos->delete($cadBloco)) {
            $this->Flash->success(__('The cad bloco has been deleted.'));
        } else {
            $this->Flash->error(__('The cad bloco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
