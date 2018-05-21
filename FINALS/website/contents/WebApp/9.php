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
        <h3> Using Components With Known Vulnerabilities	</h3>
        <p>The adaptation of developer of a wide variety of third party components is now common place for most enterprise web sites to provide functionality. These components are largely used by a companies such as Google Analytics, jQuery, kiosked, dojo,nojo and other third party components that present an increased security risk that needs to be understood and managed.One rule in development is by not reinventing the wheel and we should utilize what has already been created such as frameworks and open-source libraries it may be convenient for developers to use these components but also puts their projects at risk, since these components may have unpatched or existing vulnerabilities that may affect the services developers provide allowing threats to easily access sensitive data and steal information from victims. Collectively, vulnerabilities are lurking in these components and it is not always easy to know whether these contain vulnerabilities, either generally or in a particular configuration. These third-party components can add vulnerabilities in your application, the database of your application, operating system or in your web server. These must be taken as serious problem because an attacker will be given a privilege to access the information that is encrypted.</p>
        <br>
        <br>
        <h3>Minimize the risk/ best practices/ remedy</h3>
        <ol>
            <li>The first thing that you must practice to minimize the risk of having vulnerabilities on the components, is to secure the availability of high security risk on the third party components by having regularly scan the application using vulnerability tools. 2. Remove any components that you don't need in your website.</li>
            <li>Remove any components that you don't need in your website.</li>
            <li> Do vulnerability assessment on your website. It is an important aspect since it is good method of identifying issues, and it evaluates the network and/or web app security posture to decrease the vulnerability on the components used in the website.</li>
            <li> Do vulnerability assessment on your website. It is an important aspect since it is good method of identifying issues, and it evaluates the network and/or web app security posture to decrease the vulnerability on the components used in the website.</li>
            <li>Keep on top of updates,especially security updates.When vulnerability is found apply a patch by doing an update.</li>
            <li>Developer should ensure the components that they will be using is up to date,it may lead to attack if it is not applied (the weakness of it may detect by the attacker).They may use some software like Contrast,RiskIQ’s Digital Footprint solution to monitor it in reducing the risk</li>
            <li>When there is a vulnerability already released, patch the system as soon as vulnerability is released by updating it. Next is that, always keep the system ,the different components updated and by deleting any unnecessary plugins and frameworks that is not used.</li>
        </ol>
        <h3>Actual Cases</h3>
        <p>The 'Heartbleed' blamed in attack on Canada tax agency.What happened is the Canada Revenue Agency a federal department was hit by a hacker exploiting the Heartbleed bug.The Canada Revenue Agency website is seen on a computer screen displaying information about an internet security vulnerability called the "Heartbleed Bug" in Toronto, April 9, 2014.The breach allowed hackers to extract social insurance numbers, which are used for employment and gaining access to government benefits. Canada Revenue Agency said.Andy Ellis, chief technology officer with Akamai Technologies Inc, said he was not surprised to hear about the attack on the Canadian agency because there are already several “tool kits” publicly available over the Internet that hackers can use to launch attacks on vulnerable websites.Specifically, Heartbleed affects open-source software called Open-SSL that’s at the very core of millions of applications used to encrypt Internet communications. </p>
    
<iframe width="854" height="480" src="https://www.youtube.com/embed/q7FuLs5fnEc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    </div>
    <div class="container">
        <ul class="pager">
            <li><a href="8.php">Previous</a></li>
            <li><a href="10.php">Next</a></li>
        </ul>
    </div>
</body>

</html>