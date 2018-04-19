<?php
require_once("_config.php");	                //載入環境設定檔
header("Content-Type:text/html; charset=utf-8");
// 取用範例開始
echo config('settings.title')."<br />";
echo config('settings.author')."<br />";
echo config('database.username')."<br />";
echo config('database.password')."<br />";

echo "<hr />";

echo var_dump(config('settings.folder'))."<br />"; // config 指定父節點參數, 未指定子節點參教
echo var_dump(config('setting000.folder'))."<br />"; // config 指定不存在檔案
echo var_dump(config('settings.path'))."<br />"; // config 指定不存在參數

echo "<hr />";

echo var_dump(config('activity000.act1'))."<br />"; // config 沒有找到相對檔案
echo var_dump(config('activities.act0'))."<br />"; // config 指定不存在參數
echo var_dump(config('activities.act1'))."<br />"; // config 指定陣列
echo var_dump(config('2017-10-27.act1'))."<br />"; // config 指定陣列
echo var_dump(config('activities.act2.date'))."<br />"; // config 指定參數
echo var_dump(config('activities.act2.place'))."<br />"; // config 指定參數
echo var_dump(config('activities.act2.content'))."<br />"; // config 指定參數

echo "<hr />";

$act = config('activities.act1');
for ($i = 0; $i < count($act); $i++ ){
    echo $act[$i]."<br />";
}

echo "<hr />";

echo config('activities.act2.date')."<br />";
echo config('activities.act2.place')."<br />";
$act = config('activities.act2.content');
for ($i = 0; $i < count($act); $i++ ){
    echo $act[$i]."<br />";
}
