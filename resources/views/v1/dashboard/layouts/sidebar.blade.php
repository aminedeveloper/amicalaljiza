<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
    <!--begin::Menu-->
    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
        <div class="menu-item">
            <div class="menu-content pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Tableau de bord</span>
            </div>
        </div>
        <div class="menu-item">
            <a class="menu-link @if(Route::is('admin.index'))  active @endif" href="{{route('admin.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </span>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </div>
        <div class="menu-item">
            <a class="menu-link @if(Route::is('admin.nouveautes.*'))  active @endif" href="{{route('admin.nouveautes.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-newspaper"></i>
                </span>
                <span class="menu-title">Les Nouveautés</span>
            </a>
        </div>
        <div class="menu-item">
            <a class="menu-link @if(Route::is('admin.tranches.*'))  active @endif" href="{{route('admin.tranches.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-building"></i>
                </span>
                <span class="menu-title">Les Tranches</span>
            </a>
        </div>
         <div class="menu-item">
            <a class="menu-link @if(Route::is('admin.categories.*'))  active @endif" href="{{route('admin.categories.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-passport"></i>
                </span>
                <span class="menu-title">Les Categories</span>
            </a>
        </div>
        <div class="menu-item">
            <a class="menu-link @if(Route::is('admin.projects.*'))  active @endif" href="{{route('admin.projects.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-passport"></i>
                </span>
                <span class="menu-title">Les Projects</span>
            </a>
        </div>
        <div class="menu-item">
            <a class="menu-link @if(Route::is('admin.albums.*'))  active @endif" href="{{route('admin.albums.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-passport"></i>
                </span>
                <span class="menu-title">Albums</span>
            </a>
        </div>
        <div class="menu-item">
            <a class="menu-link @if(Route::is('admin.photos.*'))  active @endif" href="{{route('admin.photos.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-images"></i>
                </span>
                <span class="menu-title">Photos</span>
            </a>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="{{route('admin.videos.index')}}">
                <span class="menu-icon">
                    <i class="fas fa-film"></i>
                </span>
                <span class="menu-title">Videos</span>
            </a>
        </div>
    </div>
    <!--end::Menu-->
</div>