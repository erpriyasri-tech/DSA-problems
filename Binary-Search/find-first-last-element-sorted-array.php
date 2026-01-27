<?php
$nums = [5,7,7,8,8,10];
$target = 8;
function searchRange($nums, $target) {
        $first = $this->binarySearch($nums, $target, true);
        if($first== -1){
            return [-1, -1];
        }

        $last = $this->binarySearch($nums, $target, false);
        return [$first, $last];
    }

    function binarySearch($nums, $target, $findFirst){
        $left = 0;
        $right = count($nums) -1;
        $result = -1;

        while($left <= $right){
            $mid = floor(($left + $right)/2);
            if($nums[$mid]== $target){
                $result = $mid;
                if($findFirst){
                    $right = $mid - 1 ;
                }else{
                    $left = $mid + 1;
                }
            }elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            }else{
                $right = $mid - 1;
            }
        }
        return $result;
    }

    ?>