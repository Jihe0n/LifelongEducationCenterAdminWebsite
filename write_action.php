<?php
                $connect = mysqli_connect("localhost", "root", "1234", "admin");
                $id = $_POST['name'];                      //Writer
              
                $title = $_POST['title'];                  //Title
                $content = $_POST['content'];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './board.php';                   //return URL
 
 
                $query = "insert into board (number,title, content, id, date,hit) 
                values(null,'$title', '$content', '$id' , NOW() , 0)";


                        

                $result = $connect->query($query);

                
                if($result){

?>               <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                 </script>
<?php
                        }
                         else{
                                 echo "FAIL";
                        }
                         
                         mysqli_close($connect);
?>
                        
                        
                   
              
              