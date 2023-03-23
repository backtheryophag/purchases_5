<?php

function create_table($data){
    $table = '<table style="width: 90%; margin: auto;"><tr style="position: sticky; top: 8%">';
    $x =0;

    foreach ($data[0] as $key => $value){
            $table .= '<th>' . $key . '</th>';
        }
    $table .= '</tr>';
    foreach ($data as $key => $value){
        if($x==1){
            $table .= '<tr class="table-default">';
        }else{
            $table .= '<tr class="table-primary">';
        }
        
        foreach($value as $key1 => $value1){
            $table .= '<td style = "border: 1px solid black;">'. $value1 . '</td>';
        }
        $x = abs($x - 1);
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}

?>