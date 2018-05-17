<?php
    if(!(isset($_SESSION['isAdmin']))){
        echo '<?php include "navbar.php";?>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <ul class="xs-12 sm-6 md-4 lg-3">
                            <li class="btn">
                                <img src="DATA/'.$_SESSION['login'].'/profile.png">
                                <h1>'.$_SESSION['login'].'</h1>
                            </li>
                            <li class="btn">
                                <form action="actual.php" method="get">
                                    <input class="btn" type="submit" value="Actual rents">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="historique.php" method="get">
                                    <input class="btn" type="submit" value="Rents history">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="account.php" method="get">
                                    <input class="btn" type="submit" value="Settings">
                                </form>
                            </li>
                            <li class="btn">
                                <a>Deconnexion</a>
                            </li>
                        </ul>
                        <div class="xs-12 sm-6 md-8 lg-9">
                            Contenu
                        </div>
                    </div>

                </div>
            </div>';
    }else{
        echo '<?php include "navbar.php";?>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <ul class="xs-12 sm-6 md-4 lg-3">
                            <li class="btn">
                                <img src="DATA/'.$_SESSION['login'].'/profile.png">
                                <h1>'.$_SESSION['login'].'</h1>
                            </li>
                            <li class="btn">
                                <form action="actual.php" method="get">
                                    <input class="btn" type="submit" value="Actual rents">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="historique.php" method="get">
                                    <input class="btn" type="submit" value="Rents history">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="confirmRents.php" method="get">
                                    <input class="btn" type="submit" value="Rents confimration">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="contactMsg.php" method="get">
                                    <input class="btn" type="submit" value="Contact message">
                                </form>
                            </li>
                            <li class="btn">
                                <form action="account.php" method="get">
                                    <input class="btn" type="submit" value="Settings">
                                </form>
                            </li>
                            <li class="btn">
                                <a>Deconnexion</a>
                            </li>
                        </ul>
                        </div>
                        <div class="xs-12 sm-6 md-8 lg-9">
                            Contenu
                        </div>
                    </div>

                </div>
            </div>';

    }
?> 
