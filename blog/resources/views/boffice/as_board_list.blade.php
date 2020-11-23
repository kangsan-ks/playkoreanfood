@include('/inc/as_header')
{{-- PC슬라이더 --}}
<div class="con_main">
    <form action="">
		{{-- <a href="/excel.php" style="margin-left:20px;">[응원 메시지 엑셀 다운로드]</a> --}}
        <table>
            <colgroup>
                <col width="100">
                <col width="200">
                <col width="400">
                <col width="150">
                <col width="200">
                <col width="150">
            </colgroup>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>영상 링크</th>
                    <th>내용</th>
					<th>제출자 이름</th>
                    <th>등록일</th>
                    <th>기능</th>
                </tr>
            </thead>
            <tbody>
				@if($totalCount == '0')
					<tr>
						<td colspan="5">게시글이 없습니다.</td>
					</tr>
				@else
					@foreach($data as $data)
						<tr>
							<td>{{ $number-- }}</td>
							<td>{{ $data->link_value }}</td>
							<td>{{ substr($data->contents,0,20) }}</td>
                            <td>{{ $data->writer}}</td>
                            <td>{{ substr($data->reg_date,0,10) }}</td>
							<td class="delete_box"><a href="javascript:control('{{ $data->idx }}');">삭제</a><a href="/as_admin/{{ request()->segment(2) }}/ey_board_view?board_idx={{ $data->idx }}" style="background-color: #08AEEA; border:1px solid #0faeea; color: #fff;">보기</a></td>
						</tr>
					@endforeach
				@endif
            </tbody>
        </table>

        <div class="paging">
			{!! $paging_view !!}
		</div>
        {{-- <div class="create" style="padding-bottom:10px;">
			<a href="/as_admin/{{ request()->segment(2) }}/write_board_form">등록</a>
            <!-- <a href="/as_write_gallery">등록</a> -->
        </div> --}}
    </form>
	<form name="search_form" action="{{ $_SERVER['REQUEST_URI'] }}" class="board_search_con" onsubmit="return search();" style="display: none;">
		<input type="hidden" name="page" />
		<!-- <input type="text" name="key" placeholder="검색어를 입력하세요" value="{{ $key }}" required> -->
		<button></button>
	</form>
</div>
<script type="text/javascript">

	function modify(idx) {

		if(confirm("노출여부를 수정하시겠습니까?")) {
			var formData = new FormData();
			formData.append("idx", idx);
			formData.append("use_status", $("select[name=use_status_"+idx+"]").val());
			formData.append('_token', '{{ csrf_token() }}');

			$.ajax({
				type: 'post',
				url: '/as_admin/data_modify',
				processData: false,
				contentType: false,
				data: formData,
				success: function(result) {
					alert("수정되었습니다.");
					//location.reload();
				},
				error: function(xhr, status, error) {
					//$("#loading").hide();
					console.log(xhr.responseText)
					return false;
				}
			});
		}
	}

	function control(idx) {

		if(confirm("삭제하시겠습니까?")) {
			var formData = new FormData();
			formData.append("idx", idx);
			formData.append('_token', '{{ csrf_token() }}');
            console.log(formData);

			$.ajax({
				type: 'post',
				url: '/as_admin/delete',
				processData: false,
				contentType: false,
				data: formData,
				success: function(result) {
					alert("삭제되었습니다.");
					location.reload();
				},
				error: function(xhr, status, error) {
					//$("#loading").hide();
					return false;
				}
			});
		}
	}

	function use_status(idx,val) {
		console.log(idx)
		var formData = new FormData();
		formData.append("idx", idx);
		formData.append("use_status", val);
		formData.append('_token', '{{ csrf_token() }}');

		$.ajax({
			type: 'post',
			url: '/as_admin/use_status',
			processData: false,
			contentType: false,
			data: formData,
			success: function(result) {
				alert("수정됐습니다.");
				location.reload();
			},
			error: function(xhr, status, error) {
				//$("#loading").hide();
				return false;
			}
		});
	}

</script>
@include('/inc/as_footer')