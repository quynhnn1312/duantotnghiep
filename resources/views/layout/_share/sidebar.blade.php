<div class="sidebar-content">
    <div class="nav-container">
        <nav id="main-menu-navigation" style="margin-bottom: 300px" class="navigation-main">
            @auth('admin')
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item active">
                    <a href="index.html"><i class="ik ik-bar-chart-2"></i><span>Trang chủ</span></a>
                </div>
                <div class="nav-lavel">UI Element</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-bell"></i><span>Quản lý thông báo</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-file-text"></i><span>Quản lý test</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-grid"></i><span>Quản lý sách lớp</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-book"></i><span>Quản lý khóa học</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>Quản lý khách hàng</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-users"></i><span>Quản lý học sinh</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>Quản lý giáo viên</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-check-square"></i><span>Quản lý điểm danh</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-award"></i> <span>Quản lý kiểm tra định kỳ</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-trending-up"></i><span>Quản lý doanh thu</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Alerts</a>
                    </div>
                </div>
                <div class="nav-lavel">Cấu hình trung tâm</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-settings"></i><span>Cấu hình trung tâm</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item"></a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-file-text"></i><span>Quản lý tin tức</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item"></a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-file-text"></i><span>Quản lý trang giới thiệu</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item"></a>
                    </div>
                </div>
            @endauth
            @auth('student')
                <div class="nav-lavel">UI Element</div>
                <div class="nav-item active">
                    <a href="#"><i class="ik ik-bell"></i><span> Thông báo</span></a>
                </div>
                <div class="nav-item">
                    <a href="#"><i class="ik ik-align-justify"></i><span> Lịch học</span></a>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-heart"></i><span> Điểm</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Điểm bài test</a>
                    </div>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item">Điểm kiểm tra</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="#"><i class="ik ik-check-square"></i><span> Điểm danh</span></a>
                </div>
                <div class="nav-item">
                    <a href="#"><i class="ik ik-align-justify"></i><span> Lịch sử học</span></a>
                </div>
                <div class="nav-item">
                    <a href="#"><i class="ik ik-dollar-sign"></i><span> Học phí</span></a>
                </div>
            @endauth
            @auth('teacher')
                <div class="nav-lavel">UI Element</div>
                <div class="nav-item active">
                    <a href="#"><i class="ik ik-bell"></i><span> Thông báo</span></a>
                </div>
                <div class="nav-item">
                    <a href="#"><i class="ik ik-align-justify"></i><span> Lịch dạy</span></a>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-heart"></i><span> Nhập điểm</span></a>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item"> Nhập điểm bài test</a>
                    </div>
                    <div class="submenu-content">
                        <a href="{{asset('admins/pages/ui/alerts.html')}}" class="menu-item"> Nhập điểm kiểm tra</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="#"><i class="ik ik-check-square"></i><span> Điểm danh</span></a>
                </div>
                <div class="nav-item">
                    <a href="#"><i class="ik ik-align-justify"></i><span> Lịch sử dạy</span></a>
                </div>
            @endauth
        </nav>
    </div>
</div>
