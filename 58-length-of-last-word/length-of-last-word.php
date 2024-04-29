class Solution {

    /**
     * @param String $s
     * @return Integer
     */
   public static function lengthOfLastWord($s) {

      $remove_space = rtrim($s);
      $word = explode(" ", $remove_space);
      $new = $word[count($word) - 1];
      return strlen($new);
        
    }
}

$arr ="Hello World";
$new_array = Solution::lengthOfLastWord($arr);
echo $new_array;