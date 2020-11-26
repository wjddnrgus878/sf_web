<?php
	include './db_SESSION.php';
?>
<!DOCTYPE html>
 
<html>
<head>
        <meta charset = 'utf-8'>
        <title>Security Factorial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

        .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;
        }
</style>
<body>
<nav class="navbar navbar-inverse">
		<div class="container-fluid"></div>
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./index.html">SecurityFactorial</a>
		</div>
		  <div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
			  <li><a href="./index.html">Home</a></li>
			  <li><a href="./study/index.html">Study</a></li>
			  <li><a href="#">Project</a></li>
			  <li class="active"><a href="./member.php">Profile</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
					if( !isset( $_SESSION['username'] ) ) {
						?>
			  <li><a href="./LOGIN_~1/Register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a href="./LOGIN_~1/Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  <?php }
			  else{ ?>
				<li> <?php echo "<a href='/profile/index.html?userid=".$_SESSION["username"]."'><span class='glyphicon glyphicon-user'></span>"; ?> <?php echo($_SESSION[ 'username' ]); ?></a></li>
			  <?php } ?>
			</ul>
		  </div>
		</div>
	  </nav>
<?php
                $connect = mysqli_connect('localhost', 'root', 'mysql', 'db') or die ("connect fail");
                $query ="select * from member ";
                $connect->query("set session character_set_connection=utf8;");
                $connect->query("set session character_set_results=utf8;");
                $connect->query("set session character_set_client=utf8;");
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
 
        ?>

        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total==0){
        ?>                      

                        <?php   }
                        else{
        ?>    

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://post-phinf.pstatic.net/MjAxODAzMTVfMTg5/MDAxNTIxMTEwODcyNDAw.VydowXsV01QXlULeVB0kwkwyS30umKOBsDQH0wRIrq4g.twzyKxF6IfxXxxlzsDIZmUtI43RixX0ypWW1l_1Ru0Yg.JPEG/SmartSelectImage_2018-03-15-19-42-18.jpg?type=w1200" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
			<?php echo "<a href='/profile/index.html?userid=".$rows['id']."'>";echo($rows['name']); ?></a></h4>
                           <!-- <a href="./profile.php?userid="> <?php echo($rows['name']);?> </a> </h4> -->
                        <small><cite title="San Francisco, USA">Sejong University, South Korea <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo($rows['email']);?>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Warning Coung : <?php echo($rows['strike']);?></p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <?php } ?>

        <?php
                $total--;
                }
        ?>
 
 
</body>
</html>
