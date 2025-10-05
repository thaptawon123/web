<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข่าวสารและกิจกรรม - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
       /* Page specific styles */
.page-body { padding-top: 76px; }

/* Section Header Styles (เหมือน Faculty) */
.section-header {
    text-align: center;
    margin-bottom: 3rem; 
    padding-bottom: 0;
    border-bottom: none;
}
/* ... (เพิ่ม style สำหรับ .section-title และ .section-subtitle เหมือนใน faculty.blade.php ถ้าต้องการให้ Header เหมือนกัน) ... */

/* News Card Styles - ปรับปรุงการ์ดให้เป็นแนวนอน */
.news-grid {
    display: grid;
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto 3rem;
}

.news-card {
    background: white;
    border-radius: 16px;
    /* เปลี่ยนจาก padding เป็นการจัดเรียงภายใน */
    box-shadow: 0 10px 30px rgba(0,0,0,0.08); 
    border: 1px solid #f1f5f9;
    transition: all 0.3s ease;
    display: flex; /* ใช้ Flexbox สำหรับการจัดเรียงแนวนอน */
    align-items: stretch;
    overflow: hidden;
}

.news-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.news-image {
    width: 35%; /* รูปภาพใช้พื้นที่ 35% */
    max-height: 250px;
    overflow: hidden;
    flex-shrink: 0;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* ทำให้รูปภาพเต็มพื้นที่โดยไม่ผิดสัดส่วน */
    transition: transform 0.3s ease;
}

.news-card:hover .news-image img {
    transform: scale(1.05); /* เอฟเฟกต์ซูมเมื่อ Hover */
}

.news-content {
    padding: 1.5rem 2rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.news-category {
    display: inline-block;
    padding: 0.3rem 0.75rem;
    border-radius: 6px;
    color: white;
    font-weight: 600;
    font-size: 0.85rem;
    margin-bottom: 0.75rem;
}

.news-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.news-date {
    font-size: 0.9rem;
    color: #9ca3af;
}

.news-summary {
    color: var(--text-secondary);
    margin-top: 1rem;
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

.news-read-more {
    font-weight: 600;
    color: var(--primary-red);
    text-decoration: none;
    transition: color 0.2s;
    align-self: flex-start;
}

.news-read-more:hover {
    color: #ef4444; /* สีแดงเข้มขึ้น */
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .news-card {
        flex-direction: column; /* เปลี่ยนกลับเป็นแนวตั้งในหน้าจอขนาดเล็ก */
    }
    .news-image {
        width: 100%; 
        max-height: 200px;
    }
    .news-content {
        padding: 1.25rem;
    }
}
    </style>
</head>
<body>
        <div class="topbar">
        <div class="topbar-content">
            <div class="nav-links">
                <a href="/" class="nav-link">หน้าหลัก</a>
                <a href="/programs" class="nav-link">หลักสูตร</a>
                <a href="/faculty" class="nav-link">คณะจารย์</a>
                <a href="/research" class="nav-link">งานวิจัย</a>
                <a href="/news" class="nav-link active">ข่าวสาร</a>
            </div>
            <div class="topbar-right">
                @auth
                    <span style="color: var(--text-secondary); margin-right: 1rem;">สวัสดี, {{ Auth::user()->name }}</span>
                    <form method="POST" action="/logout" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: #6b7280;">ออกจากระบบ</button>
                    </form>
                @else
                    <a href="/login" class="btn">เข้าสู่ระบบ</a>
                @endauth
                <a href="/admin" class="btn btn-secondary">จัดการ</a>
            </div>
        </div>
    </div>
    <div class="container page-body">
        <div class="card text-center" style="margin-bottom: 2rem; padding: 2rem;">
            <h1 class="title-primary">ข่าวสารและกิจกรรม</h1>
            <p class="subtitle">ติดตามความเคลื่อนไหวและกิจกรรมต่าง ๆ ของสาขาวิชา Software Engineering และมหาวิทยาลัยราชภัฏนครปฐม</p>
        </div>

                <div class="grid grid-3" style="gap: 2rem;">
            
            {{-- ข่าวที่ 1: ประกาศผลผู้ได้รับคัดเลือกเช่าพื้นที่ (ข่าว มรภ.) --}}
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);">
                    📜
                </div>
                <div class="news-content">
                    <span class="news-category">ข่าว มรภ. นครปฐม</span>
                    <h3 class="news-title">ประกาศผลผู้ได้รับคัดเลือกเช่าพื้นที่งานพิธีพระราชทานปริญญาบัตร</h3>
                    <p class="news-excerpt">ประกาศรายชื่อผู้ได้รับการคัดเลือกเช่าพื้นที่เพื่อประกอบการจำหน่ายสินค้าและบริการภายในมหาวิทยาลัยฯ ในวันงานพิธีพระราชทานปริญญาบัตร</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            26 กันยายน 2568
                        </span>
                        <a href="http://pgm.npru.ac.th/se/index.php?act=6a992d5529f459a44fee58c733255e86&lntype=extmod&sys=sys_news3rd&dat=oldnews&uid_3rd=PR&viewnews=viewnews176&id3rd=176" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 2: มรน. จัดการประชุม Morning Talk (ข่าว มรภ. นครปฐม) --}}
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);">
                    🗣️
                </div>
                <div class="news-content">
                    <span class="news-category">ข่าว มรภ. นครปฐม</span>
                    <h3 class="news-title">มรน. จัดการประชุม Morning Talk ครั้งที่ 6/2568</h3>
                    <p class="news-excerpt">มหาวิทยาลัยราชภัฏนครปฐม จัดการประชุมเพื่อสื่อสารและวางแผนการทำงานระหว่างผู้บริหารและบุคลากร</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            22 กันยายน 2568
                        </span>
                        <a href="https://www.npru.ac.th/news.php?type=all" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 3: สำนักงานอธิการบดี ร่วมทำบุญ (ข่าว มรภ. นครปฐม) --}}
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                    🙏
                </div>
                <div class="news-content">
                    <span class="news-category">ข่าว มรภ. นครปฐม</span>
                    <h3 class="news-title">สำนักงานอธิการบดี ร่วมกับสำนักศิลปะและวัฒนธรรม จัดทำบุญมหาวิทยาลัย</h3>
                    <p class="news-excerpt">กิจกรรมทำบุญมหาวิทยาลัยราชภัฏนครปฐม เพื่อความเป็นสิริมงคล</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            21 กันยายน 2568
                        </span>
                        <a href="https://www.npru.ac.th/news.php?type=all" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 4: เจาะลึกหลักสูตร (แนะนำหลักสูตร) --}}
            <article class="news-card">
                <div class="news-image">
                    <img src="https://i.ytimg.com/vi/zdRODl64m0A/hq720.jpg" alt="ภาพปกวิดีโอหลักสูตร 2569">
                </div>
                <div class="news-content">
                    <span class="news-category" style="background: #3b82f6;">แนะนำหลักสูตร</span>
                    <h3 class="news-title">เจาะลึกหลักสูตรวิศวกรรมซอฟต์แวร์ มรน. (ฉบับปรับปรุง 2569)</h3>
                    <p class="news-excerpt">มาดูกันว่าหลักสูตร 4 ปี จะได้เรียนอะไรบ้าง และเรียนจบแล้วประกอบอาชีพอะไรได้บ้าง</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            28 สิงหาคม 2568
                        </span>
                        <a href="https://www.youtube.com/watch?v=zdRODl64m0A" class="news-read-more">รับชมวิดีโอ</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 5: เปิดรับสมัคร (ข่าวรับสมัคร) --}}
            <article class="news-card">
                <div class="news-image">
                    <img src="https://i.ytimg.com/vi/jXyZb58_eMo/hq720.jpg" alt="ภาพปกวิดีโอแนะนำสาขา">
                </div>
                <div class="news-content">
                    <span class="news-category" style="background: #ef4444;">ข่าวรับสมัคร</span>
                    <h3 class="news-title">เปิดรับสมัครนักศึกษาใหม่ (รอบที่ 1) ปีการศึกษา 2566</h3>
                    <p class="news-excerpt">สาขาวิชาวิศวกรรมซอฟต์แวร์ มรภ. นครปฐม เปิดรับสมัครนักศึกษาใหม่ (รอบที่ 1) เริ่มตั้งแต่วันที่ 3 ต.ค. - 15 ธ.ค. 65</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            3 ตุลาคม 2565
                        </span>
                        <a href="http://reg.npru.ac.th/registrar/apphome.asp" class="news-read-more">สมัครออนไลน์</a>
                    </div>
                </div>
            </article>

            {{-- ข่าวที่ 6: วิดีโอแนะนำสาขา (แนะนำหลักสูตร) --}}
            <article class="news-card">
                <div class="news-image">
                    <img src="https://i.ytimg.com/vi/dXbkMR99AcM/hq720.jpg" alt="ภาพปกวิดีโอแนะนำสาขา">
                </div>
                <div class="news-content">
                    <span class="news-category" style="background: #3b82f6;">แนะนำหลักสูตร</span>
                    <h3 class="news-title">วิดีโอแนะนำสาขาวิชาวิศวกรรมซอฟต์แวร์ มรน.</h3>
                    <p class="news-excerpt">แนะนำว่าสาขาวิศวกรรมซอฟต์แวร์เรียนเกี่ยวกับอะไร มีทักษะอะไร และจบไปทำงานอะไรได้บ้าง</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/></svg>
                            9 ตุลาคม 2563
                        </span>
                        <a href="https://www.youtube.com/watch?v=dXbkMR99AcM" class="news-read-more">รับชมวิดีโอ</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</body>
</html>