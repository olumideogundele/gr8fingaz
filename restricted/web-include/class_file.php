<?php
 
 
class Name
{
   
    public function showName($conn, $string)
    {
        /**
        Put your database code here to extract from database.
        **/
		
		$evnt_details = mysqli_query($conn, $string) or die(mysqli_error($conn));
		$count = mysqli_num_rows($evnt_details);
 $evnt_retrieval = mysqli_fetch_array($evnt_details);
$name = $evnt_retrieval[0];
		
		
        return($name );
    }
	 public function enterName($TName)
    {
        $this->name = $TName;
        /**
        Put your database code here.
        **/
    }
	
	
	 
	
     
}


    

function thousandsCurrencyFormat($num) {

    if( $num > 10000 ) {

        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];
        
        return $x_display;
    }

    return $num;
}
?>