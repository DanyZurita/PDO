<?php
echo "<ul class='pagination pull-left margin-zero mt0'>";
 
// first page button
if($page>1){
 
    $prev_page = $page - 1;
    echo "<li>";
        echo "<a href='{$page_url}page={$prev_page}'>";
            echo "<span style='margin:0 .5em;'>«</span>";
        echo "</a>";
    echo "</li>";
}
 
// clickable page numbers will be here
 
// last page button will be here
 
echo "</ul>";
?>