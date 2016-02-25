<?php

function articles_all(){
    $art1 = ["id"=>1, "title"=>"Заголовок 1","date"=>"2016-14-02","content"=>"Текст первой статьи, краткий."];
    $art2 = ["id"=>2, "title"=>"Заголовок 2","date"=>"2016-15-02","content"=>"Текст второй статьи, краткий."];

    $arr[0] = $art1;
    $arr[1] = $art2;

    return $arr;
}

function articles_get($id){
    // return ["id" => 1, "title" => "Это простой заголовок", "date" => "2016-14-02", "content" => "Здесь будет статья"];
    $art1 = ["id"=>1, "title"=>"Заголовок 1","date"=>"2016-14-02","content"=>"Текст первой статьи, полный."];
    $art2 = ["id"=>2, "title"=>"Заголовок 2","date"=>"2016-15-02","content"=>"Текст второй статьи, полный."];

    $arr[1] = $art1;
    $arr[2] = $art2;

    return $arr[$id];
}

function articles_new($title, $date, $content){
    
}

function articles_edit($id, $title, $date, $content){
    
}

function articles_delete($id){
    
}

?>