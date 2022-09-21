<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CondominiosAtributos Model
 *
 * @property \App\Model\Table\ContatosAtributosTable&\Cake\ORM\Association\BelongsTo $ContatosAtributos
 * @property \App\Model\Table\StatusAtributosTable&\Cake\ORM\Association\BelongsTo $StatusAtributos
 * @property \App\Model\Table\EnderecosAtributosTable&\Cake\ORM\Association\BelongsTo $EnderecosAtributos
 *
 * @method \App\Model\Entity\CondominiosAtributo newEmptyEntity()
 * @method \App\Model\Entity\CondominiosAtributo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CondominiosAtributo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CondominiosAtributo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CondominiosAtributo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CondominiosAtributo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CondominiosAtributo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CondominiosAtributo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CondominiosAtributo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CondominiosAtributo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CondominiosAtributo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CondominiosAtributo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CondominiosAtributo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CondominiosAtributosTable extends Table
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

        $this->setTable('condominios_atributos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ContatosAtributos', [
            'foreignKey' => 'contatos_atributo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('StatusAtributos', [
            'foreignKey' => 'status_atributo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('EnderecosAtributos', [
            'foreignKey' => 'enderecos_atributo_id',
            'joinType' => 'INNER',
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
            ->scalar('nome_condominio')
            ->maxLength('nome_condominio', 220)
            ->requirePresence('nome_condominio', 'create')
            ->notEmptyString('nome_condominio');

        $validator
            ->scalar('site_condominio')
            ->maxLength('site_condominio', 220)
            ->requirePresence('site_condominio', 'create')
            ->notEmptyString('site_condominio');

        $validator
            ->scalar('imagem_condominio')
            ->maxLength('imagem_condominio', 220)
            ->requirePresence('imagem_condominio', 'create')
            ->notEmptyFile('imagem_condominio');

        $validator
            ->integer('contatos_atributo_id')
            ->requirePresence('contatos_atributo_id', 'create')
            ->notEmptyString('contatos_atributo_id');

        $validator
            ->integer('status_atributo_id')
            ->requirePresence('status_atributo_id', 'create')
            ->notEmptyString('status_atributo_id');

        $validator
            ->integer('enderecos_atributo_id')
            ->requirePresence('enderecos_atributo_id', 'create')
            ->notEmptyString('enderecos_atributo_id');

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
        $rules->add($rules->existsIn('contatos_atributo_id', 'ContatosAtributos'), ['errorField' => 'contatos_atributo_id']);
        $rules->add($rules->existsIn('status_atributo_id', 'StatusAtributos'), ['errorField' => 'status_atributo_id']);
        $rules->add($rules->existsIn('enderecos_atributo_id', 'EnderecosAtributos'), ['errorField' => 'enderecos_atributo_id']);

        return $rules;
    }
}
