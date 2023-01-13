<?php

$qid=$_POST["qid"];

	echo $qid;
		$conn = new mysqli("localhost","root","","eexamination");
			if($conn -> connect_error){
				echo "Error connecting .Please try again".$conn -> connect_error;
			}
			else{
					$sql = "DELETE  FROM quesandans WHERE quesandans.qid='$qid'";
					

					if($conn->query($sql)===TRUE){
						echo "Deleted";
						header("Location: adminrights.php");
					}
					else{
							echo "Error";
					}
					

			}
		
?>