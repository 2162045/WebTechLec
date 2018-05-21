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
        <div class="nav-bar"> <a href="1.php">Injection</a> </div>
        <div class="nav-bar"><a href="2.php">Broken Authentication</a></div>
        <div class="nav-bar"><a href="3.php">Sensitive Data Exposure</a></div>
        <div class="nav-bar"><a href="4.php">XML External Entities (XXE)</a></div>
        <div class="nav-bar"><a href="5.php">Broken Access Control</a></div>
        <div class="nav-bar"><a href="6.php">Security Misconfiguration</a> </div>
        <div class="nav-bar"><a href="7.php">Cross-Site Scripting (XSS)</a> </div>
        <div class="nav-bar"><a href="8.php">Insecure Deserialization</a> </div>
        <div class="nav-bar"><a href="9.php">Using Components with Known Vulnerabilities</a> </div>
        <div class="nav-bar"><a href="10.php">Insufficient Logging and Monitoring</a> </div>
        <div class="nav-bar"> <a href="references.php">References</a> </div>
    </div>
    <div id="content">
        <h2>Cross-Site Scripting (XSS)	</h2>
        <p>It is a kind of hacking particularly in websites by doing injection attack which the attackers exploits the vulnerability of the site to attack the visitors of the site. By doing so attacker put scripts or malicious codes in the website which is not visible in the users interface. these scripts can alter the website, by creating or change links that can lead the user to a page that installs malware or copies a users session id or cookies and do other malicious activities using the victim’s account .</p>
        <h3>>Minimizing the risk/ best practices/ remedy</h3>
        <ul>
            <li>Enable in the advance setting the basic cross site scripting protection</li>
            <li>Clear cookies</li>
            <li> Clear caches</li>
            <li>Always update the plugins to ensure the security .</li>
        </ul>
        <h3>Actual Cases</h3>
        <ul>
            <li>The attacker finds a text area which accepts almost any character, text areas like comments, posts and search bars. These are usually the most exploited components, the attacker then inserts a malicious script, the attacker adds a link that will redirect the user to a page that gets his/her credentials, passwords emails or usernames.</li>
            <li>The attacker wants to get access to the services that this website provides, of course these services are paid. The attacker goes to the forums of the website and posts a harmful link, this link has an embedded script that takes the user accounts session id, the unaware victim clicks on a link and redirects him/her to a page that got his session id. The attacker can now use the session id and attach it to the url and access the website with all the paid features. </li>
            <li>Existing hacks
                <br> Some scripts are readily available and can easily be downloaded from the internet, there are available scripts online that target the end users cookies and copies it then puts it in a file which can be used for extreme purposes </li>
        </ul>
    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="6.php">Previous</a></li>
            <li><a href="8.php">Next</a></li>
        </ul>
    </div>
</body>

</html>