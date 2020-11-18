<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 0);
    ini_set('memory_limit', -1); // 메모리 제한을 해제해준다. 


    use PhpOffice\PhpSpreadsheet\IOFactory;  
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;    
	use ZipStream\Option\Archive;
	use ZipStream\ZipStream;

    require_once(__DIR__.'/dbconn.php');
    require_once(__DIR__.'/PhpOffice/Psr/autoloader.php');
    require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/autoloader.php');
	require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/Enum.php');
	require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/File.php');
	require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/Option/Version.php');
	require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/Option/File.php');
	require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/Bigint.php');
    require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/ZipStream.php');
	require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/Option/Archive.php');
    require_once(__DIR__.'/PhpOffice/PhpSpreadsheet/Option/Method.php');


	// Create new Spreadsheet object
	$spreadsheet = new Spreadsheet();

	// Set document properties
	$spreadsheet->getProperties()->setCreator('Maarten Balliauw')
		->setLastModifiedBy('Maarten Balliauw')
		->setTitle('Office 2007 XLSX Test Document')
		->setSubject('Office 2007 XLSX Test Document')
		->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
		->setKeywords('office 2007 openxml php')
		->setCategory('Test result file');

	$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A1', '영상제목')
			->setCellValue('B1', '기획의도 작품내용 등 설명')
			->setCellValue('C1', '영상 URL')
			->setCellValue('D1', '응모 분야')
			->setCellValue('E1', '응모 채널')
			->setCellValue('F1', '이름')
			->setCellValue('G1', '국적')
			->setCellValue('H1', '연락처')
			->setCellValue('I1', '이메일')
			->setCellValue('J1', '응모 단위')
			->setCellValue('K1', '응모일자');

	$sql = "SELECT * FROM board where 1=1 and board_type = 'contest' order by idx desc";
	$result = mysqli_query($link, $sql);

	$i = 2;
	while($row = mysqli_fetch_array($result)) {
		// Add some data
		$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'.$i, $row['subject'])
			->setCellValue('B'.$i, $row['contents'])
			->setCellValue('C'.$i, $row['link_value'])
			->setCellValue('D'.$i, $row['category'])
			->setCellValue('E'.$i, $row['category2'])
			->setCellValue('F'.$i, $row['writer'])
			->setCellValue('G'.$i, $row['country'])
			->setCellValue('H'.$i, $row['tel'])
			->setCellValue('I'.$i, $row['email'])
			->setCellValue('J'.$i, $row['category3'])
			->setCellValue('K'.$i, $row['reg_date']);

		$i++;
	}

	/*
	// Miscellaneous glyphs, UTF-8
	$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A4', 'Miscellaneous glyphs')
		->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');
	*/

	// Rename worksheet
	$spreadsheet->getActiveSheet()->setTitle('참가인원엑셀');

	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$spreadsheet->setActiveSheetIndex(0);

	// Redirect output to a client’s web browser (Xlsx)
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="참가인원엑셀_'.date("YmdHis").'".xlsx"');
	header('Cache-Control: max-age=0');
	// If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

	// If you're serving to IE over SSL, then the following may be needed
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
	header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header('Pragma: public'); // HTTP/1.0

	$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
	$writer->save('php://output');
	exit;

?>