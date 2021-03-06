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
                    ->where('lang', 'kr')
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

        $lang = $request->lang;
        if($lang == ''){
            $lang = 'kr';
        }

        if($lang == 'kr'){
            if($apply_all < 1){
                echo "<script>alert('작성한 정보가 잘못되었거나 등록된 정보가 없습니다.');location.href='/';</script>";
            }else{
                echo "<script>alert('정상적으로 접수되었습니다.');location.href='/';</script>";
            }
        }elseif($lang == 'zh'){
            if($apply_all < 1){
                echo "<script>alert('您创建的信息不正确或没有注册信息。');location.href='/zh';</script>";
            }else{
                echo "<script>alert('已成功收到。');location.href='/zh';</script>";
            }
        }elseif($lang == 'en'){
            if($apply_all < 1){
                echo "<script>alert('The information you created is incorrect or there is no registered information.');location.href='/en';</script>";
            }else{
                echo "<script>alert('It has been successfully received.');location.href='/en';</script>";
            }
        }elseif($lang == 'fe'){
            if($apply_all < 1){
                echo "<script>alert('Une erreur est survenue. Veuillez réessayer.');location.href='/fe';</script>";
            }else{
                echo "<script>alert('Votre demande a été reçue avec succès.');location.href='/fe';</script>";
            }
        }elseif($lang == 'vi'){
            if($apply_all < 1){
                echo "<script>alert('Thông tin bạn tạo không chính xác hoặc không có thông tin đăng ký.');location.href='/fe';</script>";
            }else{
                echo "<script>alert('Nó đã được nhận thành công.');location.href='/fe';</script>";
            }
        }elseif($lang == 'es'){
            if($apply_all < 1){
                echo "<script>alert('La información que creó es incorrecta o no hay información registrada.');location.href='/fe';</script>";
            }else{
                echo "<script>alert('Ha sido recibido con éxito.');location.href='/fe';</script>";
            }
        }elseif($lang == 'ja'){
            if($apply_all < 1){
                echo "<script>alert('作成した情報が間違っているか、登録された情報はありません。');location.href='/fe';</script>";
            }else{
                echo "<script>alert('正常に受信されました。');location.href='/fe';</script>";
            }
        }
    }

    public function comment_action(Request $request) {

        $board_set = DB::table('board') 
            ->select(DB::raw('*'))
            ->get();

        $lang = $request->lang;
        if($lang == ''){
            $lang = 'kr';
        }

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

            if($lang == 'kr'){
                echo "<script>alert('영상 제출이 완료됐습니다.');location.href='/';</script>";
            }elseif($lang == 'zh'){
                echo "<script>alert('视频提交完成。');location.href='/zh';</script>";
            }elseif($lang == 'en'){
                echo "<script>alert('Your application has been successfully submitted.');location.href='/en';</script>";
            }elseif($lang == 'fe'){
                echo "<script>alert('La soumission de la vidéo est terminée.');location.href='/fe';</script>";
            }elseif($lang == 'es'){
                echo "<script>alert('El envío del video está completo.');location.href='/es';</script>";
            }elseif($lang == 'vi'){
                echo "<script>alert('Quá trình gửi video đã hoàn tất.');location.href='/vi';</script>";
            }elseif($lang == 'ja'){
                echo "<script>alert('映像送信が完了しました。');location.href='/ja';</script>";
            }
            
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
            if($lang == 'kr'){
                echo "<script>alert('문의접수 완료됐습니다.');location.href='/';</script>";
            }elseif($lang == 'zh'){
                echo "<script>alert('您的询问已经收到。');location.href='/zh';</script>";
            }elseif($lang == 'en'){
                echo "<script>alert('Inquiry reception is complete.');location.href='/en';</script>";
            }elseif($lang == 'fe'){
                echo "<script>alert('Votre demande a été reçue.');location.href='/fe';</script>";
            }elseif($lang == 'es'){
                echo "<script>alert('Su consulta ha sido recibida.');location.href='/es';</script>";
            }elseif($lang == 'vi'){
                echo "<script>alert('Yêu cầu của bạn đã được nhận.');location.href='/vi';</script>";
            }elseif($lang == 'ja'){
                echo "<script>alert('お問い合わせの受付完了されました。');location.href='/ja';</script>";
            }
        }
	}

}
?>