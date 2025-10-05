<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>งานวิจัยและโครงการ - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        /* Page specific styles */
        .page-body { padding-top: 76px; }
        
        /* Research card styles */
        .research-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            border: 1px solid #f1f5f9;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .research-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(239,68,68,0.15);
        }
        
        .card-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
            line-height: 1.3;
        }
        
        .card-description {
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }
        
        .card-details {
            margin: 1.5rem 0;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }
        
        .detail-icon {
            width: 16px;
            height: 16px;
            fill: var(--primary-red);
            flex-shrink: 0;
        }
        
        .detail-label {
            font-weight: 600;
            color: var(--text-secondary);
            min-width: 80px;
        }
        
        .detail-value {
            color: var(--text-primary);
        }
        
        .card-status {
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .status-ongoing {
            background: #fef3c7;
            color: #92400e;
        }
        
        .status-completed {
            background: #d1fae5;
            color: #065f46;
        }
        
        .status-planning {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .card-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1.5rem 0;
        }
        
        .tag {
            background: #f1f5f9;
            color: #475569;
            padding: 0.25rem 0.75rem;
            border-radius: 16px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f1f5f9;
        }
        
        .researcher-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .researcher-avatar {
            width: 32px;
            height: 32px;
            background: var(--primary-red);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .researcher-name {
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .card-action {
            background: var(--primary-red);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: background 0.2s ease;
        }
        
        .card-action:hover {
            background: var(--primary-red-dark);
        }
        /* Responsive */
        @media (max-width:768px){
            .container{padding:1rem}
            .grid{grid-template-columns:1fr;gap:1.5rem}
            .research-card{padding:1.5rem}
            .stats-grid{grid-template-columns:repeat(2,1fr)}
        }
        
        @media (max-width:480px){
            .stats-grid{grid-template-columns:1fr}
            .card-footer{flex-direction:column;gap:1rem;align-items:stretch}
        }
    </style>
</head>
<body>
    <!-- Top Navigation Bar -->
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
        <!-- Page Header -->
        <div class="card text-center" style="margin-bottom: 2rem; padding: 2rem;">
            <h1 class="title-primary">งานวิจัยและโครงการ</h1>
            <p class="subtitle">สาขาวิชา Software Engineering - นวัตกรรมและการพัฒนาเทคโนโลยี</p>
        </div>

        <!-- Research Projects Grid - 3 Cards -->
        <div class="grid grid-auto">
            <!-- Card 1: AI & Machine Learning -->
            <div class="research-card">
                <div class="card-badge">🤖 ปัญญาประดิษฐ์</div>
                <h3 class="card-title">ระบบ AI สำหรับการวิเคราะห์ Code Quality</h3>
                <p class="card-description">
                    การพัฒนาระบบปัญญาประดิษฐ์ที่สามารถวิเคราะห์คุณภาพของซอร์สโค้ดโดยอัตโนมัติ 
                    ตรวจหาข้อบกพร่อง แนะนำการปรับปรุง และประเมินความปลอดภัยของระบบ
                </p>
                
                <div class="card-details">
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                        </svg>
                        <span class="detail-label">สถานะ:</span>
                        <span class="card-status status-ongoing">กำลังดำเนินการ</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z"/>
                        </svg>
                        <span class="detail-label">ระยะเวลา:</span>
                        <span class="detail-value">2023-2025 (2 ปี)</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M11.5,1L2,6V8H21V6M16,10V17H19V19H5V17H8V10L16,10M10,10V17H14V10H10Z"/>
                        </svg>
                        <span class="detail-label">งบประมาณ:</span>
                        <span class="detail-value">2.5 ล้านบาท</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                        </svg>
                        <span class="detail-label">หัวหน้าโครงการ:</span>
                        <span class="detail-value">ผศ.ดร. สมชาย ใจดี</span>
                    </div>
                </div>

                <div class="card-tags">
                    <span class="tag">Machine Learning</span>
                    <span class="tag">Code Analysis</span>
                    <span class="tag">Deep Learning</span>
                    <span class="tag">Quality Assurance</span>
                </div>

                <div class="card-footer">
                    <div class="researcher-info">
                        <div class="researcher-avatar">ส</div>
                        <div class="researcher-name">ทีมวิจัย AI Lab</div>
                    </div>
                    <a href="#" class="card-action">ดูรายละเอียด</a>
                </div>
            </div>

            <!-- Card 2: Web Security -->
            <div class="research-card">
                <div class="card-badge">🔒 ความปลอดภัย</div>
                <h3 class="card-title">Framework การรักษาความปลอดภัยสำหรับ Web Applications</h3>
                <p class="card-description">
                    การศึกษาและพัฒนา Framework สำหรับป้องกันภัยคุกคามทางไซเบอร์ใน Web Applications 
                    รวมถึงการตรวจจับการโจมตี XSS, SQL Injection และ CSRF โดยอัตโนมัติ
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
                        <span class="detail-label">ระยะเวลา:</span>
                        <span class="detail-value">2022-2024 (2 ปี)</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M11.5,1L2,6V8H21V6M16,10V17H19V19H5V17H8V10L16,10M10,10V17H14V10H10Z"/>
                        </svg>
                        <span class="detail-label">งบประมาณ:</span>
                        <span class="detail-value">1.8 ล้านบาท</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                        </svg>
                        <span class="detail-label">หัวหน้าโครงการ:</span>
                        <span class="detail-value">อ.ดร. วิชญ์ พฤติกรรม</span>
                    </div>
                </div>

                <div class="card-tags">
                    <span class="tag">Cybersecurity</span>
                    <span class="tag">Web Security</span>
                    <span class="tag">Penetration Testing</span>
                    <span class="tag">Framework</span>
                </div>

                <div class="card-footer">
                    <div class="researcher-info">
                        <div class="researcher-avatar">ว</div>
                        <div class="researcher-name">ทีมวิจัย Security Lab</div>
                    </div>
                    <a href="#" class="card-action">ดูรายละเอียด</a>
                </div>
            </div>

            <!-- Card 3: Mobile App Development -->
            <div class="research-card">
                <div class="card-badge">📱 แอปพลิเคชัน</div>
                <h3 class="card-title">แพลตฟอร์มพัฒนาแอปพลิเคชันมือถือแบบ Cross-Platform</h3>
                <p class="card-description">
                    การวิจัยและพัฒนาเครื่องมือสำหรับสร้างแอปพลิเคชันมือถือที่ทำงานได้ทั้ง iOS และ Android 
                    จากโค้ดเซตเดียว พร้อมระบบ UI/UX ที่ปรับตัวได้อัตโนมัติ
                </p>
                
                <div class="card-details">
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z"/>
                        </svg>
                        <span class="detail-label">สถานะ:</span>
                        <span class="card-status status-planning">วางแผน</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z"/>
                        </svg>
                        <span class="detail-label">ระยะเวลา:</span>
                        <span class="detail-value">2024-2026 (2 ปี)</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M11.5,1L2,6V8H21V6M16,10V17H19V19H5V17H8V10L16,10M10,10V17H14V10H10Z"/>
                        </svg>
                        <span class="detail-label">งบประมาณ:</span>
                        <span class="detail-value">3.2 ล้านบาท</span>
                    </div>
                    <div class="detail-item">
                        <svg class="detail-icon" viewBox="0 0 24 24">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                        </svg>
                        <span class="detail-label">หัวหน้าโครงการ:</span>
                        <span class="detail-value">อ.ดร. สุกัญญา นวัตกรรม</span>
                    </div>
                </div>

                <div class="card-tags">
                    <span class="tag">Cross-Platform</span>
                    <span class="tag">Mobile Development</span>
                    <span class="tag">UI/UX Design</span>
                    <span class="tag">React Native</span>
                </div>

                <div class="card-footer">
                    <div class="researcher-info">
                        <div class="researcher-avatar">ส</div>
                        <div class="researcher-name">ทีมวิจัย Mobile Lab</div>
                    </div>
                    <a href="#" class="card-action">ดูรายละเอียด</a>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="card" style="text-align: center; margin: 3rem 0; padding: 2rem;">
            <h2 class="title-primary">ติดต่อเรื่องการวิจัยและโครงการ</h2>
            <div style="text-align:center;color:#6b7280;max-width:600px;margin:0 auto">
                <p style="margin-bottom:1rem;">หากท่านสนใจร่วมงานวิจัย หรือต้องการข้อมูลเพิ่มเติมเกี่ยวกับโครงการต่าง ๆ</p>
                <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap;margin-top:2rem">
                    <div>
                        <strong style="color:#ef4444;">📧 อีเมล:</strong><br>
                        research.se@university.ac.th
                    </div>
                    <div>
                        <strong style="color:#ef4444;">📞 โทรศัพท์:</strong><br>
                        02-xxx-xxxx ต่อ 1300
                    </div>
                    <div>
                        <strong style="color:#ef4444;">🏢 สำนักงาน:</strong><br>
                        อาคาร IT ชั้น 6 ห้อง 601
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>