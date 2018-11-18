<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
class agent extends Model
{
	//指定别的表名
    protected $table = 'movie'; 
    // 取消自动管理时间戳列
    // 只要数据表创建了create_at  update_at 就会全自动帮你维护
    public $timestamps = false;
    protected $fillable = ['m_name','m_type','m_time'];//开启白名单字段
    // protected $guarded=[''];    开启黑名单  （黑名单和白名单只能开启一个）
    // 查
    // 方法名固定scope
    public function scopeOfaccount($query, $m_name)
    {
        return $query->where('m_name', $m_name)->first();
    }
    public function updateValue($request){
        return [
            'm_name'=>$request->m_name,
            'm_type'=>$request->m_type
        ];
    }
    public function setValue($request){
        $this->attributes['m_name']=$request->m_name;
        // return [
        //     'm_name'=>$request->m_name,
        //     'm_type'=>$request->m_type,
        //     'm_time'=>$request->m_time
        // ];
    }
    
}
