<script>
function chonMua(masach)
{
    
    //location.href="index.php?mo=cart&ac=add&ms="+masach;
    $.ajax({
        url:"http://localhost/ltweb/xlcart_ajax.php",
        type:"GET",
        data:{ms:masach},
        success:function (result) {
            $("#cartinfo").html(result);
        }
    })
    
}
</script>
<?php
$sachDB=new Sach();
if(isset($_GET['loai']))
{ 
    //$tam=$db->exeQuery("select count(*) from sach where maloai=?",array($_GET['loai']),PDO::FETCH_NUM);
    $tongSach=$sachDB->tongSoSach1Loai($_GET['loai']);
}else
{
    //$tam=$db->exeQuery("select count(*) from sach",array(),PDO::FETCH_NUM);
    $tongSach=$sachDB->tongSoSach();
}
//$tongSach=$tam[0][0];
$page=isset($_GET['p'])?$_GET['p']:1;
$bd=($page-1)*SACH_1_TRANG;
if(isset($_GET['loai']))
{ 
    $sachs=$db->exeQuery("select masach,tensach,mota, gia,hinh from sach where maloai=? limit $bd,".SACH_1_TRANG,array($_GET['loai']));
}else
{
    $sachs=$db->exeQuery("select masach,tensach,mota, gia,hinh from sach limit $bd,".SACH_1_TRANG);
}
foreach($sachs as $sach)
{
?>
<div class="templatemo_product_box">
    <h1><?php echo $sach['tensach'];?></h1>
    <img src="images/sach/<?php echo $sach['hinh'];?>" alt="image" />
    <div class="product_info">
        <p><?php echo substr($sach['mota'],0,50);?></p>
        <h3><?php echo $sach['gia'];?></h3>
        <button class="buy_now_button my-btn" type="button" onclick="chonMua('<?php echo $sach['masach'];?>')"> Mua </button>
        <div class="detail_button"><a href="#">Chi tiet ...</a></div>   
    </div>
</div>      
<?php } ?>
<!--Hien thi so trang -->
<div style="clear:both"></div>
<div class="phantrang" style="text-align:center">
    <?php
    $sotrang=ceil($tongSach/SACH_1_TRANG);
    if($sotrang>1)
    for($i=1;$i<=$sotrang;$i++)
        if($i==$page)
            echo " ",$i," ";
        else    
        if(isset($_GET['loai']))
        echo '<a href="index.php?loai='.$_GET['loai'].'&p='.$i.'"> ',$i,' </a>';
        else
            echo '<a href="index.php?p='.$i.'"> ',$i,' </a>';
    ?>
</div>