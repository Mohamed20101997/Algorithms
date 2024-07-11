<?php

class Solution {

    
    /**
     * @param  array $nums
     * @param  int $target
     * @return int
     */
    function search(array $nums, int $target):int {
        $low = 0 ;
        $high = count($nums) - 1 ;

        if(in_array($target , $nums)){
            while($low <= $high){
                $mid = floor(($low + $high)/2);
                $guess = $nums[$mid];
    
                if($guess == $target ){
                    return $mid;
                } 

                if($guess > $target ){
                    $high = $mid - 1;
                }
                
                if($guess < $target ){
                    $low = $mid + 1;
                }
            }
        }else{
            return -1;
        }
    }


    // Second Solutions 

    /**
     * @param  array $nums
     * @param  int $target
     * @return int
     */
    function search2(array $nums , int $target) : int{
        $low = 0 ;
        $high = count($nums) - 1 ;

        do {
            $mid = intval(($low + $high)/2);
            $guess = $nums[$mid];

            if($guess == $target ){
                return $mid;
            } 

            if($guess > $target ){
                $high = $mid - 1;
            }
            
            if($guess < $target ){
                $low = $mid + 1;
            }

        }while($low <= $high);

        return -1 ;
    }


}



$sol = new Solution();
$nums = [-1,0,3,5,9,12] ;
$target = 9 ;

echo $sol->search($nums , $target);

