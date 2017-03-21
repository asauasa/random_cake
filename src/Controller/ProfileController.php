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
		//■■■引数はユーザーID		
		$user_data = $user->find('byIdWithConfig', ['id' => 0]);
		
		//NULLの場合は、緯度に定数を代入
		$centralLatitude = $user_data->centralLatitude ?? CENTRAL_LATITUDE;
		//NULLの場合は、経度に定数を代入
		$centralLongitude = $user_data->centralLongitude ?? CENTRAL_LONGITUDE;
		
		$this->set('name', $user_data->name);
		$this->set('radius', $user_data->radius);
		$this->set('centralLatitude', $centralLatitude);
		$this->set('centralLongitude', $centralLongitude);
	}
	
	
}