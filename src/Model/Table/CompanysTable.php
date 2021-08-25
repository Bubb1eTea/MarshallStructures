<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companys Model
 *
 * @property \App\Model\Table\AssociatesTable&\Cake\ORM\Association\HasMany $Associates
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\HasMany $Clients
 *
 * @method \App\Model\Entity\Company newEmptyEntity()
 * @method \App\Model\Entity\Company newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CompanysTable extends Table
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

        $this->setTable('companys');
        $this->setDisplayField('companyname');
        $this->setPrimaryKey('id');

        $this->hasMany('Associates', [
            'foreignKey' => 'company_id',
        ]);
        $this->hasMany('Clients', [
            'foreignKey' => 'company_id',
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
            ->maxLength('companyname', 50, 'This field is too long.')
            ->requirePresence('companyname', 'create')
            ->notEmptyString('companyname', 'This field cannot be empty.')
            ->notBlank('companyname','This field cannot be empty.');

        $validator
            ->scalar('type')
            ->maxLength('type', 50, 'This field is too long.')
            ->allowEmptyString('type');


        $validator
            ->email('email',false,'This is not a valid email address.')
            ->maxLength('email', 70,'This field is too long.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email','This field cannot be empty.')
            ->notBlank('email', 'This field cannot be empty.');

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
            ->notBlank('suburb','This field cannot be empty.')
            ->regex('suburb', '/^[a-zA-Z\s]*$/', 'This field can only contain letters.');

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
            ->scalar('phonenumber')
            ->maxLength('phonenumber', 12,'This field is too long.')
            ->requirePresence('phonenumber', 'create')
            ->notEmptyString('phonenumber','This field cannot be empty.')
            ->notBlank('phonenumber', 'This field cannot be empty.')
            ->integer('phonenumber','This field can only contain digits');

        return $validator;
    }
}
