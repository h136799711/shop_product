<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2015
// +----------------------------------------------------------------------
// | Author: zcs
// +----------------------------------------------------------------------

namespace Install\Controller;
use Think\Controller;
use Think\Storage;

class IndexController extends Controller{
	//安装首页
	public function index(){
		
		if(Storage::has(MODULE_PATH . 'Data/install.lock')){
			$this->error('已经成功安装了系统，请不要重复安装!',U('Index/error'));
		}


        session(null);
		session('step', 0);
		session('error', false);

		$this->display();
	}

	//安装完成
	public function complete(){
		$step = session('step');
		
		if(!$step){
			$this->redirect('index');
		} elseif($step != 3) {
			$this->redirect("Install/step{$step}");
		}
		
		Storage::put(MODULE_PATH . 'Data/install.lock', 'lock');
		
		//创建配置文件
		$this->assign('info',session('config_file'));

		session('step', null);
		session('error', null);
		$this->display();
	}
}
