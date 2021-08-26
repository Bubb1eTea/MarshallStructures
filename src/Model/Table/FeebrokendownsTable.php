<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feebrokendowns Model
 *
 * @property \App\Model\Table\FeeproposalsTable&\Cake\ORM\Association\HasMany $Feeproposals
 *
 * @method \App\Model\Entity\Feebrokendown newEmptyEntity()
 * @method \App\Model\Entity\Feebrokendown newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Feebrokendown[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feebrokendown get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feebrokendown findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Feebrokendown patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feebrokendown[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feebrokendown|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feebrokendown saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feebrokendown[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feebrokendown[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feebrokendown[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Feebrokendown[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FeebrokendownsTable extends Table
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

        $this->setTable('feebrokendowns');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Feeproposals', [
            'foreignKey' => 'feebrokendown_id',
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
            ->decimal('amount')
            ->allowEmptyString('amount');

        $validator
            ->scalar('feebrokendowndesc')
            ->maxLength('feebrokendowndesc', 70)
            ->allowEmptyString('feebrokendowndesc');

        return $validator;
    }
}
