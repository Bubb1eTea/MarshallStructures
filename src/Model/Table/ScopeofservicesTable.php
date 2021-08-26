<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scopeofservices Model
 *
 * @property \App\Model\Table\FeeproposalsTable&\Cake\ORM\Association\HasMany $Feeproposals
 *
 * @method \App\Model\Entity\Scopeofservice newEmptyEntity()
 * @method \App\Model\Entity\Scopeofservice newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Scopeofservice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scopeofservice get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scopeofservice findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Scopeofservice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scopeofservice[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scopeofservice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scopeofservice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scopeofservice[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scopeofservice[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scopeofservice[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scopeofservice[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ScopeofservicesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('scopeofservices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Feeproposals', [
            'foreignKey' => 'scopeofservice_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('description')
            ->maxLength('description', 70)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
