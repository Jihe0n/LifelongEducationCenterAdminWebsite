<!doctype html>
<html>
  <head>
    <title>공지사항</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 부트스트랩 CSS 추가하기 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/sidebar.css">
  </head>
  <style>
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>

  <body>
    <div class="container-fluid">
      <div class="row d-flex d-md-block flex-nowrap wrapper">
        <nav class="col-md-3 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
          <div class="list-group border-0 card text-center text-md-left">
            <a href="./index.html" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
              <img style="width: 20px;" src="./img/home.svg"><span class="d-none d-md-inline ml-1">메인</span>
            </a>
            <a href="#usermenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse"
            data-parent="#sidebar" aria-expanded="false">
             <img style="width: 20px;" src="./img/board.svg"><span class="d-none d-md-inline ml-1">게시판 관리</span>
           </a>


           <div class="collapse" id="usermenu">
             <a href="board.php" class="list-group-item" data-parent="#sidebar">공지사항</a>
             <a href="" class="list-group-item" data-parent="#sidebar">1:1질의응답</a>
             <a href="" class="list-group-item" data-parent="#sidebar">서식자료실</a>
             <a href="" class="list-group-item" data-parent="#sidebar">갤러리</a>
           </div>


           <a href="" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
             <img style="width: 20px;" src="./img/user.svg"><span class="d-none d-md-inline ml-1">회원 관리</span>
           </a>
            <a href="qna.html" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
              <img style="width: 20px;" src=""><span class="d-none d-md-inline ml-1"></span>
            </a>
            
            <div class="collapse" id="search">
              <div class="input-group p-2" style="background-color: #1c1c1c;">
                <input type="text" class="form-control" placeholder="내용을 입력하세요.">
              </div>
            </div>
          </div>
        </nav>
        <main id="main" class="col-md-9 float-left col pl-md-5 pt-3 main">
          <div class="page-header mt-3">
              <h2>공지사항</h2>
          </div>
      
          <hr>

          <?php
          $connect = mysqli_connect("localhost", "root", "1234", "admin") or die ("connect fail");
          $query ="select * from board order by number desc";
          $result = $connect->query($query);
          $total = mysqli_num_rows($result);

  ?>

  
  <table align = justify>
  <thead align = "center">
  <tr>
  <td width = "50" align="center">번호</td>
  <td width = "500" align = "center">제목</td>
  <td width = "100" align = "center">작성자</td>
  <td width = "200" align = "center">날짜</td>
  <td width = "50" align = "center">조회수</td>
  </tr>
  </thead>

  <tbody>
          
  <?php
          while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                  if($total%2==0){
  ?>                      <tr class = "even">
                  <?php   }
                  else{
  ?>                      <tr>
                  <?php } ?>
          <td width = "50" align = "center"><?php echo $total?></td>
          <td width = "500" align = "center">
          <a href = "view.php?number=<?php echo $rows['number']?>">
          <?php echo $rows['title']?></td>
            <td width = "100" align = "center"><?php echo $rows['id']?></td>
          <td width = "200" align = "center"><?php echo $rows['date']?></td>
          <td width = "50" align = "center"><?php echo $rows['hit']?></td>
          </tr>
  <?php
          $total--;
          }
  ?>
  </tbody>
  </table>


<br>



        






          <ul class="pagination">
            <li class="page-item disabled">
              <span class="page-link">&laquo;</span>
            </li>
            
            <li class="page-item active"><span class="page-link mobile" style="background-color: darkcyan;">1</span></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">2</a></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">3</a></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">4</a></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">5</a></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">6</a></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">7</a></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">8</a></li>
            <li class="page-item"><a class="page-link mobile" href="#" style="color: darkcyan;">9</a></li>
            <li class="page-item">
              <a class="page-link" href="#">&raquo;</a>
            </li>
          </ul>

          

          <div style="max-width: 720px;" >
            <a href="./boardWrite.html" class="btn btn-primary float-right" style="background-color: darkcyan;" >글쓰기</a>
          </div>


<br>
<br>
<br>
<br>





          <footer class="text-center" style="max-width: 1080px;">
            <p>Copyrightⓒ2017 SUNMOON University., All rights reserved.</p>
          </footer>
        </main>
      </div>
    </div>
    <!-- 제이쿼리 자바스크립트 추가하기 -->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <!-- Popper 자바스크립트 추가하기 -->
    <script src="./js/popper.min.js"></script>
    <!-- 부트스트랩 자바스크립트 추가하기 -->
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
