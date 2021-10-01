<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentsproduceds Model
 *
 * @property \App\Model\Table\ViccertificatesTable&\Cake\ORM\Association\BelongsTo $Viccertificates
 *
 * @method \App\Model\Entity\Documentsproduced newEmptyEntity()
 * @method \App\Model\Entity\Documentsproduced newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Documentsproduced[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentsproduced get($primaryKey, $options = [])
 * @method \App\Model\Entity\Documentsproduced findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Documentsproduced patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Documentsproduced[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentsproduced|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentsproduced saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentsproduced[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentsproduced[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentsproduced[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentsproduced[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DocumentsproducedsTable extends Table
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

        $this->setTable('documentsproduceds');
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
            ->requirePresence('documentno', 'create')
            ->notEmptyString('documentno');

        $validator
            ->date('documentdate')
            ->requirePresence('documentdate', 'create')
            ->notEmptyDate('documentdate');

        $validator
            ->integer('revision')
            ->requirePresence('revision', 'create')
            ->notEmptyString('revision');

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
