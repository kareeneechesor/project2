
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- ส่วนอื่นๆ ของเมนู -->
    <ul class="navbar-nav ml-auto">
        <!-- ลิงก์ออกจากระบบ -->
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                ออกจากระบบ
            </a>
        </li>
    </ul>

    <!-- ฟอร์มออกจากระบบ -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
