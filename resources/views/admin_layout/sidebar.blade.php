<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Administration</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/admin.png')}}" class="img-circle border elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrateur</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{request()->is('admin') ? 'menu-open' : ' '}}">
                    <a href="#" class="nav-link {{request()->is('admin') ? 'active' : ' '}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tableau de bord
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin')}}" class="nav-link {{request()->is('admin') ? 'active' : ' '}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page d'accueil</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('admin/categories') || request()->is('admin/addcategory') ? 'menu-open' : ' '}}">
                    <a href="#" class="nav-link {{request()->is('admin/categories') || request()->is('admin/addcategory') ? 'active' : ' '}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Catégories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/addcategory')}}" class="nav-link {{request()->is('admin/addcategory') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter une catégorie</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/categories')}}" class="nav-link {{request()->is('admin/categories') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Liste des catégories</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('admin/sliders') || request()->is('admin/addslider') ? 'menu-open' : ' '}}">
                    <a href="#" class="nav-link {{request()->is('admin/sliders') || request()->is('admin/addslider') ? 'active' : ' '}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Diaporama d'accueil
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/addslider')}}" class="nav-link {{request()->is('admin/addslider') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter une diapo.</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/sliders')}}" class="nav-link {{request()->is('admin/sliders') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Liste des diapositives</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('admin/articles') || request()->is('admin/addarticle') ? 'menu-open' : ' '}}">
                    <a href="#" class="nav-link {{request()->is('admin/articles') || request()->is('admin/addarticle') ? 'active' : ' '}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Articles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/addarticle')}}" class="nav-link {{request()->is('admin/addarticle') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter un article</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/articles')}}" class="nav-link {{request()->is('admin/articles') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Liste des articles</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('admin/pages') || request()->is('admin/addpage') ? 'menu-open' : ' '}}">
                    <a href="#" class="nav-link {{request()->is('admin/pages') || request()->is('admin/addpage') ? 'active' : ' '}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Pages de blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/addpage')}}" class="nav-link {{request()->is('admin/addpage') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter une page</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/pages')}}" class="nav-link {{request()->is('admin/pages') ? 'active' : ' '}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Liste des pages</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>