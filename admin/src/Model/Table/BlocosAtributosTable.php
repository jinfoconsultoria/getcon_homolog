<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlocosAtributos Model
 *
 * @property \App\Model\Table\StatusAtributosTable&\Cake\ORM\Association\BelongsTo $StatusAtributos
 *
 * @method \App\Model\Entity\BlocosAtributo newEmptyEntity()
 * @method \App\Model\Entity\BlocosAtributo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BlocosAtributo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BlocosAtributo get($primaryKey, $options = [])
 * @method \App\Model\Entity\BlocosAtributo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BlocosAtributo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BlocosAtributo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BlocosAtributo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlocosAtributo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlocosAtributo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BlocosAtributo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BlocosAtributo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BlocosAtributo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BlocosAtributosTable extends Table
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

        $this->setTable('blocos_atributos');
        $this->setDisplayField('id');
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
            ->scalar('nome_bloco')
            ->maxLength('nome_bloco', 220)
            ->requirePresence('nome_bloco', 'create')
            ->notEmptyString('nome_bloco');

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
