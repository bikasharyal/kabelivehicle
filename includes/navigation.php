<!-- Navigation Start -->

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                        <div class="logo"><a href="index.php?lang=<?php echo $_SESSION['lang']?>"><?php echo $lang['title'] ?></a></div>
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <?php $pageCount=0; foreach ($navItems as $item): ++$pageCount; ?>
                                    <li <?php if ($page == $pageCount): echo "class=\"active\""; $current_pg_link = $item['tlink']; endif?>><a href="<?php echo "{$item['tlink']}"?>"><?php echo $item['title'];?></a></li>
                                <?php endforeach  ?>
                            </ul>
                        </nav>
                        <!--     <div class="header_phone ml-auto">
                            <div class="btn-group btn-group-sm" role="group" >
                                <button  class="btn  btn-outline-light pull-right" data-toggle="modal" data-target="#LoginModal">Login</button>
                            </div>
                        </div>-->

                        <!-- Hamburger -->

                        <div class="hamburger ml-auto">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>

                    </div>



                    <?php if (!isset($_SESSION['g_access_token'])&&!isset($_SESSION['fb_access_token'])&&!isset($_SESSION['user_token'])):?>
                        <!--  <div class="header_phone ml-auto">
                              <div class="btn-group btn-group-sm" role="group" >
                                  <button  class="btn  btn-outline-light pull-right" data-toggle="modal" data-target="#LoginModal">Login</button>
                              </div>
                          </div> -->
                        <div class="btn-group" >
                            <a class="btn btn-sm dropdown-toggle" id="ma" data-toggle="dropdown" href="#"><?php echo $lang['login'] ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#LoginModal"><?php echo $lang['login'] ?></a></li>
                                <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#RegisterModal"><?php echo $lang['register'] ?></a></li>

                            </ul>
                        </div>
                    <?php else:?>

                        <!--                            <div class="header_phone ml-auto">-->
                        <!--                                <div class="btn-group btn-group-xs" role="group" >-->
                        <?php if(isset($_SESSION['picture'])):?>
                            <a class="btn-group-sm pull-right" id="ma" href="includes/afterlogin.php"><img src="<?php echo $_SESSION['picture']?>" alt="Avatar" class="avatar" style="vertical-align: middle;width: 25px;height: 25px;border-radius: 50%;" ></a>
                        <?php endif;?>
                        <div class="btn-group" >
                        &nbsp;&nbsp;<a class="btn btn-sm pull-right" id="ma" href="includes/logout.php"><?php echo $lang['logout'] ?></a>&nbsp;&nbsp;
                        </div>
                        <!--                            </div>-->
                    <?php endif ?>
                    <!--                        <select class="selectpicker"  id="trasparent-select" data-width="fit" >-->
                    <!--                             <option><a href="news.php"><img src="images/us.svg" alt="US-Flag"> EN </a></option>-->
                    <!--                            <option ><a href="#"><img src="images/es.svg" alt="Espanish-Flag">ES</a></option>-->
                    <!--                        </select>-->
                    <div class="btn-group">
                        <a class="btn btn-sm dropdown-toggle" id="ma" data-toggle="dropdown" href="#">
                        <?php if(isset($_SESSION['lang'])){
                            echo strtoupper($_SESSION['lang']);
                        } else{
                            echo 'EN ';
                        }
                        ?>
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item" ><a href="<?php echo $current_pg_link.'?lang=en'?>"><img src="images/us.svg" alt="US-Flag" style="width:40px; height: 25px;">&nbsp;&nbsp;EN</a></li>
                            <li class="dropdown-item" ><a href="<?php echo $current_pg_link.'?lang=es'?>"><img src="images/es.svg" alt="Espanish-Flag" style="width:40px; height: 25px;">&nbsp;&nbsp;ES</a></li>
                        </ul>
                    </div>
                  <!--  <select name="" id="" style="background: transparent; border: none;">
                        <option value="">EN</option>
                        <option value="">ES</option>
                    </select> -->

                </div>

            </div>


        </div>

    </div>
  <!--  <div class="header_social d-flex flex-row align-items-center justify-content-start">
        <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div> -->
</header>

<!-- Navigation Ends -->