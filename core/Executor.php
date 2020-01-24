<?php
include('Database.php');
class Executor {

	public static function doit($sql)
	{
		$con = Database::getCon();
		if(false)
		{
			print "<pre>".$sql."</pre>";
		}
		$result = mysqli_query($con,$sql) or die('La consulta fallo: ' . mysqli_last_error());
		return $result;
	}
}
?>