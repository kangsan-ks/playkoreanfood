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

class Back extends Controller

{

    public function as_login(Request $request) {

		return view('/boffice/as_login'); 

    }
    
    public function as_login_action(Request $request) {
		
		$member_infom_count = DB::table('admin_member') 
				->select(DB::raw('*'))
				->where('user_id', $request->id)
				->get()->count();		
		
		if($member_infom_count > 0) {
			
			$member_infom = DB::table('admin_member') 
					->select(DB::raw('*'))
					->where('user_id', $request->id)
					->first();

			if (Hash::check($request->pw, $member_infom->passwd)) {

				session(['user_id' => $request->id]);

				echo "<script>alert('로그인되었습니다.');location.href='/as_admin/main_set';</script>";
			} else {
				echo "<script>alert('비밀번호가 잘못되었습니다.');location.href='/as_admin/login';</script>";
			}
			
		} else {
			echo "<script>alert('등록되어 있지 않은 아이디입니다.');location.href='/as_admin/login';</script>";
		}
		
    }
    
    public function ey_logout(Request $request) {
		$request->session()->flush();
		echo "<script>alert('로그아웃 되었습니다.');location.href='/as_admin/login';</script>";
	}

	public function main_set(Request $request) {

		$main_data_inform = DB::table('main_data_control') 
                    ->select(DB::raw('*'))
                    ->where('lang', 'kr')
                    ->first();

        $return_list['data'] = $main_data_inform;
		return view("/boffice/main_set", $return_list);
    }

    public function change_main_set(Request $request) {

        DB::table('main_data_control')
        ->where('lang', 'kr')
        ->update(    
            [
                'video_link1' => $request->video_link1,
                'video_link2' => $request->video_link2,
                'video_link3' => $request->video_link3,
                'video_link4' => $request->video_link4,
                
            ]
        );

		echo "<script>alert('수정됐습니다.');location.href='/as_admin/main_set';</script>";
		exit;
	}

	public function ey_board_view(Request $request) {

		$board_inform = DB::table('board') 
						->select(DB::raw('*'))
						//->where('board_type', $request->board_type)
						->where('idx', $request->board_idx)
						->first();

		$return_list['data'] = $board_inform;
		
		return view('as_board_view', $return_list);
	}

	public function ey_board_list(Request $request) {

		if(request()->segment(2) == "contest") {
			$boardType = "contest";
		} else {
			$boardType = "inquiry";
		}

		$paging_option = array(
			"pageSize" => 10,
			"blockSize" => 5
		);

		$thisPage = ($request->page) ? $request->page : 1 ;
		$paging = new PagingFunction($paging_option);

		$totalQuery = DB::table('board');
		if($request->key != "") {
			$totalQuery->where(function($totalQuery) use($request){
				$totalQuery->where('subject', 'like', '%' . $request->key . '%')
				->orWhere('contents', 'like', '%' . $request->key . '%');
			});
		}

		$totalQuery->where('board_type', $boardType);
        $totalQuery->where(function($query_set) {
                $query_set->where('top_type', 'Y')
                ->orWhere('top_type', null);
        });

		if($request->category_type) {
			$totalQuery->where('category', $request->category_type);
		}

		if(request()->segment(2) == "ey_data_room" && !$request->category_type) {
			$totalQuery->where('category', 1);
		}

		$totalCount = $totalQuery->get()->count();
		
		$paging_view = $paging->paging($totalCount, $thisPage, "page");
		
		$query = DB::table('board')
				->select(DB::raw('*, substr(reg_date, 1, 10) as reg_date_cut'))
				->orderBy('idx', 'desc');
				
		if($request->key != "") {
			$query->where(function($query) use($request){
				$query->where('subject', 'like', '%' . $request->key . '%')
				->orWhere('contents', 'like', '%' . $request->key . '%');
			});
		}

		$query->where('board_type', $boardType);
        // $query->where(function($query_set2) {
        //         $query_set2->where('top_type', 'Y')
        //         ->orWhere('top_type', null);
        // });
		
		//$query->where('top_type', '<>', 'Y');
		//$query->orWhere('top_type', null);
		
		// if($request->category_type) {
		// 	$query->where('category', $request->category_type);
		// }

		// if(request()->segment(2) == "ey_data_room" && !$request->category_type) {
		// 	$query->where('category', 1);
		// }

		if($request->page != "" && $request->page > 1) {
			$query->skip(($request->page - 1) * $paging_option["pageSize"]);
		}

		$list = $query->take($paging_option["pageSize"])->get();
		
		// 게시판 출력 글 번호 계산
		$number = $totalCount-($paging_option["pageSize"]*($thisPage-1));

		$board_top_count = DB::table('board') 
					->select(DB::raw('*'))
					->where('board_type', $boardType)
					->where('top_type', 'Y')
					->get()->count();

		$board_top_list = DB::table('board') 
					->select(DB::raw('*, substr(reg_date, 1, 10) as reg_date_cut'))
					->where('board_type', $boardType)
					->where('top_type', 'Y')
					->get();

		$return_list = array();
		$return_list["board_top_count"] = $board_top_count;
		$return_list["board_top_list"] = $board_top_list;
		$return_list["data"] = $list;
		$return_list["data2"] = $list;
		$return_list["number"] = $number;
		$return_list["key"] = $request->key;
		$return_list["totalCount"] = $totalCount;
		$return_list["paging_view"] = $paging_view;
		$return_list["page"] = $thisPage;
		$return_list["key"] = $request->key;

		return view("as_board_list", $return_list);

    }

}
?>