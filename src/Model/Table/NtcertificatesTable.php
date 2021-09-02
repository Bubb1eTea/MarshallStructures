<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ntcertificates Model
 *
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 * @property \App\Model\Table\DesignstandardsTable&\Cake\ORM\Association\BelongsToMany $Designstandards
 *
 * @method \App\Model\Entity\Ntcertificate newEmptyEntity()
 * @method \App\Model\Entity\Ntcertificate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ntcertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ntcertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ntcertificate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ntcertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ntcertificate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ntcertificate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ntcertificate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ntcertificate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ntcertificate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ntcertificate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ntcertificate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NtcertificatesTable extends Table
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

        $this->setTable('ntcertificates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
        ]);
        $this->belongsToMany('Designstandards', [
            'foreignKey' => 'ntcertificate_id',
            'targetForeignKey' => 'designstandard_id',
            'joinTable' => 'designstandards_ntcertificates',
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
            ->dateTime('lastmodified')
            ->notEmptyDateTime('lastmodified');

        $validator
            ->scalar('lotportionnum')
            ->maxLength('lotportionnum', 50, 'This field is too long.')
            ->allowEmptyString('lotportionnum')
            ->integer('lotportionnum','This field can only contain digits');

        $validator
            ->scalar('location')
            ->maxLength('location', 50, 'This field is too long.')
            ->allowEmptyString('location');

        $validator
            ->scalar('townhundred')
            ->maxLength('townhundred', 50, 'This field is too long.')
            ->regex('townhundred', '/^[a-zA-Z\s]*$/', 'This field can only contain letters.')
            ->allowEmptyString('townhundred');

        $validator
            ->scalar('workdesc')
            ->allowEmptyString('workdesc');

        $validator
            ->scalar('drawingno')
            ->allowEmptyString('drawingno');

        $validator
            ->scalar('other')
            ->allowEmptyString('other');

        $validator
            ->scalar('buildingclass')
            ->maxLength('buildingclass', 100, 'This field is too long.')
            ->allowEmptyString('buildingclass');

        $validator
            ->scalar('constructiontype')
            ->maxLength('constructiontype', 10,'This field is too long.')
            ->allowEmptyString('constructiontype');

        $validator
            ->scalar('buildingimportancelevel')
            ->maxLength('buildingimportancelevel', 50,'This field is too long.')
            ->allowEmptyString('buildingimportancelevel');

        $validator
            ->scalar('windexceedance')
            ->integer('windexceedance', 'This field can only contain digits.')
            ->maxLength('windexceedance', 10,'This field is too long.')
            ->allowEmptyString('windexceedance');

        $validator
            ->scalar('region')
            ->maxLength('region', 50,'This field is too long.')
            ->allowEmptyString('region');

        $validator
            ->decimal('windspeed', 'This field must be a decimal')
            ->allowEmptyString('windspeed');

        $validator
            ->scalar('terraincat')
            ->maxLength('terraincat', 5, 'This field is too long.')
            ->allowEmptyString('terraincat');

        $validator
            ->decimal('referenceheight', 'This field must be a decimal.')
            ->allowEmptyString('referenceheight');

        $validator
            ->decimal('mz', 'This field must be a decimal.')
            ->allowEmptyString('mz');

        $validator
            ->decimal('ms', 'This field must be a decimal.')
            ->allowEmptyString('ms');

        $validator
            ->decimal('mt', 'This field must be a decimal.')
            ->allowEmptyString('mt');

        $validator
            ->decimal('windspeedrefheight', 'This field must be a decimal.')
            ->allowEmptyString('windspeedrefheight');

        $validator
            ->scalar('intpressure')
            ->maxLength('intpressure', 15, 'This field is too long.')
            ->allowEmptyString('intpressure');

        $validator
            ->scalar('expressurewall')
            ->maxLength('expressurewall', 15, 'This field is too long.')
            ->allowEmptyString('expressurewall');

        $validator
            ->scalar('expressureroof')
            ->maxLength('expressureroof', 15, 'This field is too long.')
            ->allowEmptyString('expressureroof');

        $validator
            ->scalar('netpressureroofwall')
            ->maxLength('netpressureroofwall', 20, 'This field is too long.')
            ->allowEmptyString('netpressureroofwall');

        $validator
            ->scalar('imposedloadfloorroof')
            ->maxLength('imposedloadfloorroof', 15, 'This field is too long.')
            ->allowEmptyString('imposedloadfloorroof');

        $validator
            ->scalar('earthquakecat')
            ->maxLength('earthquakecat', 3, 'This field is too long.')
            ->allowEmptyString('earthquakecat');

        $validator
            ->scalar('earthexceedance')
            ->maxLength('earthexceedance', 10, 'This field is too long.')
            ->allowEmptyString('earthexceedance');

        $validator
            ->scalar('importancelevel')
            ->maxLength('importancelevel', 10, 'This field is too long.')
            ->allowEmptyString('importancelevel');

        $validator
            ->scalar('hazardfactor')
            ->maxLength('hazardfactor', 10, 'This field is too long.')
            ->allowEmptyString('hazardfactor');

        $validator
            ->scalar('subsoilclass')
            ->maxLength('subsoilclass', 10, 'This field is too long.')
            ->allowEmptyString('subsoilclass');

        $validator
            ->scalar('bearingcap')
            ->maxLength('bearingcap', 20, 'This field is too long.')
            ->allowEmptyString('bearingcap');

        $validator
            ->scalar('siteclass')
            ->maxLength('siteclass', 10, 'This field is too long.')
            ->allowEmptyString('siteclass');

        $validator
            ->scalar('exclusion')
            ->allowEmptyString('exclusion');

        $validator
            ->scalar('comment')
            ->allowEmptyString('comment');

        $validator
            ->scalar('compname')
            ->maxLength('compname', 50, 'This field is too long.')
            ->allowEmptyString('compname');

        $validator
            ->scalar('compntregnum')
            ->integer('compntregnum', 'This field can only contain digits.')
            ->maxLength('compntregnum', 50, 'This field is too long.')
            ->allowEmptyString('compntregnum');

        $validator
            ->scalar('name')
            ->maxLength('name', 50, 'This field is too long.')
            ->regex('name', '/^[a-zA-Z\s]*$/', 'This field can only contain letters.')
            ->allowEmptyString('name');

        $validator
            ->scalar('ntregnum')
            ->integer('ntregnum', 'This field can only contain digits.')
            ->maxLength('ntregnum', 50)
            ->allowEmptyString('ntregnum');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

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
        $rules->add($rules->existsIn(['project_id'], 'Projects'), ['errorField' => 'project_id']);

        return $rules;
    }
}
