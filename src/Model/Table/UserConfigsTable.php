<?php
//strictモード(厳密な型チェック)
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class UserConfigsTable extends Table
{
    protected $tableName = 'UserConfigs';
    
	public  function findUseConfigById($userId)
    {
        $td = TableRegistry::get($this->tableName);
        
        return $td
                ->find()
                ->where(['userId =' => $userId])
                ->first();
                
    }
}
