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
 * @property \App\Model\Table\CompanysTable&\Cake\ORM\Association\BelongsTo $Companys
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
        $this->setDisplayField('full_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Companys', [
            'foreignKey' => 'company_id',
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
            ->maxLength('firstname', 50, 'This field is too long.')
            ->requirePresence('firstname', 'create')
            ->regex('firstname', '/^[A-Za-z]+$/', 'This field can only contain letters.')
            ->notEmptyString('firstname', 'This field cannot be empty.');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 50,'This field is too long.')
            ->requirePresence('lastname', 'create')
            ->regex('lastname', '/^[A-Za-z]+$/', 'This field can only contain letters.')
            ->notEmptyString('lastname','This field cannot be empty.');

        $validator
            ->email('email',false,'This is not a valid email address.')
            ->maxLength('email', 70,'This field is too long.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email','This field cannot be empty.');

        $validator
            ->scalar('phonenumber')
            ->maxLength('phonenumber', 12,'This field is too long.')
            ->requirePresence('phonenumber', 'create')
            ->notEmptyString('phonenumber','This field cannot be empty.')
            ->integer('phonenumber','This field can only contain digits');

        $validator
            ->scalar('position')
            ->maxLength('position', 50, 'This field is too long.')
            ->allowEmptyString('position')
            ->regex('position', '/^[A-Za-z]+$/', 'This field can only contain letters.');

        $validator
            ->scalar('role')
            ->maxLength('role', 50,'This field is too long.')
            ->allowEmptyString('role')
            ->regex('role', '/^[A-Za-z]+$/', 'This field can only contain letters.');

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
