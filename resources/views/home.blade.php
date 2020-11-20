@extends('layouts.app')

@section('content')
<div class="">

    {{-- Navbar superior --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i style="font-size: 18px;" class="text-danger fas fa-arrows-alt-h"></i></a>
            </li>
            <li class="nav-item active"><span class="nav-link"><b>SIND1</b></span></li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li>
                <a class="nav-link" data-toggle="dropdown" href="#" title="N° Damas">
                    {{-- <i style="left:-15px; font-size: 25px;" class="fas fa-female"></i> --}}
                    <span class="badge badge-danger navbar-badge">244</span>
                </a>
            </li>
            <li>
                <a class="nav-link" data-toggle="dropdown" href="#" title="N° Socios">
                    {{-- <i class="fas fa-user-friends"></i> --}}
                    <span class="badge badge-success navbar-badge">500</span>
                </a>
            </li>
            <li>
                <a class="nav-link" data-toggle="dropdown" href="#" title="N° Socios">
                    {{-- <i class="fas fa-user-friends"></i> --}}
                    <span class="badge badge-primary navbar-badge">500</span>
                </a>
            </li>
        </ul>

    </nav>

    {{-- Navbar lateral --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        {{-- Titulo nav --}}
        <a href="#" data-widget="pushmenu" class="brand-link">
            <img src="\img\logo_blanco.png" alt="Logo SIND1" class="brand-image img-circle elevation-3" style="opacity: 1">
            <span class="brand-text font-weight-light">SIND1 </span>
        </a>

        {{-- Enlaces  --}}
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Hola, Octavio</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    {{-- Enlaces socios --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Socios<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Socio</p></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Carga</p></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Estudio</p></a>
                            </li>
                        </ul>
                    </li>

                    {{-- Enlaces préstamos--}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>Préstamos</p>
                        </a>
                    </li>

                    {{-- Enlaces contabilidad--}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>Contabilidad<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Egresos</p></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Ingresos</p></a>
                            </li>
                        </ul>
                    </li>

                    {{-- Enlaces administración --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Administración<i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Cambiar Contraseña</p></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Mantenedor</p></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><p>Historial</p></a>
                            </li>
                        </ul>
                    </li>

                    {{-- Salir --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="text-danger nav-icon fas fa-sign-out-alt"></i> Salir
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </nav>
            <div class="user-panel pb-3 mb-3 d-flex">

            </div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Rol: Admin</a>
                </div>
            </div>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Versión: 2.0</a>
                </div>
            </div>
        </div>
    </aside>

</div>
@endsection
