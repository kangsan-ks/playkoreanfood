<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;

class Front extends Controller

{
    
    public function main(Request $request) {

        $return_list = array();
        $lang = request()->segment(1);
        if($lang == ''){
            $lang = 'kr';
        }

        $main_data_inform = DB::table('main_data_control') 
                    ->select(DB::raw('*'))
                    ->where('lang', $lang)
                    ->first();
                    

        $return_list['data'] = $main_data_inform;
        $return_list['lang'] = $lang;

		return view($lang.'/index', $return_list);

    }

    public function pop(Request $request) {

        $return_list = array();
        $return_url = '/'.$request->segment(1).'/'.$request->segment(2);

        $lang = request()->segment(1);
        if($lang == ''){
            $lang = 'kr';
        }

        
        $return_list['lang'] = $lang;
		return view($return_url, $return_list);

    }

    public function frame(Request $request) {

        $return_list = array();
        $return_url = '/'.$request->segment(1).'/'.$request->segment(2);

        $lang = request()->segment(1);
        if($lang == ''){
            $lang = 'kr';
        }

        
        $return_list['lang'] = $lang;
		return view($return_url, $return_list);

    }

    public function check_apply(Request $request) {
        $apply_all = DB::table('board') 
                    ->select(DB::raw('*'))
                    ->where('writer', $request->writer)
                    ->where('category3', $request->type_3)
                    ->where('tel', $request->tel)
                    ->where('category', $request->type_1)
                    ->count();
                    echo $apply_all;

        if($apply_all < 1){
            echo "<script>alert('입력하신 정보가 올바르지 않거나, 등록된 정보가 없습니다.');location.href='/';</script>";
        }else{
            echo "<script>alert('정상적으로 접수되었습니다.');location.href='/';</script>";
        }
        
        echo $apply_all;
    }

    public function comment_action(Request $request) {

        $board_set = DB::table('board') 
            ->select(DB::raw('*'))
            ->get();
        if($request->board_type == 'contest'){
            DB::table('board')->insert(
                [
                    'board_type' => $request->board_type,
                    'lang' => $request->lang,
                    'subject' => $request->subject,
                    'contents' => $request->contents,
                    'link_value' => $request->link_value,
                    'category' => $request->type_1,
                    'category2' => $request->type_2,
                    'writer' => $request->writer,
                    'country' => $request->country,
                    'tel' => $request->tel,
                    'email' => $request->email,
                    'category3' => $request->type_3,
                    'ip_addr' => request()->ip(),
                    'use_status' => "Y",
                    'reg_date' => \Carbon\Carbon::now(),
                ]
            );
            echo "<script>alert('영상 제출이 완료됐습니다.');location.href='/';</script>";
        }else if($request->board_type == 'inquiry'){
            DB::table('board')->insert(
                [
                    'board_type' => $request->board_type,
                    'lang' => $request->lang,
                    'subject' => $request->subject,
                    'contents' => $request->contents,
                    'link_value' => $request->link_value,
                    'category' => $request->type_1,
                    'category2' => $request->type_2,
                    'writer' => $request->writer,
                    'country' => $request->country,
                    'tel' => $request->tel,
                    'email' => $request->email,
                    'category3' => $request->type_3,
                    'ip_addr' => request()->ip(),
                    'use_status' => "Y",
                    'reg_date' => \Carbon\Carbon::now(),
                ]
            );
            echo "<script>alert('문의접수 완료됐습니다.');location.href='/';</script>";
        }
	}

}
?>