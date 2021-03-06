<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class User extends AdminController {
	
	var $HOBBY = ["歌舞伎","能","文楽","落語","美術・工芸品"];
	var $HABIT = ["着付","和裁","茶道","華道","三味線","琴"];
	var $COLOR = ["青系","赤系","黄系","みどり系","黒","淡色"];
	var $ETC = ["せっかち","細かい","穏やか","大雑把","金額にシビア","沢山相談し"];
	var $ACTIVE = ["かわいい","きれい","シック","渋め","粋","古典"];

	public function __construct(){
		parent::__construct();
		$this->load->model("User_model", "model");
	}
	public function save(){
		$data = $this->input->post();
		if(!preg_match('/^[ぁ-ん]+$/u', $data["nick_name"])){
			$this->json(array("success"=>false, "msg"=>"「ふりがな」入力チェック"));
			return;
		}
		if(isset($data["extend"])){
			unset($data["extend"]);
		}
		if(isset($data["profile_avatar_remove"])){
			unset($data["profile_avatar_remove"]);
		}
		$admin = $this->user_data();
		$data["admin_id"] = $admin["id"];
		if($data["id"]){
			$this->model->updateData($data);
			$this->json(array("success"=> true, "id"=>$data["id"]));
		}else{
			$data["created_at"] = date("Y-m-d H:s:i");
			$id = $this->model->setData($data);
			$this->json(array("success"=>true, "id"=>$id));
		}
	}

	// delete image pair
	public function delete($id){
		$this->recipe->unsetDataById($id);
		$this->json(array("success"=>true, "msg"=>"削除しました。"));
	}

	public function confirm(){
		$filter = $this->input->post();
		$admin = $this->admin->getOneByParam(array("user_id"=>$filter["admin_id"]));
		if($admin){
			if(sha1($filter["password"])== $admin["password"]){
				if($filter["confirm"] == "save") {
					$this->user->updateData(array("status"=>2, "id"=>$filter["id"]));
					$this->product->updateDataByParam(array("status"=>2), array("admin_id"=>$admin["id"], "user_id"=>$filter["id"]));
					$this->family->updateDataByParam(array("status"=>2), array("admin_id"=>$admin["id"], "user_id"=>$filter["id"]));
					$this->detail->updateDataByParam(array("status"=>2), array("admin_id"=>$admin["id"], "user_id"=>$filter["id"]));
				}else{
					$this->user->unsetDataById($filter["id"]);
					$this->product->deleteByParam(array("user_id"=>$filter["id"], "admin_id"=>$admin["id"]));
					$this->family->deleteByParam(array("user_id"=>$filter["id"], "admin_id"=>$admin["id"]));
					$this->detail->deleteByParam(array("user_id"=>$filter["id"], "admin_id"=>$admin["id"]));
				}
				$this->json(array("success"=>true, "msg"=>"正確に保管しました。"));
			}else{
				$this->json(array("success"=>false, "msg"=>"パスワードが正しくありません。"));
			}
		}else{
			$this->json(array("success"=>false, "msg"=>"IDが正しくありません。"));
		}
	}

	public function api(){
		$filter = $this->input->post("query");
		$params = explode(" ", $filter["q"]);
		$data["meta"] = $filter;
		$data["data"] = $this->model->all($params);
		$this->json($data);
	}

	public function search(){
		$filter["query"] = $this->input->post("query");
		$data["filter"] = $filter["query"];
		$this->render("public/search",$data);
	}
	public function view(){
		$data["page_title"] = "View Page";
		$data["filter"] = $this->input->post();
		$this->render("admin/view", $data);
	}
	public function export($ids){
		$filter = explode(".",$ids);
		foreach($filter as $index => $id){
			if($id)
				$users[$index] = $this->user->getDataById($id);
		}
		$data['users'] = $users;
		$this->load->library('pdf');
		$this->load->view('admin/print', $data);
	}
	public function saveImage(){
		$data = $this->input->post("extend");
		$this->user->updateData($data);
		$images = array();
		unset($data["active"]);
		$startNum = 0;
		for($i =1; $i <= 20 ; $i++){
			if(isset($_FILES["file".$i]))
				if ( 0 < $_FILES["file".$i]['error'] ) {
					echo 'Error: ' . $_FILES["file".$i]['error'] . '<br>';
				}
				else {
					if($startNum == 0){
						$startNum = $i;
					}
					$name = $_FILES["file".$i]["name"];
					$ext = pathinfo($name, PATHINFO_EXTENSION);
					move_uploaded_file($_FILES["file".$i]['tmp_name'], 'uploads/' . $data["id"] . "_". $i.".".$ext);
					$images[$i] = $data["id"]. "_". $i.".".$ext;
				}
		}
		$user = $this->user->getDataById($data["id"]);
		$old_images = (array)json_decode($user["image"]);
		if($old_images)
			$result = $old_images + $images;
		else
			$result = $images;
		$this->user->updateData(array("id"=>$data["id"], "image"=>json_encode($result)));

		$this->json(array("success"=>true, "msg"=>"成功!", "data" => $data));
	}
	public function removeImage(){
		$data = $this->input->post();
		$user = $this->user->getDataById($data["id"]);
		$images = json_decode($user["image"]);
		if($images){
			foreach($images as $index =>$item){
				if($index == $data["index"]){
					unset($images->$index);
				}
			}
		}
		$user["image"] = json_encode($images);
		$this->user->updateData($user);
	}
	public function getData($keyword = null){
		if($keyword)
			$params = explode(" ", urldecode($keyword));
		else
			$params = [];
		$data = $this->model->all($params);

		$this->json(array("success"=>true, "data"=>$data));
	}
}