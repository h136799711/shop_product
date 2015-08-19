<?php
// .-----------------------------------------------------------------------------------
// | WE TRY THE BEST WAY
// |-----------------------------------------------------------------------------------
// | Author: 贝贝 <hebiduhebi@163.com>
// | Copyright (c) 2013-2015, http://www.gooraye.net. All Rights Reserved.
// |-----------------------------------------------------------------------------------

namespace Ucenter\Api;
use Common\Api\Api;
use Ucenter\Model\UcenterMemberModel;
/**
 * 统一用户信息表
 */
class UcenterMemberApi extends Api{
	const ADD="Ucenter/UcenterMember/add";
	const QUERY_NO_PAGING="Ucenter/UcenterMember/queryNoPaging";
	const DELETE="Ucenter/UcenterMember/delete";
	
	protected function _init(){
		$this->model = new UcenterMemberModel();
	}
	
}
