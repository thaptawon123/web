<div class="topbar">
    <div class="topbar-content">
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="/" style="display:inline-block">
                <img src="https://software-engineering-npru.vercel.app/logo.png" alt="SE Logo" style="height:44px; object-fit:contain;" />
            </a>
            <div class="nav-links">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">หน้าหลัก</a>
                <a href="/programs" class="nav-link {{ request()->is('programs') ? 'active' : '' }}">หลักสูตร</a>
                <a href="/faculty" class="nav-link {{ request()->is('faculty') ? 'active' : '' }}">คณาจารย์</a>
                <a href="/research" class="nav-link {{ request()->is('research') ? 'active' : '' }}">งานวิจัย</a>
                <a href="/news" class="nav-link {{ request()->is('news') ? 'active' : '' }}">ข่าวสาร</a>
            </div>
        </div>
        <div class="topbar-right">
            @auth
                <span style="color: var(--text-secondary); margin-right: 1rem;">สวัสดี, {{ Auth::user()->name }}</span>
                <form method="POST" action="/logout" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn">ออกจากระบบ</button>
                </form>
            @else
                <a href="/login" class="btn">เข้าสู่ระบบ</a>
                <a href="/register" class="btn btn-secondary">สมัครสมาชิก</a>
            @endauth
        </div>
    </div>
</div>
