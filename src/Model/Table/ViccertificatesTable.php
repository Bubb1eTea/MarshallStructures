<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Viccertificates Model
 *
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 * @property \App\Model\Table\CompanysTable&\Cake\ORM\Association\BelongsTo $Companys
 * @property \App\Model\Table\DesignstandardsTable&\Cake\ORM\Association\BelongsToMany $Designstandards
 *
 * @method \App\Model\Entity\Viccertificate newEmptyEntity()
 * @method \App\Model\Entity\Viccertificate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Viccertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Viccertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Viccertificate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Viccertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Viccertificate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Viccertificate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Viccertificate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Viccertificate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Viccertificate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Viccertificate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Viccertificate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ViccertificatesTable extends Table
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

        $this->setTable('viccertificates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
        ]);
        $this->belongsTo('Companys', [
            'foreignKey' => 'company_id',
        ]);
        $this->belongsToMany('Designstandards', [
            'foreignKey' => 'viccertificate_id',
            'targetForeignKey' => 'designstandard_id',
            'joinTable' => 'designstandards_viccertificates',
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
            ->scalar('buildingtype')
            ->maxLength('buildingtype', 100)
            ->allowEmptyString('buildingtype');

        $validator
            ->integer('numberofstorey')
            ->allowEmptyString('numberofstorey');

        $validator
            ->integer('riseinstory')
            ->allowEmptyString('riseinstory');

        $validator
            ->integer('effectiveheight')
            ->allowEmptyString('effectiveheight');

        $validator
            ->scalar('constructiontype')
            ->maxLength('constructiontype', 10)
            ->allowEmptyString('constructiontype');

        $validator
            ->scalar('buildingclass')
            ->maxLength('buildingclass', 200)
            ->allowEmptyString('buildingclass');

        $validator
            ->scalar('workrelatingto')
            ->maxLength('workrelatingto', 100)
            ->allowEmptyString('workrelatingto');

        $validator
            ->scalar('drawingsproducedby')
            ->maxLength('drawingsproducedby', 100)
            ->allowEmptyString('drawingsproducedby');

        $validator
            ->scalar('performancereq')
            ->allowEmptyString('performancereq');

        $validator
            ->scalar('performancesolution')
            ->allowEmptyString('performancesolution');

        $validator
            ->scalar('prepared')
            ->maxLength('prepared', 50)
            ->allowEmptyString('prepared');

        $validator
            ->dateTime('lastmodified')
            ->notEmptyDateTime('lastmodified');

        $validator
            ->date('dateofissue')
            ->allowEmptyDate('dateofissue');

        $validator
            ->scalar('documentsproduced')
            ->allowEmptyString('documentsproduced');

        $validator
            ->scalar('documentscertified')
            ->allowEmptyString('documentscertified');

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
        $rules->add($rules->existsIn(['company_id'], 'Companys'), ['errorField' => 'company_id']);

        return $rules;
    }
}
