<!DOCTYPE html>
<html>
<head>
    <title>Perfect Web Framework</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libraries/kube.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/master.css'); ?>"/>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<div class="wrapper">

    <header id="header">
        <h1>Perfect Web Framework</h1>
        <nav id="nav">
            <ul>
                <li><span>Home</span></li>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
            </ul>
        </nav>
    </header>

    <div id="main">
        <h2>Hello and welcome!</h2>

        <div class="row">
            <article class="threequarter">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
            </article>
            <aside class="quarter">
                <div class="inner">
                    <h6>Sidebar</h6>
                    <nav id="navside">
                        <ul>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>

                        </ul>
                    </nav>
                </div>
            </aside>
        </div>
    </div>

    <ul id="blocks" class="block-three">
        <li>
            <div class="inner">1</div>
        </li>
        <li>
            <div class="inner">2</div>
        </li>
        <li>
            <div class="inner">3</div>
        </li>
    </ul>

    <footer id="footer">&copy; Your copyright 2012</footer>

</div>
</body>
</html>
