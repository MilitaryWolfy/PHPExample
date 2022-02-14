<?php
	$query = 'select * from table';
	$ingred = $con -> prepare($query);
	$ingred -> execute();
	while($row = $ingred -> fetch(PDO::FETCH_NUM))
	{
		/*code*/
	}
?>