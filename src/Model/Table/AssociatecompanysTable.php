<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Associatecompanys Model
 *
 * @property \App\Model\Table\AssociatesTable&\Cake\ORM\Association\HasMany $Associates
 *
 * @method \App\Model\Entity\Associatecompany newEmptyEntity()
 * @method \App\Model\Entity\Associatecompany newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Associatecompany[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Associatecompany get($primaryKey, $options = [])
 * @method \App\Model\Entity\Associatecompany findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Associatecompany patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Associatecompany[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Associatecompany|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Associatecompany saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Associatecompany[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Associatecompany[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Associatecompany[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Associatecompany[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AssociatecompanysTable extends Table
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

        $this->setTable('associatecompanys');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Associates', [
            'foreignKey' => 'associatecompany_id',
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
            ->scalar('companyname')
            ->maxLength('companyname', 50)
            ->requirePresence('companyname', 'create')
            ->notEmptyString('companyname');

        $validator
            ->scalar('type')
            ->maxLength('type', 30)
            ->allowEmptyString('type');

        return $validator;
    }
}
