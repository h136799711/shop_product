<?php
namespace Distributor\Controller;
use Distributor\Api\CommissionCountApi;
use Think\Controller;
use Admin\Api\GroupAccessApi;
use Admin\Api\ConfigApi;

class TestController extends Controller{
	
	public function index(){
		//$id_arr=array(4,6);
		//apiCall(CommissionCountApi::ADD,array($id_arr));
		$map=array(
			'name'=>'REFERRER_NUM',
		);
    	$rNresult=apiCall(ConfigApi::QUERY_NO_PAGING,array($map));
		dump($rNresult);
	}
}
