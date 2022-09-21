<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StatusAtributos Model
 *
 * @method \App\Model\Entity\StatusAtributo newEmptyEntity()
 * @method \App\Model\Entity\StatusAtributo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtributo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtributo get($primaryKey, $options = [])
 * @method \App\Model\Entity\StatusAtributo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StatusAtributo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtributo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtributo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StatusAtributo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StatusAtributo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StatusAtributo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StatusAtributo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StatusAtributo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StatusAtributosTable extends Table
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

        $this->setTable('status_atributos');
        $this->setDisplayField('nome_status');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nome_status')
            ->maxLength('nome_status', 220)
            ->requirePresence('nome_status', 'create')
            ->notEmptyString('nome_status');

        return $validator;
    }
}
