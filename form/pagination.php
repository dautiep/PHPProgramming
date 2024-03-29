<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Pagination</title>
 <style type="text/css">
  
  #tnt_pagination {
  display: inline-block;
  text-align: left;
  height: 22px;
  line-height: 21px;
  clear: both;
  padding-top: 3px;
  font-family: Arial, Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: normal;
  }
  
  #tnt_pagination a:link, #tnt_pagination a:visited{
  padding: 7px;
  padding-top: 2px;
  padding-bottom: 2px;
  border: 1px solid #EBEBEB;
  margin-left: 10px;
  text-decoration: none;
  background color: #F5F5F5;
  color: #0072bc;
  width: 22px;
  font-weight: normal; 
  }

  #tnt_pagination a:hover{
  background-color: #DDEEFF;
  border: 1px solid#BBDDFF;
  color: #0072BC; 
  }

  #tnt_pagination .active_tnt_link{
  padding: 7px;
  padding-top: 2px;
  padding-bottom: 2px;
  horder: 1px solid #DDEEFF;
  margin-left: 10px;
  text-decoration: none;
  background-color: #DDEEFF;
  color: #0072BC;
  cursor: default; 
  }

  #tnt_pagination .disabled_tnt_pagination{
  padding: 7px;
  padding-top: 2px;
  padding-bottom: 2px;
  border: 1px solid #EBEBEB;
  margin-left: 10px;
  text-decoration: none;
  background-color: #FSFSFS;
  color: #D7D7DD7;
  cursor: default;
  }

  .content {
    margin: 10px auto;
    width: 800px;
    text-align: center;
    border: 1px solid #dfd;
  }
 </style>
</head>
<body>
  <div class = "content">
    <div id = "tnt_pagination">
      <span class = "disabled_tnt_pagination">Prev</span>
      <a href = "pagination.php?page=1">1</a>
      <a href = "pagination.php?page=2">2</a>
      <a href = "pagination.php?page=3">3</a>
      <span class = "active_tnt_link">4</span>
      <a href = "pagination.php?page=5">5</a>
      <a href = "pagination.php?page=6">6</a>
      <a href = "pagination.php?page=7">7</a>
      <a href = "pagination.php?page=8">8</a>
      <a href = "pagination.php?page=9">9</a>
      <a href = "pagination.php?page=10">10</a>
      <a href = "#forward">Next</a>
    </div>
    <?php
    //Để lấy được thông số page người dùng click vào, ta sẽ lấy nó ở trên url thông qua phương thức get
     echo $page = (isset($_GET["page"]) == true) ? $_GET["page"] : 0; //kiểm tra xem trên url có $page tồn tại hay chưa
    ?>
    <p class = "result">Bạn đang ở trang thứ <?php echo $page ?></p>
  </div>
</body>
</html>