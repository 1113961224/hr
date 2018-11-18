<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\agent;
class TestController extends Controller
{
    public function index(){
    	$agent=new agent();
    	// 查询
    	dd($agent->Ofaccount('你的名字'));
    }
    // 添加视图
    public function create(){
    	return view('agent.agent');
    }
    public function store(Request $request){
    	$agent=new agent();
        $request->m_time=date('Y-m-d H:i:s',time());
    	$input=$agent->setValue($request);
        dd($agent);
    	$agent->create($input);     //会过滤掉黑名单的字段
        // $agent->save();    会将黑名单的值一并存储
    }
    public function edit(Request $request){
        $agent=new agent();
        $info=$agent->find(10);
        return view('agent.agent_edit',['info'=>$info]);
    }
    public function update(Request $request){
        $agent=new agent();
        $input=$agent->updateValue($request);
        dd($agent->find($request->id)->update($input));
    }
}
