https://leetcode.com/problems/two-sum/submissions/1287535615/

class TwoSum {
    //"O(n) with PHP-specific performance explanation" - mamyta
    //Time complexity: O(n)
    //Space complexity: O(n)

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = [];
        $count = count($nums); 
        //count() is O(1) : https://stackoverflow.com/questions/5835241/is-phps-count-function-o1-or-on-for-arrays

        for($i=0;$i<$count;$i++){
            $secondIndex = $target-$nums[$i];
            //isset() is actually a language construct, not a function, so it doesn’t incur the function call overhead
            //Thus, isset() is actually faster than array_key_exists()
            if(isset($hashMap[$secondIndex])){
                return array($hashMap[$secondIndex], $i);
            }else{
                $hashMap[$nums[$i]]=$i;
            }
        }
        return [];
    }
}
