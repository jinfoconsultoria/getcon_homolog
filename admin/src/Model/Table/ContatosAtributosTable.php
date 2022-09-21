<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContatosAtributos Model
 *
 * @property \App\Model\Table\StatusAtributosTable&\Cake\ORM\Association\BelongsTo $StatusAtributos
 * @property \App\Model\Table\TiposcontatosAtributosTable&\Cake\ORM\Association\BelongsTo $TiposcontatosAtributos
 *
 * @method \App\Model\Entity\ContatosAtributo newEmptyEntity()
 * @method \App\Model\Entity\ContatosAtributo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ContatosAtributo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContatosAtributo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContatosAtributo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ContatosAtributo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContatosAtributo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContatosAtributo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContatosAtributo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContatosAtributo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContatosAtributo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContatosAtributo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContatosAtributo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContatosAtributosTable extends Table
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

        $this->setTable('contatos_atributos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('StatusAtributos', [
            'foreignKey' => 'status_atributo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('TiposcontatosAtributos', [
            'foreignKey' => 'tiposcontatos_atributo_id',
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
            ->scalar('nome_contato')
            ->maxLength('nome_contato', 220)
            ->requirePresence('nome_contato', 'create')
            ->notEmptyString('nome_contato');

        $validator
            ->scalar('email_contato')
            ->maxLength('email_contato', 220)
            ->requirePresence('email_contato', 'create')
            ->notEmptyString('email_contato');

        $validator
            ->integer('status_atributo_id')
            ->requirePresence('status_atributo_id', 'create')
            ->notEmptyString('status_atributo_id');

        $validator
            ->integer('tiposcontatos_atributo_id')
            ->requirePresence('tiposcontatos_atributo_id', 'create')
            ->notEmptyString('tiposcontatos_atributo_id');

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
        $rules->add($rules->existsIn('status_atributo_id', 'StatusAtributos'), ['errorField' => 'status_atributo_id']);
        $rules->add($rules->existsIn('tiposcontatos_atributo_id', 'TiposcontatosAtributos'), ['errorField' => 'tiposcontatos_atributo_id']);

        return $rules;
    }
}
