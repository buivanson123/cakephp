<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FeaturedArtists Controller
 *
 * @property \App\Model\Table\FeaturedArtistsTable $FeaturedArtists
 *
 * @method \App\Model\Entity\FeaturedArtist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeaturedArtistsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $featuredArtists = $this->paginate($this->FeaturedArtists);

        $this->set(compact('featuredArtists'));
    }

    /**
     * View method
     *
     * @param string|null $id Featured Artist id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $featuredArtist = $this->FeaturedArtists->get($id, [
            'contain' => []
        ]);

        $this->set('featuredArtist', $featuredArtist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $featuredArtist = $this->FeaturedArtists->newEntity();
        if ($this->request->is('post')) {
            $featuredArtist = $this->FeaturedArtists->patchEntity($featuredArtist, $this->request->getData());
            if ($this->FeaturedArtists->save($featuredArtist)) {
                $this->Flash->success(__('The featured artist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The featured artist could not be saved. Please, try again.'));
        }
        $this->set(compact('featuredArtist'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Featured Artist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $featuredArtist = $this->FeaturedArtists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $featuredArtist = $this->FeaturedArtists->patchEntity($featuredArtist, $this->request->getData());
            if ($this->FeaturedArtists->save($featuredArtist)) {
                $this->Flash->success(__('The featured artist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The featured artist could not be saved. Please, try again.'));
        }
        $this->set(compact('featuredArtist'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Featured Artist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $featuredArtist = $this->FeaturedArtists->get($id);
        if ($this->FeaturedArtists->delete($featuredArtist)) {
            $this->Flash->success(__('The featured artist has been deleted.'));
        } else {
            $this->Flash->error(__('The featured artist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
