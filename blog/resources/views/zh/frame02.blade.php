<div class="con_bg con_bg2">
    <div class="layer_close_btn"><img src="/img/close_img.png" alt=""></div>
    <div class="content_box">
        <div class="title_box">
            <div class="img_title">
                <img src="/img/zh/pop02_img01.png" alt="개인정보 수집 동의서">
            </div>
            <div class="middle_box">
                <h3><个人信息处理方针></h3>
                <p>1. 个人信息的收集、使用目的: 参赛作品审查及颁奖<br/><br/></p>
                <p>2. 收集的个人信息项目</p>
                <p class="pad25">※ 必需项目: 姓名，联系方式（座机、手机），出生年月日，邮箱，地址<br/><br/></p>
                <p>3. 个人信息保留及使用期限</p>
                <p class="pad25">
                    <span class="dot">保留及使用期限: 自报名起至大赛结束<br/></span>
                    <span class="dot">理由: 提供服务及制度改善<br/></span>
                    <span class="dot">保留及使用期限内提供个人信息的当事人本人可要求或者自行删除个人信息。<br/><br/></span></span>
                </p>
                <p>4. 为保护当事人的个人信息，收集到的个人信息均做加密处理。</p>
                <p class="pad25">
                    ① 当事人有权拒绝相关个人信息的收集与使用。<br/>
                    ② 但，拒绝收集与使用个人信息的情况下无法参赛。
                </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check1"> 本人同意以上个人信息处理方针。</label>
            </div>
            <div class="border_dot"></div>
            <div class="img_title">
                <img src="/img/zh/pop02_img02.png" alt="참가서약서">
            </div>
            <div class="middle_box">
                <h3>本人报名参加韩食振兴院主办的[2020面向外国人的韩餐视频大赛]，并约定遵守下列事项。</h3>
                    <p class="pad30 han han1">申请书上所有内容均如实填写，若不属实，获奖后奖金可能被取消。</p>
                    <p class="pad30 han han2">颁奖日期及奖金支付将个别通知各获奖者。</p>
                    <p class="pad30 han han3">获奖者的著作权归属于制作者。</p>
                    <p class="pad30 han han4">获奖作品可进行修改与变动，并尽可能根据主办方要求提交原件。</p>
                    {{-- <p class="pad30 han han5">출품작에 대한 저작권은 응모자에게 있습니다. 다만 주최 측은 입상작에 한하여 필요한 범위 내에서 합당한 보상을 전제로 지적재산권을 우선적으로 양수할 수 있습니다.</p> --}}
                    <p class="pad30 han han5">提交的参赛作品著作权属于参赛者。</p>
                    <p class="pad30 han han6">获奖作品可以编辑与公示，今后将用于农林畜产食品部及韩食振兴院官网、社交网站的宣传等商业用途。</p>
                    <p class="pad30 han han7">最终选定后，若发现已在韩国国内外其他渠道获奖，仍会被取消颁奖。</p>
                    <p class="pad30 han han8">其他大赛的获奖作品，盗用他人作品等情况均不予审查或回收奖金。</p>
                    <p class="pad30 han han9">奖金将根据韩国政府规定，扣去3.3%的税额后支付。</p>
                    <p class="pad30 han han10">获奖者居住在海外的情况，根据韩国法律规定，通过邮件通知税金并收集个人信息。<br/>(税金及公共缴费由韩食振兴院承担)</p>
                    <p class="pad30 han han11">参赛作品需不存在任何第三方著作权（音源、视频、照片、字体等），肖像权，商标权等法律问题，今后若出现相关纷争，责任全部在参赛者本人。</p>
                    <p class="pad30 han han12">选定获奖作品后主办方将支付奖金，若获奖者不提供个人信息或联系不上时将取消颁奖及奖金支付。</p>
                    <p class="pad30 han han13">以团队为单位领奖时，奖金全部支付给团队代表一人，其余一切事宜主办方一律不予干涉。以团队参赛时，团队代表需获得全团队同意后提交作品，之后发生的任何法律或道义问题责任均在团队代表。</p>
                    <p>
                        <br/>
                        参赛者有权拒绝认同以上事宜，拒绝认同时不予参赛。<br/>
                        约定今后需遵守以上事宜并不提出异议。
                    </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check2"> 参赛者熟知此誓约书并同意。</label>
            </div>
        </div>
        <div class="attend_box">
           <img src="/img/zh/pop02_img03.png" alt="申请参赛"> 
        </div>
    </div>
</div>
<div class="con_bg con_bg3">
    <div class="layer_close_btn"><img src="/img/close_img.png" alt=""></div>
    <form action="/comment_action" method="POST" name="fr3" onsubmit="return fun3();">
        {{ csrf_field() }}
        <input type="hidden" name="lang" value="kr">
        <input type="hidden" name="board_type" value="contest">
        <div class="content_box">
            <div class="title_box">
                <div class="top_img_box">
                    <img class="mo_none" src="/img/zh/pop03_img01.png" alt="참가신청서">
                    <img class="mo_block" src="/img/zh/m_pop03_img01.png" alt="참가신청서">
                </div>
                <div class="img_title">
                    <img src="/img/zh/pop03_img02.png" alt="개인정보 수집 동의서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="num01">视频标题</p>
                        <input type="text" name="subject" >
                    </div>
                    <div class="line_">
                        <p class="num02">企划意图，作品内容等说明</p>
                        <textarea name="contents" style="resize: none" ></textarea>
                    </div>
                    <div class="line_">
                        <p class="num03">参赛视频链接</p>
                        <input type="text" name="link_value" >
                        <span class="org small">* 参赛视频链接指的是个人社交网站上传后的链接（必须向所有人公开）。</span>
                    </div>
                    <div class="line_">
                        <p class="num04">参赛主题</p>
                        <input type="radio" name="type_1" id="type_1_1" value="김치 주제의 요리 영상 (쿡방)" ><label for="type_1_1">泡菜主题料理视频(烹饪视频)</label>
                        <input type="radio" name="type_1" id="type_1_2" value="한식 주제의 요리 영상 (먹방)" ><label for="type_1_2">韩餐主题吃播视频(吃播)</label>
                    </div>
                    <div class="line_">
                        <p class="num05">参赛社交媒体</p>
                        <input type="radio" name="type_2" id="type_2_1" value="유튜브" ><label for="type_2_1">YouTube</label>
                        <input type="radio" name="type_2" id="type_2_2" value="인스타그램"><label for="type_2_2">Instagram</label>
                    </div>
                    <div class="img_box_ra">
                        <img src="/img/zh/pop_bg03_img01.png" alt="">
                    </div>
                </div>
                <div class="img_title">
                    <img src="/img/zh/pop03_img03.png" alt="참가서약서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="wd_more num01">提交者姓名</p>
                        <input type="text" name="writer" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num02">提交者国籍</p>
                        <input type="text" name="country" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num03 mo_none">提交者联系方式<br/><span class="small" style="padding-left: 0;">(手机号)</span></p>
                        <p class="wd_more num03 mo_block">提交者联系方式 <span class="small" style="padding-left: 0;">(手机号)</span></p>
                        <input type="text" name="tel" >
                        <span class="org small">* 请填写可以联系到的手机号，如出现任何联系不上的问题，责任在参赛者本身。</span>
                    </div>
                    <div class="line_">
                        <p class="wd_more num04">提交者邮箱</p>
                        <input type="text" name="email" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num05">申請單位</p>
                        <input type="radio" name="type_3" id="type_3_1" value="개인" ><label for="type_3_1">個人</label>
                        <input type="radio" name="type_3" id="type_3_2" value="팀"><label for="type_3_2">球隊</label>
                    </div>
                </div>
            </div>
            <div class="attend_box">
                <input type="image" src="/img/zh/pop03_img04.png" alt="참가 신청하기">
                {{-- <img src="/img/zh/pop03_img04.png" alt="참가 신청하기">  --}}
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    function fun3() {
        var obj = document.fr3;
        
        if(obj.type_3.value == '') {
            alert('請選擇一個申請單位');
            obj.type_3[0].focus();
            return false;
        }

        if(obj.type_1.value == '') {
            alert('請選擇一個應用領域');
            obj.type_1[0].focus();
            return false;
        }

        if(obj.type_2.value == '') {
            alert('請選擇一個申請渠道');
            obj.type_2[0].focus();
            return false;
        }

        if(obj.subject.value == '') {
            alert('請輸入視頻標題');
            obj.subject.focus();
            return false;
        }

        if(obj.contents.value == '') {
            alert('請輸入項目意圖的描述等。');
            obj.contents.focus();
            return false;
        }

        if(obj.link_value.value == '') {
            alert('請輸入參與視頻的URL');
            obj.link_value.focus();
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

        if(obj.country.value == '') {
            alert('請輸入您的國籍');
            obj.country.focus();
            return false;
        }

        if(obj.email.value == '') {
            alert('請輸入您的電子郵件');
            obj.email.focus();
            return false;
        }
    }
</script>