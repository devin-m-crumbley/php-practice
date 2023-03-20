<!-- <!DOCTYPE html>
<html>
 
<body> -->
<?php

/**
 * Capitalize each word.
 *
 * @method static string get(string $string)
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */

class Capitalize
{
    public static function get(string $string) {
        //fastest function way to do this actually used ucwords before 
        //I know that there is regex ways to do this was unsure how you wanted me to do this
        return ucwords($string);
    }

    // public static function get1(string $string) {
        //Given that the examples/were ambiguous realistically I should tolowercase everything then ucwords like so
        // return ucwords(strtolower($string));
    // }
}
?>
<!-- <strong><?php echo Capitalize::get("hey, so it's working!"); ?> </strong>

</body>
</html> -->