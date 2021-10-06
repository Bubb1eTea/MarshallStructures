<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feeproposals Model
 *
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\HasMany $Invoices
 *
 * @method \App\Model\Entity\Feeproposal newEmptyEntity()
 * @method \App\Model\Entity\Feeproposal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Feeproposal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feeproposal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feeproposal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Feeproposal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feeproposal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feeproposal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feeproposal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feeproposal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feeproposal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feeproposal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feeproposal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FeeproposalsTable extends Table
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

        $this->setTable('feeproposals');
        $this->setDisplayField('feeproposalnum');
        $this->setPrimaryKey('id');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Invoices', [
            'foreignKey' => 'feeproposal_id',
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
            ->dateTime('datecreated')
            ->notEmptyDateTime('datecreated','This field cannot be empty.');

        $validator
            ->scalar('guarantor')
            ->maxLength('guarantor', 100,'This field is too long.')
            ->regex('guarantor', '/^[a-zA-Z\s]*$/', 'This field can only contain letters.')
            ->allowEmptyString('guarantor');

        $validator
            ->scalar('scopeofservice')
            ->requirePresence('scopeofservice', 'create')
            ->notEmptyString('scopeofservice', 'This field cannot be empty.')
            ->notBlank('scopeofservice', 'This field cannot be empty.');

        $validator
            ->scalar('documentsprovided')
            ->requirePresence('documentsprovided', 'create')
            ->notEmptyString('documentsprovided', 'This field cannot be empty.')
            ->notBlank('documentsprovided', 'This field cannot be empty.');

        $validator
            ->decimal('fixedfee')
            ->greaterThanOrEqual('fixedfee', 0,'This field must be positive.')
            ->maxLength('fixedfee',12,'This field is too long.')
            ->allowEmptyString('fixedfee');

        $validator
            ->decimal('hourlyrate')
            ->greaterThanOrEqual('hourlyrate', 0,'This field must be positive.')
            ->maxLength('hourlyrate',12,'This field is too long.')
            ->allowEmptyString('hourlyrate');

        $validator
            ->decimal('disbursement')
            ->greaterThanOrEqual('disbursement', 0,'This field must be positive.')
            ->maxLength('disbursement',12,'This field is too long.')
            ->allowEmptyString('disbursement');

        $validator
            ->decimal('total')
            ->greaterThanOrEqual('total', 0,'This field must be positive.')
            ->maxLength('total',12,'This field is too long.')
            ->requirePresence('total', 'create')
            ->notEmptyString('total', 'This field cannot be empty.');

        $validator
            ->decimal('totalgst')
            ->greaterThanOrEqual('totalgst', 0,'This field must be positive.')
            ->maxLength('totalgst',12,'This field is too long.')
            ->requirePresence('totalgst', 'create')
            ->notEmptyString('totalgst', 'This field cannot be empty.');

        $validator
            ->decimal('grandtotal')
            ->greaterThanOrEqual('grandtotal', 0,'This field must be positive.')
            ->maxLength('grandtotal',12,'This field is too long.')
            ->requirePresence('grandtotal', 'create')
            ->notEmptyString('grandtotal', 'This field cannot be empty.');

        $validator
            ->integer('paywithinday')
            ->requirePresence('paywithinday', 'create')
            ->notEmptyString('paywithinday', 'This field cannot be empty.');

        $validator
            ->integer('feeproposalnum');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['project_id'], 'Projects'), ['errorField' => 'project_id']);

        return $rules;
    }
}
