//https://www.geeksforgeeks.org/unordered_map-in-cpp-stl/
// Internally unordered_map is implemented using Hash Table,
//the key provided to map is hashed into indices of a hash table 
//which is why the performance of data structure depends on the 
//hash function a lot but on average, the cost of search, insert, 
//and delete from the hash table is O(1).

class Solution {

public:
    vector<int> twoSum(vector<int>& nums, int target) {
        std::unordered_map<int, int> tmp;
        for(int i = 0; i < nums.size(); ++i){
            //Complexity It’s order of complexity O(n). 
            //Compares once each element with a particular value. 
            //Counting occurrences in an array.

            //target - nums[i] is the value we would need to sum with i
            //count() will check if said value occurs in the array
            //tmp then stores this location
            if(tmp.count(target - nums[i])){
                return {tmp[target-nums[i]], i};
            }
            //if no complement for i is found
            //set tmp to our current location, from here keep looking
            tmp[nums[i]] = i;
        }
        //two sum complement does not exist
        return {-1,-1};
    }
};
