<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MarketPlaces Controller
 *
 * @property \App\Model\Table\MarketPlacesTable $MarketPlaces
 *
 * @method \App\Model\Entity\MarketPlace[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarketPlacesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $marketPlaces = $this->paginate($this->MarketPlaces);

        $this->set(compact('marketPlaces'));
    }

    /**
     * View method
     *
     * @param string|null $id Market Place id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marketPlace = $this->MarketPlaces->get($id, [
            'contain' => []
        ]);

        $this->set('marketPlace', $marketPlace);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marketPlace = $this->MarketPlaces->newEntity();
        if ($this->request->is('post')) {
            $marketPlace = $this->MarketPlaces->patchEntity($marketPlace, $this->request->getData());
            if ($this->MarketPlaces->save($marketPlace)) {
                $this->Flash->success(__('The market place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The market place could not be saved. Please, try again.'));
        }
        $this->set(compact('marketPlace'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Market Place id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marketPlace = $this->MarketPlaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marketPlace = $this->MarketPlaces->patchEntity($marketPlace, $this->request->getData());
            if ($this->MarketPlaces->save($marketPlace)) {
                $this->Flash->success(__('The market place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The market place could not be saved. Please, try again.'));
        }
        $this->set(compact('marketPlace'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Market Place id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marketPlace = $this->MarketPlaces->get($id);
        if ($this->MarketPlaces->delete($marketPlace)) {
            $this->Flash->success(__('The market place has been deleted.'));
        } else {
            $this->Flash->error(__('The market place could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
