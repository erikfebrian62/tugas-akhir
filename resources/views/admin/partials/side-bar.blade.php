<div class="logo">
    <a href="#" class="logo-icon"><span class="logo-text">profit_counter</span></a>
    <div class="sidebar-user-switcher user-activity-online">
        <a href="#">
            <img src="{{ asset('/images/admin.jpg') }}">
            <span class="activity-indicator"></span>
            <span class="user-info-text">Admin<br><span class="user-state-info">Sedang aktif</span></span>
        </a>
    </div>
</div>
<div class="app-menu">
    <ul class="accordion-menu">
        <li class="sidebar-title">
            Menu
        </li>
        <li class="active-page">
            <a href="/" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">person_search</i>Info Users</a>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">settings</i>setting<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="#">Profile <i class="ms-3 bi bi-person-square"></i></a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">Log out<i class="ms-3 bi bi-box-arrow-right"></i></a>
                </li>
            </ul>
        </li>
    </ul>
</div>

