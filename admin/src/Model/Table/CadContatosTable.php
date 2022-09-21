<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadContatos Model
 *
 * @property \App\Model\Table\CadCondominiosTable&\Cake\ORM\Association\HasMany $CadCondominios
 *
 * @method \App\Model\Entity\CadContato newEmptyEntity()
 * @method \App\Model\Entity\CadContato newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CadContato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadContato get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadContato findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CadContato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadContato[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadContato|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadContato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadContato[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadContato[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadContato[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CadContato[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CadContatosTable extends Table
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

        $this->setTable('cad_contatos');
        $this->setDisplayField('email');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CadCondominios', [
            'foreignKey' => 'cad_contato_id',
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
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 45)
            ->allowEmptyString('telefone');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
