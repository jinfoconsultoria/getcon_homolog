<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadApartamentos Model
 *
 * @property \App\Model\Table\CadBlocosTable&\Cake\ORM\Association\BelongsTo $CadBlocos
 * @property \App\Model\Table\CadBlocosTable&\Cake\ORM\Association\BelongsTo $CadBlocos
 * @property \App\Model\Table\CadServicosTable&\Cake\ORM\Association\HasMany $CadServicos
 * @property \App\Model\Table\CadUsuariosTable&\Cake\ORM\Association\HasMany $CadUsuarios
 *
 * @method \App\Model\Entity\CadApartamento newEmptyEntity()
 * @method \App\Model\Entity\CadApartamento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadApartamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadApartamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadApartamento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadApartamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadApartamento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadApartamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadApartamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadApartamento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadApartamento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadApartamento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadApartamento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CadApartamentosTable extends Table
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

        $this->setTable('cad_apartamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CadBlocos', [
            'foreignKey' => 'cad_bloco_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CadBlocos', [
            'foreignKey' => 'cad_bloco_cad_condominio_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CadServicos', [
            'foreignKey' => 'cad_apartamento_id',
        ]);
        $this->hasMany('CadUsuarios', [
            'foreignKey' => 'cad_apartamento_id',
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
            ->scalar('numero')
            ->maxLength('numero', 45)
            ->allowEmptyString('numero');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->integer('cad_bloco_id')
            ->requirePresence('cad_bloco_id', 'create')
            ->notEmptyString('cad_bloco_id');

        $validator
            ->integer('cad_bloco_cad_condominio_id')
            ->requirePresence('cad_bloco_cad_condominio_id', 'create')
            ->notEmptyString('cad_bloco_cad_condominio_id');

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
        $rules->add($rules->existsIn('cad_bloco_id', 'CadBlocos'), ['errorField' => 'cad_bloco_id']);
        $rules->add($rules->existsIn('cad_bloco_cad_condominio_id', 'CadBlocos'), ['errorField' => 'cad_bloco_cad_condominio_id']);

        return $rules;
    }
}
