<?php $page='dashboard'; include 'admin_header.php' ?>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h3><i class="fas fa-cog"></i> Admin Dashboard </h3>
                </div>
            </div>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="<?php echo base_url('index.php/admin')?>" class="list-group-item list-group-item-action <?php if($panel=='dashboard'){echo " active";}?>"><i class="fas fa-cog"></i> Dashboard</a>
                        <a href="<?php echo base_url('index.php/admin/wiki')?>" class="list-group-item list-group-item-action <?php if($panel=='wiki'){echo " active";}?>"><i class="fas fa-feather"></i> Wiki Contents <span class="badge badge-pill badge-danger float-right">12</span></a>
                        <a href="<?php echo base_url('index.php/admin/news')?>" class="list-group-item list-group-item-action <?php if($panel=='news'){echo " active";}?>"><i class="fas fa-paper-plane"></i> News <span class="badge badge-pill badge-danger float-right">5</span></a>
                        <a href="<?php echo base_url('index.php/admin/articles')?>" class="list-group-item list-group-item-action <?php if($panel=='articles'){echo " active";}?>"><i class="fas fa-book"></i> Articles <span class="badge badge-pill badge-danger float-right">7</span></a>
                    </div>
                </div>
                <div class="col-md-9">
