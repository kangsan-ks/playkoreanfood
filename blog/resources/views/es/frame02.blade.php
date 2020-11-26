<div class="con_bg con_bg2">
    <div class="layer_close_btn"><img src="/img/close_img.png" alt=""></div>
    <div class="content_box">
        <div class="title_box">
            <div class="img_title">
                <img src="/img/es/pop02_img01.png" alt="개인정보 수집 동의서">
            </div>
            <div class="middle_box">
                <h3><Política de protección de datos personales></h3>
                <p>1. Recopilación y propósito de uso de datos personales: evaluación y entrega de premios de los vídeos del concurso.<br/><br/></p>
                <p>2. Tipo de datos a recopilar</p>
                <p class="pad25">※ Esenciales: nombre y apellido, contacto (número de teléfono, número de teléfono móvil), fecha y año de nacimiento, correo electrónico y domicilio.<br/><br/></p>
                <p>3. Periodo de uso y retención de los datos personales</p>
                <p class="pad25">
                    <span class="dot">Periodo de retención y uso: desde la fecha de presentación hasta la finalización del concurso.<br/></span>
                    <span class="dot">Motivo: ofrecer servicio y mejorar el sistema.<br/></span>
                    <span class="dot">Los datos personales podrán ser eliminados, sin importar el periodo de retención y uso, por solicitud del titular de los datos.<br/><br/></span></span>
                </p>
                <p>4. A fin de proteger los datos personales la información recopilada será gestionada de manera encriptada.</p>
                <p class="pad25">
                    ① Tiene derecho a no aceptar la recopilación y uso de datos personales.<br/>
                    ② Pero en caso de no aceptar la recopilación y uso de datos personales no podrá participar en el concurso.
                </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check1"> Acepto la política de protección de datos personales arriba mencionada.</label>
            </div>
            <div class="border_dot"></div>
            <div class="img_title">
                <img src="/img/es/pop02_img02.png" alt="참가서약서">
            </div>
            <div class="middle_box">
                <h3>Prometo cumplir con los siguientes requerimientos para participar en el “Concurso de Vídeos de Comida Coreana para Extranjeros 2020” organizado por el Instituto de Promoción de Alimentos Coreanos.</h3>
                    <p class="pad30 han han1">Toda información que se otorgará en la presentación del Concurso deberá ser verdadera, de lo contrario se podrá cancelar el premio aún después de la publicación de los resultados.</p>
                    <p class="pad30 han han2">La fecha de entrega y pago del premio será notificado a los premiados por separado.</p>
                    <p class="pad30 han han3">El derecho de autor del premiado será del productor del vídeo.</p>
                    <p class="pad30 han han4">El titular del vídeo ganado entregará el archivo original del vídeo en caso de que la entidad organizadora del concurso lo solicite para su posible modificación.</p>
                    {{-- <p class="pad30 han han5">출품작에 대한 저작권은 응모자에게 있습니다. 다만 주최 측은 입상작에 한하여 필요한 범위 내에서 합당한 보상을 전제로 지적재산권을 우선적으로 양수할 수 있습니다.</p> --}}
                    <p class="pad30 han han5">El derecho de autor del vídeo presentado es del aspirante al concurso.</p>
                    <p class="pad30 han han6">El vídeo ganador podrá ser editado y publicado con fines publicitarios en los sitios web del Ministerio de Agricultura, Alimentación y Asuntos Rurales, Instituto de Promoción de Alimentos Coreanos, y otros canales de SNS para usos oficiales.</p>
                    <p class="pad30 han han7">A pesar de que los resultados hayan sido publicados, si el vídeo tiene historial de haber recibido premio, tanto dentro como fuera del país, el premio será cancelado.</p>
                    <p class="pad30 han han8">Los vídeos con contenidos de otras personas o copias de otras obras ganadoras, serán excluídas de la evaluación y el premio será reembolsado.</p>
                    <p class="pad30 han han9">De acuerdo a la normativa correspondiente del Gobierno coreano se le retendrá el 3,3% de impuestos antes de entregar el premio.</p>
                    <p class="pad30 han han10">Para los ganadores del exterior, según la Ley y la Normativa del Gobierno coreano se utilizará el correo electrónico para el informe tributario, y, se recolectará la información personal<br/>(los impuestos y gastos por servicio público estarán a cargo del Instituto de Promoción de Alimentos Coreanos)</p>
                    <p class="pad30 han han11">El vídeo a presentar en el concurso no deberá tener ningún problema legal con terceros; derecho de autor (sonido, vídeo, fotografía, textos, etc.), de imagen, de marca, etc. Cualquier conflicto será responsabilidad del participante.</p>
                    <p class="pad30 han han12">Una vez publicado los resultados, al no aceptar la política de privacidad o ante la imposibilidad de ponerse en contacto con el ganador, el premio será cancelado.</p>
                    <p class="pad30 han han13">En caso de que el ganador sea un equipo, el premio será entregado al representante del equipo y la entidad organizadora no se hará cargo de ninguna responsabilidad. La presentación de vídeo en equipo deberá ser de acuerdo mutuo entre los miembros, y toda responsablidad legal y moral recaerá en el representante.</p>
                    <p>
                        <br/>
                        Podrá no aceptar dicha promesa de cumplimiento, pero en tal caso, se le restringirá participar en este Concurso.<br/>
                        Me comprometo a cumplir dicha promesa y no presentaré ninguna queja.
                    </p>
            </div>
            <div class="agree_box">
                <label><input type="checkbox" name="check2"> He leído la promesa y lo acepto.</label>
            </div>
        </div>
        <div class="attend_box">
           <img src="/img/es/pop02_img03.png" alt="참가 신청하기"> 
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
                    <img class="mo_none" src="/img/es/pop03_img01.png" alt="참가신청서">
                    <img class="mo_block" src="/img/es/m_pop03_img01.png" alt="참가신청서">
                </div>
                <div class="img_title">
                    <img src="/img/es/pop03_img02.png" alt="개인정보 수집 동의서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="num01">Título del vídeo</p>
                        <input type="text" name="subject" >
                    </div>
                    <div class="line_">
                        <p class="num02">Explicación del propósito y contenido del vídeo</p>
                        <textarea name="contents" style="resize: none" ></textarea>
                    </div>
                    <div class="line_">
                        <p class="num03">URL del vídeo</p>
                        <input type="text" name="link_value" >
                        <span class="org small">* Lugar donde ha subido el vídeo en su SNS personal (deberá estar publicado)</span>
                    </div>
                    <div class="line_">
                        <p class="num04">Tipo de vídeo</p>
                        <input type="radio" name="type_1" id="type_1_1" value="김치 주제의 요리 영상 (쿡방)" ><label for="type_1_1">Cocinar platos de kimchi</label>
                        <input type="radio" name="type_1" id="type_1_2" value="한식 주제의 요리 영상 (먹방)" ><label for="type_1_2">Vídeo comiendo Hansik</label>
                    </div>
                    <div class="line_">
                        <p class="num05">Canal a presentar</p>
                        <input type="radio" name="type_2" id="type_2_1" value="유튜브" ><label for="type_2_1">YouTube</label>
                        <input type="radio" name="type_2" id="type_2_2" value="인스타그램"><label for="type_2_2">Instagram</label>
                    </div>
                    <div class="img_box_ra">
                        <img src="/img/es/pop_bg03_img01.png" alt="">
                    </div>
                </div>
                <div class="img_title">
                    <img src="/img/es/pop03_img03.png" alt="참가서약서">
                </div>
                <div class="middle_box">
                    <div class="line_">
                        <p class="wd_more num01">Nombre y apellido</p>
                        <input type="text" name="writer" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num02">Nacionalidad</p>
                        <input type="text" name="country" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num03 mo_none">Contacto<br/><span class="small" style="padding-left: 0;">(número de teléfono móvil)</span></p>
                        <p class="wd_more num03 mo_block">Contacto <span class="small" style="padding-left: 0;">(número de teléfono móvil)</span></p>
                        <input type="text" name="tel" >
                        <span class="org small">* En caso de problemas por imposibilidad de contacto, por otorgar contacto erróneo, la responsabilidad será del participante.</span>
                    </div>
                    <div class="line_">
                        <p class="wd_more num04">Correo electrónico</p>
                        <input type="text" name="email" >
                    </div>
                    <div class="line_">
                        <p class="wd_more num05">Unidad de aplicación</p>
                        <input type="radio" name="type_3" id="type_3_1" value="개인" ><label for="type_3_1">Solo</label>
                        <input type="radio" name="type_3" id="type_3_2" value="팀"><label for="type_3_2">equipo</label>
                    </div>
                </div>
            </div>
            <div class="attend_box">
                <input type="image" src="/img/es/pop03_img04.png" alt="참가 신청하기">
                {{-- <img src="/img/es/pop03_img04.png" alt="참가 신청하기">  --}}
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    function fun3() {
        var obj = document.fr3;
        
        if(obj.type_3.value == '') {
            alert('Seleccione una unidad de aplicación');
            obj.type_3[0].focus();
            return false;
        }

        if(obj.type_1.value == '') {
            alert('Seleccione un campo de aplicación');
            obj.type_1[0].focus();
            return false;
        }

        if(obj.type_2.value == '') {
            alert('Seleccione un canal de aplicación');
            obj.type_2[0].focus();
            return false;
        }

        if(obj.subject.value == '') {
            alert('Ingrese el título del video');
            obj.subject.focus();
            return false;
        }

        if(obj.contents.value == '') {
            alert('Ingrese una descripción de la intención del proyecto, etc.');
            obj.contents.focus();
            return false;
        }

        if(obj.link_value.value == '') {
            alert('Ingrese la URL del video participante');
            obj.link_value.focus();
            return false;
        }

        if(obj.writer.value == '') {
            alert('por favor, escriba su nombre');
            obj.writer.focus();
            return false;
        }

        if(obj.tel.value == '') {
            alert('Por favor, introduce tu información de contacto');
            obj.tel.focus();
            return false;
        }

        if(obj.country.value == '') {
            alert('Por favor ingrese su nacionalidad');
            obj.country.focus();
            return false;
        }

        if(obj.email.value == '') {
            alert('Por favor introduzca su correo electrónico');
            obj.email.focus();
            return false;
        }
    }
</script>