<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MarketPlaces Model
 *
 * @method \App\Model\Entity\MarketPlace get($primaryKey, $options = [])
 * @method \App\Model\Entity\MarketPlace newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MarketPlace[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MarketPlace|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MarketPlace|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MarketPlace patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MarketPlace[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MarketPlace findOrCreate($search, callable $callback = null, $options = [])
 */
class MarketPlacesTable extends Table
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

        $this->setTable('market_places');
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
