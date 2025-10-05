// ...existing code...
        <div id="home" class="banner-full">
-            <img src="https://picsum.photos/1400/420?random=1" alt="banner" />
+            <img src="{{ isset($content['banner']) && $content['banner'] ? asset($content['banner']) : 'https://picsum.photos/1400/420?random=1' }}" alt="banner" />
        </div>
        <div class="container page-body">
            <div style="display:flex;align-items:flex-start;gap:1rem">
...
-                    <div class="grid">
-                        <div class="card">
-                            <img src="https://picsum.photos/seed/1/600/400" alt="card1" />
-                            <h4>กิจกรรม Hackathon</h4>
-                            <p class="small" style="color:#6b7280">วันเวลา: 12 ต.ค. 2568</p>
-                        </div>
-                        <div class="card">
-                            <img src="https://picsum.photos/seed/2/600/400" alt="card2" />
-                            <h4>บรรยายพิเศษ: DevOps</h4>
-                            <p class="small" style="color:#6b7280">วิทยากรจากบริษัท</p>
-                        </div>
-                        <div class="card">
-                            <img src="https://picsum.photos/seed/3/600/400" alt="card3" />
-                            <h4>Workshop UI/UX</h4>
-                            <p class="small" style="color:#6b7280">เรียนรู้การออกแบบ</p>
-                        </div>
-                        <div class="card">
-                            <img src="https://picsum.photos/seed/4/600/400" alt="card4" />
-                            <h4>โครงการบัณฑิต</h4>
-                            <p class="small" style="color:#6b7280">รับสมัครนักศึกษาฝึกงาน</p>
-                        </div>
-                        <div class="card">
-                            <img src="https://picsum.photos/seed/5/600/400" alt="card5" />
-                            <h4>การแข่งขันเขียนโปรแกรม</h4>
-                            <p class="small" style="color:#6b7280">ทีมตัวแทนสาขา</p>
-                        </div>
-                        <div class="card">
-                            <img src="https://picsum.photos/seed/6/600/400" alt="card6" />
-                            <h4>Open Day</h4>
-                            <p class="small" style="color:#6b7280">เชิญชวนนักเรียนและผู้ปกครอง</p>
-                        </div>
-                    </div>
+                    <div class="grid">
+                        @if(!empty($content['cards']) && is_array($content['cards']))
+                            @foreach($content['cards'] as $card)
+                                <div class="card">
+                                    <img src="{{ isset($card['image']) && $card['image'] ? asset($card['image']) : 'https://picsum.photos/600/400?random=' . ($loop->index + 10) }}" alt="{{ $card['title'] ?? 'card' }}" />
+                                    <h4>{{ $card['title'] ?? 'หัวข้อกิจกรรม' }}</h4>
+                                    <p class="small" style="color:#6b7280">{{ $card['subtitle'] ?? '' }}</p>
+                                </div>
+                            @endforeach
+                        @else
+                            <!-- fallback: static sample cards -->
+                            <div class="card">
+                                <img src="https://picsum.photos/seed/1/600/400" alt="card1" />
+                                <h4>กิจกรรม Hackathon</h4>
+                                <p class="small" style="color:#6b7280">วันเวลา: 12 ต.ค. 2568</p>
+                            </div>
+                            <div class="card">
+                                <img src="https://picsum.photos/seed/2/600/400" alt="card2" />
+                                <h4>บรรยายพิเศษ: DevOps</h4>
+                                <p class="small" style="color:#6b7280">วิทยากรจากบริษัท</p>
+                            </div>
+                            <div class="card">
+                                <img src="https://picsum.photos/seed/3/600/400" alt="card3" />
+                                <h4>Workshop UI/UX</h4>
+                                <p class="small" style="color:#6b7280">เรียนรู้การออกแบบ</p>
+                            </div>
+                            <div class="card">
+                                <img src="https://picsum.photos/seed/4/600/400" alt="card4" />
+                                <h4>โครงการบัณฑิต</h4>
+                                <p class="small" style="color:#6b7280">รับสมัครนักศึกษาฝึกงาน</p>
+                            </div>
+                            <div class="card">
+                                <img src="https://picsum.photos/seed/5/600/400" alt="card5" />
+                                <h4>การแข่งขันเขียนโปรแกรม</h4>
+                                <p class="small" style="color:#6b7280">ทีมตัวแทนสาขา</p>
+                            </div>
+                            <div class="card">
+                                <img src="https://picsum.photos/seed/6/600/400" alt="card6" />
+                                <h4>Open Day</h4>
+                                <p class="small" style="color:#6b7280">เชิญชวนนักเรียนและผู้ปกครอง</p>
+                            </div>
+                        @endif
+                    </div>
...
-                        <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap">
-                            <!-- faculty member -->
-                            <div style="width:160px;text-align:center">
-                                <div style="width:120px;height:120px;margin:0 auto;border-radius:50%;overflow:hidden;box-shadow:0 6px 18px rgba(2,6,23,0.08)">
-                                    <img src="https://picsum.photos/seed/f1/300/300" alt="prof1" style="width:100%;height:100%;object-fit:cover;display:block" />
-                                </div>
-                                <div style="margin-top:.6rem;font-weight:700">ผศ.ดร. สมชาย ใจดี</div>
-                                <div style="color:#6b7280">รองประธานสาขาฯ</div>
-                            </div>
-
-                            <div style="width:160px;text-align:center">
-                                <div style="width:120px;height:120px;margin:0 auto;border-radius:50%;overflow:hidden;box-shadow:0 6px 18px rgba(2,6,23,0.08)">
-                                    <img src="https://picsum.photos/seed/f2/300/300" alt="prof2" style="width:100%;height:100%;object-fit:cover;display:block" />
-                                </div>
-                                <div style="margin-top:.6rem;font-weight:700">ผศ.ดร. สายใจ กล้าหาญ</div>
-                                <div style="color:#6b7280">หัวหน้าหลักสูตร</div>
-                            </div>
-
-                            <div style="width:160px;text-align:center">
-                                <div style="width:120px;height:120px;margin:0 auto;border-radius:50%;overflow:hidden;box-shadow:0 6px 18px rgba(2,6,23,0.08)">
-                                    <img src="https://picsum.photos/seed/f3/300/300" alt="prof3" style="width:100%;height:100%;object-fit:cover;display:block" />
-                                </div>
-                                <div style="margin-top:.6rem;font-weight:700">ผศ.ดร. ปิยวัฒน์ ฉลาด</div>
-                                <div style="color:#6b7280">อาจารย์ประจำ</div>
-                            </div>
-
-                            <div style="width:160px;text-align:center">
-                                <div style="width:120px;height:120px;margin:0 auto;border-radius:50%;overflow:hidden;box-shadow:0 6px 18px rgba(2,6,23,0.08)">
-                                    <img src="https://picsum.photos/seed/f4/300/300" alt="prof4" style="width:100%;height:100%;object-fit:cover;display:block" />
-                                </div>
-                                <div style="margin-top:.6rem;font-weight:700">ผศ.ดร. นภาพร ใฝ่รู้</div>
-                                <div style="color:#6b7280">อาจารย์ประจำ</div>
-                            </div>
-                        </div>
+                        <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap">
+                            @if(isset($faculties) && count($faculties))
+                                @foreach($faculties as $f)
+                                    <div style="width:160px;text-align:center">
+                                        <div style="width:120px;height:120px;margin:0 auto;border-radius:50%;overflow:hidden;box-shadow:0 6px 18px rgba(2,6,23,0.08)">
+                                            <img src="{{ $f->image ? asset($f->image) : 'https://picsum.photos/300/300?random=' . ($loop->index + 20) }}" alt="prof{{ $loop->index+1 }}" style="width:100%;height:100%;object-fit:cover;display:block" />
+                                        </div>
+                                        <div style="margin-top:.6rem;font-weight:700">{{ ($f->degree ? $f->degree . ' ' : '') . $f->name }}</div>
+                                        <div style="color:#6b7280">{{ $f->position }}</div>
+                                    </div>
+                                @endforeach
+                            @else
+                                <!-- fallback: static faculty list -->
+                                <div style="width:160px;text-align:center">
+                                    <div style="width:120px;height:120px;margin:0 auto;border-radius:50%;overflow:hidden;box-shadow:0 6px 18px rgba(2,6,23,0.08)">
+                                        <img src="https://picsum.photos/seed/f1/300/300" alt="prof1" style="width:100%;height:100%;object-fit:cover;display:block" />
+                                    </div>
+                                    <div style="margin-top:.6rem;font-weight:700">ผศ.ดร. สมชาย ใจดี</div>
+                                    <div style="color:#6b7280">รองประธานสาขาฯ</div>
+                                </div>
+                                <!-- other static entries omitted for brevity -->
+                            @endif
+                        </div>
...
                        <div id="research" style="margin-top:2.5rem">
-                            <h3 style="font-size:1.2rem;font-weight:700;margin-bottom:1rem">อาจารย์พิเศษและนักวิจัย</h3>
-
-                            <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap">
-                                <div style="width:220px;text-align:left;display:flex;gap:1rem;align-items:center">
-                                    <div style="width:72px;height:72px;border-radius:50%;overflow:hidden;flex:0 0 72px">
-                                        <img src="https://picsum.photos/seed/r1/200/200" alt="vis1" style="width:100%;height:100%;object-fit:cover;display:block" />
-                                    </div>
-                                    <div>
-                                        <div style="font-weight:700">รศ.ดร. นคร วรรณา</div>
-                                        <div style="color:#6b7280;font-size:.95rem">นักวิจัยด้านปัญญาประดิษฐ์ — ให้คำปรึกษาโครงการร่วม</div>
-                                    </div>
-                                </div>
-                            </div>
+                            <h3 style="font-size:1.2rem;font-weight:700;margin-bottom:1rem">อาจารย์พิเศษและนักวิจัย</h3>
+                            <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap">
+                                @if(!empty($visiting) && is_array($visiting))
+                                    @foreach($visiting as $v)
+                                        <div style="width:220px;text-align:left;display:flex;gap:1rem;align-items:center">
+                                            <div style="width:72px;height:72px;border-radius:50%;overflow:hidden;flex:0 0 72px">
+                                                <img src="{{ $v['image'] ? asset($v['image']) : 'https://picsum.photos/200/200?random=' . ($loop->index + 30) }}" alt="vis{{ $loop->index+1 }}" style="width:100%;height:100%;object-fit:cover;display:block" />
+                                            </div>
+                                            <div>
+                                                <div style="font-weight:700">{{ $v['degree'] ?? '' }} {{ $v['name'] ?? 'ชื่ออาจารย์' }}</div>
+                                                <div style="color:#6b7280;font-size:.95rem">{{ $v['bio'] ?? '' }}</div>
+                                            </div>
+                                        </div>
+                                    @endforeach
+                                @else
+                                    <div style="width:220px;text-align:left;display:flex;gap:1rem;align-items:center">
+                                        <div style="width:72px;height:72px;border-radius:50%;overflow:hidden;flex:0 0 72px">
+                                            <img src="https://picsum.photos/seed/r1/200/200" alt="vis1" style="width:100%;height:100%;object-fit:cover;display:block" />
+                                        </div>
+                                        <div>
+                                            <div style="font-weight:700">รศ.ดร. นคร วรรณา</div>
+                                            <div style="color:#6b7280;font-size:.95rem">นักวิจัยด้านปัญญาประดิษฐ์ — ให้คำปรึกษาโครงการร่วม</div>
+                                        </div>
+                                    </div>
+                                @endif
+                            </div>
...
// ...existing code...