<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientcompanys Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\HasMany $Clients
 *
 * @method \App\Model\Entity\Clientcompany newEmptyEntity()
 * @method \App\Model\Entity\Clientcompany newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Clientcompany[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clientcompany get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clientcompany findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Clientcompany patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clientcompany[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clientcompany|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clientcompany saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clientcompany[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clientcompany[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clientcompany[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clientcompany[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClientcompanysTable extends Table
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

        $this->setTable('clientcompanys');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Clients', [
            'foreignKey' => 'clientcompany_id',
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
            ->scalar('companyname')
            ->maxLength('companyname', 50)
            ->requirePresence('companyname', 'create')
            ->notEmptyString('companyname');

        $validator
            ->scalar('type')
            ->maxLength('type', 30)
            ->allowEmptyString('type');

        return $validator;
    }
}
