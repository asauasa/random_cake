<?php

namespace App\Controller;

use App\Controller\AppController;

// アプリケーション設定
define('CONSUMER_KEY', '140207808459-k86gsrq32r6olhg8bqduhkq6up91hgit.apps.googleusercontent.com');
define('CALLBACK_URL', 'http://localhost:8765/lunch/newmember');
define('CONSUMER_SECRET', 'sF6u9M25k3XkCrxcImd2u5CO');

// URL
define('AUTH_URL', 'https://accounts.google.com/o/oauth2/auth');
define('TOKEN_URL', 'https://accounts.google.com/o/oauth2/token');
define('INFO_URL', 'https://www.googleapis.com/oauth2/v1/userinfo');

class LunchController extends AppController
{
	public function index() 
	{
		
	}
	
	public function auth()
	{
		// 認証ページにリダイレクト
		$params = array(
			'client_id' => CONSUMER_KEY,
			'redirect_uri' => CALLBACK_URL,
			'scope' => 'openid profile email',
			'response_type' => 'code',
		);
		// リダイレクト
		$this->response->header("Location: " . AUTH_URL . '?' . http_build_query($params));
	}
	
	public function newmember()
	{
		// アクセストークンの取得
		$params = array(
			'code' => $this->request->query('code'),
			'grant_type' => 'authorization_code',
			'redirect_uri' => CALLBACK_URL,
			'client_id' => CONSUMER_KEY,
			'client_secret' => CONSUMER_SECRET,
		);

		// POST送信
		$options = array('http' => array(
			'method' => 'POST',
			'content' => http_build_query($params)
		));
		
		$res = file_get_contents(TOKEN_URL, false, stream_context_create($options));
var_dump($http_response_header); exit();
		
		
		// レスポンス取得
		$token = json_decode($res, true);
		if(isset($token['error'])){
			echo 'エラー発生';
			exit;
		}
		$access_token = $token['access_token'];


		//--------------------------------------
		// ユーザー情報を取得してみる
		//--------------------------------------
		$user_params = array('access_token' => $access_token);
		$res = file_get_contents(INFO_URL . '?' . http_build_query($user_params));
		echo "<pre>" . print_r(json_decode($res, true), true) . "</pre>";
	}
	
	
}