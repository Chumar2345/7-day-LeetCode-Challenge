class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
   public static function isValid($s) {

    $stack = [];
    $brackets = [
        '(' => ')',
        '{' => '}',
        '[' => ']'
    ];
    $s_len= strlen($s);

    for ($i = 0; $i < $s_len; $i++) {
        $char = $s[$i];

        if (isset($brackets[$char])) {
            array_push($stack, $brackets[$char]);
        } else {
            if (empty($stack) || array_pop($stack) !== $char) {
                return false;
            }
        }
    }

    return empty($stack);
        
    }
}

$new_array = Solution::isValid("()");
echo $new_array;