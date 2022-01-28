<?php    

    if (isset($_SESSION['mail']))
    {
        $mail = $_SESSION['mail'];
    }

?> 
    

    <div id="logo" class="user_data">
                <h2 class="hello">Hello!<h2>
                 <img class="picture" src="../Img/administrator.png" alt="Hello"><br>                    
                <a class="link" href="#" style="font-size:12px;"><?php echo $mail; ?></a><br>
                <a class="link" href="../User_session_logo/kill_session.php"style="font-size:15px;" onclick="Logout()">Log out</a>
                <style>
                   h2.hello{text-align:center;margin:0;}
                   a.link{color:#fff;text-decoration:none;font-family: 'Montserrat';}
                   a.link:hover{color:grey;text-decoration:none;}
                   .user_data{position:fixed;
                                width:200px;
                                top:5px;
                                right:25px;
                                border:1px solid white;
                                border-radius: 15px;
                                color:#fff;
                                font-size:15px;
                                background:black;
                                 z-index: 7;
                                text-align:center;
                                text-color:#fff;}
                    .picture{text-align:center;}          
                </style>
    </div>

    <script> 
       function Logout(){
           myElement = document.getElementById('logo');
           myElement.style.display = 'none';          
       }
              
   </script>
          