<div class="con_bg con_bg2">
    <div class="layer_close_btn"><img src="/img/close_img.png" alt=""></div>
    <div class="content_box">
        <div class="title_box">
            <div class="img_title">
                <img src="/img/ja/pop02_img01.png" alt="개인정보 수집 동의서">
            </div>
            <div class="middle_box">
                <h3><個人情報保護方針></h3>
                <p>1. 個人情報の収集および利用の目的 : 出品作の審査および授賞<br/><br/></p>
                <p>2. 収集する個人情報の項目</p>
                <p class="pad25">※ 必須項目: 氏名、連絡先（電話番号、携帯番号）、生年月日、電子メールアドレス、住所<br/><br/></p>
                <p>3. 個人情報の保存および利用期間</p>
                <p class="pad25">
                    <span class="dot">保存および利用期間 : 受付から公募終了時まで<br/></span>
                    <span class="dot">目的 : サービスの提供および制度改善<br/></span>
                    <span class="dot">保存および利用期間が満了していなくても、当該個人情報提供者が要請したり直接削除したりすることで、個人情報の提供を停止することができます。<br/><br/></span></span>
                </p>
                <p>4. 個人情報保護のため、収集された個人情報は暗号化されます。</p>
                <p class="pad25">
                    ① 応募者は、個人情報の収集および利用への同意を拒否する権利があります。<br/>
                    ② ただし、個人情報の収集および利用に同意しない場合、公募展には参加できません。
                </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check1"> 上記の個人情報保護方針に同意します。</label>
            </div>
            <div class="border_dot"></div>
            <div class="img_title">
                <img src="/img/ja/pop02_img02.png" alt="참가서약서">
            </div>
            <div class="middle_box">
                <h3>私は、韓食振興院が主催する「2020外国人向け韓食映像公募展」に作品を出品するにあたり、以下の事項を遵守することを誓います。</h3>
                    <p class="pad30 han han1">申込書のすべての内容は、事実どおりに作成しなければなりません。事実でない場合、受賞が取り消されることがあります。</p>
                    <p class="pad30 han han2">授賞の日程および景品の支給については受賞者に個別に通知されます。</p>
                    <p class="pad30 han han3">受賞作の著作権は制作者に帰属します。</p>
                    <p class="pad30 han han4">受賞した場合、主催者の要請に応じて修正・変更が可能な原本ファイルを提出します。</p>
                    {{-- <p class="pad30 han han5">출품작에 대한 저작권은 응모자에게 있습니다. 다만 주최 측은 입상작에 한하여 필요한 범위 내에서 합당한 보상을 전제로 지적재산권을 우선적으로 양수할 수 있습니다.</p> --}}
                    <p class="pad30 han han5">出品作の著作権は制作者に帰属します。 </p>
                    <p class="pad30 han han6">受賞作は、農林畜産食品部および韓食振興院のホームぺージやSNSチャンネルなどに広報の目的で掲載されることがあります（編集の可能性あり）。また、今後公的な用途に利用される可能性があります。</p>
                    <p class="pad30 han han7">国内外の何らかのコンテストで既に受賞した映像である場合、受賞が取り消されます。</p>
                    <p class="pad30 han han8">他のコンテストの受賞作や、他人の著作物の盗作などであった場合、審査から除外されます。また、受賞後にそれが発覚した場合、賞（賞金）を返還しなければなりません。</p>
                    <p class="pad30 han han9">賞金は、大韓民国政府の規定に基づいて3.3％の税金が引かれた後に支給されます。</p>
                    <p class="pad30 han han10">海外の受賞者の場合、韓国の法律/規定に基づき、税務手続きのために電子メールを使用して個人情報を収集します。<br/>（税金および租税公課は韓食振興院が負担。）</p>
                    <p class="pad30 han han11">出品作は、第三者の著作権（音源、映像、写真、フォントなど）、肖像権、商標権などを侵害するものであってはなりません。これに関連した紛争については、応募者本人がすべての責任を負います。</p>
                    <p class="pad30 han han12">受賞が決まった後に、賞金の支給に必要な個人情報を提供しなかったり、連絡が取れなかったりなどの問題が発生した場合、受賞が取り消されます。</p>
                    <p class="pad30 han han13">団体で受賞した場合、賞金は代表者1人に支給され、賞金の分配等について主催者は一切関与しません。代表者はあらかじめ参加者全員の同意を得ておいてください。後に発生する法的・道義的責任は代表者が負うものとします。</p>
                    <p>
                        <br/>
                        上記事項への同意を拒否することもできますが、その場合公募展への参加が制限されます。<br/>
                        今後、上記の事項を遵守し、異議申し立てを行わないことを誓います。
                    </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check2"> 参加誓約書の内容を熟知し、これに同意します。</label>
            </div>
        </div>
        <div class="attend_box">
           <img src="/img/ja/pop02_img03.png" alt="참가 신청하기"> 
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
                    <img class="mo_none" src="/img/ja/pop03_img01.png" alt="참가신청서">
                    <img class="mo_block" src="/img/ja/m_pop03_img01.png" alt="참가신청서">
                </div>
                <div class="img_title">
                    <img src="/img/ja/pop03_img02.png" alt="개인정보 수집 동의서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="num01">タイトル</p>
                        <input type="text" name="subject" >
                    </div>
                    <div class="line_">
                        <p class="num02">企画意図、内容などの説明</p>
                        <textarea name="contents" style="resize: none" ></textarea>
                    </div>
                    <div class="line_">
                        <p class="num03">URL</p>
                        <input type="text" name="link_value" >
                        <span class="org small">* 個人のSNSチャンネルにアップロードした映像（公開必須）のURLを記入してください。</span>
                    </div>
                    <div class="line_">
                        <p class="num04">応募分野</p>
                        <input type="radio" name="type_1" id="type_1_1" value="김치 주제의 요리 영상 (쿡방)" ><label for="type_1_1">キムチ料理（キムチを使った料理の映像）</label>
                        <input type="radio" name="type_1" id="type_1_2" value="한식 주제의 요리 영상 (먹방)" ><label for="type_1_2">韓食モッパン（韓食を食べる映像）</label>
                    </div>
                    <div class="line_">
                        <p class="num05">応募チャンネル</p>
                        <input type="radio" name="type_2" id="type_2_1" value="유튜브" ><label for="type_2_1">YouTube</label>
                        <input type="radio" name="type_2" id="type_2_2" value="인스타그램"><label for="type_2_2">Instagram</label>
                    </div>
                    <div class="img_box_ra">
                        <img src="/img/ja/pop_bg03_img01.png" alt="">
                    </div>
                </div>
                <div class="img_title">
                    <img src="/img/ja/pop03_img03.png" alt="참가서약서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="wd_more num01">応募者の氏名</p>
                        <input type="text" name="writer" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num02">応募者の国籍</p>
                        <input type="text" name="country" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num03 mo_none">応募者の連絡先<br/><span class="small" style="padding-left: 0;">（携帯電話）</span></p>
                        <p class="wd_more num03 mo_block">応募者の連絡先 <span class="small" style="padding-left: 0;">（携帯電話）</span></p>
                        <input type="text" name="tel" >
                        <span class="org small">* 間違った連絡先を記載して問題が発生した場合、その責任は応募者が負うものとします。</span>
                    </div>
                    <div class="line_">
                        <p class="wd_more num04">応募者の電子メールアドレス</p>
                        <input type="text" name="email" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num05">応募単位</p>
                        <input type="radio" name="type_3" id="type_3_1" value="개인" ><label for="type_3_1">個人</label>
                        <input type="radio" name="type_3" id="type_3_2" value="팀"><label for="type_3_2">チーム</label>
                    </div>
                </div>
            </div>
            <div class="attend_box">
                <input type="image" src="/img/ja/pop03_img04.png" alt="참가 신청하기">
                {{-- <img src="/img/ja/pop03_img04.png" alt="참가 신청하기">  --}}
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    function fun3() {
        var obj = document.fr3;
        
        if(obj.type_3.value == '') {
            alert('応募単位を選択してください');
            obj.type_3[0].focus();
            return false;
        }

        if(obj.type_1.value == '') {
            alert('応募分野を選択してください');
            obj.type_1[0].focus();
            return false;
        }

        if(obj.type_2.value == '') {
            alert('応募チャンネル選択してください');
            obj.type_2[0].focus();
            return false;
        }

        if(obj.subject.value == '') {
            alert('映像のタイトルを入力してください');
            obj.subject.focus();
            return false;
        }

        if(obj.contents.value == '') {
            alert('企画のも作品内容などの説明を入力してください');
            obj.contents.focus();
            return false;
        }

        if(obj.link_value.value == '') {
            alert('参加映像のURLを入力してください');
            obj.link_value.focus();
            return false;
        }

        if(obj.writer.value == '') {
            alert('名前を入力してください');
            obj.writer.focus();
            return false;
        }

        if(obj.tel.value == '') {
            alert('連絡先を入力してください');
            obj.tel.focus();
            return false;
        }

        if(obj.country.value == '') {
            alert('国籍を入力してください');
            obj.country.focus();
            return false;
        }

        if(obj.email.value == '') {
            alert('メールを入力してください');
            obj.email.focus();
            return false;
        }
    }
</script>