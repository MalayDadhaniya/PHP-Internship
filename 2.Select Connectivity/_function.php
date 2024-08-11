<?php 
    function my_log_error($category, $message){
        $back_trace = debug_backtrace();

        $fp = fopen('logs/' . date('d-m-Y') . '.txt', 'a');
        fwrite($fp, date('h:i:s') . '\n');
        fwrite($fp, '\t' . $category . '\t' . $message . '\n');
        fwrite($fp, '-------------------------------------------- \n\n');
        fclose($fp);
    }
?>