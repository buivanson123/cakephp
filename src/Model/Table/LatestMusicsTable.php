<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LatestMusics Model
 *
 * @method \App\Model\Entity\LatestMusic get($primaryKey, $options = [])
 * @method \App\Model\Entity\LatestMusic newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LatestMusic[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LatestMusic|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LatestMusic|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LatestMusic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LatestMusic[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LatestMusic findOrCreate($search, callable $callback = null, $options = [])
 */
class LatestMusicsTable extends Table
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

        $this->setTable('latest_musics');
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
            ->scalar('image')
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        return $validator;
    }
}
