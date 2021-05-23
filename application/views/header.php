<?php if (!defined('IN_SITE')) die('The request not found'); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Học tiếng anh cùng CLV</title>
        <link ref="stylesheet" href='../../public/home/css/main.css' type="text/css"> 
        <style>

            
  * {
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial;
    padding: 10px;
    background: #ffd4aa;
  }
  
  .topnav {

  overflow: hidden;
  background-color: #ffaa56;
  position: sticky;
  top: 0; 
  position: fixed;
  width: 100%;
}

/* Định dạng link điều hướng */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

/* Thay đổi màu liên kết khi di chuột qua */
.topnav a:hover {
  background-color: #ff7f00;
  color: white;
}
  
  /* Tạo hai cột không bằng nhau, float cạnh nhau 
   Cột trái */
  .leftcolumn { 
    float: left;
    width: 75%;
  }
  
  /* Cột phải */
  .rightcolumn {
    float: left;
    width: 25%;
    /* background-color: #e9d8f4; */
    padding-left: 20px;
  }
  
  /* Hình ảnh tượng trưng */
  .fakeimg {
    background-color: #ffaaaa;
    width: 100%;
    padding: 20px;
  }
  
  /* Thêm định dạng thẻ cho bài viết */
  .card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
  }
  
  /* Clear float khác sau các cột */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Footer */
  .footer {
    padding: 10px;
    text-align: center;
    background: white;
    margin-top: 20px;
  }
  .search-box{
    padding: 14px 16px;
    font-family: Arial;
    border: 2px solid #ffaa56;
    border-radius: 5px;
    cols: 50px;
    rows: 80px;

  }
  .search-button{
    background-color: #ffaa56;
    border: 2px solid #ffaa56;
    border-radius: 5px;
    padding: 14px 16px;
    font-family: Arial;
    color: while;

  }

  .search-button:hover{
   	background-color:#ff7f00;
   	color:while;

}

  table {
    wight:100%;
  }
  /* Bố cục linh hoạt: các cột xếp chồng lên nhau thay vì cạnh nhau khi màn hình 
  có chiều rộng dưới 700px */
  @media screen and (max-width: 700px) {
    .leftcolumn, .rightcolumn { 
      width: 100%;
      padding: 0;
    }
  }
  
  /* Bố cục linh hoạt: Thanh menu điều hướng xếp chồng lên nhau thay vì cạnh nhau
  khi màn hình có chiều rộng dưới 300px  */
  @media screen and (max-width: 300px) {
    .topnav li a {
      float: none;
      width: 100%;
    }
  }
</style>
  <script type="text/javascript">
		function Validate(){
			var name = document.myform.sreach.value;
			name.trim();
			if( name == ""){
				alert("Nhập thông tin cần tìm kiếm");
				return false;
			}
			return true;
		}
</script>
<script type='text/javascript'>
//<![CDATA[
    function flakeFall(){
      if(!getRefToDivNest("snFlkDiv0")){
        return
        }
      var e=0,t=0,n=0,r=0;
      if(typeof window.innerWidth=="number"){
        e=window.innerWidth;
        t=window.innerHeight
      }else{
        if(document.documentElement && (document.documentElement.clientWidth||document.documentElement.clientHeight)){
          e=document.documentElement.clientWidth;t=document.documentElement.clientHeight}
        else{
          if(document.body&&(document.body.clientWidth||document.body.clientHeight)){
            e=document.body.clientWidth;t=document.body.clientHeight
          }
        }
      }
      if(typeof window.pageYOffset=="number"){
        n=pageYOffset;r=pageXOffset}
      else{
        if(document.body&&(document.body.scrollLeft||document.body.scrollTop)){
          n=document.body.scrollTop;r=document.body.scrollLeft
        }else{
          if(document.documentElement&&(document.documentElement.scrollLeft||document.documentElement.scrollTop)){
            n=document.documentElement.scrollTop;r=document.documentElement.scrollLeft
          }
        }
      }
      for(var i=0;i<numFlakes;i++){
        if(ycoords[i]*t>t-pictureHeight){ycoords[i]=0}var s=getRefToDivNest("snFlkDiv"+i);if(!s){
          return
        }
        if(s.style){
          s=s.style
        }
        var o=document.childNodes?"px":0;
        s.top=Math.round(ycoords[i]*t)+n+o;
        s.left=Math.round(xcoords[i]*e-pictureWidth/2+e/((numFlakes+1)*4)*(Math.sin(lrFlakes*ycoords[i])-Math.sin(3*lrFlakes*ycoords[i])))+r+o;
        ycoords[i]+=downSpeed
      }
    }

    function getRefToDivNest(e){
      if(document.layers){
        return document.layers[e]
      }
      if(document[e]){
        return document[e]
      }
      if(document.getElementById){
        return document.getElementById(e)
      }
      if(document.all){
        return document.all[e]
        }
      return false}
      var pictureSrc="http://1.bp.blogspot.com/-aZQXzUqSw5E/VKdQ-NZEaxI/AAAAAAAAB9U/3Cj3b3PLygk/s1600/hoa-mai.png";
      var pictureWidth=20;
      var pictureHeight=20;
      var numFlakes=10;
      var downSpeed=.01;
      var lrFlakes=10;
      if(typeof numFlakes!="number"||Math.round(numFlakes)!=numFlakes||numFlakes<1){
        numFlakes=10
      }
      for(var x=0;x<numFlakes;x++){
        if(document.layers){
          document.write('<layer id="snFlkDiv'+x+'"><imgsrc="'+pictureSrc+'" height="'+pictureHeight+'"width="'+pictureWidth+'" alt="*" border="0"></layer>')
        }else{
          document.write('<div style="position:absolute;"id="snFlkDiv'+x+'"><img src="'+pictureSrc+'"height="'+pictureHeight+'" width="'+pictureWidth+'" alt="*"border="0"></div>')
        }
      }
      var xcoords=new Array,ycoords=new Array,snFlkTemp;
      for(var x=0;x<numFlakes;x++){
        xcoords[x]=(x+1)/(numFlakes+1);
        do{
          snFlkTemp=Math.round((numFlakes-1)*Math.random())
        }while(typeof ycoords[snFlkTemp]=="number");
        ycoords[snFlkTemp]=x/numFlakes}window.setInterval("flakeFall();",100)//]]>
</script>
    </head>
    <body>

        <div class="topnav">
            <a href='index.php?'>Trang chủ</a>
            <a href="index.php?c=nguphap&a=danhsach">Ngữ pháp </a>
            <a href="index.php?c=dethi&a=danhsach">Luyện đề</a>
            <a href="index.php?c=phanhoi&a=danhsach">Phản hồi</a>
            <?php 
              if (isset($_SESSION['username']) && $_SESSION['username'] && isset($_SESSION['name']) && $_SESSION['name']){
                echo '<a href="index.php?c=out&a=logout" style="float:right">Đăng xuất</a><p style="float:right;color:while;font-size:15px">Xin chào '. $_SESSION['name'].'</p>';
              }else {
                echo '<a href="index.php?c=home&a=dangnhap" style="float:right">Đăng nhập</a>';
              }
          ?>
            <form action="?c=sreach&a=danhsach"  name="myform" onsubmit="return Validate()">
              <input type="submit" formmethod="post" class="search-button" value="Tìm kiếm" style="float:right">
					    <input type="search" class="search-box" placeholder="Bạn cần tìm gì ?" style="float:right" id ="sreach" name="sreach">
					  
				    </form>
        </div>
        
        <div class="row">
        <div class="leftcolumn">
            <div class="card">