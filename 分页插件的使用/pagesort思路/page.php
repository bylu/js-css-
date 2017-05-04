<?php
sleep(1);
$page = $_GET["page"];
// 请验证 $page 是否为数字 

echo '{"code":1,"recordCount":156,"pageCount":16,"data":[{"title":"第一个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第二个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第三个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第四个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第五个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第六个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第七个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第八个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第九个数据=>'. $page .'","time":"2012-05-21","hit":15},{"title":"第十个数据=>'. $page .'","time":"2012-05-21","hit":15}]}';
?>