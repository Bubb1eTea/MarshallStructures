<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Designstandards Model
 *
 * @property \App\Model\Table\NtcertificatesTable&\Cake\ORM\Association\BelongsToMany $Ntcertificates
 *
 * @method \App\Model\Entity\Designstandard newEmptyEntity()
 * @method \App\Model\Entity\Designstandard newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Designstandard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Designstandard get($primaryKey, $options = [])
 * @method \App\Model\Entity\Designstandard findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Designstandard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Designstandard[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Designstandard|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Designstandard saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Designstandard[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Designstandard[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Designstandard[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Designstandard[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DesignstandardsTable extends Table
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

        $this->setTable('designstandards');
        $this->setDisplayField('design_basis');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Ntcertificates', [
            'foreignKey' => 'designstandard_id',
            'targetForeignKey' => 'ntcertificate_id',
            'joinTable' => 'designstandards_ntcertificates',
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
            ->scalar('designcode')
            ->maxLength('designcode', 30)
            ->allowEmptyString('designcode');

        $validator
            ->scalar('designdesc')
            ->maxLength('designdesc', 100)
            ->allowEmptyString('designdesc');

        return $validator;
    }
}
