<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tshirt_editor extends CI_Controller {

	public function index()
	{
		$this->load->view('Tshirt_editor');
	}

	public function tshirt_image(){

		$config['upload_path'] = 'uploads/meta_images/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = rand(999,99999).$_FILES['image_upload']['name'];
		
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('image_upload')){
			$uploadData = $this->upload->data();
			$photo_to_paste = base_url()."uploads/meta_images/".$uploadData['file_name'];
			
			$white_image = base_url()."images/thumb1.jpg"; //873 x 622 
		
			$im = imagecreatefromjpeg($white_image);
			$condicion = GetImageSize($photo_to_paste); // image format?

			if($condicion[2] == 1) //gif
			$im2 = imagecreatefromgif("$photo_to_paste");
			if($condicion[2] == 2) //jpg
			$im2 = imagecreatefromjpeg("$photo_to_paste");
			if($condicion[2] == 3) //png
			$im2 = imagecreatefrompng("$photo_to_paste");

			imagecopy($im, $im2, (imagesx($im)/2)-(imagesx($im2)/2), (imagesy($im)/2)-(imagesy($im2)/2), 0, 0, imagesx($im2), imagesy($im2));

			//@imagejpeg($im,"test4.jpg",90);
			@imagedestroy($im);
			@imagedestroy($im2);
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */