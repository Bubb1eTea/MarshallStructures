<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DesignstandardsViccertificates Model
 *
 * @property \App\Model\Table\ViccertificatesTable&\Cake\ORM\Association\BelongsTo $Viccertificates
 * @property \App\Model\Table\DesignstandardsTable&\Cake\ORM\Association\BelongsTo $Designstandards
 *
 * @method \App\Model\Entity\DesignstandardsViccertificate newEmptyEntity()
 * @method \App\Model\Entity\DesignstandardsViccertificate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DesignstandardsViccertificate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DesignstandardsViccertificatesTable extends Table
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

        $this->setTable('designstandards_viccertificates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Viccertificates', [
            'foreignKey' => 'viccertificate_id',
        ]);
        $this->belongsTo('Designstandards', [
            'foreignKey' => 'designstandard_id',
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
        $rules->add($rules->existsIn(['designstandard_id'], 'Designstandards'), ['errorField' => 'designstandard_id']);

        return $rules;
    }
}
