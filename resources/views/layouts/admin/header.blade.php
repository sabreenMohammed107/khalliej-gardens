 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('dashboard/img/logo/logo.webp')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">حدائق الخليج</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar dir-rtl">


        <!-- Sidebar Menu -->
        <nav class="mt-2 dir-rtl">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('home') }}" class="nav-link active">
                        <i class="fas fa-cogs"></i>
                        <p>
                            الرئيسية
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('company.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                            الشركة
                        </p>
                    </a>

                </li>



                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('category.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                           التصنيفات
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('blogs.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                            المدونة
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('service.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                           الخدمات
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('gallery.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                           الجاليرى
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('clients.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                         العملاء
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('whyus.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                           لماذا نحن
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('numbers.index') }}" class="nav-link ">
                        <i class="fas fa-cogs"></i>
                        <p>
                         ارقام حدائق الخليج
                        </p>
                    </a>

                </li>
                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                             الفواتير المرحلة
                        </p>
                    </a>

                </li> --}}
                {{-- <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            التقارير
                            <i class="fas fa-angle-right left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#"  class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> تقرير الفواتير </p>
                            </a>
                        </li> --}}



                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
