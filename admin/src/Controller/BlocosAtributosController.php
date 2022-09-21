<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BlocosAtributos Controller
 *
 * @property \App\Model\Table\BlocosAtributosTable $BlocosAtributos
 * @method \App\Model\Entity\BlocosAtributo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlocosAtributosController extends AppController
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
        $blocosAtributos = $this->paginate($this->BlocosAtributos);

        $this->set(compact('blocosAtributos'));
    }

    /**
     * View method
     *
     * @param string|null $id Blocos Atributo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blocosAtributo = $this->BlocosAtributos->get($id, [
            'contain' => ['StatusAtributos'],
        ]);

        $this->set(compact('blocosAtributo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blocosAtributo = $this->BlocosAtributos->newEmptyEntity();
        if ($this->request->is('post')) {
            $blocosAtributo = $this->BlocosAtributos->patchEntity($blocosAtributo, $this->request->getData());
            if ($this->BlocosAtributos->save($blocosAtributo)) {
                $this->Flash->success(__('The blocos atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blocos atributo could not be saved. Please, try again.'));
        }
        $statusAtributos = $this->BlocosAtributos->StatusAtributos->find('list', ['limit' => 200])->all();
        $this->set(compact('blocosAtributo', 'statusAtributos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blocos Atributo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blocosAtributo = $this->BlocosAtributos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blocosAtributo = $this->BlocosAtributos->patchEntity($blocosAtributo, $this->request->getData());
            if ($this->BlocosAtributos->save($blocosAtributo)) {
                $this->Flash->success(__('The blocos atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blocos atributo could not be saved. Please, try again.'));
        }
        $statusAtributos = $this->BlocosAtributos->StatusAtributos->find('list', ['limit' => 200])->all();
        $this->set(compact('blocosAtributo', 'statusAtributos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blocos Atributo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blocosAtributo = $this->BlocosAtributos->get($id);
        if ($this->BlocosAtributos->delete($blocosAtributo)) {
            $this->Flash->success(__('The blocos atributo has been deleted.'));
        } else {
            $this->Flash->error(__('The blocos atributo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
