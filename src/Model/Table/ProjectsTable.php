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
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
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
            ->maxLength('msnumber', 12)
            ->requirePresence('msnumber', 'create')
            ->notEmptyString('msnumber');

        $validator
            ->scalar('projectname')
            ->maxLength('projectname', 30)
            ->requirePresence('projectname', 'create')
            ->notEmptyString('projectname');

        $validator
            ->scalar('streetname')
            ->maxLength('streetname', 30)
            ->requirePresence('streetname', 'create')
            ->notEmptyString('streetname');

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 30)
            ->requirePresence('suburb', 'create')
            ->notEmptyString('suburb');

        $validator
            ->scalar('postcode')
            ->maxLength('postcode', 4)
            ->requirePresence('postcode', 'create')
            ->notEmptyString('postcode');

        $validator
            ->scalar('state')
            ->maxLength('state', 3)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('phase')
            ->maxLength('phase', 20)
            ->requirePresence('phase', 'create')
            ->notEmptyString('phase');

        $validator
            ->scalar('projectdesc')
            ->requirePresence('projectdesc', 'create')
            ->notEmptyString('projectdesc');

        $validator
            ->date('duedate')
            ->allowEmptyDate('duedate');

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
