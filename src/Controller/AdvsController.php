<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Advs Controller
 *
 * @property \App\Model\Table\AdvsTable $Advs
 *
 * @method \App\Model\Entity\Adv[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdvsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $advs = $this->paginate($this->Advs);

        $this->set(compact('advs'));
    }

    /**
     * View method
     *
     * @param string|null $id Adv id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adv = $this->Advs->get($id, [
            'contain' => []
        ]);

        $this->set('adv', $adv);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adv = $this->Advs->newEntity();
        if ($this->request->is('post')) {
            $adv = $this->Advs->patchEntity($adv, $this->request->getData());
            if ($this->Advs->save($adv)) {
                $this->Flash->success(__('The adv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adv could not be saved. Please, try again.'));
        }
        $this->set(compact('adv'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Adv id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adv = $this->Advs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adv = $this->Advs->patchEntity($adv, $this->request->getData());
            if ($this->Advs->save($adv)) {
                $this->Flash->success(__('The adv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adv could not be saved. Please, try again.'));
        }
        $this->set(compact('adv'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Adv id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adv = $this->Advs->get($id);
        if ($this->Advs->delete($adv)) {
            $this->Flash->success(__('The adv has been deleted.'));
        } else {
            $this->Flash->error(__('The adv could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
