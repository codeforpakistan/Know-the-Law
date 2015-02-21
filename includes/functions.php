

<?php 
// Civil law related functions
		// 1
		function find_civil_law_by_name($name){
		global $connection;
		$query="select * from civil_laws where  title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		// 2
		function find_govt_services_law($name){
		global $connection;
		$query="select * from govt_service_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		// 3
		function find_consumer_law($name){
		global $connection;
		$query="select * from consumer_right_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		// 4
		function find_offences_law($name){
		global $connection;
		$query="select * from offences_law where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		// 5
		function find_crime_law($name){
		global $connection;
		$query="select * from crime_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		//6
		function find_labour_law($name){
		global $connection;
		$query="select * from labour_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		//7
		function find_traffic_law($name){
		global $connection;
		$query="select * from traffic_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		//8
		function find_woman_law($name){
		global $connection;
		$query="select * from women_right_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		//9
		function find_crime_sentences_law($name){
		global $connection;
		$query="select * from crime_sentences where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		//10
		function find_children_law($name){
		global $connection;
		$query="select * from children_right_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		//11
		function find_other_law($name){
		global $connection;
		$query="select * from crime_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		//12
		function find_human_right_law($name){
		global $connection;
		$query="select * from human_right_laws where title='$name'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}		
		
		
		
		
		
		 
        function confirm_query($result_set){
		if(!$result_set){
		die("database query faild");
		}
		}
		function all_laws(){
		global $connection;
		$query="select * from knl ORDER BY Name";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}
		function find_law_name_by_id($id){
		global $connection;
		$query="select * from knl where id='$id'";
		$set=mysqli_query($connection,$query);
		confirm_query($set);
		return $set;
		}		
		
?>