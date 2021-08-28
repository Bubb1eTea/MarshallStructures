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
        $this->setDisplayField('id');
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
            ->scalar('guarantor')
            ->maxLength('guarantor', 100)
            ->allowEmptyString('guarantor');

        $validator
            ->scalar('scopeofservice')
            ->requirePresence('scopeofservice', 'create')
            ->notEmptyString('scopeofservice');

        $validator
            ->scalar('documentsprovided')
            ->requirePresence('documentsprovided', 'create')
            ->notEmptyString('documentsprovided');

        $validator
            ->scalar('feebreakdown')
            ->allowEmptyString('feebreakdown');

        $validator
            ->decimal('fixedfee')
            ->allowEmptyString('fixedfee');

        $validator
            ->decimal('hourlyrate')
            ->allowEmptyString('hourlyrate');

        $validator
            ->decimal('disbursement')
            ->allowEmptyString('disbursement');

        $validator
            ->decimal('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

        $validator
            ->decimal('totalgst')
            ->requirePresence('totalgst', 'create')
            ->notEmptyString('totalgst');

        $validator
            ->decimal('grandtotal')
            ->requirePresence('grandtotal', 'create')
            ->notEmptyString('grandtotal');

        $validator
            ->integer('paywithinday')
            ->requirePresence('paywithinday', 'create')
            ->notEmptyString('paywithinday');

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
