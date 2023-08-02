<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{url('/' . $page='index')}}">
            <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
            <img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
            <img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
            <img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
        </a>
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{URL::asset('assets/images/avatars/atendente2.png')}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
            </div>
            <div class="user-info">
                <h5 class=" mb-1">{{Auth::user()->name}}<i class="ion-checkmark-circled  text-success fs-12"></i></h5>
                <span class="text-muted app-sidebar__user-name text-sm">{{Auth::user()->department->name}}</span>
            </div>
        </div>
        
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4">Menu Principal</li>
        <li class="slide">
            <a class="side-menu__item"  href="{{route('dashboard')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"></path></svg>
            <span class="side-menu__label">Painel</span></a>
        </li>              
        <li class="slide">
            <a class="side-menu__item"  href="{{route('open-calling')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M7.88 3.39L6.6 1.86 2 5.71l1.29 1.53 4.59-3.85zM22 5.72l-4.6-3.86-1.29 1.53 4.6 3.86L22 5.72zM12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm1-11h-2v3H8v2h3v3h2v-3h3v-2h-3V9z"></path></svg>
            <span class="side-menu__label">Abrir chamado</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item"  href="{{route('my-calling')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
            <span class="side-menu__label">Meus Chamados</span></a>
        </li>
        
        <!--
        <li class="side-item side-item-category">Relatórios</li>
        <li class="slide">
            <a class="side-menu__item"  href="{route('report.calling')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Chamados</span><span class="badge badge-danger side-badge">Hot</span></a>
        </li>
        -->
        <li class="side-item side-item-category">Configurações</li>
        <li class="slide">
            <a class="side-menu__item"  href="{{route('config.setores')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Setores</span><span class="badge badge-danger side-badge">Novo</span></a>
        </li>
    
    
       
    </ul>
</aside>
<!--aside closed-->