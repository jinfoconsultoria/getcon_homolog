<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TiposcontatosAtributos Model
 *
 * @property \App\Model\Table\StatusAtributosTable&\Cake\ORM\Association\BelongsTo $StatusAtributos
 *
 * @method \App\Model\Entity\TiposcontatosAtributo newEmptyEntity()
 * @method \App\Model\Entity\TiposcontatosAtributo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo get($primaryKey, $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TiposcontatosAtributo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TiposcontatosAtributosTable extends Table
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

        $this->setTable('tiposcontatos_atributos');
        $this->setDisplayField('nome_tiposcontato');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('StatusAtributos', [
            'foreignKey' => 'status_atributo_id',
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
            ->scalar('nome_tiposcontato')
            ->maxLength('nome_tiposcontato', 220)
            ->requirePresence('nome_tiposcontato', 'create')
            ->notEmptyString('nome_tiposcontato');

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
        $rules->add($rules->existsIn('status_atributo_id', 'StatusAtributos'), ['errorField' => 'status_atributo_id']);

        return $rules;
    }
}
