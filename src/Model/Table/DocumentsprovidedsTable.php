<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentsprovideds Model
 *
 * @property \App\Model\Table\FeeproposalsTable&\Cake\ORM\Association\HasMany $Feeproposals
 *
 * @method \App\Model\Entity\Documentsprovided newEmptyEntity()
 * @method \App\Model\Entity\Documentsprovided newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Documentsprovided[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentsprovided get($primaryKey, $options = [])
 * @method \App\Model\Entity\Documentsprovided findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Documentsprovided patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Documentsprovided[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentsprovided|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentsprovided saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentsprovided[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentsprovided[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentsprovided[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentsprovided[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DocumentsprovidedsTable extends Table
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

        $this->setTable('documentsprovideds');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Feeproposals', [
            'foreignKey' => 'documentsprovided_id',
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
            ->scalar('description')
            ->maxLength('description', 70)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
