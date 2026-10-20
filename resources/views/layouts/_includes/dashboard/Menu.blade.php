@if (null !== Auth::user())


    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

            <li class="nav-item nav-profile">
                <a href="{{ route('admin.user.show', Auth::User()->id) }}" class="nav-link">
                    <div class="profile-image">

                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper my-3">
                        <p class="profile-name">{{ Auth::User()->name }}</p>
                        <p class="designation">{{ Auth::User()->level }}</p>
                    </div>
                </a>
            </li>

            <li class="nav-item nav-category">Areas</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link" href="{{ route('site.home') }}" target="_blank">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Site</span>
                </a>
            </li>

            @if ('Administrador' == Auth::user()->level)
                <li class="nav-item nav-category">Informações Públicas</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.speaker.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Speakers</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.schedule.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Programa</span>
                    </a>
                </li>



                {{-- Menu Users --}}
                <li class="nav-item nav-category mt-2">Utilizadores</li>
                <li class="nav-item mb-4">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Utilizadores </span>
                    </a>
                </li>
            @endif


        </ul>
    </nav>
@endif
