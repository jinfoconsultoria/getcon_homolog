<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EnderecosAtributos Model
 *
 * @property \App\Model\Table\LogradourosAtributosTable&\Cake\ORM\Association\BelongsTo $LogradourosAtributos
 * @property \App\Model\Table\StatusAtributosTable&\Cake\ORM\Association\BelongsTo $StatusAtributos
 * @property \App\Model\Table\CondominiosAtributosTable&\Cake\ORM\Association\HasMany $CondominiosAtributos
 *
 * @method \App\Model\Entity\EnderecosAtributo newEmptyEntity()
 * @method \App\Model\Entity\EnderecosAtributo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EnderecosAtributo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EnderecosAtributo get($primaryKey, $options = [])
 * @method \App\Model\Entity\EnderecosAtributo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EnderecosAtributo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EnderecosAtributo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EnderecosAtributo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnderecosAtributo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EnderecosAtributo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnderecosAtributo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnderecosAtributo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EnderecosAtributo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EnderecosAtributosTable extends Table
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

        $this->setTable('enderecos_atributos');
        $this->setDisplayField('logradouro_endereco');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('LogradourosAtributos', [
            'foreignKey' => 'logradouros_atributo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('StatusAtributos', [
            'foreignKey' => 'status_atributo_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CondominiosAtributos', [
            'foreignKey' => 'enderecos_atributo_id',
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
            ->scalar('cep_endereco')
            ->maxLength('cep_endereco', 220)
            ->requirePresence('cep_endereco', 'create')
            ->notEmptyString('cep_endereco');

        $validator
            ->scalar('logradouro_endereco')
            ->maxLength('logradouro_endereco', 220)
            ->requirePresence('logradouro_endereco', 'create')
            ->notEmptyString('logradouro_endereco');

        $validator
            ->scalar('bairro_endereco')
            ->maxLength('bairro_endereco', 220)
            ->requirePresence('bairro_endereco', 'create')
            ->notEmptyString('bairro_endereco');

        $validator
            ->scalar('numero_endereco')
            ->maxLength('numero_endereco', 220)
            ->requirePresence('numero_endereco', 'create')
            ->notEmptyString('numero_endereco');

        $validator
            ->integer('logradouros_atributo_id')
            ->requirePresence('logradouros_atributo_id', 'create')
            ->notEmptyString('logradouros_atributo_id');

        $validator
            ->scalar('cidade_endereco')
            ->maxLength('cidade_endereco', 220)
            ->requirePresence('cidade_endereco', 'create')
            ->notEmptyString('cidade_endereco');

        $validator
            ->scalar('estado_endereco')
            ->maxLength('estado_endereco', 220)
            ->requirePresence('estado_endereco', 'create')
            ->notEmptyString('estado_endereco');

        $validator
            ->integer('status_atributo_id')
            ->requirePresence('status_atributo_id', 'create')
            ->notEmptyString('status_atributo_id');

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
        $rules->add($rules->existsIn('logradouros_atributo_id', 'LogradourosAtributos'), ['errorField' => 'logradouros_atributo_id']);
        $rules->add($rules->existsIn('status_atributo_id', 'StatusAtributos'), ['errorField' => 'status_atributo_id']);

        return $rules;
    }
}
