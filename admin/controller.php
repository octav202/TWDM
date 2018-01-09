<?php
 
	//************** USER **************
	function addUser($firstName, $lastName, $email, $pass){
			
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			
			die("Database selection failed: " . mysqli_error());
		}

		$sql = "INSERT INTO users (firstName,lastName,email,pass,role) VALUES('"
		.$firstName."','".$lastName."','".$email."','".$pass."','user')"; 	
		$result = mysqli_query($con,$sql) or die (mysqli_error($con));
		mysqli_close($con);
		
		
		return getUserId($email, $pass);
	}
	  
	function getUserId($email, $pass){
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT * FROM users where email LIKE '".$email."%' AND pass LIKE'".$pass."%'"; 
		$result = mysqli_query($con, $sql);
		$id =0;
		while($row = mysqli_fetch_array($result)) {
			$id = $row['user_id'];
		}
		
		mysqli_close($con);
		
		return $id;		
	} 
	
	function getUserForId($id){
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT * FROM users where user_id = ".$id; 
		
		$user = array("user_id"=>0,
						   "firstName"=>'', 
						   "lastName"=>'',
						   "email"=>'',
						   "pass"=>'',
						   "role"=>'');
		$result = mysqli_query($con, $sql);
		
		
		while($row = mysqli_fetch_array($result)) {
			$user = array("user_id"=>$row['user_id'],
						   "firstName"=>$row['firstName'], 
						   "lastName"=>$row['lastName'],
						   "email"=>$row['email'],
						   "pass"=>$row['pass'],
						   "role"=>$row['role']);
		}
		
		mysqli_close($con);
		
		return $user;		
	} 
	
	function updateUser($id, $firstName, $lastName, $email, $pass){
			
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			
			die("Database selection failed: " . mysqli_error());
		}

		$sql = "UPDATE users SET firstName = '".$firstName."',lastName = '".$lastName."',email = '".$email."',pass = '".$pass."' WHERE user_id = ".$id; 	
		$result = mysqli_query($con,$sql) or die (mysqli_error($con));
		mysqli_close($con);
		return $result;
	}
	
	//************** AUTH **************
	
	function logUserIn($id){
		
		session_start();		
		$_SESSION['auth'] = 1;
		setcookie("user_id", $id, time()+(60*60*8)); //set cookie to expire in 8h
		header('Location: forum.php');
		die();
	}
	
	function getLoggedUser(){
		if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
		   return 0;
		} 
		
		if(isset($_COOKIE['user_id'])) {
			return $_COOKIE['user_id'];
		} else {
			return 0;
		}
	}
	
	function logUserOut() {
		$_SESSION['auth'] = 0;
		setcookie("user_id", 0, time()-(60*60)); //clear cookie 
	}
	
	//************** TOPICS **************
	
	function getTopics() {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT * FROM topic"; 
		
		$topics = array();
		$result = mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result)) {
			$topic = array("topic_id"=>$row['topic_id'],
						   "title"=>$row['title'], 
						   "topic_date"=>$row['topic_date'],
						   "user_id"=>$row['user_id']);
			
			$topics[] = $topic;
		}
		
		mysqli_close($con);
		
		return $topics;	
	}
	
	function addTopic($title, $user_id) {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			
			die("Database selection failed: " . mysqli_error());
		}

		$sql = "INSERT INTO topic (title,topic_date,user_id) VALUES('"
		.$title."','".date('Y/m/d H:i:s')."','".$user_id."')"; 	
		$result = mysqli_query($con,$sql) or die (mysqli_error($con));
		mysqli_close($con);
		return $result;
	}
	
	function getTopicsForPlayer($firstname, $lastname) {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT topic.topic_id,topic.title from topic,post where topic.topic_id = post.topic_id and
		(post.post_description LIKE '%".$firstname."%' OR post.post_description LIKE '%".$lastname."%')
		UNION SELECT topic.topic_id,topic.title from topic where
		 topic.title LIKE '%".$firstname."%' OR topic.title LIKE '%".$lastname."%'"; 
		
		$result = mysqli_query($con, $sql);
		$topics = array();
		
		while($row = mysqli_fetch_array($result)) {
			$topic = array("topic_id"=>$row['topic_id'],
						   "title"=>$row['title']);
			$topics[] = $topic;
		}
		
		mysqli_close($con);
		
		return $topics;	
	}
	
	//************** POSTS **************
	
	function getPostsForTopic($topic_id) {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT * FROM post WHERE topic_id = ".$topic_id; 
		
		$posts = array();
		$result = mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result)) {
			$post = array("post_id"=>$row['post_id'],
						   "post_description"=>$row['post_description'], 
						   "post_date"=>$row['post_date'],
						   "user_id"=>$row['user_id'],
						   "topic_id"=>$row['topic_id']);
			
			$posts[] = $post;
		}
		
		mysqli_close($con);
		
		return $posts;	
	}
	
	function addPost($post_description, $user_id,$topic_id) {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			
			die("Database selection failed: " . mysqli_error());
		}

		$sql = "INSERT INTO post (post_description,post_date,user_id,topic_id) VALUES('"
		.$post_description."','".date('Y/m/d H:i:s')."','".$user_id."','".$topic_id."')"; 	
		$result = mysqli_query($con,$sql) or die (mysqli_error($con));
		mysqli_close($con);
		return $result;
	}
	
	//************** PLAYERS **************
	
	function getPlayers() {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT * FROM player"; 
		
		$players = array();
		$result = mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result)) {
			$player = array("player_id"=>$row['player_id'],
						   "first_name"=>$row['first_name'], 
						   "last_name"=>$row['last_name'],
						   "country"=>$row['country'],
						   "birthplace"=>$row['birthplace'],
						   "age"=>$row['age'],
						   "ranking"=>$row['ranking'], 
						   "weight"=>$row['weight'],
						   "height"=>$row['height'],
						   "coach"=>$row['coach'], 
						   "about"=>$row['about'],
						   "img"=>$row['img']);
			
			$players[] = $player;
		}
		
		mysqli_close($con);
		
		return $players;	
	}
	
	function getPlayersForKeyword($key) {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT * FROM player  where first_name LIKE '%".$key."%' OR last_name LIKE '%".$key."%'"; 
		
		$players = array();
		$result = mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result)) {
			$player = array("player_id"=>$row['player_id'],
						   "first_name"=>$row['first_name'], 
						   "last_name"=>$row['last_name'],
						   "country"=>$row['country'],
						   "birthplace"=>$row['birthplace'],
						   "age"=>$row['age'],
						   "ranking"=>$row['ranking'], 
						   "weight"=>$row['weight'],
						   "height"=>$row['height'],
						   "coach"=>$row['coach'], 
						   "about"=>$row['about'],
						   "img"=>$row['img']);
			
			$players[] = $player;
		}
		
		mysqli_close($con);
		
		return $players;	
	}
	
	function getPlayerById($player_id) {
	
		$con = mysqli_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
			
		$db_select = mysqli_select_db($con, "pawcd");
		if (!$db_select) {
			die("Database selection failed: " . mysqli_error($con));
		}
			
		$sql = "SELECT * FROM player  where player_id = ".$player_id; 
		
		$players;
		$result = mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result)) {
			$player = array("player_id"=>$row['player_id'],
						   "first_name"=>$row['first_name'], 
						   "last_name"=>$row['last_name'],
						   "country"=>$row['country'],
						   "birthplace"=>$row['birthplace'],
						   "age"=>$row['age'],
						   "ranking"=>$row['ranking'], 
						   "weight"=>$row['weight'],
						   "height"=>$row['height'],
						   "coach"=>$row['coach'], 
						   "about"=>$row['about'],
						   "img"=>$row['img']);

		}
		
		mysqli_close($con);
		
		return $player;	
	}
	
?>
