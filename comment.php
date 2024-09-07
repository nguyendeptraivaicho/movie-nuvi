<?php
	$name = $_POST["name"];
	$text = $_POST["message"];
	$comment = $_POST["comment"];
	if($comment){
		
	//Write down Comment
	
	$write = fopen ("comment.txt" , "a+" );
	fwrite ($write,"<u><b> $name</b></u><br>$text<br>");
	fclose ($write);
	
	//Display Comment
	
		$read = fopen("comment.txt", "r+t");
		echo "All Comments :<br>";
		while(!feof($read)){
		echo fread($read,1024);
		}
		fclose($read);
	}
	
	else {
		//Display Comment
		$read = fopen("comment.txt", "r+t");
		echo "All Comments :<br>";
		while(!feof($read)){
		echo fread($read,1024);
		}
		fclose($read);
	}
?>