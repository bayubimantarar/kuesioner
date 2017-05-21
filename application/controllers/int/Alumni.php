<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->int_check_login();
	}

	public function index(){
		$data = array(
				'title' 	=> 'Data Alumni | Internal STMIK Bandung',
				'alumni' 	=> $this->kuesioner_app->get_data_alumni()
				);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/alumni/index', $data);
		$this->load->view('int/pages/footer');
	}

	public function form_add(){
		$data = array(
				'title' => 'Form  Add Data Alumni | Internal STMIK Bandung'
				);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/alumni/form_add');
		$this->load->view('int/pages/footer');
	}

	public function form_edit(){
		$id = $this->uri->segment(4);

		// echo $nim;

		$data = array(
				'title' => 'Form edit data alumni | Internal STMIK Bandung',
				'alumni' => $this->kuesioner_app->get_alumni_byid($id)
				);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/alumni/form_edit', $data);
		$this->load->view('int/pages/footer');	
	}

	public function add_process(){
		$this->form_validation->set_rules('nim', 'NIM', 'required|callback_nim_check');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_message('required', '%s harap diisi!');
		$this->form_validation->set_message('matches', 'Password tidak sama!');
		$this->form_validation->set_message('valid_email', 'Email tidak valid!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if($this->form_validation->run() == FALSE){
			$data = array(
				'title' => 'Form Add Data Alumni | Internal STMIK Bandung'
				);

			$this->load->view('int/pages/header', $data);
			$this->load->view('int/pages/navbar');
			$this->load->view('int/pages/sidebar');
			$this->load->view('int/alumni/form_add');
			$this->load->view('int/pages/footer');
		}else{
			$nim 		= $this->input->post('nim', TRUE);
			$nama 		= $this->input->post('nama', TRUE);
			$password 	= bcrypt($this->input->post('password', TRUE), 12);
			$jurusan 	= $this->input->post('jurusan', TRUE);
			$email 		= $this->input->post('email', TRUE);
			$alamat 	= $this->input->post('alamat', TRUE);

			$data = array(
						'nim' 		=> $nim,
						'nama'		=> $nama,
						'password' 	=> $password,
						'jurusan' 	=> $jurusan,
						'email'		=> $email,
						'alamat'	=> $alamat,
					);

			$query = $this->kuesioner_app->alumni_add_process($data);

			$this->session->set_flashdata('notif', 'Data berhasil ditambah!');

			redirect(base_url('int/alumni/index'));
		}
	}

	public function edit_process(){
		$id 		= $this->input->post('id');
		$nim 		= $this->input->post('nim');
		$nama 		= $this->input->post('nama');
		$password 	= bcrypt($this->input->post('password', TRUE), 12);
		$jurusan 	= $this->input->post('jurusan');
		$email 		= $this->input->post('email');
		$alamat 	= $this->input->post('alamat');

		if(!empty($password)){
			$data = array(
						'nim' 		=> $nim,
						'nama' 		=> $nama,
						'password' 	=> $password,
						'jurusan' 	=> $jurusan,
						'email'		=> $email,
						'alamat'	=> $alamat
					);

			$query = $this->kuesioner_app->alumni_update_process($data, $id);

			$this->session->set_flashdata('notif', 'Berhasil mengedit data!');

			redirect(base_url('int/alumni/index'));
		}else{
			$data = array(
						'nim' 		=> $nim,
						'nama' 		=> $nama,
						'jurusan' 	=> $jurusan,
						'email' 	=> $email,
						'alamat'	=> $alamat
					);

			$query = $this->kuesioner_app->alumni_update_process($data, $id);

			$this->session->set_flashdata('notif', 'Berhasil mengedit data!');

			redirect(base_url('int/users/index'));
		}
	}

	public function delete_process(){
		$id = $this->uri->segment(4);

		$this->kuesioner_app->alumni_delete_process($id);

		$this->session->set_flashdata('notif', 'Data berhasil dihapus!');

		redirect(base_url('int/alumni/index'));
	}

	public function nim_check($str){
		if ($this->kuesioner_app->alumni_row_check('nim', $str) > 0){
			$this->form_validation->set_message('nim_check', 'NIM Sudah Digunakan!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function email_check($str){
		if ($this->kuesioner_app->alumni_row_check('email', $str) > 0){
			$this->form_validation->set_message('email_check', 'Email Sudah Digunakan!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function export_excel(){
		$alumni = $this->kuesioner_app->get_data_alumni();

        $objPHPExcel = new PHPExcel();

        $styleArray = array(
          	'borders' => array(
           		'allborders' => array(
           			'style' => PHPExcel_Style_Border::BORDER_THIN
           			)
           		)
           	);

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);

        // //set Sheet yang akan diolah 
        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'NIM')
                    ->setCellValue('B1', 'Nama Lengkap')
                    ->setCellValue('C1', 'Jurusan')
                    ->setCellValue('D1', 'Email')
                    ->setCellValue('E1', 'Alamat');

            
        $column = $objPHPExcel->setActiveSheetIndex(0);
        $counter = 2;

        foreach ($alumni as $row){
          	if($row['jurusan'] == 1){
           		$jurusan = "Teknik Informatika";
           	}else{
           		$jurusan = "Sistem Informasi";
           	}

	        $column->setCellValue("A".$counter, $row['nim']);
	        $column->setCellValue("B".$counter, $row['nama']);
	        $column->setCellValue("C".$counter, $jurusan);
	        $column->setCellValue("D".$counter, $row['email']);
	        $column->setCellValue("E".$counter, $row['alamat']);
	        $objPHPExcel->getActiveSheet()->getStyle('A1:E'.$counter)->applyFromArray($styleArray);
	        $counter++;
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
        header('Content-Disposition: attachment;filename="hasilExcel.xlsx"');

        //unduh file
        $objWriter->save("php://output");
    }

    public function export_excel_byid(){
    	$id = $this->uri->segment(4);

    	$alumni = $this->kuesioner_app->get_alumni_byid($id);

        $objPHPExcel = new PHPExcel();

        $styleArray = array(
          	'borders' => array(
           		'allborders' => array(
           			'style' => PHPExcel_Style_Border::BORDER_THIN
           			)
           		)
           	);

        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);

        // //set Sheet yang akan diolah 
        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'NIM')
                    ->setCellValue('B1', 'Nama Lengkap')
                    ->setCellValue('C1', 'Jurusan')
                    ->setCellValue('D1', 'Email')
                    ->setCellValue('E1', 'Alamat');

            
        $column = $objPHPExcel->setActiveSheetIndex(0);
        $counter = 2;

        foreach ($alumni as $row){
          	if($row['jurusan'] == 1){
           		$jurusan = "Teknik Informatika";
           	}else{
           		$jurusan = "Sistem Informasi";
           	}

	        $column->setCellValue("A".$counter, $row['nim']);
	        $column->setCellValue("B".$counter, $row['nama']);
	        $column->setCellValue("C".$counter, $jurusan);
	        $column->setCellValue("D".$counter, $row['email']);
	        $column->setCellValue("E".$counter, $row['alamat']);
	        $objPHPExcel->getActiveSheet()->getStyle('A1:E'.$counter)->applyFromArray($styleArray);
	        $counter++;
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
        header('Content-Disposition: attachment;filename="hasilExcel.xlsx"');

        //unduh file
        $objWriter->save("php://output");

    }

}

/* End of file Alumni.php */
/* Location: ./application/controllers/dashboard/Alumni.php */