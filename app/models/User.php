<?php 
	class User
	{
		public function __construct($conn)
		{
			$this->conn = $conn;
		}

		//
		// Fetch ALL information on the user
		//
		public function fetchAllRows($user_id){
			// SQL Statement
			$sql = "SELECT * FROM db_user WHERE id = $user_id";
			// Execute 
			$stmt = $this->conn->query($sql);
			// Fetch Query
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			// Return results to nest variable
			return $result;
		}

		//
		// Fetch SPECIFIC information on the user
		//
		public function fetchSingleRow($id){
			// SQL Statement
			$sql = "SELECT * FROM db_user WHERE id = $id";
			// Prepare Query
			$stmt = $this->conn->query($sql);
			// Execute Query
			$getData = $stmt->fetch(PDO::FETCH_ASSOC);
			// Return value
			return $result;
		}

		//
		// Example of an INSERT method	
		//
		public function createUser($data){
			// SQL Insert Query
			$sql = "INSERT INTO db_user (f_name, s_name)
					VALUES (:f_name, :s_name)";
			// Prepare SQL Insert
			$stmt = $this->conn->prepare($sql);
			// Bind Parameters
			$stmt->bindParam(':f_name', $data['f_name'], PDO::PARAM_STR);
			$stmt->bindParam(':s_name', $data['s_name'], PDO::PARAM_STR);
			// Execute Insert
			if ($stmt->execute()){
				return true;
			} else {
				return false;
			}
		}

		//
		// Example of a UPDATE method
		//
		public function updateUser($data){
			// SQL Update Statement
			$sql = "UPDATE db_user
					SET f_name = :f_name, s_name = :s_name
					WHERE id = :user_id";
			// Prepare SQL Update
			$stmt = $this->conn->prepare($sql);
			// Bind Parameters
			$stmt->bindParam(':f_name', $data['f_name'], PDO::PARAM_STR);
			$stmt->bindParam(':s_name', $data['s_name'], PDO::PARAM_STR);
			$stmt->bindParam(':user_id', $data['id'], PDO::PARAM_INT);
			// Execute Update
			if ( $stmt->execute() ){
				return true;
			} else {
				return false;
			}
		}

		//
		// Example of a DELETE function 
		//
		public function deleteUser($id){
			// SQL Statement
			$sql = "DELETE FROM db_user WHERE id = $id";
			// Prepare SQL
			$stmt = $this->conn->prepare($sql);
			// Execute SQL
			if ( $stmt->execute()){
				return true;
			} else {
				return false;
			}
		}
	}		
?> 