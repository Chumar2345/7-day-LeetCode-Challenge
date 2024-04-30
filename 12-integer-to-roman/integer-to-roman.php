class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    public static function intToRoman(int $num) {
       static $values = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 =>'IV',
        1 => 'I',
    ];

    $romanValue = '';
    foreach($values as $int => $roman){

        while($num >= $int){
           $num = $num - $int;

           $romanValue .= $roman;
           if(!$num){
            break;
           }
        }
    }
     return $romanValue; 
    }
}

$new_array = Solution::intToRoman(3);
echo '"'. $new_array .'"';