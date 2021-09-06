<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentscertifieds Model
 *
 * @property \App\Model\Table\ViccertificatesTable&\Cake\ORM\Association\HasMany $Viccertificates
 *
 * @method \App\Model\Entity\Documentscertified newEmptyEntity()
 * @method \App\Model\Entity\Documentscertified newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified get($primaryKey, $options = [])
 * @method \App\Model\Entity\Documentscertified findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Documentscertified patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentscertified|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentscertified saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documentscertified[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DocumentscertifiedsTable extends Table
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

        $this->setTable('documentscertifieds');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Viccertificates', [
            'foreignKey' => 'documentscertified_id',
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
            ->integer('documentno')
            ->allowEmptyString('documentno');

        $validator
            ->dateTime('documentdate')
            ->notEmptyDateTime('documentdate');

        $validator
            ->scalar('type')
            ->maxLength('type', 20)
            ->allowEmptyString('type');

        $validator
            ->integer('numberofpage')
            ->allowEmptyString('numberofpage');

        $validator
            ->scalar('preparedby')
            ->maxLength('preparedby', 100)
            ->allowEmptyString('preparedby');

        return $validator;
    }
}
