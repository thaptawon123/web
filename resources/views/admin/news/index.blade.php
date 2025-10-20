<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการข่าว - แอดมิน</title>
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { padding: 0.75rem; border-bottom: 1px solid #e5e7eb; text-align:left; }
        .actions { display:flex; gap:0.5rem; }
        .topbar-actions { display:flex; justify-content: space-between; align-items:center; margin-bottom:1rem; }
        .status-badge { padding: 0.2rem 0.5rem; border-radius: 999px; font-size: .8rem; }
        .status-draft { background:#fee2e2; color:#991b1b; }
        .status-published { background:#dcfce7; color:#14532d; }
    </style>
</head>
<body>
    <div class="container page-body" style="margin-top:2rem">
        <div class="topbar-actions">
            <h1 style="margin:0">จัดการข่าว</h1>
            <a href="{{ route('admin.news.create') }}" class="btn">+ สร้างข่าว</a>
        </div>
        @if(session('status'))
            <div class="success-message">{{ session('status') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>หัวข้อ</th>
                    <th>สถานะ</th>
                    <th>เผยแพร่เมื่อ</th>
                    <th style="width:200px">การทำงาน</th>
                </tr>
            </thead>
            <tbody>
            @forelse($items as $n)
                <tr>
                    <td>{{ $n->title }}</td>
                    <td>
                        @if($n->status === 'published')
                            <span class="status-badge status-published">เผยแพร่</span>
                        @else
                            <span class="status-badge status-draft">ฉบับร่าง</span>
                        @endif
                    </td>
                    <td>{{ $n->published_at ? $n->published_at->format('d/m/Y H:i') : '-' }}</td>
                    <td>
                        <div class="actions">
                            <a class="btn btn-small" href="{{ route('admin.news.edit', $n) }}">แก้ไข</a>
                            <form method="POST" action="{{ route('admin.news.destroy', $n) }}" onsubmit="return confirm('ยืนยันการลบ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-small" style="background:#ef4444">ลบ</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">ยังไม่มีข่าว</td></tr>
            @endforelse
            </tbody>
        </table>
        <div style="margin-top:1rem">{{ $items->links() }}</div>
    </div>
</body>
</html>
