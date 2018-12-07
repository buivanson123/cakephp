<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FeaturedArtists Model
 *
 * @method \App\Model\Entity\FeaturedArtist get($primaryKey, $options = [])
 * @method \App\Model\Entity\FeaturedArtist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FeaturedArtist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FeaturedArtist|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FeaturedArtist|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FeaturedArtist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FeaturedArtist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FeaturedArtist findOrCreate($search, callable $callback = null, $options = [])
 */
class FeaturedArtistsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('featured_artists');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmpty('content');

        $validator
            ->scalar('image')
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        return $validator;
    }
}
