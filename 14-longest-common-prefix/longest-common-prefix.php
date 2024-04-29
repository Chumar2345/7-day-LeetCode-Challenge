class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
   	public static function longestCommonPrefix($array) {
	  
	  $k=0;
	  
	  if(count($array) == 0){
	    return $prefix = "";
	  } else if(count($array) == 1) {
	    
	    return $prefix = $array[$k];
	    
	  }
	  
	  $prefix = $array[$k];

	  for($i=0; $i< strlen($array[$k]); $i++){
	    
	    foreach ($array as $str) {
            if (strlen($str) == $i || $str[$i] != $prefix[$i]) {
                return substr($prefix, 0, $i);
            }
        }
	  }
	  return $prefix;
}


}
 $arr = array("flower","flow","flight");
 $new_array = Solution::longestCommonPrefix($arr);
echo '"'.$new_array.'"';