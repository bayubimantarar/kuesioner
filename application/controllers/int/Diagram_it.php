<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagram_it extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->int_check_login();
	}

	public function index(){
		$data = array(
					'title' => 'Diagram Informasi Teknologi | Internal STMIK Bandung', 
					);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/diagram/diagram_it');
		$this->load->view('int/pages/footer');	
	}

	public function export_excel_diagram_it(){
		$dari 		= $this->input->post('dari');
		$sampai 	= $this->input->post('sampai');
		$jurusan 	= $this->input->post('jurusan');

		if($jurusan<3){
			$diagram_it = $this->kuesioner_app->get_diagram_it_bydatejurusan($dari, $sampai, $jurusan);

			if($jurusan==1){
				$hasil_jurusan = 'Teknik Informatika';
			}else if($jurusan==2){
				$hasil_jurusan = 'Sistem Informasi';
			}

	        $objPHPExcel = new PHPExcel();

	        $styleArray = array(
	          	'borders' => array(
	           		'allborders' => array(
	           			'style' => PHPExcel_Style_Border::BORDER_THIN
	           			)
	           		)
	           	);

	        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);

	        //Sheet yang akan diolah 
	        $objPHPExcel->setActiveSheetIndex(0)
	        			->setCellValue('H4', 'Jumlah Koresponden')
	        			->setCellValue('H5', 'Jurusan')
	        			->setCellValue('H6', 'Laporan Tanggal')
	        			->setCellValue('B2', 'Diagram Informasi Teknologi')
	        			->setCellValue('A4', 'No')
	                    ->setCellValue('B4', 'Pertanyaan')
	                    ->setCellValue('B5', 'Kemampuan dalam menguasai sekurang-kurangnya satu Bahasa pemrograman')
	                    ->setCellValue('B6', 'Kemampuan dalam menguasai tools aplikasi pemrograman')
	                    ->setCellValue('B7', 'Kemampuan dalam menguasai aplikasi database')
	                    ->setCellValue('B8', 'Kemampuan dalam mengimplementasikan rancangan database')
	                    ->setCellValue('B9', 'Kemampuan dalam melakukan rekayasa Perangkat Lunak')
	                    ->setCellValue('B10', 'Kemampuan dalam mengoperasikan berbagai sistem operasi (Windows/ Linux)')
	                    ->setCellValue('B11', 'Kemampuan dalam implementasi Jaringan Komputer')
	                    ->setCellValue('C4', 'Sangat Baik')
	                    ->setCellValue('D4', 'Baik')
	                    ->setCellValue('E4', 'Cukup')
	                    ->setCellValue('F4', 'Kurang');

	            
	        $column = $objPHPExcel->setActiveSheetIndex(0);

	        foreach ($diagram_it as $row){
		        $column->setCellValue("I4", $row['total']);
		        $column->setCellValue("I5", $hasil_jurusan);
		        $column->setCellValue("I6", $dari.' sd '.$sampai);
		        $column->setCellValue("A5", "1");
		        $column->setCellValue("A6", "2");
		        $column->setCellValue("A7", "3");
		        $column->setCellValue("A8", "4");
		        $column->setCellValue("A9", "5");
		        $column->setCellValue("A10", "6");
		        $column->setCellValue("A11", "7");
		        $column->setCellValue("C5", $row['ti1_a']);
		        $column->setCellValue("D5", $row['ti1_b']);
		        $column->setCellValue("E5", $row['ti1_c']);
		        $column->setCellValue("F5", $row['ti1_d']);
		        $column->setCellValue("C6", $row['ti2_a']);
		        $column->setCellValue("D6", $row['ti2_b']);
		        $column->setCellValue("E6", $row['ti2_c']);
		        $column->setCellValue("F6", $row['ti2_d']);
		        $column->setCellValue("C7", $row['ti3_a']);
		        $column->setCellValue("D7", $row['ti3_b']);
		        $column->setCellValue("E7", $row['ti3_c']);
		        $column->setCellValue("F7", $row['ti3_d']);
		        $column->setCellValue("C8", $row['ti4_a']);
		        $column->setCellValue("D8", $row['ti4_b']);
		        $column->setCellValue("E8", $row['ti4_c']);
		        $column->setCellValue("F8", $row['ti4_d']);
		        $column->setCellValue("C9", $row['ti5_a']);
		        $column->setCellValue("D9", $row['ti5_b']);
		        $column->setCellValue("E9", $row['ti5_c']);
		        $column->setCellValue("F9", $row['ti5_d']);
		        $column->setCellValue("C10", $row['ti6_a']);
		        $column->setCellValue("D10", $row['ti6_b']);
		        $column->setCellValue("E10", $row['ti6_c']);
		        $column->setCellValue("F10", $row['ti6_d']);
		        $column->setCellValue("C11", $row['ti7_a']);
		        $column->setCellValue("D11", $row['ti7_b']);
		        $column->setCellValue("E11", $row['ti7_c']);
		        $column->setCellValue("F11", $row['ti7_d']);
		        $objPHPExcel->getActiveSheet()->getStyle('A4:F11')->applyFromArray($styleArray);
	        }

	        $objPHPExcel->getActiveSheet()->setTitle('Excel Pertama');
	 
	        //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
	        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	 
	        // //sesuaikan headernya 
	        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	        header("Cache-Control: no-store, no-cache, must-revalidate");
	        header("Cache-Control: post-check=0, pre-check=0", false);
	        header("Pragma: no-cache");
	        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

	        //ubah nama file saat diunduh
	        header('Content-Disposition: attachment;filename="Laporan Data Kuesioner (Diagram Informasi Teknologi) - '.$dari.' - '.$sampai.'.xlsx"');

	        //unduh file
	        $objWriter->save("php://output");
		}else{
			$diagram_it = $this->kuesioner_app->get_diagram_it_bydate($dari, $sampai);

			if($jurusan==3){
				$hasil_jurusan = 'Semua Jurusan';
			}

	        $objPHPExcel = new PHPExcel();

	        $styleArray = array(
	          	'borders' => array(
	           		'allborders' => array(
	           			'style' => PHPExcel_Style_Border::BORDER_THIN
	           			)
	           		)
	           	);

	        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
	        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);

	        //Sheet yang akan diolah 
	        $objPHPExcel->setActiveSheetIndex(0)
	        			->setCellValue('H4', 'Jumlah Koresponden')
	        			->setCellValue('H5', 'Jurusan')
	        			->setCellValue('H6', 'Laporan Tanggal')
	        			->setCellValue('B2', 'Diagram Informasi Teknologi')
	        			->setCellValue('A4', 'No')
	                    ->setCellValue('B4', 'Pertanyaan')
	                    ->setCellValue('B5', 'Kemampuan dalam menguasai sekurang-kurangnya satu Bahasa pemrograman')
	                    ->setCellValue('B6', 'Kemampuan dalam menguasai tools aplikasi pemrograman')
	                    ->setCellValue('B7', 'Kemampuan dalam menguasai aplikasi database')
	                    ->setCellValue('B8', 'Kemampuan dalam mengimplementasikan rancangan database')
	                    ->setCellValue('B9', 'Kemampuan dalam melakukan rekayasa Perangkat Lunak')
	                    ->setCellValue('B10', 'Kemampuan dalam mengoperasikan berbagai sistem operasi (Windows/ Linux)')
	                    ->setCellValue('B11', 'Kemampuan dalam implementasi Jaringan Komputer')
	                    ->setCellValue('C4', 'Sangat Baik')
	                    ->setCellValue('D4', 'Baik')
	                    ->setCellValue('E4', 'Cukup')
	                    ->setCellValue('F4', 'Kurang');

	            
	        $column = $objPHPExcel->setActiveSheetIndex(0);

	        foreach ($diagram_it as $row){
		        $column->setCellValue("I4", $row['total']);
		        $column->setCellValue("I5", $hasil_jurusan);
		        $column->setCellValue("I6", $dari.' sd '.$sampai);
		        $column->setCellValue("A5", "1");
		        $column->setCellValue("A6", "2");
		        $column->setCellValue("A7", "3");
		        $column->setCellValue("A8", "4");
		        $column->setCellValue("A9", "5");
		        $column->setCellValue("A10", "6");
		        $column->setCellValue("A11", "7");
		        $column->setCellValue("C5", $row['ti1_a']);
		        $column->setCellValue("D5", $row['ti1_b']);
		        $column->setCellValue("E5", $row['ti1_c']);
		        $column->setCellValue("F5", $row['ti1_d']);
		        $column->setCellValue("C6", $row['ti2_a']);
		        $column->setCellValue("D6", $row['ti2_b']);
		        $column->setCellValue("E6", $row['ti2_c']);
		        $column->setCellValue("F6", $row['ti2_d']);
		        $column->setCellValue("C7", $row['ti3_a']);
		        $column->setCellValue("D7", $row['ti3_b']);
		        $column->setCellValue("E7", $row['ti3_c']);
		        $column->setCellValue("F7", $row['ti3_d']);
		        $column->setCellValue("C8", $row['ti4_a']);
		        $column->setCellValue("D8", $row['ti4_b']);
		        $column->setCellValue("E8", $row['ti4_c']);
		        $column->setCellValue("F8", $row['ti4_d']);
		        $column->setCellValue("C9", $row['ti5_a']);
		        $column->setCellValue("D9", $row['ti5_b']);
		        $column->setCellValue("E9", $row['ti5_c']);
		        $column->setCellValue("F9", $row['ti5_d']);
		        $column->setCellValue("C10", $row['ti6_a']);
		        $column->setCellValue("D10", $row['ti6_b']);
		        $column->setCellValue("E10", $row['ti6_c']);
		        $column->setCellValue("F10", $row['ti6_d']);
		        $column->setCellValue("C11", $row['ti7_a']);
		        $column->setCellValue("D11", $row['ti7_b']);
		        $column->setCellValue("E11", $row['ti7_c']);
		        $column->setCellValue("F11", $row['ti7_d']);
		        $objPHPExcel->getActiveSheet()->getStyle('A4:F11')->applyFromArray($styleArray);
	        }

	        $objPHPExcel->getActiveSheet()->setTitle('Excel Pertama');
	 
	        //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
	        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	 
	        // //sesuaikan headernya 
	        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	        header("Cache-Control: no-store, no-cache, must-revalidate");
	        header("Cache-Control: post-check=0, pre-check=0", false);
	        header("Pragma: no-cache");
	        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

	        //ubah nama file saat diunduh
	        header('Content-Disposition: attachment;filename="Laporan Data Kuesioner (Diagram Informasi Teknologi) - '.$dari.' - '.$sampai.'.xlsx"');

	        //unduh file
	        $objWriter->save("php://output");
		}

	}

}

/* End of file Diagram_it.php */
/* Location: ./application/controllers/int/Diagram_it.php */