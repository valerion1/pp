@extends('workspace.layers.extender')

@section('title', 'Projects')

@section('sidebar-menu')
    <ul class="sidebar-menu">
        <li class="header">МЕНЮ</li>
        <li class="treeview active">
            <a href="#">
                <i class="fa fa-cogs"></i> <span>Проекты</span>
                <i class="fa fa-plus pull-right plus"></i>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <!-- TODO вывод списка проектов -->
                <li><a href="#"><i class="fa fa-circle-o"></i>Project1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Project2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Project3</a></li>
                <li class="divider"></li>
                <li class="footer"><a href="workspace/projects">See all</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-tasks"></i> <span>Задачи</span>
                <i class="fa fa-plus pull-right plus"></i>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <!-- TODO вывод списка задач -->
                <li><a href="#"><i class="fa fa-circle-o"></i>Задача1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Задача2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Задача3</a></li>
                <li class="divider"></li>
                <li class="footer"><a href="workspace/projects">See all</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-group"></i> <span>Команда</span>
            </a>
        </li>
    </ul>
@endsection

@section('content')
<section class="content-header">
    <h1>
        Projects
    </h1>
    <!-- TODO сделать лист для заметок
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-cogs"></i> Home</a></li>
        <li class="active">Projects</li>
    </ol>-->
</section>

    <!-- Main content -->
<section class="content">
        <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue">
                    <div class="widget-user-image">
                        <img class="img-circle" src="./files/img_projects/pira.png" alt="Projects logo">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">PIRA PROJECTS</h3>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">Tasks<span class="pull-right badge bg-red">15</span></a></li>
                        <li><a href="#">Developers<span class="pull-right badge bg-aqua">4</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>

        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-maroon">
                    <div class="widget-user-image">
                        <img class="img-circle" src="./files/img_projects/pira.png" alt="Projects logo">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">PIRA PROJECTS</h3>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">Tasks<span class="pull-right badge bg-red">15</span></a></li>
                        <li><a href="#">Developers<span class="pull-right badge bg-aqua">4</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>


        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-navy-active">
                    <div class="widget-user-image">
                        <img class="img-circle" src="./files/img_projects/pira.png" alt="Projects logo">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">PIRA PROJECTS</h3>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">Tasks<span class="pull-right badge bg-red">15</span></a></li>
                        <li><a href="#">Developers<span class="pull-right badge bg-aqua">4</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
    </div>
    <!-- /.row (main row) -->

</section>
    @endsection