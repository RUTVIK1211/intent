<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FileController extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if (!$this->session->userdata('userId')) {
			redirect('');
		}
	}

	public $data;

	public function index()
	{
		load_admin_view('file', 'uploadfile');
	}

	public function doc_upload()
	{
		if ($this->input->post()) {
			// echo "<pre>";
			// print_r($_POST);
			// echo "<br>";
			// print_r($_FILES);
			// exit;
			$validation = [
				['field' => 'doc_name', 'label' => 'Document Name', 'rules' => 'required'],
				['field' => 'doc1_id', 'label' => 'Document', 'rules' => 'required'],
			];

			$this->form_validation->set_rules($validation);
			if ($this->form_validation->run() == FALSE) {
				//dd($this->form_validation->error_array());
				$this->data['errors'] = $this->form_validation->error_array();
				load_admin_view('file', 'uploadfile', $this->data);
			} else {

				if (!empty($_FILES['doc1_1_img']['name'])) {
					$config['upload_path'] = './uploads/files/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
					$config['max_size'] = 0;
					$doc1_1_img_name = strtotime('now');
					$config['file_name'] = $doc1_1_img_name;
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('doc1_1_img')) {
						$flag = 0;
						$error = $this->upload->display_errors();
						if (strpos($error, "The file you are attempting to upload is larger than the permitted size")) {
							$this->session->set_flashdata('error', "File size larger than allowed size.");
						} else {
							$this->session->set_flashdata('error', $error);
						}
						redirect('upload-document');
					} else {
						$post_image = $this->upload->data();
						$doc1_1_img = $post_image['file_name'];
						$insertdata = array(
							"name" => $this->input->post('doc_name'),
							"type" => $this->input->post('doc1_id'),
							"filename" => $doc1_1_img
						);
						$adhar_insert_1 = $this->Common_model->insert($insertdata, "documentmaster");
						if ($adhar_insert_1) {
							$this->session->set_flashdata('message', 'File Uploaded Successfully');
						} else {
							$this->session->set_flashdata('error', 'Something went wrong');
						}
						redirect('upload-document');
					}
				}
			}
		} else {
			load_admin_view('file', 'uploadfile');
		}
	}

	public function list_document()
	{
		load_admin_view('file', 'listfile');
	}

	public function list_document_datatable()
	{

		$columns = array();
		$table = 'documentmaster';
		$primaryKey = 'id';
		$where = "";
		$joinQuery = '';

		$columns[0] = array('db' => 'id', 'dt' => 0, 'field' => 'id');
		$columns[1] = array('db' => 'name', 'dt' => 1, 'field' => 'name');
		$columns[2] = array('db' => 'type', 'dt' => 2, 'field' => 'type', 'formatter' => function ($d, $row) {

			switch ($row[2]) {
				case '0':
					return "Both";
					break;
				case '1':
					return "Notification & Updates";
					break;
				case '2':
					return "Downloads";
					break;
			}
		});
		$columns[3] = array('db' => 'status', 'dt' => 3, 'field' => 'status', 'formatter' => function ($d, $row) {
			if ($row[3] == '0') {
				return "In Active";
			} elseif ($row[3] == '1') {
				return "Active";
			}
		});
		$columns[4] = array('db' => 'id', 'dt' => 4, 'field' => 'id', 'formatter' => function ($d, $row) {

			if ($row[3] == 0) {
				$action = "<a href='" . base_url('FileController/change_status/' . $row[0]) . "'>
                <button type='button' class='btn btn-primary btn-sm ladda-button waves-effect waves-classic' style='width:84px;'>
                Activate</button></a>";
			} else {
				$action = "<a href='" . base_url('FileController/change_status/' . $row[0]) . "'>
                <button type='button' class='btn btn-danger btn-sm ladda-button waves-effect waves-classic'>
                Deactivate</button></a>";
			}
			$action .= "<a href='" . base_url('FileController/delete/' . $row[0]) . "'>
                <button type='button'  class='btn btn-danger btn-sm ladda-button waves-effect waves-classic'>
                Delete</button></a>";
			return $action;
		});

		echo json_encode(
			SSP::simple($_GET, $table, $primaryKey, $columns)
		);
	}

	public function delete($id)
	{
		$id = $id;
		$data = $this->Common_model->delete('documentmaster', array('id' => $id));
		if ($data) {
			$this->session->set_flashdata('message', "Deleted successfully");
		} else {
			$this->sesion->set_flashdata('error', "Cant be deleted ");
		}
		redirect('list-document');
	}

	public function change_status($id)
	{
		$id = $id;
		$status = "";
		$data = $this->Common_model->getSingle_data('*', 'documentmaster', array('id' => $id));

		switch ($data['status']) {
			case '0':
				$status = 	$this->Common_model->update(['status' => '1'], 'documentmaster', ['id' => $id]);
				break;
			case '1':
				$status =	$this->Common_model->update(['status' => '1'], 'documentmaster', ['id' => $id]);
				break;
		}

		if ($status) {
			$this->session->set_flashdata('message', 'Updated Successfully');
		} else {

			$this->session->set_flashdata('error', 'Something Went Wrong');
		}
		redirect('list-document');
	}
}

/* End of file FileController.php */
