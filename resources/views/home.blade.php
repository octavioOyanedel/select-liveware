@extends('layouts.app')

@section('content')
<div class="">

      <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i style="font-size: 18px; margin-top: 4px;" class="fas fa-arrows-alt-h"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <a class="nav-link" data-toggle="dropdown" href="#" title="N° Socios">
                    <i class="fas fa-user-friends"></i>
                    <span class="badge badge-danger navbar-badge">500</span>
                </a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img src="\img\logo_blanco.png" alt="Logo SIND1" class="brand-image img-circle elevation-3" style="opacity: 1">
            <span class="brand-text font-weight-light">SIND1 </span>
        </a>
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <p>Socios<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active"><p>Cargas</p></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Estudios</p></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><p>Socios</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Salir
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
</div>
@endsection
