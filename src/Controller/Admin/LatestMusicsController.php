<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LatestMusics Controller
 *
 * @property \App\Model\Table\LatestMusicsTable $LatestMusics
 *
 * @method \App\Model\Entity\LatestMusic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LatestMusicsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $latestMusics = $this->paginate($this->LatestMusics);

        $this->set(compact('latestMusics'));
    }

    /**
     * View method
     *
     * @param string|null $id Latest Music id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $latestMusic = $this->LatestMusics->get($id, [
            'contain' => []
        ]);

        $this->set('latestMusic', $latestMusic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $latestMusic = $this->LatestMusics->newEntity();
        if ($this->request->is('post')) {
            $latestMusic = $this->LatestMusics->patchEntity($latestMusic, $this->request->getData());
            if ($this->LatestMusics->save($latestMusic)) {
                $this->Flash->success(__('The latest music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The latest music could not be saved. Please, try again.'));
        }
        $this->set(compact('latestMusic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Latest Music id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $latestMusic = $this->LatestMusics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $latestMusic = $this->LatestMusics->patchEntity($latestMusic, $this->request->getData());
            if ($this->LatestMusics->save($latestMusic)) {
                $this->Flash->success(__('The latest music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The latest music could not be saved. Please, try again.'));
        }
        $this->set(compact('latestMusic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Latest Music id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $latestMusic = $this->LatestMusics->get($id);
        if ($this->LatestMusics->delete($latestMusic)) {
            $this->Flash->success(__('The latest music has been deleted.'));
        } else {
            $this->Flash->error(__('The latest music could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
