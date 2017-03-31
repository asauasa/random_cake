<?php
//strictモード(厳密な型チェック)
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

use App\Model\Table\UserConfigsTable;

class UsersTable extends Table
{
	public function initialize(array $config) 
	{
		$this->hasOne('UserConfigs');
	}
	
	
	public  function findByIdWithConfig(Query $query, array $options)
	{
		return $this->find()
				->join([
					'table'	=> 'user_configs',
					'alias'		=> 'c',
					'type'		=> 'LEFT',
					'conditions'	=> 'c.user_id = Users.id'
				])
				->select([
					'id'				=> 'Users.id',
					'name'			=> 'Users.name',
					'mailaddress'		=> 'Users.mailaddress',
					'radius'			=> 'c.radius',
					'centralLatitude'		=> 'c.central_latitude',
					'centralLongitude'	=> 'c.central_longitude'
				])
				->where(['Users.id =' => $options['id']])
				->first();
	}
}
