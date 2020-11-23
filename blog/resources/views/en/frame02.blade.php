<div class="con_bg con_bg2">
    <div class="layer_close_btn"><img src="/img/close_img.png" alt=""></div>
    <div class="content_box">
        <div class="title_box">
            <div class="img_title">
                <img class="frame02_title" src="/img/en/pop02_img01.png" alt="개인정보 수집 동의서">
            </div>
            <div class="middle_box">
                <h3><Privacy Policy></h3>
                <p>1. Purpose of collection and use of personal data: To screen entries and select winners<br/><br/></p>
                <p>2. Personal data items collected</p>
                <p class="pad25">※  items: Name, contact information (telephone number and mobile phone number), date of birth, email, and address of residence<br/><br/></p>
                <p>3. Period of retention and use of personal data</p>
                <p class="pad25">
                    <span class="dot">Period of retention and use: From the submission of personal data to the end of the contest<br/></span>
                    <span class="dot">Reasons: To provide services and improve the system<br/></span>
                    <span class="dot">The provision of personal data may be suspended upon the user’s request or by the deletion of the user even before the termination of the period of retention and use.<br/><br/></span></span>
                </p>
                <p>4. The collected personal data is encrypted to protect the user’s privacy.</p>
                <p class="pad25">
                    ① The user may refuse to agree to the collection and use of his/her personal data.<br/>
                    ② However, the user shall not be allowed to apply for the contest if he/she refuses to agree to the collection and use of his/her personal data.
                </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check1"> I agree to the Privacy Policy.</label>
            </div>
            <div class="border_dot"></div>
            <div class="img_title">
                <img class="frame02_title" src="/img/en/pop02_img02.png" alt="참가서약서">
            </div>
            <div class="middle_box">
                <h3>I hereby pledge to abide by the following in submitting my entry to #Play Korean Food for non-Koreans organized by the Korean Food Promotion Institute.</h3>
                    <p class="pad30 han han1">All information submitted via the application form must be true. If any of the information is verified to be false, the selection as a winner may be cancelled and the prize withdrawn.</p>
                    <p class="pad30 han han2">The awarding and prize delivery schedule shall be notified separately to each winner.</p>
                    <p class="pad30 han han3">The winner’s copyright shall be vested in the producer.</p>
                    <p class="pad30 han han4">The editable original file of the winning entry must be submitted upon the request of the organizer.</p>
                    {{-- <p class="pad30 han han5">출품작에 대한 저작권은 응모자에게 있습니다. 다만 주최 측은 입상작에 한하여 필요한 범위 내에서 합당한 보상을 전제로 지적재산권을 우선적으로 양수할 수 있습니다.</p> --}}
                    <p class="pad30 han han5">The copyright for the entry belongs to the applicant.</p>
                    <p class="pad30 han han6">The winning entries may be arranged and posted on the websites and SNS channels of the Ministry of Agriculture, Food and Rural Affairs and the Korean Food Promotion Institute for publicity purposes and may continue to be used for public purposes throughout the future.  </p>
                    <p class="pad30 han han7">If the winning entry is verified to have previously received a prize in Korea or abroad, the selection shall be cancelled.</p>
                    <p class="pad30 han han8">Any entry verified to have pirated or plagiarized the winning entries of other contests and/or copyrighted works of others shall be disqualified from the screening process, and any prize (including the cash prize) shall be forfeited.</p>
                    <p class="pad30 han han9">The cash prize shall be provided after deducting 3.3% in tax based on the regulations set forth by the Korean government.</p>
                    <p class="pad30 han han10">For winners from overseas, personal data shall be collected using email pursuant to Korean laws and regulations.<br/>(Taxes and public charges shall be paid by the Korean Food Promotion Institute.)</p>
                    <p class="pad30 han han11">he entry shall have no legal issue concerning copyrights (music, video images, photos, fonts, etc.), portrait rights, trademark rights, etc., and the contestant shall be held liable for any disputes in relation to such rights.</p>
                    <p class="pad30 han han12">If personal data  for the payment of the cash prize is not provided or the selected winner remains out of contact after being selected as a winner, the selection shall be cancelled and the cash prize shall not be paid. </p>
                    <p class="pad30 han han13">If a team is selected as a winner, the organizer shall not be liable for any matter other than the delivery of the cash prize to the team representative. The team representative shall submit the entry with the consent of all other team members, and all legal and moral issues that may arise in relation to entry submission shall be assumed by the team representative.  </p>
                    <p>
                        <br/>
                        You may refuse to agree to the above provisions. However, your refusal will restrict your eligibility for participating in the contest.<br/>
                        I pledge to abide by the above provisions and not to raise any objections in the future.
                    </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check2"> I have read the Applicant Pledge and agree to abide by it. </label>
            </div>
        </div>
        <div class="attend_box">
           <img src="/img/en/pop02_img03.png" alt="참가 신청하기"> 
        </div>
    </div>
</div>
<div class="con_bg con_bg3">
    <div class="layer_close_btn"><img src="/img/close_img.png" alt=""></div>
    <form action="/comment_action" method="POST" name="fr3" onsubmit="return fun3();">
        {{ csrf_field() }}
        <input type="hidden" name="lang" value="en">
        <input type="hidden" name="board_type" value="contest">
        <div class="content_box">
            <div class="title_box">
                <div class="top_img_box">
                    <img class="mo_none" src="/img/en/pop03_img01.png" alt="참가신청서">
                    <img class="mo_block" src="/img/en/m_pop03_img01.png" alt="참가신청서">
                </div>
                <div class="img_title">
                    <img class="x1" src="/img/en/pop03_img02.png" alt="개인정보 수집 동의서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="num01">Title</p>
                        <input type="text" name="subject" >
                    </div>
                    <div class="line_">
                        <p class="num02">Description of the video, including the summary and</p>
                        <textarea name="contents" style="resize: none" ></textarea>
                    </div>
                    <div class="line_">
                        <p class="num03">Video URL</p>
                        <input type="text" name="link_value" >
                        <span class="org small">* The video URL refers to the web address of the video uploaded on your personal SNS channel (make sure to open it to the public).</span>
                    </div>
                    <div class="line_">
                        <p class="num04">Application category</p>
                        <input type="radio" name="type_1" id="type_1_1" value="김치 주제의 요리 영상 (쿡방)" ><label for="type_1_1">Video of Cooking with Kimchi</label>
                        <input type="radio" name="type_1" id="type_1_2" value="한식 주제의 요리 영상 (먹방)"><label for="type_1_2">Video of Hansik Mukbang</label>
                    </div>
                    <div class="line_">
                        <p class="num05">Application channel</p>
                        <input type="radio" name="type_2" id="type_2_1" value="유튜브" ><label for="type_2_1">YouTube</label>
                        <input type="radio" name="type_2" id="type_2_2" value="인스타그램"><label for="type_2_2">Instagram</label>
                    </div>
                    <div class="img_box_ra">
                        <img src="/img/en/pop_bg03_img01.png" alt="">
                    </div>
                </div>
                <div class="img_title">
                    <img class="x2 mo_none" src="/img/en/pop03_img03.png" alt="참가서약서">
                    <img class="x2 mo_block" src="/img/en/m_pop03_img03.png" alt="참가서약서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="wd_more num01">Name</p>
                        <input type="text" name="writer" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num02">Nationality</p>
                        <input type="text" name="country" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num03 mo_none">Contact information<br/><span class="small" style="padding-left: 0;">(mobile phone number)</span></p>
                        <p class="wd_more num03 mo_block">Contact information <span class="small" style="padding-left: 0;">(mobile phone number)</span></p>
                        <div>
                            <input type="text" name="tel" >
                            <span class="org small" style="padding-left: 0;">* The applicant is liable for any issues that may arise due to the submission of inaccurate or false contact information.</span>
                        </div>
                    </div>
                    <div class="line_">
                        <p class="wd_more num04">Email</p>
                        <input type="text" name="email" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num05">Application unit</p>
                        <input type="radio" name="type_3" id="type_3_1" value="개인" ><label for="type_3_1">Solo</label>
                        <input type="radio" name="type_3" id="type_3_2" value="팀"><label for="type_3_2">Team</label>
                    </div>
                </div>
            </div>
            <div class="attend_box">
                <input type="image" src="/img/en/pop03_img04.png" alt="Apply">
                {{-- <img src="/img/en/pop03_img04.png" alt="참가 신청하기">  --}}
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    function fun3() {
        var obj = document.fr3;
        
        if(obj.type_3.value == '') {
            alert('Select Application unit.');
            obj.type_3[0].focus();
            return false;
        }

        if(obj.type_1.value == '') {
            alert('Select Application category.');
            obj.type_1[0].focus();
            return false;
        }

        if(obj.type_2.value == '') {
            alert('Select Application channel.');
            obj.type_2[0].focus();
            return false;
        }

        if(obj.subject.value == '') {
            alert('Enter your Title');
            obj.subject.focus();
            return false;
        }

        if(obj.contents.value == '') {
            alert('Enter your Description of the video, including the summary and');
            obj.contents.focus();
            return false;
        }

        if(obj.link_value.value == '') {
            alert('Enter your Video URL');
            obj.link_value.focus();
            return false;
        }

        if(obj.writer.value == '') {
            alert('Enter your writer');
            obj.writer.focus();
            return false;
        }

        if(obj.tel.value == '') {
            alert('Enter your Contact information');
            obj.tel.focus();
            return false;
        }

        if(obj.country.value == '') {
            alert('Enter your Nationality');
            obj.country.focus();
            return false;
        }

        if(obj.email.value == '') {
            alert('Enter your email');
            obj.email.focus();
            return false;
        }
    }
</script>