<?php
    session_start();
?>

<?php include "navbar.php";?>
<?php
    if(($_SESSION['admin']==0)){
        echo '
            <div class="container">
                <div class="row">
                    <div class="container">
                        <ul class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <li class="btn">
                                <img src="DATA/'.$_SESSION['login'].'/profile.png">
                                <h1>'.$_SESSION['login'].'</h1>
                            </li>
                            <li class="btn">
                                <form action="myrents.php" method="get">
                                    <input class="btn" type="submit" value="My rents">
                                </form>
                            <li>
                            <li class="btn">
                                <form action="account.php" method="get">
                                    <input class="btn" type="submit" value="Settings">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="rent.php" method="get">
                                    <input class="btn" type="submit" value="Add a rent">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="unlog.php" method="get">
                                    <input class="btn" type="submit" value="Logout">
                                </form>
                            </li>
                        </ul>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
                            Contenu
                        </div>
                    </div>

                </div>
            </div>';
    }else{
        echo '
            <div class="container">
                <div class="row">
                    <div class="container">
                        <ul class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <li class="btn">
                                <img src="DATA/'.$_SESSION['login'].'/profile.png">
                                <h1>'.$_SESSION['login'].'</h1>
                            </li>
                            <li class="btn">
                                <form action="historic.php" method="get">
                                    <input class="btn" type="submit" value="Locataed rents">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="rent.php" method="get">
                                    <input class="btn" type="submit" value="Add a rent">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="confirmRents.php" method="get">
                                    <input class="btn" type="submit" value="Rents confimration">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="account.php" method="get">
                                    <input class="btn" type="submit" value="Settings">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="unlog.php" method="get">
                                    <input class="btn" type="submit" value="Logout">
                                </form>
                            </li>
                        </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
                            Contenu
                        </div>
                    </div>

                </div>
            </div>';

    }
?> 
