<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>exam_junior</title>
</head>

<body>
	<form action="">
  		Input string: <input type="text" name="input_string" maxlength="10">
  		<input type="submit" value="Submit">
	</form>
    <?php
		if(isset($_GET['input_string'])){
			$input_str = strtoupper($_GET['input_string']);
		if(strlen($input_str)==10){
		$arr = str_split($input_str);
		$result_count = array();
		for($i=1;$i<10;$i+=2){
			$count=0;
			for($y=1;$y<10;$y+=2){
				if(($y < $i)&&($arr[$i] == $arr[$y])){break;} 
				else if(($i < $y)&&($arr[$i] == $arr[$y])){$count++;};				
			}
			$result_count[$i]=$count;
		}
		
		$count_0 = 0;
		$status = false;
		echo "Result: ";
		for($i=1;$i<10;$i+=2){
			if($result_count[$i]==3){echo "4C";$status = true;break;}
				else if($result_count[$i]==2){
					for($y=1;$y<10;$y+=2){
						if(($y!=$i)&&($result_count[$y]==1)){echo "FH";$status = true;break;
						};
						if(($y!=$i)&&($result_count[$y]==0)){$count_0++;
						};
					}
					if($status == true){break;};
					if($count_0 == 4){echo "3C";$status = true;break;};
				} else if($result_count[$i]==1){
						for($y=1;$y<10;$y+=2){
							if(($y!=$i)&&($result_count[$y]==1)){echo "2P";$status = true;break;
							};
							if(($y!=$i)&&($result_count[$y]==0)){$count_0++;
							};
						}
						if($status == true){break;};
						if($count_0 == 4){echo "1P";$status = true;break;};
				  }
			
			}
			
		if($status != true){echo "--";};
			
		} else {echo "Wrong!!!";};
		}
		
    ?>
</body>
</html>