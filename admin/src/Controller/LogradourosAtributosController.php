<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LogradourosAtributos Controller
 *
 * @property \App\Model\Table\LogradourosAtributosTable $LogradourosAtributos
 * @method \App\Model\Entity\LogradourosAtributo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogradourosAtributosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $logradourosAtributos = $this->paginate($this->LogradourosAtributos);

        $this->set(compact('logradourosAtributos'));
    }

    /**
     * View method
     *
     * @param string|null $id Logradouros Atributo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logradourosAtributo = $this->LogradourosAtributos->get($id, [
            'contain' => ['EnderecosAtributos'],
        ]);

        $this->set(compact('logradourosAtributo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logradourosAtributo = $this->LogradourosAtributos->newEmptyEntity();
        if ($this->request->is('post')) {
            $logradourosAtributo = $this->LogradourosAtributos->patchEntity($logradourosAtributo, $this->request->getData());
            if ($this->LogradourosAtributos->save($logradourosAtributo)) {
                $this->Flash->success(__('The logradouros atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logradouros atributo could not be saved. Please, try again.'));
        }
        $this->set(compact('logradourosAtributo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logradouros Atributo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logradourosAtributo = $this->LogradourosAtributos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logradourosAtributo = $this->LogradourosAtributos->patchEntity($logradourosAtributo, $this->request->getData());
            if ($this->LogradourosAtributos->save($logradourosAtributo)) {
                $this->Flash->success(__('The logradouros atributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logradouros atributo could not be saved. Please, try again.'));
        }
        $this->set(compact('logradourosAtributo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logradouros Atributo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logradourosAtributo = $this->LogradourosAtributos->get($id);
        if ($this->LogradourosAtributos->delete($logradourosAtributo)) {
            $this->Flash->success(__('The logradouros atributo has been deleted.'));
        } else {
            $this->Flash->error(__('The logradouros atributo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
