<?php
//    //echo $_COOKIE['mycook'];
//    $tieude="hom nay la ngay la ngay muoi";// thang muoi mot nam 2021";
//    //echo strpos($tieude,"ngay",-10);
//    $l=20;
    
//     function catChuoi($str, $number)
//     {
//         if(strlen($str)<=$number)
//             return $str;
        
//         $sub=explode(" ",$str);
//         $sub2="";
//         foreach($sub as $v)
//         {
//         if(strlen($v)+strlen($sub2)+1<=$number)
//         {
//             $sub2=$sub2." ".$v;
//         }
//         else
//             break;
//         }
//         $sub2=$sub2."...";
//         return $sub2;
//     }
//     $tieude="Ma San pham la SP_001. sgfgjhs fdjg";
//     echo rtrim(substr($tieude,0,20),'a..zA..Z0..9_-');
//     //echo rtrim(substr($tieude,0,20),'a..zA..Z').'...';

//Dùng biểu thức chính quy để Ktra mã sv của STU. DH/CD/LT+8số
    //$ma="/^(DH|CD)\d{8}/";
//     $pattern="/^(DH|CD|LT)[1-9][1-2]\d{6}$/";
//   $masv='DH12345678';
//   if(preg_match($pattern,$masv))
//   echo'hop le';
//   else
//   echo'nhap lai';

if(preg_match('/^(DH|CD)\d{8}$/',$stu))
{
    echo 'đúng';
}
else 
echo'sai';



?>