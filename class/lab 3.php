<?php
session_start();

require_once 'config.php';


$fname = filterInput($_POST['fname']);
$lname = filterInput($_POST['lname']);
$email = filterInput($_POST['email']);

$birth_day = filterInput($_POST['birth_day']);

$reginput = array($fullname, $email, $birth_day);

if(BadRegisterInput($reginput))
{
	header("Location: register.php?msg=Ð’Ñ‹ Ð·Ð°Ð±Ñ‹Ð»Ð¸ Ð²Ð²ÐµÑÑ‚Ð¸ Ð¿Ð¾Ð»Ð½ÑƒÑŽ Ð¸Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸ÑŽ");
}

else
{

	// do more processing here and preparing to insert into DB

	$result = $conn->query("INSERT INTO .register(first_name, last_name, email, birth_day) VALUES('$fname','$lname','$email','$birth_day') ");

	if($result->num_rows > 0) // or something like this - please try
	{

		registrationEmail($fullname, $uin, $sex, $email);

		header("Location: register_finished.php");
	}

	else
		header("Location:register.php?msg=Ð¡Ð²ÑÐ¶Ð¸Ñ‚ÐµÑÑŒ Ñ ÑÐ¸ÑÑ‚ÐµÐ¼Ð½Ñ‹Ð¼ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ‚Ð¾Ñ€Ð¾Ð¼");

}// end of if input is complete else

?>