<?php




/**
 * binary_search
 *
 * @param  mixed $list
 * @param  mixed $item
 * @return int|null
 */
function binary_search(array $list, int $item):int|null{
    $low = 0;
    $high = count($list) - 1 ;

    while($low <= $high){   //While you haven’t narrowed it down to one element …
        $mid = floor(($low + $high)/2); 
        echo  'low= ' .$low .  ' high= '.$high.'<br>';
        $guess = $list[$mid];

        if($guess == $item){   //Found the item.
            return $mid;
        }

        if($guess > $item){   //The guess was too high.
            $high = $mid - 1 ;
        }else{
            $low = $mid + 1;
        }
    }

    return null;
}


$my_list = [1,3,5,7,9];
echo "B =". binary_search($my_list, 3);