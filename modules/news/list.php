<?php
guest();
$onPage = 5;
$q = select("SELECT COUNT(*) as count FROM `news`");
$first = $q[0]['count'];
$totalPage = $first/$onPage;
if($totalPage - floor($totalPage) > 0) {
    $totalPage++;
}

$page = $_PARAM[0]-1;

if($page < 0) {
    $page = 0;
}
if($page >= $totalPage) {
    $page = $totalPage - 1;
}

$news = select("SELECT news.title, news.text, information.login, news.date
                FROM `news`, `information`
                WHERE news.user_id = information.id
                ORDER BY news.date DESC
                LIMIT ".($page*$onPage).", {$onPage}");

if($page >= 2) {   
    $prew = "<a href='/news/list/" . ($page - 2) . "'> " . "&#8592;</a>" ;
}
if($page <= 0) {  
    $one = "<a href='/news/list/" . $page . "'>" . " " . "</a>";
    $two = "<a href='/news/list/" . ($page + 1) . "'>" . ".." . ($page + 1) . ".." . "</a>";
    $three = "<a href='/news/list/" . ($page + 2) . "'>" . ($page + 2) . "</a>";
}
if($page > 0 && $page < $totalPage - 1) {  
    $one = "<a href='/news/list/" . $page . "'>" . $page . "</a>";
    $two = "<a href='/news/list/" . ($page + 1) . "'>" . ".." . ($page + 1) . ".." . "</a>";
    $three = "<a href='/news/list/" . ($page + 2) . "'>" . ($page + 2) . "</a>";
}
if($page >= $totalPage -2) {   
    $one = "<a href='/news/list/" . ($page) . "'>" . $page . "</a>";
    $two = "<a href='/news/list/" . ($page + 1) ."'>" . ".." . ($page + 1) . ".." . "</a>";
    $three = "<a href='/news/list/" . ($page + 2) . "'>" . " " . "</a>";
}
if($page <= $totalPage - 3) { 
    $next = "<a href='/news/list/" . ($page + 4) . "'>" . "&#8594;</a>";
}
$data = compact("news", "page", "totalPage", "one", "two", "three", "prew", "next" );

display ($data, "news/tmp_list.php" );
