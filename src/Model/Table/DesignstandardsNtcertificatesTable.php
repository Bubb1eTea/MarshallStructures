<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DesignstandardsNtcertificates Model
 *
 * @property \App\Model\Table\NtcertificatesTable&\Cake\ORM\Association\BelongsTo $Ntcertificates
 * @property \App\Model\Table\DesignstandardsTable&\Cake\ORM\Association\BelongsTo $Designstandards
 *
 * @method \App\Model\Entity\DesignstandardsNtcertificate newEmptyEntity()
 * @method \App\Model\Entity\DesignstandardsNtcertificate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DesignstandardsNtcertificate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DesignstandardsNtcertificatesTable extends Table
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

        $this->setTable('designstandards_ntcertificates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ntcertificates', [
            'foreignKey' => 'ntcertificate_id',
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
        $rules->add($rules->existsIn(['ntcertificate_id'], 'Ntcertificates'), ['errorField' => 'ntcertificate_id']);
        $rules->add($rules->existsIn(['designstandard_id'], 'Designstandards'), ['errorField' => 'designstandard_id']);

        return $rules;
    }
}
