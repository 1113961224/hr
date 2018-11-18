<?php

namespace App\Http\Controllers\table;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TableController extends Controller
{
    //
    public function index(){
    	return view('table.table');
    }
    public function data(Request $request){
        $pagesize=$request->input(['pageSize']);
        $m_name=$request->input(['m_name']);
    	$info=DB::table('movie')->where('m_name','like','%'.$m_name.'%')->paginate($pagesize);
    	$result=[
            'page'=>$info->currentPage(),
            'total'=>$info->total(),
            'rows'=>$info->items()
        ];
        $data = response()->json($result);
        return $data;
    }
}
