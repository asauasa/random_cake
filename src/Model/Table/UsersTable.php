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
	public  function findTest()
	{
		$result = $user->find()
				->join([
					'table'	=> 'user_config',
					'alias'		=> 'c',
					'type'		=> 'LEFT',
					'conditions'	=> 'c.user_id = User.id'
				])
				
				->select([
					'id'				=> 'User.id',
					'name'			=> 'User.name',
					'mailaddress'		=> 'User.mailaddress',
					'radius'			=> 'c.radius',
					'centralLatitude'		=> 'c.central_latitude',
					'centralLongitude'	=> 'c.central_longitude'
				])
				->where(['User.id =' => $userId])
				->first();
		return $result;
	}
	
	
	public  function findByIdWithConfig(int $userId): array
	{
		$user =  TableRegistry::get('User');
		
		$result = $user->find()
				->join([
					'table'	=> 'user_config',
					'alias'		=> 'c',
					'type'		=> 'LEFT',
					'conditions'	=> 'c.user_id = User.id'
				])
				->select([
					'id'				=> 'User.id',
					'name'			=> 'User.name',
					'mailaddress'		=> 'User.mailaddress',
					'radius'			=> 'c.radius',
					'centralLatitude'		=> 'c.central_latitude',
					'centralLongitude'	=> 'c.central_longitude'
				])
				->where(['User.id =' => $userId])
				->first();
		return $result;
	}
}
