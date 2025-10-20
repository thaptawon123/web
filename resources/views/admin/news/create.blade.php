<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สร้างข่าว - แอดมิน</title>
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        .form-group{margin-bottom:1rem}
        .form-label{display:block;font-weight:600;margin-bottom:.25rem}
        .form-input, .form-textarea, .form-select{width:100%;padding:.6rem;border:1px solid #e5e7eb;border-radius:8px}
        .form-textarea{min-height:160px}
        .actions{display:flex;gap:.75rem}
    </style>
</head>
<body>
<div class="container page-body" style="max-width: 900px; margin-top:2rem">
    <h1 style="margin:0 0 1rem 0">สร้างข่าว</h1>
    @if ($errors->any())
        <div class="error-message">{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-label">หัวข้อ</label>
            <input class="form-input" type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label class="form-label">Slug (ไม่บังคับ)</label>
            <input class="form-input" type="text" name="slug" value="{{ old('slug') }}" placeholder="ปล่อยว่างให้ระบบสร้างอัตโนมัติ">
        </div>
        <div class="form-group">
            <label class="form-label">คำอธิบายย่อ</label>
            <input class="form-input" type="text" name="excerpt" value="{{ old('excerpt') }}">
        </div>
        <div class="form-group">
            <label class="form-label">เนื้อหา</label>
            <textarea class="form-textarea" name="body" required>{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label">รูปปก</label>
            <input type="file" name="cover_image" accept="image/*">
        </div>
        <div class="form-group">
            <label class="form-label">สถานะ</label>
            <select class="form-select" name="status" required>
                <option value="draft" {{ old('status')==='draft'?'selected':'' }}>ฉบับร่าง</option>
                <option value="published" {{ old('status')==='published'?'selected':'' }}>เผยแพร่</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">วันที่เผยแพร่ (ไม่บังคับ)</label>
            <input class="form-input" type="datetime-local" name="published_at" value="{{ old('published_at') }}">
        </div>
        <div class="actions">
            <button type="submit" class="btn">บันทึก</button>
            <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">ยกเลิก</a>
        </div>
    </form>
</div>
</body>
</html>
