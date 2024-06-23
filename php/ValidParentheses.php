class ValidParentheses {
  //https://leetcode.com/problems/valid-parentheses/description/
  //https://www.techinterviewhandbook.org/grind75

    //Time complexity: O(n)
    //Space complexity: O(n)

    //Approach by: akunopaka
    //Analysis by: SpencerKane

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        //get length of the string arg
        $sLen = strlen($s);

        //if the length is odd return false
        //an odd length indicates that some bracket is missing
        if($sLen % 2 !== 0) return false;
        //'key' => 'value'
        //the key in will be the opening bracket while the value is 
        //its corresponding closing bracket
        $brackets = ['(' => ')', '[' => ']', '{' => '}'];

        $bracketStack = [];

        //iterate over the length of the string arg
        for($i=0;$i<$sLen;$i++){
            //The array_key_exists() function checks an array
            //for a specified key, and returns true if the key 
            //exists and false if the key does not exist
            //https://www.w3schools.com/php/func_array_key_exists.asp
            if(array_key_exists($s[$i], $brackets)){
                //if the key exists put the keys bracket value on the stack
                $bracketStack[] = $brackets[$s[$i]];
            } //else it is not a key value(not an opening bracket)
              //if the value at the top of the stack is not equal to 
              elseif(array_pop($bracketStack) !== $s[$i]){
                //if the item on top of the stack isnt the same bracket as 
                //the current value as s[i] then we dont have a match 
                return false;
            }
        }
        //everything should be popped off the stack at this point
        //if not the string is invalid
        return count($bracketStack) === 0;
    }
}

