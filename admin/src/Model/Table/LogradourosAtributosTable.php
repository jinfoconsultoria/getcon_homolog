<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LogradourosAtributos Model
 *
 * @property \App\Model\Table\EnderecosAtributosTable&\Cake\ORM\Association\HasMany $EnderecosAtributos
 *
 * @method \App\Model\Entity\LogradourosAtributo newEmptyEntity()
 * @method \App\Model\Entity\LogradourosAtributo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LogradourosAtributo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LogradourosAtributo get($primaryKey, $options = [])
 * @method \App\Model\Entity\LogradourosAtributo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LogradourosAtributo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LogradourosAtributo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LogradourosAtributo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogradourosAtributo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogradourosAtributo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LogradourosAtributo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LogradourosAtributo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LogradourosAtributo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogradourosAtributosTable extends Table
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

        $this->setTable('logradouros_atributos');
        $this->setDisplayField('nome_logradouro');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('EnderecosAtributos', [
            'foreignKey' => 'logradouros_atributo_id',
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
            ->scalar('nome_logradouro')
            ->maxLength('nome_logradouro', 220)
            ->requirePresence('nome_logradouro', 'create')
            ->notEmptyString('nome_logradouro');

        return $validator;
    }
}
