<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link">
                <i class="nav-icon fas fa-house-user"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.news.index') }}" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>
                    News
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.categories.index') }}" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                <p>
                    Categories
                </p>
            </a>
        </li>
    </ul>
</nav>
