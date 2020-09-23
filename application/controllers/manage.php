<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
		$this->load->model('modelreg','Alumni');
	}

public function register(){
    $data = array(
        's_gender' => $this->input->post("s_gender"),
        's_title' => $this->input->post("s_title"),
        's_fname' => $this->input->post("s_fname"),
        's_lname'=> $this->input->post("s_lname"),
        's_nickname'=> $this->input->post("s_nickname"),
        's_bday'=> $this->input->post("s_bday"),
        's_facebook'=> $this->input->post("s_facebook"),
        's_email'=> $this->input->post("s_email"),
        's_password'=> $this->input->post("s_password"),
        's_repassword'=> $this->input->post("s_repassword"),
        'address1'=> $this->input->post("address1"),
        'address2'=> $this->input->post("address2"),
        'address3'=> $this->input->post("address3"),
        'address4'=> $this->input->post("address4"),
        'address5'=> $this->input->post("address5"),
        's_generation'=> $this->input->post("s_generation"),
        's_address'=> $this->input->post("s_address"),
        's_phone'=> $this->input->post("s_phone"),



    );
        // $this->Menu->menu_insert($data);
        $this->Alumni->Alumniw($data);
        $this->load->view('home');
        // $this->load->view('view_insert_successwithmenulink');


}
// public function showall()
// 	{
// 		$result['menus'] = $this->Menu->getAllMenus();
// 		$this->load->view('view_menu',$result);
// 	}


// 	public function delete_menu()
// 	{
// 		$delete_mid = $this->input->get("del_id");
// 		//echo $delete_mid;
// 		$this->Menu->menu_delete($delete_mid);
// 		echo "<center>";
// 		echo "ลบเมนู รหัส ".$delete_mid." เรียบร้อยแล้ว";
// 		$this->load->view('view_show_menulink');
// 	}

// 	public function edit_menu()
// 	{
// 		$edit_mid = $this->input->get("edit_id");
// 		$menuselect['menu_select'] = $this->Menu->menu_edit($edit_mid);
// 		//echo $edit_mid;
// 		$this->load->view('view_menu_edit',$menuselect);
// 	}

// 	public function update_menu()
// 	{
// 		$data = array(
// 			'menu_id' => $this->input->post("menu_id"),
// 			'menu_name' => $this->input->post("menu_name"),
// 			'mcategory_id' => $this->input->post("menu_ctype_id"),
// 			'mshop_id'=> $this->input->post("sh_menu_id"),
// 		);
// 		$menu_id = $this->input->post("menu_id");
// 		//echo $menu_id;
// 		$this->Menu->menu_update($data,$menu_id);
// 		echo "<center>";
// 		echo "อัพเดทเมนู รหัส ".$menu_id." เรียบร้อยแล้ว";
// 		$this->load->view('view_show_menulink');
	}