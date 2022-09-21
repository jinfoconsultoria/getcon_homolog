<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadUsuarios Model
 *
 * @property \App\Model\Table\CadApartamentosTable&\Cake\ORM\Association\BelongsTo $CadApartamentos
 *
 * @method \App\Model\Entity\CadUsuario newEmptyEntity()
 * @method \App\Model\Entity\CadUsuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadUsuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadUsuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadUsuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadUsuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadUsuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadUsuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadUsuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadUsuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CadUsuariosTable extends Table
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

        $this->setTable('cad_usuarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->scalar('usuario')
            ->maxLength('usuario', 45)
            ->allowEmptyString('usuario');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 45)
            ->allowEmptyString('senha');

        $validator
            ->integer('perfil')
            ->allowEmptyString('perfil');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 45)
            ->allowEmptyString('celular');

        $validator
            ->scalar('foto')
            ->maxLength('foto', 45)
            ->allowEmptyString('foto');

        $validator
            ->integer('categoria')
            ->allowEmptyString('categoria');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->integer('receber_mensagens')
            ->allowEmptyString('receber_mensagens');

        $validator
            ->integer('realizar_reservas')
            ->allowEmptyString('realizar_reservas');

        $validator
            ->scalar('veiculo')
            ->maxLength('veiculo', 45)
            ->allowEmptyString('veiculo');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 250)
            ->allowEmptyString('observacao');

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
        $rules->add($rules->existsIn('cad_apartamento_id', 'CadApartamentos'), ['errorField' => 'cad_apartamento_id']);

        return $rules;
    }
}
