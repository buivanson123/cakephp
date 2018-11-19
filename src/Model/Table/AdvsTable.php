<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Advs Model
 *
 * @method \App\Model\Entity\Adv get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adv newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Adv[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adv|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adv|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adv patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adv[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adv findOrCreate($search, callable $callback = null, $options = [])
 */
class AdvsTable extends Table
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

        $this->setTable('advs');
        $this->setDisplayField('name');
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        $validator
            ->scalar('dir')
            ->maxLength('dir', 255)
            ->requirePresence('dir', 'create')
            ->notEmpty('dir');

        $validator
            ->boolean('slide')
            ->requirePresence('slide', 'create')
            ->notEmpty('slide');

        $validator
            ->boolean('middle')
            ->requirePresence('middle', 'create')
            ->notEmpty('middle');

        $validator
            ->boolean('bottom')
            ->requirePresence('bottom', 'create')
            ->notEmpty('bottom');

        return $validator;
    }
}
