<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\CompanysTable&\Cake\ORM\Association\BelongsTo $Companys
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\HasMany $Projects
 *
 * @method \App\Model\Entity\Client newEmptyEntity()
 * @method \App\Model\Entity\Client newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Companys', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'client_id',
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
            ->scalar('firstname')
            ->maxLength('firstname', 50)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 50)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('phonenumber')
            ->maxLength('phonenumber', 12)
            ->requirePresence('phonenumber', 'create')
            ->notEmptyString('phonenumber');

        $validator
            ->scalar('position')
            ->maxLength('position', 50)
            ->allowEmptyString('position');

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
        $rules->add($rules->existsIn(['company_id'], 'Companys'), ['errorField' => 'company_id']);

        return $rules;
    }
}
