<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ministries Model
 *
 * @property \App\Model\Table\RegistrationsTable&\Cake\ORM\Association\HasMany $Registrations
 * @property \App\Model\Table\UserRolesTable&\Cake\ORM\Association\HasMany $UserRoles
 *
 * @method \App\Model\Entity\Ministry newEmptyEntity()
 * @method \App\Model\Entity\Ministry newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ministry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ministry get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ministry findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ministry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ministry[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ministry|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ministry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ministry[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ministry[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ministry[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ministry[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MinistriesTable extends Table
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

        $this->setTable('ministries');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Registrations', [
            'foreignKey' => 'ministry_id',
        ]);
        $this->hasMany('UserRoles', [
            'foreignKey' => 'ministry_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('initials')
            ->maxLength('initials', 10)
            ->allowEmptyString('initials');

        $validator
            ->scalar('retroactive')
            ->maxLength('retroactive', 10)
            ->allowEmptyString('retroactive');

        $validator
            ->scalar('shipping_method')
            ->maxLength('shipping_method', 10)
            ->allowEmptyString('shipping_method');

        $validator
            ->scalar('bulk_shipping_address')
            ->allowEmptyString('bulk_shipping_address');

        $validator
            ->scalar('contact_name')
            ->maxLength('contact_name', 255)
            ->allowEmptyString('contact_name');

        $validator
            ->scalar('contact_email')
            ->maxLength('contact_email', 255)
            ->allowEmptyString('contact_email');

        return $validator;
    }
}
