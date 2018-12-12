<?php 

class Control
{
	public $conn;
	public $pro_img_path = "gallery/products/";

	public function __construct()
	{
		$this->conn = new PDO('mysql:host=localhost;dbname=superstore;charset=utf8', 'root', '');
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		# Check Connection
		if(!$this->conn)
			die("We are under maintenance!");
	}
	 #Login 
	public function do_login($user, $pass)
	{
		$query = $this->conn->prepare("
			SELECT * FROM `admin` WHERE `admin_user`=:EMID AND `admin_pass`=:PWD
		");

		$valToBind = array(
			':EMID' => $user,
			':PWD' => md5($pass)
		);

		$query->execute($valToBind);
		$usersList = $query->fetchAll(PDO::FETCH_ASSOC);
		$totalRows = $query->rowCount();
		
		if($totalRows == 1)
			return array("status" => true, "data" => $usersList[0]);
		else
			return array("status" => false);
	}
	#Insert Category Data
	public function save_category($cat_name, $cat_serial)
	{
		$query = $this->conn->prepare("
			INSERT INTO `category` (`cat_name`, `cat_serial`) VALUES
			(:CAT_NAME, :CAT_SERIAL);
		");

		$valToBind = array(
			':CAT_NAME' => $cat_name, 
			':CAT_SERIAL' => $cat_serial
		);

		$query->execute($valToBind);

		$insertedRows = $query->rowCount();
		$lastInsertId = $this->conn->lastInsertId();
		
		if($insertedRows == 1)
			return array("status" => true, "data" => $lastInsertId);
		else 
			return array("status" => false);
	}
	#Insert Subcategory Data
	public function save_subcat($cat_id, $subcat_name, $subcat_serial)
	{
		$query = $this->conn->prepare("
			INSERT INTO `subcategory` (`cat_id`, `subcat_name`, `subcat_serial`) VALUES
			(:CAT_ID, :SUBCAT_NAME, :SUBCAT_SERIAL);
		");

		$valToBind = array(
			':CAT_ID' => $cat_id, 
			':SUBCAT_NAME' => $subcat_name, 
			':SUBCAT_SERIAL' => $subcat_serial
		);

		$query->execute($valToBind);

		$insertedRows = $query->rowCount();
		$lastInsertId = $this->conn->lastInsertId();
		
		if($insertedRows == 1)
			return array("status" => true, "data" => $lastInsertId);
		else 
			return array("status" => false);
	}
	
	#Insert Admin Data
	public function save_admin($admin_name, $admin_user, $admin_pass, $admin_type)
	{
		$query = $this->conn->prepare("
			INSERT INTO `admin` (`admin_name`, `admin_user`, `admin_pass`, `admin_type`) VALUES
			(:ADMIN_NAME, :ADMIN_USER, :ADMIN_PASS, :ADMIN_TYPE);
		");

		$valToBind = array(
			':ADMIN_NAME' => $admin_name, 
			':ADMIN_USER' => $admin_user,
			':ADMIN_PASS' => md5($admin_pass),
			':ADMIN_TYPE' => $admin_type
		);

		$query->execute($valToBind);

		$insertedRows = $query->rowCount();
		$lastInsertId = $this->conn->lastInsertId();
		
		if($insertedRows == 1)
			return array("status" => true, "data" => $lastInsertId);
		else 
			return array("status" => false);
	}
	
	#Select all data from table.
	public function get_data($table_name, $column_name = null, $column_value = null)
	{
		if( empty($column_name) && empty($column_value) )
		{
			$query = $this->conn->prepare("
				SELECT * FROM `$table_name`
			");

			$query->execute();
		}
		else
		{
			$query = $this->conn->prepare("
				SELECT * FROM `$table_name` WHERE `$column_name`=:COL_VALUE
			");
			
			$valToBind = array(
				':COL_VALUE' => $column_value
			);

			$query->execute($valToBind);
		}

		$usersList = $query->fetchAll(PDO::FETCH_ASSOC);

		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return array("status" => true, "data" => $usersList);
		else 
			return array("status" => false);
	}
	
	#Get sub-category Data from Category by INNER JOIN.
	public function get_subcat()
	{
		$query = $this->conn->prepare("
			SELECT category.*, subcategory.* FROM category INNER JOIN subcategory ON category.cat_id = subcategory.cat_id
		");

		$query->execute();

		$dataList = $query->fetchAll(PDO::FETCH_ASSOC);

		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return array("status" => true, "data" => $dataList);
		else 
			return array("status" => false);
	}
		#Delete Data 
	public function delete_data($table_name, $column_name, $column_value)
	{
		$delQuery = $this->conn->prepare("DELETE FROM `$table_name` WHERE `$column_name`=:GOT_ID");

		$delQuery->bindValue(':GOT_ID', $column_value, PDO::PARAM_INT);
		try {
			$delQuery->execute();	
		}
		catch(Exception $e)
		{
			return array("status" => false);
		}

		$deletedRow = $delQuery->rowCount();
		
		if($deletedRow > 0)
			return array("status" => true, "data" => $deletedRow);
		else 
			return array("status" => false);
	}
	#Update Admin
	public function update_admin($name, $user, $status, $type, $editadmin){
		$query = $this->conn->prepare("
			UPDATE `admin` SET
			`admin_name`=:NAME,
			`admin_user`=:USER,
			`admin_type`=:TYPE,
			`admin_status`=:STATUS
			WHERE `id` = :ID
		");
		$query->bindValue(':NAME', $name);
		$query->bindValue(':USER', $user);
		$query->bindValue(':STATUS', $status);
		$query->bindValue(':TYPE', $type);
		$query->bindValue(':ID', $editadmin);
		
		$query->execute();
		$updaterows = $query->rowCount();
		if($updaterows > 0)
			return array("status" => true, "data" => $updaterows);
		else 
			return array("status" => false);
	}
	
	#Update Subcategory
	public function update_subcat($subcat_id, $cat_id, $subcat_name, $subcat_serial, $subcat_status)
	{
		$query = $this->conn->prepare("
			UPDATE `subcategory` SET 
			`cat_id`=:CATID, 
			`subcat_name`=:NAME, 
			`subcat_serial`=:SERIAL, 
			`subcat_status`=:STATUS

			WHERE `subcat_id` = :ID
		");
		$query->bindValue(':CATID', $cat_id);
		$query->bindValue(':NAME', $subcat_name);
		$query->bindValue(':SERIAL', $subcat_serial);
		$query->bindValue(':STATUS', $subcat_status);
		$query->bindValue(':ID', $subcat_id);
		$query->execute();
		$rowNumber = $query->rowCount();
		
		if($rowNumber > 0)
			return array("status" => true, "data" => $rowNumber);
		else 
			return array("status" => false);
	}
	#Update Customer
	public function update_customer($cust_name, $email, $phone, $gender, $editcust)
	{
		$query = $this->conn->prepare("
			UPDATE `customer` SET
			`cust_name`=:NAME,
			`cust_email`=:EMAIL,
			`cust_phone`=:PHONE,
			`cust_gender`=:GENDER
			WHERE `cust_id` = :ID
		");
		$query->bindValue(':NAME', $cust_name);
		$query->bindValue(':EMAIL', $email);
		$query->bindValue(':PHONE', $phone);
		$query->bindValue(':GENDER', $gender);
		$query->bindValue(':ID', $editcust);
		$query->execute();
		$updaterows = $query->rowCount();
		if($updaterows > 0)
			return array("status" => true, "data" => $updaterows);
		else 
			return array("status" => false);
	}

	#Update Category
	public function update_category($cat_name, $status, $serial, $editcat)
	{
		$query = $this->conn->prepare("
			UPDATE `category` SET
			`cat_name`=:NAME,
			`cat_status`=:STATUS,
			`cat_serial`=:SERIAL
			WHERE `cat_id` = :ID
		");
		$query->bindValue(':NAME', $cat_name);
		$query->bindValue(':STATUS', $status);
		$query->bindValue(':SERIAL', $serial);
		$query->bindValue(':ID', $editcat);
		$query->execute();
		$updaterows = $query->rowCount();
		if($updaterows > 0)
			return array("status" => true, "data" => $updaterows);
		else 
			return array("status" => false);
	}
		#Product Add
	public function add_product($data, $files)
	{
		# Product's Common Data
		$prod_name = $data['prod_name'];
		$prod_cat_id = $data['prod_cat_id'];
		$prod_subcat_id = $data['prod_subcat_id'];
		$prod_price = $data['prod_price'];
		$prod_short_desc = $data['prod_short_desc'];
		$prod_details = $data['prod_details'];
		$prod_stock = $data['prod_stock'];

		# Product Image File One
		$file_name_one = $files['prod_pic_1']['name'];
		$file_size_one = $files['prod_pic_1']['size'];
		$file_temp_one = $files['prod_pic_1']['tmp_name'];
		
		# Product Image File Two
		$file_name_two = $files['prod_pic_2']['name'];
		$file_size_two = $files['prod_pic_2']['size'];
		$file_temp_two = $files['prod_pic_2']['tmp_name'];
		
		//Product Image File Three
		$file_name_three = $files['prod_pic_3']['name'];
		$file_size_three = $files['prod_pic_3']['size'];
		$file_temp_three = $files['prod_pic_3']['tmp_name'];
		
		# Product Image Validation
		$file1Status = $this->checkFile("IMAGE", $files['prod_pic_1']['type'], $files['prod_pic_1']['size'], $files['prod_pic_1']['error']);
		$file2Status = $this->checkFile("IMAGE", $files['prod_pic_2']['type'], $files['prod_pic_2']['size'], $files['prod_pic_2']['error']);
		$file3Status = $this->checkFile("IMAGE", $files['prod_pic_3']['type'], $files['prod_pic_3']['size'], $files['prod_pic_3']['error']);
		
		if($file1Status['status'] == false || $file2Status['status'] == false || $file3Status['status'] == false)
		{
			return array("status" => false, "data" => "IMAGE_ERROR");
		}
		
		# Product Names for Database
		$uploaded_file_one = "PROIMG1_" . $file1Status['data'] . $file_name_one;
		$uploaded_file_two = "PROIMG2_" . $file2Status['data'] . $file_name_two;
		$uploaded_file_three = "PROIMG3_" . $file3Status['data'] . $file_name_three;
		
		
		/* =============================================== */

		$sql = "INSERT INTO `product`(`prod_name`, `prod_cat_id`, `prod_subcat_id`, `prod_price`, `prod_short_desc`, `prod_details`, `prod_stock`, `prod_pic_1`, `prod_pic_2`, `prod_pic_3`) VALUES('$prod_name', '$prod_cat_id', $prod_subcat_id, '$prod_price', '$prod_short_desc', '$prod_details', '$prod_stock', '$uploaded_file_one', '$uploaded_file_two', '$uploaded_file_three')";
		$query = $this->conn->prepare($sql);
		$query->execute();
		$insertedRows = $query->rowCount();
		$lastInsertId = $this->conn->lastInsertId();
		if($insertedRows == 1)
		{
			$uploaded_image_one = $this->pro_img_path . $uploaded_file_one;
			$uploaded_image_two = $this->pro_img_path . $uploaded_file_two;
			$uploaded_image_three = $this->pro_img_path . $uploaded_file_three;
			move_uploaded_file($file_temp_one, $uploaded_image_one);
			move_uploaded_file($file_temp_two, $uploaded_image_two);
			move_uploaded_file($file_temp_three, $uploaded_image_three);
			
			return array("status" => true, "data" => $lastInsertId);
		}
		else 
			return array("status" => false);
	}

	# Check Image File
	public function checkFile($fileCategory, $fileType, $fileSize, $fileError)
	{
		if ($fileCategory == "IMAGE") {
				# 5 MB = 5242880 Bytes
			if ((( $fileType == "image/gif" )
				|| ($fileType == "image/jpeg")
				|| ($fileType == "image/jpg") 
				|| ($fileType == "image/pjpeg") 
				|| ($fileType == "image/x-png")
				|| ($fileType == "image/png"))
				&& ($fileSize < 5242880)
				&& ($fileError <= 0))
			{
				$fileName = rand(100000, 999999) .date("YmdHis");
				return array("status" => true, "data" => $fileName);
			}
			else return array("status" => false);
		}
		
	}

	#Get data from Product table INNER JOIN with Category and Subcategory table.
	public function get_product()
	{
		$query = $this->conn->prepare(
			"SELECT `p`.*, `c`.`cat_name`, `sc`.`subcat_name` FROM `product` AS `p`, `category` AS `c`, `subcategory` AS `sc` WHERE `p`.`prod_cat_id` = `c`.`cat_id` AND `p`.`prod_subcat_id` = `sc`.`subcat_id`"
			);
		$query->execute();
		$dataList = $query->fetchAll(PDO::FETCH_ASSOC);

		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return array("status" => true, "data" => $dataList);
		else 
			return array("status" => false);
	}

	#update Product
	public function update_product($data, $files, $id)
	{
		# Product's Common Data
		$prod_name = $data['prod_name'];
		$prod_cat_id = $data['prod_cat_id'];
		$prod_subcat_id = $data['prod_subcat_id'];
		$prod_price = $data['prod_price'];
		$prod_short_desc = $data['prod_short_desc'];
		$prod_details = $data['prod_details'];
		$prod_status  = $data['prod_status'];
		$prod_stock   = $data['prod_stock'];
		$prod_is_featured = $data['prod_is_featured'];
		$prod_is_latest = $data['prod_is_latest'];

		# Product Image File One
		$file_name_one = $files['prod_pic_1']['name'];
		$file_size_one = $files['prod_pic_1']['size'];
		$file_temp_one = $files['prod_pic_1']['tmp_name'];
		
		# Product Image File Two
		$file_name_two = $files['prod_pic_2']['name'];
		$file_size_two = $files['prod_pic_2']['size'];
		$file_temp_two = $files['prod_pic_2']['tmp_name'];
		
		//Product Image File Three
		$file_name_three = $files['prod_pic_3']['name'];
		$file_size_three = $files['prod_pic_3']['size'];
		$file_temp_three = $files['prod_pic_3']['tmp_name'];
		
		# Product Image Unlink From Folder----Start
		$query = $this->conn->prepare("SELECT * FROM `product` WHERE `prod_id`='$id'");
		$query->execute();
		$imgList = $query->fetch(PDO::FETCH_ASSOC);
		
		# Product Names for Database
		$uploaded_file_one = "PROIMG1_" . date("YmdHis") . rand(100000,99999) . "_" . $file_name_one;
		$uploaded_file_two = "PROIMG2_" . date("YmdHis") . rand(100000,99999) . "_" . $file_name_two;
		$uploaded_file_three = "PROIMG3_" . date("YmdHis") . rand(100000,99999) . "_" . $file_name_three;
		
		# Product Image Validation
		if(!empty($file_name_one)) // Willing to New Upload Image
		{
			$file1Status = $this->checkFile("IMAGE", $files['prod_pic_1']['type'], $files['prod_pic_1']['size'], $files['prod_pic_1']['error']);
			
			if($file1Status['status'] == false)
				return array("status" => false, "data" => "IMAGE_ERROR");
			else // Image is OK
			{
				$sql2 = "`prod_pic_1`      ='$uploaded_file_one',";
				@unlink($this->pro_img_path.$imgList['prod_pic_1']);
			}
		}
		
		if(!empty($file_name_two))
		{
			$file2Status = $this->checkFile("IMAGE", $files['prod_pic_2']['type'], $files['prod_pic_2']['size'], $files['prod_pic_2']['error']);
			
			if($file2Status['status'] == false)
				return array("status" => false, "data" => "IMAGE_ERROR");
			else // Image is OK
			{
				$sql2 = "`prod_pic_2`      ='$uploaded_file_two',";
				unlink($this->pro_img_path.$imgList['prod_pic_2']);
			}
		}
		if(!empty($file_name_three))
		{
			$file3Status = $this->checkFile("IMAGE", $files['prod_pic_3']['type'], $files['prod_pic_3']['size'], $files['prod_pic_3']['error']);
			
			if($file3Status['status'] == false)
				return array("status" => false, "data" => "IMAGE_ERROR");
			else // Image is OK
			{
				$sql2 = "`prod_pic_3`      ='$uploaded_file_three',";
				unlink($this->pro_img_path.$imgList['prod_pic_3']);
			}
		}
		
		$sql1 = "UPDATE `product` SET 
				`prod_name`   	  ='$prod_name',
				`prod_cat_id` 	  ='$prod_cat_id',
				`prod_subcat_id`  ='$prod_subcat_id',
				`prod_price`   	  ='$prod_price',
				`prod_short_desc` ='$prod_short_desc',
				`prod_details`    ='$prod_details',
				`prod_status`     ='$prod_status',
				`prod_stock`   	  ='$prod_stock',
				`prod_is_featured`='$prod_is_featured',
				`prod_is_latest`  ='$prod_is_latest',";
				
		if( empty($file_name_one) && empty($file_name_two) && empty($file_name_three) )
		{
			$sql1 = rtrim($sql1, ","); 
		}
				
		if(!empty($file_name_one))
			$sql2 = "`prod_pic_1`      ='$uploaded_file_one',";
		if(!empty($file_name_two))
			$sql3 = "`prod_pic_2`      ='$uploaded_file_two',";
		if(!empty($file_name_three))
			$sql4 = "`prod_pic_3`      ='$uploaded_file_three'";
		
		$sql5 = @$sql2 . @$sql3 . @$sql4; 
		$sql5 = rtrim($sql5, ",");
		
		$sql6 = " WHERE `prod_id`='$id'";
		
		$sql = @$sql1 . @$sql5 . @$sql6; # echo $sql;
		$update_query = $this->conn->prepare($sql);
		$update_query->execute();
		$rowcount = $update_query->rowCount();
		
		if($rowcount > 0)
		{
			$uploaded_image_one = $this->pro_img_path . $uploaded_file_one;
			$uploaded_image_two = $this->pro_img_path . $uploaded_file_two;
			$uploaded_image_three = $this->pro_img_path . $uploaded_file_three;
			move_uploaded_file($file_temp_one, $uploaded_image_one);
			move_uploaded_file($file_temp_two, $uploaded_image_two);
			move_uploaded_file($file_temp_three, $uploaded_image_three);
			return array("status" => true, "data" => $rowcount);
		}
		else 
			return array("status" => false);
		
	}

	# Delete Product Table
	public function delete_product($id)
	{
		# Product Image Unlink From Folder----Start

		$query = $this->conn->prepare("SELECT * FROM `product` WHERE `prod_id`='$id'");
		$query->execute();
		$imgList = $query->fetch(PDO::FETCH_ASSOC);
			unlink($this->pro_img_path.$imgList['prod_pic_1']);
			unlink($this->pro_img_path.$imgList['prod_pic_2']);
			unlink($this->pro_img_path.$imgList['prod_pic_3']);
			
		# Product Image Unlink From Folder----End

		$delQuery = $this->conn->prepare("DELETE FROM `product` WHERE `prod_id`=:ID");
		$delQuery->bindValue(':ID', $id);
		$delQuery->execute();
		$deletedRow = $delQuery->rowCount();
		if($deletedRow > 0)
			return array("status" => true, "data" => $deletedRow);
		else 
			return array("status" => false);
	}
	
	# Get Invoice
	public function get_invoice()
	{
		$query = $this->conn->prepare(
			"SELECT `inv`.*, `cust`.`cust_name` FROM
				`invoice` AS `inv`, 
				`customer` AS `cust`WHERE 
				`inv`.`inv_id` = `cust`.`cust_id`"
				);
		$query->execute();
		$dataList = $query->fetchAll(PDO::FETCH_ASSOC);
		$totalRows = $query->rowCount();
		if($totalRows > 0)
			return array("status" => true, "data" => $dataList);
		else 
			return array("status" => false);
	}

	#Text Short.
	public function text_shorten($text, $limit = 400)
	{
      $text = $text. " ";
      $text = substr($text, 0, $limit);
      $text = substr($text, 0, strrpos($text, ' '));
      $text = $text.".....";
      return $text;
   }
}

$control = new Control();

?>