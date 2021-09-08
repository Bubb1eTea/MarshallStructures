<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Invoices Model
 *
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 * @property \App\Model\Table\FeeproposalsTable&\Cake\ORM\Association\BelongsTo $Feeproposals
 *
 * @method \App\Model\Entity\Invoice newEmptyEntity()
 * @method \App\Model\Entity\Invoice newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Invoice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Invoice get($primaryKey, $options = [])
 * @method \App\Model\Entity\Invoice findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Invoice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Invoice[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Invoice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invoice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InvoicesTable extends Table
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

        $this->setTable('invoices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Feeproposals', [
            'foreignKey' => 'feeproposal_id',
            'joinType' => 'INNER',
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
            ->scalar('invdesc')
            ->allowEmptyString('invdesc');

        $validator
            ->decimal('completedpercentage')
            ->maxLength('completedpercentage', 12,'This field is too long.')
            ->greaterThanOrEqual('completedpercentage', 0,'This field must be positive.')
            ->lessThanOrEqual('completedpercentage',100,'This field should be less than or equal to 100.')
            ->requirePresence('completedpercentage', 'create')
            ->notEmptyString('completedpercentage', 'This field cannot be empty.');

        $validator
            ->decimal('total')
            ->greaterThanOrEqual('total', 0,'This field must be positive.')
            ->requirePresence('total', 'create')
            ->maxLength('total', 12,'This field is too long.')
            ->notEmptyString('total', 'This field cannot be empty.');

        $validator
            ->decimal('totalgst')
            ->greaterThanOrEqual('totalgst', 0,'This field must be positive.')
            ->maxLength('totalgst', 12,'This field is too long.')
            ->requirePresence('totalgst', 'create')
            ->notEmptyString('totalgst', 'This field cannot be empty.');

        $validator
            ->decimal('grandtotal')
            ->greaterThanOrEqual('grandtotal', 0,'This field must be positive.')
            ->maxLength('grandtotal', 12,'This field is too long.')
            ->requirePresence('grandtotal', 'create')
            ->notEmptyString('grandtotal', 'This field cannot be empty.');

        $validator
            ->integer('paywithinday')
            ->requirePresence('paywithinday', 'create')
            ->notEmptyString('paywithinday', 'This field cannot be empty.');

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
        $rules->add($rules->existsIn(['feeproposal_id'], 'Feeproposals'), ['errorField' => 'feeproposal_id']);

        return $rules;
    }
}
