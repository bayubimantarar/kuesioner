<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo base_url('int/dashboard/index') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Users<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('int/users/index'); ?>"><i class="fa fa-circle-o fa-fw"></i>Users</a>
                        </li>
                    </ul><!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Alumni<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('int/alumni/index'); ?>"><i class="fa fa-circle-o fa-fw"></i>Alumni</a>
                        </li>
                    </ul><!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Diagram<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('int/diagram_mp/index'); ?>"><i class="fa fa-circle-o fa-fw"></i>Manajemen & Profesionalisme</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('int/diagram_it/index'); ?>"><i class="fa fa-circle-o fa-fw"></i>Teknologi Informasi</a>
                        </li>
                    </ul><!-- /.nav-second-level -->
            </li>
        </ul>
    </div><!-- /.sidebar-collapse -->
</div><!-- /.navbar-static-side -->
</nav>