<?php
function get_paging($num_pages, $page, $base_url = "")
{
    $str_paging = "<ul class='paging'>";
    if ($page > 1) {
        $prev = $page - 1;
        $str_paging .= " <li><a href=\"{$base_url}&page={$prev}\">Trước</a></li>";
    }
    for ($i = 1; $i <= $num_pages; $i++) {
        $active = ($i == $page) ? "active" : "";
        $str_paging .= "<li class = \"{$active}\"><a href=\"{$base_url}&page={$i}\">{$i}</a></li>";
    }
    if ($page < $num_pages) {
        $next = $page + 1;
        $str_paging .= " <li><a href=\"{$base_url}&page={$next}\">Sau</a></li>";
    }
    $str_paging .= "</ul>";
    return $str_paging;
}
