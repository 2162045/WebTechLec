<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>WEBTECH FINALS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/font.css">
    <script src="../../js/jquery.js" type="text/javascript"></script>
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../../css/contents.css">
    <?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>

<body>
    <div class="row header">
        <div class="col-lg-6"> <span class="logo"><img src="../../image/ourlogo.png" style="padding-top:5px;"width="300"></span></div>
        <div class="col-md-2"> </div>
        <div class="col-md-4">
            <?php
 include_once '../../dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?> <a href="../index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp;Back</a>&nbsp; </div>
    </div>
    <!--sign in modal start-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content title1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4> </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="../../login.php?q=index.php" method="POST">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email"></label>
                                <div class="col-md-6">
                                    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email"> </div>
                            </div>
                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="password"></label>
                                <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password"> </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-container">
        <div class="nav-bar"><a href="intro.php">Web Application Security Risk</a></div>
        <div class="nav-bar"><a href="../WebApp/1.php">Injection</a> </div>
        <div class="nav-bar"><a href="../WebApp/2.php">Broken Authentication</a></div>
        <div class="nav-bar"><a href="../WebApp/3.php">Sensitive Data Exposure</a></div>
        <div class="nav-bar"><a href="../WebApp/4.php">XML External Entities (XXE)</a></div>
        <div class="nav-bar"><a href="../WebApp/5.php">Broken Access Control</a></div>
        <div class="nav-bar"><a href="../WebApp/6.php">Security Misconfiguration</a> </div>
        <div class="nav-bar"><a href="../WebApp/7.php">Cross-Site Scripting (XSS)</a> </div>
        <div class="nav-bar"><a href="../WebApp/8.php">Insecure Deserialization</a> </div>
        <div class="nav-bar"><a href="../WebApp/9.php">Using Components with Known Vulnerabilities</a> </div>
        <div class="nav-bar"><a href="../WebApp/10.php">Insufficient Logging and Monitoring</a> </div>
        <div class="nav-bar"><a href="../WebApp/references.php">References</a> </div>
    </div>
    <div id="content">
        <h2>Web Application Security Risk</h2>
        <p>Web application attacks occur, identify common and obscure Web application attacks, including buffer overflows, SQL injection, cross-site scripting and distributed denial-of-service (DDoS) attacks.It is important to secure the website to protect the information or data's inside it. Attackers take a privilege to attack the website if the website has weak security.Perhaps, web application is useful in businesses and inother organizaion,like it is easier to maintain a proper communication channel between potential customers and the business organization.hese must be taken as serious problem because an attacker will be given a privilege to access the information that is encryptedOn this lesson,we will tuckle abut the 10 OWASP App Security Risk.The OWASP or the Open Web Application Security Project. OWASP is an open community dedicated to enabling organizations to conceive, develop, acquire, operate, and maintain applications that can be trusted. </p>
   <iframe width="854" height="480" src="https://www.youtube.com/embed/02mLrFVzIYU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="1.php">Next</a></li>
        </ul>
    </div>
</body>

</html>