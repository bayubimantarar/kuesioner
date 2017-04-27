<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagram_mp extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->int_check_login();
	}

	public function index(){
		$data = array(
					'title' => 'Diagram Manajemen & Profesionalisme | Internal STMIK Bandung', 
					);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/diagram/diagram_mp');
		$this->load->view('int/pages/footer');
	}

	public function export_excel_diagram_mp(){
		$dari 		= $this->input->post('dari');
		$sampai 	= $this->input->post('sampai');
		$jurusan 	= $this->input->post('jurusan');

		if($jurusan<3){
			$diagram_mp = $this->kuesioner_app->get_diagram_mp_bydatejurusan($dari, $sampai, $jurusan);

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
	        			->setCellValue('H7', 'Diagram Manajemen & Profesionalisme')
	        			->setCellValue('A4', 'No')
	                    ->setCellValue('B4', 'Pertanyaan')
	                    ->setCellValue('B5', 'Integritas (Etika & Moral)')
	                    ->setCellValue('B6', 'Keahlian berdasarkan bidang ilmu (profesionalisme)')
	                    ->setCellValue('B7', 'Bahasa Inggris')
	                    ->setCellValue('B8', 'Penggunaan Teknologi Informasi')
	                    ->setCellValue('B9', 'Komunikasi')
	                    ->setCellValue('B10', 'Kerjasama tim')
	                    ->setCellValue('B11', 'Pengembangan diri')
	                    ->setCellValue('C4', 'Sangat Baik')
	                    ->setCellValue('D4', 'Baik')
	                    ->setCellValue('E4', 'Cukup')
	                    ->setCellValue('F4', 'Kurang');

	            
	        $column = $objPHPExcel->setActiveSheetIndex(0);

	        foreach ($diagram_mp as $row){
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
		        $column->setCellValue("C5", $row['mp1_a']);
		        $column->setCellValue("D5", $row['mp1_b']);
		        $column->setCellValue("E5", $row['mp1_c']);
		        $column->setCellValue("F5", $row['mp1_d']);
		        $column->setCellValue("C6", $row['mp2_a']);
		        $column->setCellValue("D6", $row['mp2_b']);
		        $column->setCellValue("E6", $row['mp2_c']);
		        $column->setCellValue("F6", $row['mp2_d']);
		        $column->setCellValue("C7", $row['mp3_a']);
		        $column->setCellValue("D7", $row['mp3_b']);
		        $column->setCellValue("E7", $row['mp3_c']);
		        $column->setCellValue("F7", $row['mp3_d']);
		        $column->setCellValue("C8", $row['mp4_a']);
		        $column->setCellValue("D8", $row['mp4_b']);
		        $column->setCellValue("E8", $row['mp4_c']);
		        $column->setCellValue("F8", $row['mp4_d']);
		        $column->setCellValue("C9", $row['mp5_a']);
		        $column->setCellValue("D9", $row['mp5_b']);
		        $column->setCellValue("E9", $row['mp5_c']);
		        $column->setCellValue("F9", $row['mp5_d']);
		        $column->setCellValue("C10", $row['mp6_a']);
		        $column->setCellValue("D10", $row['mp6_b']);
		        $column->setCellValue("E10", $row['mp6_c']);
		        $column->setCellValue("F10", $row['mp6_d']);
		        $column->setCellValue("C11", $row['mp7_a']);
		        $column->setCellValue("D11", $row['mp7_b']);
		        $column->setCellValue("E11", $row['mp7_c']);
		        $column->setCellValue("F11", $row['mp7_d']);
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
	        header('Content-Disposition: attachment;filename="Laporan Data Kuesioner (Diagram Manaemen dan Profesionalisme) -  '.$dari.' - '.$sampai.'.xlsx"');

	        //unduh file
	        $objWriter->save("php://output");
		}else{
			$diagram_mp = $this->kuesioner_app->get_diagram_mp_bydate($dari, $sampai);

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
	        			->setCellValue('H7', 'Diagram Manajemen & Profesionalisme')
	        			->setCellValue('A4', 'No')
	                    ->setCellValue('B4', 'Pertanyaan')
	                    ->setCellValue('B5', 'Integritas (Etika & Moral)')
	                    ->setCellValue('B6', 'Keahlian berdasarkan bidang ilmu (profesionalisme)')
	                    ->setCellValue('B7', 'Bahasa Inggris')
	                    ->setCellValue('B8', 'Penggunaan Teknologi Informasi')
	                    ->setCellValue('B9', 'Komunikasi')
	                    ->setCellValue('B10', 'Kerjasama tim')
	                    ->setCellValue('B11', 'Pengembangan diri')
	                    ->setCellValue('C4', 'Sangat Baik')
	                    ->setCellValue('D4', 'Baik')
	                    ->setCellValue('E4', 'Cukup')
	                    ->setCellValue('F4', 'Kurang');

	            
	        $column = $objPHPExcel->setActiveSheetIndex(0);

	        foreach ($diagram_mp as $row){
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
		        $column->setCellValue("C5", $row['mp1_a']);
		        $column->setCellValue("D5", $row['mp1_b']);
		        $column->setCellValue("E5", $row['mp1_c']);
		        $column->setCellValue("F5", $row['mp1_d']);
		        $column->setCellValue("C6", $row['mp2_a']);
		        $column->setCellValue("D6", $row['mp2_b']);
		        $column->setCellValue("E6", $row['mp2_c']);
		        $column->setCellValue("F6", $row['mp2_d']);
		        $column->setCellValue("C7", $row['mp3_a']);
		        $column->setCellValue("D7", $row['mp3_b']);
		        $column->setCellValue("E7", $row['mp3_c']);
		        $column->setCellValue("F7", $row['mp3_d']);
		        $column->setCellValue("C8", $row['mp4_a']);
		        $column->setCellValue("D8", $row['mp4_b']);
		        $column->setCellValue("E8", $row['mp4_c']);
		        $column->setCellValue("F8", $row['mp4_d']);
		        $column->setCellValue("C9", $row['mp5_a']);
		        $column->setCellValue("D9", $row['mp5_b']);
		        $column->setCellValue("E9", $row['mp5_c']);
		        $column->setCellValue("F9", $row['mp5_d']);
		        $column->setCellValue("C10", $row['mp6_a']);
		        $column->setCellValue("D10", $row['mp6_b']);
		        $column->setCellValue("E10", $row['mp6_c']);
		        $column->setCellValue("F10", $row['mp6_d']);
		        $column->setCellValue("C11", $row['mp7_a']);
		        $column->setCellValue("D11", $row['mp7_b']);
		        $column->setCellValue("E11", $row['mp7_c']);
		        $column->setCellValue("F11", $row['mp7_d']);
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
	        header('Content-Disposition: attachment;filename="Laporan Data Kuesioner (Diagram Manaemen dan Profesionalisme) -  '.$dari.' - '.$sampai.'.xlsx"');

	        //unduh file
	        $objWriter->save("php://output");
		}

	}

}

/* End of file Chart.php */
/* Location: ./application/controllers/Chart.php */