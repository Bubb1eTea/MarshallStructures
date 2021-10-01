<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentscertifieds Model
 *
 * @property \App\Model\Table\ViccertificatesTable&\Cake\ORM\Association\BelongsTo $Viccertificates
 *
 * @method \App\Model\Entity\Documentscertified newEmptyEntity()
 * @method \App\Model\Entity\Documentscertified newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified get($primaryKey, $options = [])
 * @method \App\Model\Entity\Documentscertified findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Documentscertified patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentscertified saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DocumentscertifiedsTable extends Table
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

        $this->setTable('documentscertifieds');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Viccertificates', [
            'foreignKey' => 'viccertificate_id',
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
            ->integer('documentno')
            ->maxLength('documentno', 5, 'This field is too long.')
            ->greaterThanOrEqual('documentno', 0,'This field must be positive.')
            ->requirePresence('documentno', 'create')
            ->notEmptyString('documentno', 'This field cannot be empty.');

        $validator
            ->date('documentdate')
            ->requirePresence('documentdate', 'create')
            ->notEmptyDate('documentdate');

        $validator
            ->scalar('type')
            ->maxLength('type', 50, 'This field is too long.')
            ->notEmptyString('type', 'This field cannot be empty.');

        $validator
            ->integer('numberofpage')
            ->maxLength('numberofpage', 5, 'This field is too long.')
            ->greaterThanOrEqual('numberofpage', 0,'This field must be positive.')
            ->notEmptyString('numberofpage', 'This field cannot be empty.');

        $validator
            ->scalar('preparedby')
            ->maxLength('preparedby', 60, 'This field is too long.')
            ->notEmptyString('preparedby', 'This field cannot be empty.');

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
        $rules->add($rules->existsIn(['viccertificate_id'], 'Viccertificates'), ['errorField' => 'viccertificate_id']);

        return $rules;
    }
}
