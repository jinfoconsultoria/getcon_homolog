<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadEnderecos Model
 *
 * @property \App\Model\Table\CadCondominiosTable&\Cake\ORM\Association\HasMany $CadCondominios
 * @property \App\Model\Table\CadFornecedoresTable&\Cake\ORM\Association\HasMany $CadFornecedores
 *
 * @method \App\Model\Entity\CadEndereco newEmptyEntity()
 * @method \App\Model\Entity\CadEndereco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadEndereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadEndereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadEndereco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadEndereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadEndereco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadEndereco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadEndereco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadEndereco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadEndereco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadEndereco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadEndereco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CadEnderecosTable extends Table
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

        $this->setTable('cad_enderecos');
        $this->setDisplayField('cep');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CadCondominios', [
            'foreignKey' => 'cad_endereco_id',
        ]);
        $this->hasMany('CadFornecedores', [
            'foreignKey' => 'cad_endereco_id',
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
            ->scalar('cep')
            ->maxLength('cep', 45)
            ->allowEmptyString('cep');

        $validator
            ->scalar('logradouro')
            ->maxLength('logradouro', 45)
            ->allowEmptyString('logradouro');

        $validator
            ->integer('numero')
            ->allowEmptyString('numero');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 45)
            ->allowEmptyString('bairro');

        $validator
            ->integer('tipo_logradouro')
            ->allowEmptyString('tipo_logradouro');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 45)
            ->allowEmptyString('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 45)
            ->allowEmptyString('estado');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
