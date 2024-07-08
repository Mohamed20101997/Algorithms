<?php


/* 
* Given an integer array nums, return true if any value appears at least twice in the array,
* and return false if every element is distinct.

* Example 1:
* Input: nums = [1,2,3,1]
* Output: true

* Example 2:
* Input: nums = [1,2,3,4]
* Output: false

* Example 3:
* Input: nums = [1,1,1,3,3,4,3,2,4,2]
* Output: true

* Constraints:
* 1 <= nums.length <= 105
* -109 <= nums[i] <= 109
*/



/**
 * First Solution
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {
    sort($nums);
    $duplicate = null;
    $status = false;

    for($i =0 ; $i < count($nums) ; $i++){
        if($duplicate === $nums[$i]){
            $status = true;
            break;
        }
        $duplicate = $nums[$i];
    }

    return $status;
}



/**
 * second Solution
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate2($nums) {
   $inialCount = count($nums); // 9
   $uniqueCount = count(array_unique($nums)); // 4

   return $inialCount > $uniqueCount; //return true 
}


// $nums = [1,1,1,3,3,4,3,2,4,2];
// containsDuplicate($nums);