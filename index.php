<?php
class Solution {
    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops) {
        $record = [];
        $length = count($ops);

        for($index = 0; $index < $length; $index++){
         if($ops[$index] ==='C')
          {
           array_pop($record);

          }elseif($ops[$index] == 'D')
          {
            $pos =count($record)-1;

            $value = $record[$pos]*2;
            array_push($record,$value);

          }elseif($ops[$index] =='+')
          {
            $pos =count($record)-1;

            $score = $record[$pos] + $record[$pos-1];
            array_push($record,$score);

          }elseif(is_int(intval($ops[$index])))
          {
             array_push($record, intval($ops[$index]));

          }
        }
        $total = array_sum($record);
        return $total;
    }
}


// read inputs
$ops = ['5', '-2', '4','C', 'D','9','+', '+'] ;//explode(' ', readline());

// Solution
$solution = new Solution();
$output = $solution->calPoints($ops);

// print the output
echo $output;
