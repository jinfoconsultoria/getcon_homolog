<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadFornecedores Model
 *
 * @property \App\Model\Table\CadCondominiosTable&\Cake\ORM\Association\BelongsTo $CadCondominios
 * @property \App\Model\Table\CadContatosTable&\Cake\ORM\Association\BelongsTo $CadContatos
 * @property \App\Model\Table\CadEnderecosTable&\Cake\ORM\Association\BelongsTo $CadEnderecos
 * @property \App\Model\Table\CadServicosTable&\Cake\ORM\Association\HasMany $CadServicos
 *
 * @method \App\Model\Entity\CadFornecedore newEmptyEntity()
 * @method \App\Model\Entity\CadFornecedore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadFornecedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadFornecedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadFornecedore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadFornecedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadFornecedore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadFornecedore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadFornecedore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadFornecedore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadFornecedore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadFornecedore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadFornecedore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CadFornecedoresTable extends Table
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

        $this->setTable('cad_fornecedores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CadCondominios', [
            'foreignKey' => 'cad_condominio_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CadContatos', [
            'foreignKey' => 'cad_contatos_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CadEnderecos', [
            'foreignKey' => 'cad_endereco_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CadServicos', [
            'foreignKey' => 'cad_fornecedore_id',
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
            ->maxLength('nome', 100)
            ->allowEmptyString('nome');

        $validator
            ->scalar('ramo')
            ->maxLength('ramo', 45)
            ->allowEmptyString('ramo');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 45)
            ->allowEmptyString('logo');

        $validator
            ->scalar('cnpj')
            ->maxLength('cnpj', 45)
            ->allowEmptyString('cnpj');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->integer('cad_condominio_id')
            ->requirePresence('cad_condominio_id', 'create')
            ->notEmptyString('cad_condominio_id');

        $validator
            ->integer('cad_contatos_id')
            ->requirePresence('cad_contatos_id', 'create')
            ->notEmptyString('cad_contatos_id');

        $validator
            ->integer('cad_endereco_id')
            ->requirePresence('cad_endereco_id', 'create')
            ->notEmptyString('cad_endereco_id');

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
        $rules->add($rules->existsIn('cad_contatos_id', 'CadContatos'), ['errorField' => 'cad_contatos_id']);
        $rules->add($rules->existsIn('cad_endereco_id', 'CadEnderecos'), ['errorField' => 'cad_endereco_id']);

        return $rules;
    }
}
