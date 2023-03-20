<!-- <!DOCTYPE html>
<html>
 
<body> -->
<?php

/**
 * Find the most used character.
 *
 * @method static string get(string $string)
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */

class MaxChar
{
    public static function get(string $string) {
        $maxCount = 0;
        $prev = '';

        //split the string to be an array
        $stringArr = str_split($string);
        //sort the array
        sort($stringArr);
        //Iterate throught the sorted array char by char
        foreach ($stringArr as $char) {
            if ($char == $prev){
                $count++;
            } else {
                $count = 1;
            }
            if ($count > $maxCount) {
                $maxCount = $count;
                $maxChar = $char;
            }
            $prev = $char;
        }
        return $maxChar;
    }

}
?>
<!-- this will allow for spaces to be counted as the char -->
<!-- <strong><?php echo MaxChar::get("apple 2202"); ?> </strong>

</body>
</html> -->