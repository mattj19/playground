<?PHP /* Template Name: Fizzbuzz */ ?>
<?PHP 
    /* Tom Scott Video challenge, recreate the children's game 'Fizz Buzz'.
    * Output the numbers 1-100, if the number is a multiple of 3 output 'Fizz', 
    * if it's a number of 5 output 'buzz', if it's a multiple of both output 'Fizzbuzz'
    * an infinite number of solutions
    * Matt Jones, 23/10/2020 22:00
    */ 

    $multiples = array(
                    3 => 'Fizz',
                    5 => 'Buzz'
                );
    
    $cases = 100; 


    for($i = 1; $i < $cases; $i++){
        $output = '';
        
        /* This if statement will be improved to be dynamic. TBD */
        if( ($i % 3 === 0) && ($i % 5 === 0) ){
            $output = 'Fizzbuzz';
        }

        if($output == ''){
            foreach($multiples as $key => $value){
                if( $i % $key === 0){
                    $output .= $value;
                }
            }
        }

        if($output === ''){
            $output = $i;
        }

        echo $output.'<br/>';
        
    }


?>