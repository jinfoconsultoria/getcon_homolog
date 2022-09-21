<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadCondominios Model
 *
 * @property \App\Model\Table\CadContatosTable&\Cake\ORM\Association\BelongsTo $CadContatos
 * @property \App\Model\Table\CadEnderecosTable&\Cake\ORM\Association\BelongsTo $CadEnderecos
 * @property \App\Model\Table\CadBlocosTable&\Cake\ORM\Association\HasMany $CadBlocos
 * @property \App\Model\Table\CadFornecedoresTable&\Cake\ORM\Association\HasMany $CadFornecedores
 *
 * @method \App\Model\Entity\CadCondominio newEmptyEntity()
 * @method \App\Model\Entity\CadCondominio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadCondominio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadCondominio get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadCondominio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadCondominio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadCondominio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadCondominio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadCondominio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadCondominio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadCondominio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadCondominio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadCondominio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CadCondominiosTable extends Table
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

        $this->setTable('cad_condominios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CadContatos', [
            'foreignKey' => 'cad_contato_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CadEnderecos', [
            'foreignKey' => 'cad_endereco_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CadBlocos', [
            'foreignKey' => 'cad_condominio_id',
        ]);
        $this->hasMany('CadFornecedores', [
            'foreignKey' => 'cad_condominio_id',
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
            ->integer('cad_contato_id')
            ->requirePresence('cad_contato_id', 'create')
            ->notEmptyString('cad_contato_id');

        $validator
            ->integer('cad_endereco_id')
            ->requirePresence('cad_endereco_id', 'create')
            ->notEmptyString('cad_endereco_id');

        $validator
            ->scalar('site')
            ->maxLength('site', 100)
            ->allowEmptyString('site');

        $validator
            ->scalar('imagem')
            ->maxLength('imagem', 45)
            ->allowEmptyFile('imagem');

        $validator
            ->integer('email_reserva')
            ->allowEmptyString('email_reserva');

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
        $rules->add($rules->existsIn('cad_contato_id', 'CadContatos'), ['errorField' => 'cad_contato_id']);
        $rules->add($rules->existsIn('cad_endereco_id', 'CadEnderecos'), ['errorField' => 'cad_endereco_id']);

        return $rules;
    }
}
