<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Associates Model
 *
 * @property \App\Model\Table\AssociatecompanysTable&\Cake\ORM\Association\BelongsTo $Associatecompanys
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsToMany $Projects
 *
 * @method \App\Model\Entity\Associate newEmptyEntity()
 * @method \App\Model\Entity\Associate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Associate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Associate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Associate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Associate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Associate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Associate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Associate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Associate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Associate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Associate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Associate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AssociatesTable extends Table
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

        $this->setTable('associates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Associatecompanys', [
            'foreignKey' => 'associatecompany_id',
        ]);
        $this->belongsToMany('Projects', [
            'foreignKey' => 'associate_id',
            'targetForeignKey' => 'project_id',
            'joinTable' => 'associates_projects',
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
            ->maxLength('firstname', 30)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 30)
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
            ->maxLength('position', 30)
            ->allowEmptyString('position');

        $validator
            ->scalar('role')
            ->maxLength('role', 30)
            ->allowEmptyString('role');

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
        $rules->add($rules->existsIn(['associatecompany_id'], 'Associatecompanys'), ['errorField' => 'associatecompany_id']);

        return $rules;
    }
}
