@extends('dashboard.base')

@section('navbar')

    <aside class="main-sidebar">
    <nav>
        <ul>
        <li class="active"><a href="/dashboard"><i class="fa fa-dashboard fa-fw" aria-hidden="true"></i> Dashboard</a></li>
        <li class=""><a href="/dashboard/profile"><i class="fa fa-user fa-fw" aria-hidden="true"></i> My profile</a></li>
        <li class=""><a href="/dashboard/posts"><i class="fa fa-list fa-fw" aria-hidden="true"></i> Posts</a></li>
        <li class=""><a href="/dashboard/pages"><i class="fa fa-list fa-fw" aria-hidden="true"></i> Pages</a></li>
        <li class=""><a href="/dashboard/post/add"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Add new post</a></li>
        <li class=""><a href="/dashboard/page/add"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Add new page</a></li>
        <li class=""><a href="/dashboard/categories"><i class="fa fa-link fa-fw" aria-hidden="true"></i> Categories</a></li>
        <li class=""><a href="/dashboard/navigation"><i class="fa fa-link fa-fw" aria-hidden="true"></i> Navigation</a></li>
        <li class=""><a href="/dashboard/settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Settings</a></li>
        <li class=""><a href="/dashboard/comments"><i class="fa fa-comments fa-fw" aria-hidden="true"></i> Comments</a></li>
        <li class=""><a href="/dashboard/users"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Users</a></li>
        <li class=""><a href="/dashboard/about"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i> About CMS</a></li>
        </ul>
    </nav>
    </aside>

@endsection
