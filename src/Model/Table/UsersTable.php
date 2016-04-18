<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Tasks
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Tasks', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name', 'This field is required');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name', 'This field is required');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'This field is required');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'This field is required')
            ->add('password', 'passwordsEqual', [
                'rule' => function ($value, $context) {
                    return
                        isset($context['data']['confirm_password']) && $context['data']['confirm_password'] === $value;
                },
                'message' => 'Password do not matched!'
            ]);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
