<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cad-blocos Model
 *
 * @property \App\Model\Table\CadCondominiosTable&\Cake\ORM\Association\BelongsTo $CadCondominios
 *
 * @method \App\Model\Entity\Cad-bloco newEmptyEntity()
 * @method \App\Model\Entity\Cad-bloco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cad-bloco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cad-bloco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cad-bloco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cad-bloco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cad-bloco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cad-bloco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cad-bloco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cad-bloco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cad-bloco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cad-bloco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cad-bloco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class Cad-blocosTable extends Table
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

        $this->setTable('cad_blocos');
        $this->setDisplayField(['id', 'cad_condominio_id']);
        $this->setPrimaryKey(['id', 'cad_condominio_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('CadCondominios', [
            'foreignKey' => 'cad_condominio_id',
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
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->allowEmptyString('nome');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

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
        $rules->add($rules->existsIn('cad_condominio_id', 'CadCondominios'), ['errorField' => 'cad_condominio_id']);

        return $rules;
    }
}
