<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registrations Model
 *
 * @property \App\Model\Table\MinistriesTable&\Cake\ORM\Association\BelongsTo $Ministries
 * @property \App\Model\Table\CitiesTable&\Cake\ORM\Association\BelongsTo $Cities
 * @property \App\Model\Table\CitiesTable&\Cake\ORM\Association\BelongsTo $Cities
 *
 * @method \App\Model\Entity\Registration newEmptyEntity()
 * @method \App\Model\Entity\Registration newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Registration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Registration findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Registration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Registration[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registration|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegistrationsTable extends Table
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

        $this->setTable('registrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Ministries', [
            'foreignKey' => 'ministry_id',
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'office_city_id',
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'supervisor_city_id',
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
            ->scalar('user_idir')
            ->maxLength('user_idir', 16)
            ->allowEmptyString('user_idir');

        $validator
            ->scalar('user_guid')
            ->maxLength('user_guid', 128)
            ->allowEmptyString('user_guid');

        $validator
            ->integer('employee_number')
            ->allowEmptyString('employee_number');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('department')
            ->maxLength('department', 255)
            ->allowEmptyString('department');

        $validator
            ->integer('milestone')
            ->allowEmptyString('milestone');

        $validator
            ->scalar('retro_years')
            ->allowEmptyString('retro_years');

        $validator
            ->scalar('admin_notes')
            ->allowEmptyString('admin_notes');

        $validator
            ->scalar('office_careof')
            ->maxLength('office_careof', 255)
            ->allowEmptyString('office_careof');

        $validator
            ->scalar('office_address')
            ->maxLength('office_address', 255)
            ->allowEmptyString('office_address');

        $validator
            ->scalar('office_suite')
            ->maxLength('office_suite', 16)
            ->allowEmptyString('office_suite');

        $validator
            ->scalar('office_province')
            ->maxLength('office_province', 2)
            ->allowEmptyString('office_province');

        $validator
            ->scalar('office_postal_code')
            ->maxLength('office_postal_code', 10)
            ->allowEmptyString('office_postal_code');

        $validator
            ->scalar('office_po_box')
            ->maxLength('office_po_box', 10)
            ->allowEmptyString('office_po_box');

        $validator
            ->scalar('work_phone')
            ->maxLength('work_phone', 15)
            ->allowEmptyString('work_phone');

        $validator
            ->scalar('work_extension')
            ->maxLength('work_extension', 4)
            ->allowEmptyString('work_extension');

        $validator
            ->scalar('preferred_email')
            ->maxLength('preferred_email', 255)
            ->allowEmptyString('preferred_email');

        $validator
            ->scalar('supervisor_first_name')
            ->maxLength('supervisor_first_name', 255)
            ->allowEmptyString('supervisor_first_name');

        $validator
            ->scalar('supervisor_last_name')
            ->maxLength('supervisor_last_name', 255)
            ->allowEmptyString('supervisor_last_name');

        $validator
            ->scalar('supervisor_careof')
            ->maxLength('supervisor_careof', 255)
            ->allowEmptyString('supervisor_careof');

        $validator
            ->scalar('supervisor_address')
            ->maxLength('supervisor_address', 255)
            ->allowEmptyString('supervisor_address');

        $validator
            ->scalar('supervisor_suite')
            ->maxLength('supervisor_suite', 16)
            ->allowEmptyString('supervisor_suite');

        $validator
            ->scalar('supervisor_province')
            ->maxLength('supervisor_province', 2)
            ->allowEmptyString('supervisor_province');

        $validator
            ->scalar('supervisor_postal_code')
            ->maxLength('supervisor_postal_code', 10)
            ->allowEmptyString('supervisor_postal_code');

        $validator
            ->scalar('supervisor_email')
            ->maxLength('supervisor_email', 255)
            ->allowEmptyString('supervisor_email');

        $validator
            ->scalar('supervisor_work_phone')
            ->maxLength('supervisor_work_phone', 15)
            ->allowEmptyString('supervisor_work_phone');

        $validator
            ->scalar('supervisor_work_extension')
            ->maxLength('supervisor_work_extension', 4)
            ->allowEmptyString('supervisor_work_extension');

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
        $rules->add($rules->existsIn(['ministry_id'], 'Ministries'));
        $rules->add($rules->existsIn(['office_city_id'], 'Cities'));
        $rules->add($rules->existsIn(['supervisor_city_id'], 'Cities'));

        return $rules;
    }
}
