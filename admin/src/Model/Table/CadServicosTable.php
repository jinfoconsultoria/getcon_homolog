<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadServicos Model
 *
 * @property \App\Model\Table\CadFornecedoresTable&\Cake\ORM\Association\BelongsTo $CadFornecedores
 * @property \App\Model\Table\CadApartamentosTable&\Cake\ORM\Association\BelongsTo $CadApartamentos
 *
 * @method \App\Model\Entity\CadServico newEmptyEntity()
 * @method \App\Model\Entity\CadServico newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadServico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadServico get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadServico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadServico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadServico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadServico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadServico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadServico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadServico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadServico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadServico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CadServicosTable extends Table
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

        $this->setTable('cad_servicos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CadFornecedores', [
            'foreignKey' => 'cad_fornecedore_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CadApartamentos', [
            'foreignKey' => 'cad_apartamento_id',
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
            ->scalar('descricao')
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('status')
            ->maxLength('status', 45)
            ->allowEmptyString('status');

        $validator
            ->integer('cad_fornecedore_id')
            ->requirePresence('cad_fornecedore_id', 'create')
            ->notEmptyString('cad_fornecedore_id');

        $validator
            ->integer('cad_apartamento_id')
            ->requirePresence('cad_apartamento_id', 'create')
            ->notEmptyString('cad_apartamento_id');

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
        $rules->add($rules->existsIn('cad_fornecedore_id', 'CadFornecedores'), ['errorField' => 'cad_fornecedore_id']);
        $rules->add($rules->existsIn('cad_apartamento_id', 'CadApartamentos'), ['errorField' => 'cad_apartamento_id']);

        return $rules;
    }
}
