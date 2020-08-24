<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

		public function index(){


			if (get_user_type() == 1 || get_user_type() == 0) {
				redirect(base_url("managepurchaseorders"));
			}
			elseif (get_user_type() == 2) {
				redirect(base_url("managepurchaseorders"));
			}
			else{
				redirect(base_url("stockout"));
			}

			$data["title"] 		="Home";
			$data["page_name"]  ="home";
			$data['has_header'] ="includes/admin/header";
			$data['has_footer']	="includes/index_footer";
			$this->load_page('index',$data);

		}

}
