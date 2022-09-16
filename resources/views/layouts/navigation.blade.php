<nav class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <i class='bx bx-task'></i>
            <div class="logo_name">{{config('app.name')}}</div>
        </div>
        <i class="bx bx-menu bx-sm" id="sidebar_btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <a href="#">
                <i class='bx bxs-dashboard bx-sm' ></i>
                <span class="links_name">Quadros</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="#">
                <i class="bx bxs-cog bx-sm"></i>
                <span class="links_name">Configurações</span>
            </a>
            <span class="tooltip">Configurações</span>
        </li>
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="profile.jpg" alt="">
                <div class="name_job">
                    <div class="name">Emanoel Pedro</div>
                    <div class="job">PHP Developer</div>
                </div>
            </div>
            <i class="bx bx-log-out" id="log_out"></i>
        </div>
    </div>

</nav>
