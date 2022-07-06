<header>
    <img src="..\images\logoSite.png" alt="logozinDeCria">
    <p>
        COMPREENDENDO CIRCUITOS DIGITAIS
    </p>
    <div class="profile">
        <div class="profile-img">
            <img src="../images/avatar (<?php 
                                            if(isset($_SESSION['profile'])){
                                                echo($_SESSION['profile']['avatar']);
                                            }else{
                                                echo "0";
                                            };
                                        ?>).png" alt="avatar" class="avatar">
            <?php if(isset($_SESSION['profile'])): ?>
                <a href="base?file=account&_file=modify-account" class="gear"><img src="../images/gear.png" alt="gear"></a>
            <?php endif;?>
        </div>
        <div class="profile-name">
            <?php
                if(isset($_SESSION['profile'])){
                    echo($_SESSION['profile']['name']);
                }else{
                    echo ('<a href="base?file=account&_file=login" class="botton-line-important">Login</a>');
                };
            ?>
        </div>
    </div>
</header>