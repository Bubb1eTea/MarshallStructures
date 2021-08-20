<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\FeeproposalsTable&\Cake\ORM\Association\HasMany $Feeproposals
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\HasMany $Invoices
 * @property \App\Model\Table\AssociatesTable&\Cake\ORM\Association\BelongsToMany $Associates
 *
 * @method \App\Model\Entity\Project newEmptyEntity()
 * @method \App\Model\Entity\Project newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProjectsTable extends Table
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

        $this->setTable('projects');
        $this->setDisplayField('projectname');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Feeproposals', [
            'foreignKey' => 'project_id',
        ]);
        $this->hasMany('Invoices', [
            'foreignKey' => 'project_id',
        ]);
        $this->belongsToMany('Associates', [
            'foreignKey' => 'project_id',
            'targetForeignKey' => 'associate_id',
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
            ->scalar('msnumber')
            ->maxLength('msnumber', 12, 'This field is too long.')
            ->requirePresence('msnumber', 'create')
            ->notEmptyString('msnumber','This field cannot be empty.')
            ->notBlank('msnumber','This field cannot be empty.')
            ->integer('msnumber', 'This field can only contain digits.');

        $validator
            ->scalar('projectname')
            ->maxLength('projectname', 100, 'This field is too long.')
            ->requirePresence('projectname', 'create')
            ->notEmptyString('projectname','This field cannot be empty.')
            ->notBlank('projectname','This field cannot be empty.');

        $validator
            ->scalar('streetname')
            ->maxLength('streetname', 50, 'This field is too long.')
            ->requirePresence('streetname', 'create')
            ->notEmptyString('streetname','This field cannot be empty.')
            ->notBlank('streetname','This field cannot be empty.');

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 50, 'This field is too long.')
            ->requirePresence('suburb', 'create')
            ->notEmptyString('suburb','This field cannot be empty.')
            ->notBlank('suburb','This field cannot be empty.');

        $validator
            ->scalar('postcode')
            ->maxLength('postcode', 4,'This field is too long')
            ->requirePresence('postcode', 'create')
            ->notEmptyString('postcode','This field cannot be empty.')
            ->notBlank('postcode','This field cannot be empty.')
            ->integer('postcode','This field can only contain digits.');

        $validator
            ->scalar('state')
            ->maxLength('state', 3,'This field is too long')
            ->requirePresence('state', 'create')
            ->notEmptyString('state','This field cannot be empty.')
            ->notBlank('state','This field cannot be empty.')
            ->regex('state', '/^[a-zA-Z\s]*$/', 'This field can only contain letters.');

        $validator
            ->scalar('phase')
            ->maxLength('phase', 20,'This field is too long')
            ->requirePresence('phase', 'create')
            ->notEmptyString('phase','This field cannot be empty.')
            ->notBlank('phase','This field cannot be empty.');

        $validator
            ->date('duedate')
            ->allowEmptyDate('duedate');

        $validator
            ->scalar('projdesc')
            ->allowEmptyString('projdesc');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'), ['errorField' => 'client_id']);

        return $rules;
    }
}
