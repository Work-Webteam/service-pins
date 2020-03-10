<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistrationPeriods Model
 *
 * @method \App\Model\Entity\RegistrationPeriod newEmptyEntity()
 * @method \App\Model\Entity\RegistrationPeriod newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationPeriod[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationPeriod get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistrationPeriod findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\RegistrationPeriod patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationPeriod[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistrationPeriod|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrationPeriod saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistrationPeriod[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationPeriod[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationPeriod[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RegistrationPeriod[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RegistrationPeriodsTable extends Table
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

        $this->setTable('registration_periods');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('award_year')
            ->allowEmptyString('award_year');

        $validator
            ->dateTime('open_registration')
            ->allowEmptyDateTime('open_registration');

        $validator
            ->dateTime('close_registration')
            ->allowEmptyDateTime('close_registration');

        return $validator;
    }
}
