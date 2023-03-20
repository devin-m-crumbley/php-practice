<!-- <!DOCTYPE html>
<html>
 
<body> -->
<?php

 /**
  * Print numbers from 1 to n.
  * When n is divisible by 3 echo 'fizz'.
  * When n is divisible by 5 echo 'buzz.
  * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
  *
  * @method static void print(int $limit)
  * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
  */
 
    class FizzBuzz
    {
        public static function print(int $limit) {
            //$string holds the whole string
            $string = "";
            //Start the for loop at 1 to avoid the fizzbuzz on 0 
            for ($i = 1; $i < $limit + 1; $i++){
                if ($i % 15 == 0){
                    $string .= "'fizzbuzz', ";
                } else if ($i % 3 == 0) {
                    $string .= "'fizz', ";
                } else if($i % 5 == 0) {
                    $string .= "'buzz', ";
                } else {
                    $string .= $i . ", ";
                }
            }
            //reverse trim the string to remove the last comma/space
            $string = rtrim($string, ", ");
            echo $string;
        }
    }
?> 
     <!-- <strong><?php echo FizzBuzz::print(150); ?> </strong>

</body>
</html> -->