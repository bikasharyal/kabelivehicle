<div class="menu">
    <div class="menu_header d-flex flex-row align-items-center justify-content-start">
        <div class="menu_logo"><a href="index.php">Kabeli Renters</a></div>
        <div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
    </div>
    <div class="menu_content">
        <ul>
            <?php $pageCount=0; foreach ($navItems as $item): ++$pageCount; ?>
                <li <?php if ($page == $pageCount): echo "class=\"active\""; $current_pg_link = $item['tlink']; endif?>><a href="<?php echo $item['tlink'];?>"><?php echo $item['title'];?></a></li>
            <?php endforeach  ?>

            <li><div class="btn-group btn-group-sm" role="group" >
                    <button  class="btn  btn-outline-info pull-right" data-toggle="modal" data-target="#LoginModal">Login</button>
                </div> </li>
        </ul>
    </div>
    <div class="menu_social">

        <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>