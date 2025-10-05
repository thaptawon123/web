<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>งานวิจัยและโครงการ - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <link href="/css/research-page.css" rel="stylesheet" /> 
</head>
<body>
    <div class="topbar">
        <div class="topbar-content">
            <div class="nav-links">
                <a href="/" class="nav-link">หน้าหลัก</a>
                <a href="/programs" class="nav-link">หลักสูตร</a>
                <a href="/faculty" class="nav-link">คณะจารย์</a>
                <a href="/research" class="nav-link active">งานวิจัย</a>
                <a href="/news" class="nav-link">ข่าวสาร</a>
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
            <h1 class="title-primary">งานวิจัยและโครงการ</h1>
            <p class="subtitle">สาขาวิชา Software Engineering - นวัตกรรมและการพัฒนาเทคโนโลยี</p>
        </div>

        <div class="grid grid-auto">
            <div class="research-card">
                <img src="/images/research/ai-ontology.jpg" alt="ภาพประกอบงานวิจัย Ontology-Based Multi-Agent System" class="card-main-image">

                <div class="card-badge">💡 Ontology & Agent System</div>
                <h3 class="card-title">ระบบเอเจนต์หลายตัวแบบ Ontology เพื่อจัดการองค์ความรู้ด้าน SE</h3>
                <p class="card-description">
                    งานวิจัยตีพิมพ์ใน International Journal (Q1) โดยนำเสนอระบบ Multi-Agent ที่ใช้ Ontology 
                    เพื่อรวบรวม จัดระเบียบ และเผยแพร่องค์ความรู้ในสาขาวิศวกรรมซอฟต์แวร์ได้อย่างมีประสิทธิภาพ
                </p>
                
                <div class="card-details">
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                        </svg>
                        <span class="detail-label">สถานะ:</span>
                        <span class="card-status status-completed">เสร็จสิ้นแล้ว</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z"/>
                        </svg>
                        <span class="detail-label">ตีพิมพ์:</span>
                        <span class="detail-value">2016 (International Journal)</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M11.5,1L2,6V8H21V6M16,10V17H19V19H5V17H8V10L16,10M10,10V17H14V10H10Z"/>
                        </svg>
                        <span class="detail-label">อ้างอิง:</span>
                        <span class="detail-value">Mobile Networks and Applications</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon-person" viewBox="0 0 24 24">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                        </svg>
                        <span class="detail-label">หัวหน้าโครงการ:</span>
                        <span class="detail-value">อ.ดร. อุษณีย์ ภักดีตระกูลวงศ์</span>
                    </div>
                </div>

                <div class="card-tags">
                    <span class="tag">Ontology</span>
                    <span class="tag">Multi-Agent System</span>
                    <span class="tag">Knowledge Management</span>
                    <span class="tag">SE</span>
                </div>

                <div class="card-footer">
                    <div class="researcher-info">
                        <div class="researcher-avatar-text">อ</div>
                        <div class="researcher-name">อ.ดร. อุษณีย์ ภักดีตระกูลวงศ์</div>
                    </div>
                    <a href="http://pgm.npru.ac.th/se/index.php?act=6a992d5529f459a44fee58c733255e86&lntype=editor_left&slm_id=712" class="card-action">ดูผลงานทั้งหมด</a>
                </div>
            </div>

            <div class="research-card">
                <img src="/images/research/project-info-management.jpg" alt="ภาพประกอบงานวิจัย SEOMAS Project Information" class="card-main-image">

                <div class="card-badge">🖥️ ระบบงาน</div>
                <h3 class="card-title">SEOMAS: การวิเคราะห์ความหมายข้อมูลโครงการซอฟต์แวร์ด้วยระบบเอเจนต์</h3>
                <p class="card-description">
                    การนำเสนอแนวทาง Ontology-Based Multi-Agent System (SEOMAS) ที่พัฒนาขึ้น
                    เพื่อรวบรวมและวิเคราะห์ความหมายของข้อมูลที่เกี่ยวข้องกับโครงการพัฒนาซอฟต์แวร์ 
                    โดยเฉพาะอย่างยิ่งสำหรับสภาพแวดล้อมที่มีหลายสถานที่
                </p>
                
                <div class="card-details">
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                        </svg>
                        <span class="detail-label">สถานะ:</span>
                        <span class="card-status status-completed">เสร็จสิ้นแล้ว</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z"/>
                        </svg>
                        <span class="detail-label">นำเสนอ:</span>
                        <span class="detail-value">2016 (International Conference)</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M11.5,1L2,6V8H21V6M16,10V17H19V19H5V17H8V10L16,10M10,10V17H14V10H10Z"/>
                        </svg>
                        <span class="detail-label">อ้างอิง:</span>
                        <span class="detail-value">Int'l Conference on Enterprise Systems</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon-person" viewBox="0 0 24 24">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                        </svg>
                        <span class="detail-label">หัวหน้าโครงการ:</span>
                        <span class="detail-value">อ.ดร. อุษณีย์ ภักดีตระกูลวงศ์</span>
                    </div>
                </div>

                <div class="card-tags">
                    <span class="tag">Ontology</span>
                    <span class="tag">Agent System</span>
                    <span class="tag">Project Management</span>
                    <span class="tag">Semantics</span>
                </div>

                <div class="card-footer">
                    <div class="researcher-info">
                        <div class="researcher-avatar-text">อ</div>
                        <div class="researcher-name">อ.ดร. อุษณีย์ ภักดีตระกูลวงศ์</div>
                    </div>
                    <a href="http://pgm.npru.ac.th/se/index.php?act=6a992d5529f459a44fee58c733255e86&lntype=editor_left&slm_id=712" class="card-action">ดูผลงานทั้งหมด</a>
                </div>
            </div>

            <div class="research-card">
                <img src="/images/research/recommendation-system.jpg" alt="ภาพประกอบงานวิจัย Recommendation Systems Survey" class="card-main-image">

                <div class="card-badge">📝 งานสำรวจ</div>
                <h3 class="card-title">ระบบแนะนำสำหรับ SE: การสำรวจในมุมมองวงจรชีวิตการพัฒนา</h3>
                <p class="card-description">
                    งานวิจัยประเภท Survey เพื่อสำรวจและประเมินการนำระบบแนะนำ (Recommendation Systems) 
                    มาประยุกต์ใช้ในขั้นตอนต่างๆ ของวงจรชีวิตการพัฒนาซอฟต์แวร์ (SDLC)
                </p>
                
                <div class="card-details">
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                        </svg>
                        <span class="detail-label">สถานะ:</span>
                        <span class="card-status status-completed">เสร็จสิ้นแล้ว</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z"/>
                        </svg>
                        <span class="detail-label">นำเสนอ:</span>
                        <span class="detail-value">2014 (International Conference)</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M11.5,1L2,6V8H21V6M16,10V17H19V19H5V17H8V10L16,10M10,10V17H14V10H10Z"/>
                        </svg>
                        <span class="detail-label">อ้างอิง:</span>
                        <span class="detail-value">Int'l Conference for IT and Secured Transactions</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon-person" viewBox="0 0 24 24">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                        </svg>
                        <span class="detail-label">หัวหน้าโครงการ:</span>
                        <span class="detail-value">อ.ดร. อุษณีย์ ภักดีตระกูลวงศ์</span>
                    </div>
                </div>

                <div class="card-tags">
                    <span class="tag">Recommendation System</span>
                    <span class="tag">Survey</span>
                    <span class="tag">SDLC</span>
                    <span class="tag">Software Engineering</span>
                </div>

                <div class="card-footer">
                    <div class="researcher-info">
                        <div class="researcher-avatar-text">อ</div>
                        <div class="researcher-name">อ.ดร. อุษณีย์ ภักดีตระกูลวงศ์</div>
                    </div>
                    <a href="http://pgm.npru.ac.th/se/index.php?act=6a992d5529f459a44fee58c733255e86&lntype=editor_left&slm_id=712" class="card-action">ดูผลงานทั้งหมด</a>
                </div>
            </div>
        </div>

        <div class="card" style="text-align: center; margin: 3rem 0; padding: 2rem;">
            <h2 class="title-primary">ติดต่อเรื่องการวิจัยและโครงการ</h2>
            <div style="text-align:center;color:#6b7280;max-width:600px;margin:0 auto">
                <p style="margin-bottom:1rem;">หากท่านสนใจร่วมงานวิจัย หรือต้องการข้อมูลเพิ่มเติมเกี่ยวกับโครงการต่าง ๆ</p>
                <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap;margin-top:2rem">
                    <div>
                        <strong style="color:#ef4444;">📧 อีเมล:</strong><br>
                        se@npru.ac.th (อ้างอิงจากข้อมูลติดต่อสาขา)
                    </div>
                    <div>
                        <strong style="color:#ef4444;">📞 โทรศัพท์:</strong><br>
                        034-xxx-xxxx (มหาวิทยาลัยราชภัฏนครปฐม)
                    </div>
                    <div>
                        <strong style="color:#ef4444;">🏢 สำนักงาน:</strong><br>
                        สาขาวิชาวิศวกรรมซอฟต์แวร์, สำนักคอมพิวเตอร์ (อาคารเรียน), มหาวิทยาลัยราชภัฏนครปฐม
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>