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
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'service_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Documents', [
            'foreignKey' => 'document_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Feebrokendowns', [
            'foreignKey' => 'feebrokendown_id',
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
            ->boolean('guarantor')
            ->requirePresence('guarantor', 'create')
            ->notEmptyString('guarantor');

        $validator
            ->decimal('fee')
            ->allowEmptyString('fee');

        $validator
            ->decimal('hourlyrate')
            ->allowEmptyString('hourlyrate');

        $validator
            ->decimal('disbursement')
            ->allowEmptyString('disbursement');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

        $validator
            ->decimal('totalGST')
            ->allowEmptyString('totalGST');

        $validator
            ->decimal('grandtotal')
            ->allowEmptyString('grandtotal');

        $validator
            ->integer('paywithinday')
            ->allowEmptyString('paywithinday');

        $validator
            ->dateTime('datecreated')
            ->notEmptyDateTime('datecreated');

        $validator
            ->dateTime('lastmodified')
            ->notEmptyDateTime('lastmodified');

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
        $rules->add($rules->existsIn(['service_id'], 'Services'), ['errorField' => 'service_id']);
        $rules->add($rules->existsIn(['document_id'], 'Documents'), ['errorField' => 'document_id']);
        $rules->add($rules->existsIn(['feebrokendown_id'], 'Feebrokendowns'), ['errorField' => 'feebrokendown_id']);

        return $rules;
    }
}
