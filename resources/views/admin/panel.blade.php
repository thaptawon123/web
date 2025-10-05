<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Panel - จัดการเนื้อหาเว็บไซต์</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 1rem;
        }
        
        .header {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }
        
        .header h1 {
            margin: 0;
            color: #1f2937;
            font-size: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .header .subtitle {
            color: #6b7280;
            margin: 0.5rem 0 0 0;
            font-size: 1rem;
        }
        
        .wrap {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .dashboard-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            flex-wrap: wrap;
        }
        
        .card {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f1f5f9;
        }
        
        .card-header h3 {
            margin: 0;
            color: #1f2937;
            font-size: 1.25rem;
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #374151;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.2s ease;
            background: #ffffff;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        input[type="file"] {
            padding: 0.5rem;
            border: 2px dashed #d1d5db;
            background: #f9fafb;
        }
        
        input[type="file"]:hover {
            border-color: #667eea;
            background: #f0f4ff;
        }
        
        textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            border: none;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }
        
        .btn-danger:hover {
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.3);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        
        .btn-success:hover {
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
        }
        
        .preview-image {
            max-width: 200px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin: 0.75rem 0;
        }
        
        .alert {
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }
        
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .card-item {
            border: 2px dashed #e5e7eb;
            border-radius: 12px;
            padding: 1.5rem;
            position: relative;
            background: #f9fafb;
            transition: all 0.2s ease;
        }
        
        .card-item:hover {
            border-color: #667eea;
            background: #f0f4ff;
        }
        
        .remove-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            background: #ef4444;
            color: white;
            border: none;
            border-radius: 8px;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.2rem;
        }
        
        .faculty-list {
            list-style: none;
            padding: 0;
        }
        
        .faculty-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            background: #f8fafc;
            border-radius: 12px;
            margin-bottom: 0.75rem;
            border: 1px solid #e2e8f0;
        }
        
        .faculty-info strong {
            color: #1f2937;
            font-weight: 600;
        }
        
        .faculty-position {
            color: #667eea;
            font-size: 0.9rem;
            margin-top: 0.25rem;
        }
        
        .icon {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }
        
        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }
            
            .header h1 {
                font-size: 1.5rem;
            }
            
            .card {
                padding: 1.5rem;
            }
            
            .dashboard-actions {
                justify-content: center;
            }
            
            .card-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <!-- Header Section -->
        <div class="header">
            <h1>
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                แผงควบคุมเว็บไซต์
            </h1>
            <p class="subtitle">จัดการเนื้อหาและข้อมูลสาขาวิชา Software Engineering</p>
            
            <div class="dashboard-actions">
                <button id="downloadJson" class="btn btn-secondary">
                    <svg class="icon" viewBox="0 0 24 24" style="width:18px;height:18px">
                        <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                    </svg>
                    ดาวน์โหลด JSON
                </button>
                <a class="btn btn-success" href="/" target="_blank">
                    <svg class="icon" viewBox="0 0 24 24" style="width:18px;height:18px">
                        <path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/>
                    </svg>
                    ดูเว็บไซต์
                </a>
                <form method="post" action="/admin/logout" style="display:inline">
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        <svg class="icon" viewBox="0 0 24 24" style="width:18px;height:18px">
                            <path d="M16,17V14H9V10H16V7L21,12L16,17M14,2A2,2 0 0,1 16,4V6H14V4H5V20H14V18H16V20A2,2 0 0,1 14,22H5A2,2 0 0,1 3,20V4A2,2 0 0,1 5,2H14Z"/>
                        </svg>
                        ออกจากระบบ
                    </button>
                </form>
            </div>
        </div>

        @if(session('status'))
            <div class="alert alert-success">
                <strong>สำเร็จ!</strong> {{ session('status') }}
            </div>
        @endif

        <form id="adminForm" class="card" method="post" action="/admin/save" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11.03L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.22,8.95 2.27,9.22 2.46,9.37L4.57,11.03C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.22,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.68 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z"/>
                </svg>
                <h3>การตั้งค่าเว็บไซต์</h3>
            </div>
            
            <div class="form-group">
                <label>
                    <svg class="icon" viewBox="0 0 24 24" style="width:16px;height:16px;display:inline;margin-right:0.5rem">
                        <path d="M5,4V7H10.5V19H13.5V7H19V4H5Z"/>
                    </svg>
                    ชื่อไซต์
                </label>
                <input type="text" name="site_title" value="{{ $content['site_title'] ?? '' }}" placeholder="กรอกชื่อไซต์" />
            </div>

            <div class="form-group">
                <label>
                    <svg class="icon" viewBox="0 0 24 24" style="width:16px;height:16px;display:inline;margin-right:0.5rem">
                        <path d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z"/>
                    </svg>
                    รูป Banner หลัก
                </label>
                @if(!empty($content['banner']))
                    <img src="{{ $content['banner'] }}" class="preview-image" alt="banner" />
                @endif
                <input type="file" name="banner" accept="image/*" />
            </div>

            <div class="card-header" style="margin-top:2rem">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,5V6.5H5V5H19M5,10.5V9H10V10.5H5M5,12.5V11H8V12.5H5M5,14.5V13H11V14.5H5M5,16.5V15H9V16.5H5M19,19H5V18H19V19Z"/>
                </svg>
                <h3>การ์ดข่าวและกิจกรรม</h3>
            </div>
            
            <div class="card-grid" id="cardsList">
                @php $existingCards = $content['cards'] ?? [] @endphp
                @foreach($existingCards as $index => $c)
                    <div class="card-item" data-index="{{ $index+1 }}">
                        <button type="button" class="remove-btn">×</button>
                        <div class="form-group">
                            <label>รูปการ์ด #{{ $index+1 }}</label>
                            @if(!empty($c['image']))
                                <img src="{{ $c['image'] }}" class="preview-image" alt="card{{ $index+1 }}" />
                            @endif
                            <input type="file" name="card_image_{{ $index+1 }}" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>หัวข้อ</label>
                            <input type="text" name="card_caption_{{ $index+1 }}" placeholder="หัวข้อข่าวสาร" value="{{ $c['caption'] ?? '' }}" />
                        </div>
                        <div class="form-group">
                            <label>รายละเอียด</label>
                            <textarea name="card_description_{{ $index+1 }}" placeholder="รายละเอียดข่าวสาร">{{ $c['description'] ?? '' }}</textarea>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="margin-top:1rem;text-align:center">
                <button id="addCard" type="button" class="btn">
                    <svg class="icon" viewBox="0 0 24 24" style="width:18px;height:18px">
                        <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"/>
                    </svg>
                    เพิ่มการ์ดใหม่
                </button>
            </div>

            <div class="form-group" style="margin-top:2rem">
                <label>
                    <svg class="icon" viewBox="0 0 24 24" style="width:16px;height:16px;display:inline;margin-right:0.5rem">
                        <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                    </svg>
                    ข้อมูลหลักสูตรการเรียน
                </label>
                <textarea name="programs" placeholder="ใส่ข้อมูลหลักสูตรและรายละเอียดการเรียน">{{ $content['programs'] ?? '' }}</textarea>
            </div>

            <div class="form-group">
                <label>
                    <svg class="icon" viewBox="0 0 24 24" style="width:16px;height:16px;display:inline;margin-right:0.5rem">
                        <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                    </svg>
                    ข้อมูล Faculty (รูปแบบ JSON)
                </label>
                <textarea name="faculty_json" placeholder='[
  {
    "name": "ชื่อ-นามสกุล",
    "position": "ตำแหน่ง",
    "degree": "วุฒิการศึกษา",
    "image": "ลิงก์รูป",
    "bio": "ข้อมูลส่วนตัว"
  }
]'>{{ json_encode($content['faculty'] ?? [], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) }}</textarea>
            </div>

            <div style="margin-top:2rem;text-align:center">
                <button class="btn btn-success" type="submit">
                    <svg class="icon" viewBox="0 0 24 24" style="width:18px;height:18px">
                        <path d="M15,9H5V5H15M12.5,12.5H5V10.5H12.5M10,16H5V14H10M17,7H15V9H17M17,11H15V13H17M17,15H15V17H17M19,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.9 20.1,3 19,3Z"/>
                    </svg>
                    บันทึกการเปลี่ยนแปลง
                </button>
            </div>
        </form>
        
        <!-- Faculty Management Section -->
        <div class="card">
            <div class="card-header">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M16,4C18.11,4 19.99,5.89 19.99,8C19.99,10.11 18.11,12 16,12C13.89,12 12,10.11 12,8C12,5.89 10.11,4 8,4C5.89,4 4,5.89 4,8C4,10.11 5.89,12 8,12M16,13C18.67,13 24,14.34 24,17V20H8V17C8,14.34 13.33,13 16,13M8,12C10.11,12 12,10.11 12,8C12,5.89 10.11,4 8,4C5.89,4 4,5.89 4,8C4,10.11 5.89,12 8,12M8,13C5.33,13 0,14.34 0,17V20H6V17C6,15.22 6.44,14.44 9.31,13.5C8.87,13.19 8.42,13 8,13Z"/>
                </svg>
                <h3>จัดการอาจารย์</h3>
            </div>

            @if(isset($faculties) && $faculties->count()>0)
                <ul class="faculty-list">
                @foreach($faculties as $f)
                    <li class="faculty-item">
                        <div class="faculty-info">
                            <strong>{{ $f->name }}</strong>
                            @if($f->position)
                                <div class="faculty-position">{{ $f->position }}</div>
                            @endif
                        </div>
                        <form style="display:inline" method="post" action="/admin/faculty/{{ $f->id }}/delete">
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('แน่ใจว่าต้องการลบ {{ $f->name }}?')">
                                <svg class="icon" viewBox="0 0 24 24" style="width:16px;height:16px">
                                    <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"/>
                                </svg>
                                ลบ
                            </button>
                        </form>
                    </li>
                @endforeach
                </ul>
            @else
                <div style="text-align:center;color:#6b7280;padding:2rem">
                    <svg class="icon" viewBox="0 0 24 24" style="width:48px;height:48px;margin-bottom:1rem;opacity:0.5">
                        <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                    </svg>
                    <p>ยังไม่มีรายการอาจารย์</p>
                </div>
            @endif

            <div class="card-header" style="margin-top:2rem">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"/>
                </svg>
                <h3>เพิ่มอาจารย์ใหม่</h3>
            </div>
            
            <form method="post" action="/admin/faculty/create" enctype="multipart/form-data">
                @csrf
                <div class="card-grid">
                    <div>
                        <div class="form-group">
                            <label>ชื่อ-นามสกุล</label>
                            <input type="text" name="name" placeholder="เช่น ผศ.ดร. สมชาย ใจดี" required />
                        </div>
                        <div class="form-group">
                            <label>วุฒิการศึกษา</label>
                            <input type="text" name="degree" placeholder="Ph.D. Computer Science" />
                        </div>
                        <div class="form-group">
                            <label>ตำแหน่ง</label>
                            <input type="text" name="position" placeholder="อาจารย์ประจำ" />
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label>รูปอาจารย์</label>
                            <input type="file" name="image" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>คำอธิบายสั้นๆ</label>
                            <textarea name="bio" placeholder="ข้อมูลส่วนตัวแลละความเชี่ยวชาญของอาจารย์"></textarea>
                        </div>
                    </div>
                </div>
                
                <div style="text-align:center;margin-top:1.5rem">
                    <button class="btn btn-success" type="submit">
                        <svg class="icon" viewBox="0 0 24 24" style="width:18px;height:18px">
                            <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"/>
                        </svg>
                        เพิ่มอาจารย์
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // download JSON
        document.getElementById('downloadJson').addEventListener('click', function(e){
            e.preventDefault();
            fetch('/admin/content-json').then(r=>r.json()).then(data=>{
                const blob = new Blob([JSON.stringify(data, null, 2)], {type:'application/json'});
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url; a.download = 'site_content.json'; document.body.appendChild(a); a.click(); a.remove();
                URL.revokeObjectURL(url);
            });
        });

        // dynamic card add/remove
        (function(){
            const cardsList = document.getElementById('cardsList');
            const addBtn = document.getElementById('addCard');
            let count = cardsList.querySelectorAll('.card-item').length;

            function makeRow(i){
                const div = document.createElement('div');
                div.className = 'card-item'; div.dataset.index = i;
                div.innerHTML = `<button type="button" class="remove-btn">×</button>
                        <div class="form-group">
                            <label>รูปการ์ด #${i}</label>
                            <input type="file" name="card_image_${i}" accept="image/*" />
                        </div>
                        <div class="form-group">
                            <label>หัวข้อ</label>
                            <input type="text" name="card_caption_${i}" placeholder="หัวข้อข่าวสาร" />
                        </div>
                        <div class="form-group">
                            <label>รายละเอียด</label>
                            <textarea name="card_description_${i}" placeholder="รายละเอียดข่าวสาร"></textarea>
                        </div>`;
                return div;
            }

            addBtn.addEventListener('click', function(){
                if(count >= 6) { alert('ได้สูงสุด 6 การ์ด'); return; }
                count++; const row = makeRow(count); cardsList.appendChild(row);
            });

            cardsList.addEventListener('click', function(e){
                if(e.target.classList.contains('remove-btn')){
                    e.target.closest('.card-item').remove();
                    // reindex names
                    const rows = cardsList.querySelectorAll('.card-item');
                    rows.forEach((r, idx)=>{
                        const i = idx+1; r.dataset.index = i;
                        r.querySelector('label').textContent = 'รูปการ์ด #' + i;
                        const file = r.querySelector('input[type=file]'); file.name = 'card_image_' + i;
                        const text = r.querySelector('input[type=text]'); text.name = 'card_caption_' + i;
                        const textarea = r.querySelector('textarea'); textarea.name = 'card_description_' + i;
                    });
                    count = rows.length;
                }
            });
        })();
    </script>
    </div>
</body>
</html>
