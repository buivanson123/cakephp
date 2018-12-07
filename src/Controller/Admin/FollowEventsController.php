<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FollowEvents Controller
 *
 * @property \App\Model\Table\FollowEventsTable $FollowEvents
 *
 * @method \App\Model\Entity\FollowEvent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FollowEventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $followEvents = $this->paginate($this->FollowEvents);

        $this->set(compact('followEvents'));
    }

    /**
     * View method
     *
     * @param string|null $id Follow Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $followEvent = $this->FollowEvents->get($id, [
            'contain' => []
        ]);

        $this->set('followEvent', $followEvent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $followEvent = $this->FollowEvents->newEntity();
        if ($this->request->is('post')) {
            $followEvent = $this->FollowEvents->patchEntity($followEvent, $this->request->getData());
            if ($this->FollowEvents->save($followEvent)) {
                $this->Flash->success(__('The follow event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The follow event could not be saved. Please, try again.'));
        }
        $this->set(compact('followEvent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Follow Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $followEvent = $this->FollowEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $followEvent = $this->FollowEvents->patchEntity($followEvent, $this->request->getData());
            if ($this->FollowEvents->save($followEvent)) {
                $this->Flash->success(__('The follow event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The follow event could not be saved. Please, try again.'));
        }
        $this->set(compact('followEvent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Follow Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $followEvent = $this->FollowEvents->get($id);
        if ($this->FollowEvents->delete($followEvent)) {
            $this->Flash->success(__('The follow event has been deleted.'));
        } else {
            $this->Flash->error(__('The follow event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
