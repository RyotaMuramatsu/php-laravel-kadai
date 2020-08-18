<?php
//課題１$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」
//　　　もし違ったら「あなたの名前ではありません」と表示するように実装してください。
$name = "Ryota";
//６行目にイコールが一つ足りなかった
if ($name == "Ryota"){
    echo "私は $name です"."\n";
}else {
    echo "あなたの名前ではありません"."\n";
}

//課題２for文を使って、1から10000までの合計の値を表示してください。
//total=0 としていなかった
$total = 0;
for($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total."\n";

//課題３$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = ["apple","banana","orange","kwi","melon"];
// 一時変数名を＄kajitsuとしてやり直しました
foreach($fruits as $kajitsu){
    echo "要素は" .$kajitsu;
    echo "\n";
}

//課題４【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
$start = 1;
$end = 100;
// ３２行目　$i <= $end のところに < が足りなかった。
for($i =  $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i."\n";
    }
}
//   if($i % 5 == 0)
    // echo $i