<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

use App\Controller\AppController;
use App\Model\Table\UsersTable;

// 緯度経度
define('CENTRAL_LATITUDE', '35.67121267303759');
define('CENTRAL_LONGITUDE', '139.76488766922');

class ProfileController extends AppController
{
	public function edit()
	{
		$user = TableRegistry::get('Users');
		//■■■引数はユーザーID	authで取得	
		$user_data = $user->findById(1)->contain(['UserConfigs'])->first();
		
		//NULLの場合は、緯度に定数を代入
		$centralLatitude = $user_data->user_config->central_latitude ?? CENTRAL_LATITUDE;
		//NULLの場合は、経度に定数を代入
		$centralLongitude = $user_data->user_config->central_longitude ?? CENTRAL_LONGITUDE;
		
		$this->set('name', $user_data->name);
		$this->set('radius', $user_data->user_config->radius);
		$this->set('centralLatitude', $centralLatitude);
		$this->set('centralLongitude', $centralLongitude);
	}
	
	public function edited()
	{
		$usersTable = TableRegistry::get('Users');
		
		$userconfigs1 = $usersTable->UserConfigs->findByUserId(1)->first();
		
		
		$userConfigs1->_joinData = $usersTable->UserConfigs->newEntity();
		$userConfigs1->_joinData->user_id = 1;
		
		var_dump($userConfigs1);exit();
		
		
		
		$usersTable = TableRegistry::get('Users');
		//■■■引数はユーザーID	authで取得	
		$userConfig = $usersTable->UserConfigs->findById(1)->first();
		
		var_dump($userConfig);exit();
		
		//エンティティを生成
		$users = $usersTable->newEntity();
		$users->name						= $this->request->data('name');
		$users->user_config					= $userConfig;
		$users->user_config->central_latitude		= $this->request->data('lat');
		$users->user_config->central_longitude	= $this->request->data('lng');
		$users->user_config->radius			= $this->request->data('radius');
		
		$usersTable->save($users);
		
		return $this->redirect(['action' => 'edit']);
		
	}
	
	
}