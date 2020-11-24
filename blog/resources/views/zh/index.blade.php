<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>2020 韓國食品振興院視頻比賽</title>
    <meta property="title" content="韓國食品振興院">
    <meta name="description" content="used can be AS GOOD AS NEW with CSE">
    <meta name="keywords" content="CUSTOMER SATISFACTION ENGINEERING">
    <meta property="og:title" content="韓國食品振興院">
    <meta property="og:description" content="used can be AS GOOD AS NEW with CSE">
    <link rel="shortcut icon" type="image⁄x-icon" href="">
    <meta name="author" content="韓國食品振興院">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/{{$lang}}/index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/js/sweetalert.js"></script>
    {{-- <script src="/js/functions.js"></script>
    <script src="/js/grayscale.js"></script> --}}
    <script src="/js/index.js"></script>
</head>
<body>
    <div id="container">
        <div class="form_outer">
            <div class="inquiry_box">
                <div class="layer1 layer">
                    <div class="layer_close_btn2"><img src="/img/close_img2.png" alt="" class="color_black"></div>
                    <h2>參與確認</h2>
                    <form action="check_apply" method="POST" name="fr1" onsubmit="return fun1();">
                        {{ csrf_field() }}
						<input type="hidden" value="{{$lang}}" name="lang">
                        <div class="form_line">
                            <p>申請單位</p>
                            <div>
                                <label><input type="radio" name="type_3" value="개인" >個人</label>
                                <label><input type="radio" name="type_3" value="팀">球隊</label>
                            </div>
                        </div>
                        <div class="form_line">
                            <p>参赛主题</p>
                            <div>
                                <label><input type="radio" name="type_1" id="type_1_1_new" value="김치 주제의 요리 영상 (쿡방)" >泡菜主题料理视频（烹饪视频）</label>
                                <label class="m_br"><input type="radio" name="type_1" id="type_1_2_new" value="한식 주제의 요리 영상 (먹방)">韩餐主题吃播视频（吃播）</label>
                            </div>
                        </div>
                        <div class="form_line">
                            <p>提交者姓名</p>
                            <label>
                                <input type="text" name="writer" >
                                <br/>
                                <span>
                                    * 請輸入您在申請時輸入的代表姓名。
                                </span>
                            </label>
                        </div>
                        <div class="form_line">
                            <p>提交者联系方式（手机号)</p>
                            <label>
                                <input type="text" name="tel" >
                                <br/>
                                <span>
                                    * 請輸入您在申請時輸入的聯繫信息。
                                </span>
                            </label>
                        </div>
                        <div class="submit_box">
                            <input type="submit" value="檢查申請是否參加" >
                        </div>
                    </form>
                </div>
                <div class="layer2 layer">
                    <div class="layer_close_btn2"><img src="/img/close_img2.png" alt="" class="color_black"></div>
                    <h2>问询</h2>
                    <form action="/comment_action" method="POST" name="fr2" onsubmit="return fun2();">
                        {{ csrf_field() }}
                        <input type="hidden" name="lang" value="{{$lang}}">
                        <input type="hidden" name="board_type" value="inquiry">
                        <div class="form_line">
                            <p>名稱</p>
                            <label>
                                <input type="text" name="writer" >
                            </label>
                        </div>
                        <div class="form_line">
                            <p>電子郵件</p>
                            <label>
                                <input type="text" name="email" >
                            </label>
                        </div>
                        <div class="form_line">
                            <p>標題</p>
                            <label>
                                <input type="text" name="subject" >
                            </label>
                        </div>
                        <div class="form_line">
                            <p>查詢內容</p>
                            <label>
                                <textarea name="contents" ></textarea>
                            </label>
                        </div>
                        <div class="submit_box">
                            <input type="submit" value="發送">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="frame_pop">
            <div class="layer_frame">
                @include('/zh/frame01')
                @include('/zh/frame02')
                @include('/zh/frame03')
            </div>
        </div>
        <div id="iframe_bg">
            <div class="close_btn">X</div>
        </div>
        <div id="header">
            <div class="h_inner">
                <div class="logo">
                    {{-- <a href="https://www.mafra.go.kr/mafra/index.do">
                        <img class="" src="/img/{{$lang}}/logo1.png" alt="">
                    </a> --}}
                    <a href="https://www.hansik.or.kr/kr/main/main.do">
                        <img class="" src="/img/{{$lang}}/logo2.png" alt="">
                    </a>                    
                </div>
                <div class="nav mo_none">
                    <a href="#none" class="on_active top_btn">主页</a>
                    <a href="#none" class="frame_pop01">
                        大赛介绍
                    </a>
                    <a href="#none" class="frame_pop04">
                        大赛视频
                    </a>
                    <a href="#none" class="inspection inspection2">
                        问询
                    </a>
                    <a href="#none" class="inspection inspection1">
                        參與確認
                    </a>
                    <a style="cursor: pointer;" class="lang_change">
                        <img src="/img/lang_03.png" alt="">
                        中文
                        <img src="/img/lang_arrow.png" alt="" class="arrow">
                        <ul style="z-index:10;">
                            <li onclick="javascript:location.href = '/';">
                                <img src="/img/lang_01.png" alt="">
                                韓語
                            </li>
                            <li onclick="javascript:location.href = '/en';">
                                <img src="/img/lang_02.png" alt="">
                                英語
                            </li>
                            <li onclick="javascript:location.href = '/fe';">
                                <img src="/img/lang_04.png" alt="">
                                法文
                            </li>
                            <li onclick="javascript:location.href = '/ja';">
                                <img src="/img/lang_05.png" alt="">
                                日本
                            </li>
                            <li onclick="javascript:location.href = '/es';">
                                <img src="/img/lang_06.png" alt="">
                                西班牙文
                            </li>
                            <li onclick="javascript:location.href = '/vi';">
                                <img src="/img/lang_07.png" alt="">
                                越南文
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="nav_bar mo_block">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="m_nav_bg">
                <ul class="m_nav_list mo_block">
                    <li>
                        <a href="#none">主页</a>
                    </li>
                    <li>
                        <a href="#none" class="frame_pop01">
                            大赛介绍
                        </a>
                    </li>
                    <li>
                        <a href="#none" class="frame_pop04">
                            大赛视频
                        </a>
                    </li>
                    <li>
                        <a href="#none" class="inspection inspection2">
                            问询
                        </a>
                    </li>
                    <li>
                        <a href="#none" class="inspection inspection1">
                            參與確認
                        </a>
                    </li>
                    <li class="flex_box">
                        <a href="/">
                            <img src="/img/lang_01.png" alt="">
                            韓語
                        </a>
                        <a href="/en">
                            <img src="/img/lang_02.png" alt="">
                            英語
                        </a>
                        <a href="/fe">
                            <img src="/img/lang_04.png" alt="">
                            法文
                        </a>
                        <a href="/ja">
                            <img src="/img/lang_05.png" alt="">
                            日本
                        </a>
                        <a href="/es">
                            <img src="/img/lang_06.png" alt="">
                            西班牙文
                        </a>
                        <a href="/vi">
                            <img src="/img/lang_07.png" alt="">
                            越南文
                        </a>
                    </li>
                    
                </ul>
                <div class="flex_box">
                    <ul>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div id="section">
            <div class="inner">
                <div class="item03 contest">
                    <img src="/img/{{$lang}}/video_submit_img.png" alt="">
                </div>
                <div class="sec_title item01">
                    <img class="mo_none" src="/img/{{$lang}}/sec1_title.png" alt="">
                    <img class="mo_block" src="/img/{{$lang}}/m_sec1_title.png" alt="">
                </div>
                <div class="sec_sub view_video item02" data-video-id="{{ $data->video_link1 }}">
                    <img class="mo_none" src="/img/{{$lang}}/sec1_sub1.png" alt="">
                    <img class="mo_block" src="/img/{{$lang}}/m_sec1_sub1.png" alt="">
                </div>
                <div class="item03">
                    <img class="mo_none" src="/img/{{$lang}}/sec1_sub2.png" alt="">
                    <img class="mo_block" src="/img/{{$lang}}/m_sec1_sub2.png" alt="">
                </div>
                <div class="sec_sub item04">
                    <img class="mo_none" src="/img/{{$lang}}/sec1_sub3.png" alt="">
                    <img class="mo_block" src="/img/{{$lang}}/m_sec1_sub3.png" alt="">
                </div>
                <div class="view_video item05" data-video-id="{{ $data->video_link2 }}">
                    <img class="mo_none" src="/img/{{$lang}}/sec1_sub4.png" alt="">
                    <img class="mo_block" src="/img/{{$lang}}/m_sec1_sub4.png" alt="">
                </div>
                <div class="view_video item06" data-video-id="{{ $data->video_link3 }}">
                    <img class="mo_none" src="/img/{{$lang}}/sec1_sub5.png" alt="">
                    <img class="mo_block" src="/img/{{$lang}}/m_sec1_sub5.png" alt="">
                </div>
                <div class="view_video item07" data-video-id="{{ $data->video_link4 }}">
                    <img class="mo_none" src="/img/{{$lang}}/sec1_sub6.png" alt="">
                    <img class="mo_block" src="/img/{{$lang}}/m_sec1_sub6.png" alt="">
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="top_line">
                <div class="f_inner">
                    <ul>
                        <li class="see_agree"><a href="javascript:void(0);" target="_blank">使用服务条款</a></li>
                        <li class="org see_agree"><a href="javascript:void(0);" target="_blank">个人信息处理方针</a></li>
                        <li class="see_agree"><a href="javascript:void(0);" target="_blank">拒绝邮件无端收集</a></li>
                        <li class="see_agree"><a href="javascript:void(0);" target="_blank">著作权政策</a></li>
                        {{-- <li><a href="https://www.hansik.or.kr/kr/board/contact/form/230?menuId=132" target="_blank">Contact Us</a></li> --}}
                    </ul>
                    <div class="top_btn">
                        <img class="mo_none" src="/img/{{$lang}}/go_top_btn.png" alt="">
                    </div>
                </div>
            </div>
            <div class="f_text f_inner">
                <div class="f_logo">
                    <a href="https://www.mafra.go.kr/mafra/index.do" target="_blank" class="mo_none">
                        <img class="mo_none" src="/img/{{$lang}}/f_logo01.png" alt="">
                    </a>
                    <a href="https://www.mafra.go.kr/mafra/index.do">
                        <img class="mo_block" src="/img/{{$lang}}/f_logo01.png" alt="">
                    </a>
                    <a href="https://www.hansik.or.kr/kr/main/main.do">
                        <img class="mo_block" src="/img/{{$lang}}/f_logo02.png" alt="">
                    </a>
                </div>
                <div class="text">
                    {{-- <p>
                        우)06774 서울특별시 서초구 강남대로 27 aT 센터 601호 (재) 한식진흥원<br/>
                        대표번호. 02-6300-2084 팩스번호. 02-6300-2085
                    </p> --}}
                    <p>
                        COPYRIGHT 2017 KFPI(Korean Food Promotion Institute) ALL RIGHTS RESERVED.
                    </p>
                </div>
                <div class="img_area">
                    <a href="https://www.hansik.or.kr/kr/main/main.do" target="_blank">
                        <img class="mo_none small_img" src="/img/{{$lang}}/f_logo02.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        function fun1() {
            var obj = document.fr1;
            
            if(obj.type_3.value == '') {
                alert('請輸入申請單位');
                obj.type_3[0].focus();
                return false;
            }

            if(obj.type_1.value == '') {
                alert('請輸入申請字段');
                obj.type_1[0].focus();
                return false;
            }

            if(obj.writer.value == '') {
                alert('請輸入你的名字');
                obj.writer.focus();
                return false;
            }

            if(obj.tel.value == '') {
                alert('請輸入您的聯繫方式');
                obj.tel.focus();
                return false;
            }
        }

        function fun2() {
            var obj = document.fr2;
            
            if(obj.writer.value == '') {
                alert('請輸入你的名字');
                obj.writer.focus();
                return false;
            }

            if(obj.email.value == '') {
                alert('請輸入您的電子郵件');
                obj.email.focus();
                return false;
            }

            if(obj.subject.value == '') {
                alert('請輸入標題');
                obj.subject.focus();
                return false;
            }

            if(obj.contents.value == '') {
                alert('請輸入您的詢問');
                obj.contents.focus();
                return false;
            }
        }
        
        $(window).scroll(function(){

        });

        // $('.nav.mo_none > a').hover(function(){
        //     $(this).addClass('on_active');
        // },function(){
        //     $(this).removeClass('on_active');
        // })
        $('.inspection').click(function(){
            form_outer();
            if($(this).hasClass('inspection1')){
                $('.inquiry_box .layer1').show();
            }else{
                $('.inquiry_box .layer2').show();
            }
        });

        $('.frame_pop04').click(function(){
            $('.frame_pop').show();
            $('.con_bg4').show();
        });

        $('.item03').click(function(){
            $('.frame_pop').show();
            $('.con_bg2').show();
        });

        $('.frame_pop01').click(function(){
            $('.frame_pop').show();
            $('.con_bg1').show();
        });

        $('.layer_close_btn').click(function(){
            $('.frame_pop').hide();
            $('.con_bg').hide();
        });

        $('.con_bg2 .attend_box').click(function(){
            if($("input:checkbox[name=check1]").is(":checked") == false){
                alert('必須同意隱私政策。');
                $("input:checkbox[name=check1]").focus();
                return false;
            }
            if($("input:checkbox[name=check2]").is(":checked") == false){
                alert('必須參加者承諾。');
                $("input:checkbox[name=check2]").focus();
                return false;
            }
            $('.con_bg2').hide();
            $('.con_bg3').show();
            $('.frame_pop .layer_frame').animate({scrollTop:0},0);
        });

        $('.view_video').click(function(){
            $('#iframe_bg').children('iframe').remove();
            var url = $(this).attr("data-video-id");

            url = url.replace(/watch\?v=/gi, "embed/");
            url = url.replace(/url/gi, "src");
            var append_item = '<iframe src="'+url+'" frameborder="0"></iframe>';
            $('#iframe_bg').append(append_item);
            $('#iframe_bg').show();
            i_height();
            
            //$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
        });

        $('#iframe_bg .close_btn').click(function(){
            $('#iframe_bg').children('iframe').remove();
            $('#iframe_bg').hide();
        });

        $('.nav_bar').click(function(){
            $('#m_nav_bg').toggle()
        });

        $(window).resize(function(){
            i_height();
        });

        function i_height(){
            var i_width = $('#iframe_bg iframe').width();
            $('#iframe_bg iframe').height(i_width * 0.5625);
        }

        $('.see_agree').click(function(){
            var idx = $(this).index();
            console.log(idx);
            switch (idx){
                case 0:
                window.open('/zh/pop_0'+(idx+1),'使用服务条款','width = 500, height = 500, top = 100, left = 200, location = no');
                break;
                case 1:
                window.open('/zh/pop_0'+(idx+1),'个人信息处理方针','width = 500, height = 500, top = 100, left = 200, location = no');
                break;
                case 2:
                window.open('/zh/pop_0'+(idx+1),'拒绝邮件无端收集','width = 500, height = 500, top = 100, left = 200, location = no');
                break;
                case 3:
                window.open('/zh/pop_0'+(idx+1),'著作权政策','width = 500, height = 500, top = 100, left = 200, location = no');
                break;
            }
        });

        $('.top_btn').click(function(){
            $('html, body').animate({scrollTop: 0},500)
        });

        $('#header .nav_bar').click(function(){
            $(this).toggleClass('on');
        });

        AOS.init();
        window.addEventListener('load', AOS.refresh);
            
        function form_outer(){
            $('.form_outer').show();
        }

        $('.layer_close_btn2').click(function(){
            $('.form_outer').hide();
            $('.inquiry_box .layer').hide();
        });

        $('.lang_change').click(function(){
            $(this).toggleClass('on');
            $('#header .h_inner .nav a ul').slideToggle(500);
        })
    </script>
</body>
</html>