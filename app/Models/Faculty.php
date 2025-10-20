<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = ['name','degree','position','image','bio'];

    protected static function booted(): void
    {
        static::deleting(function (Faculty $faculty) {
            $path = $faculty->image;
            if ($path) {
                // Expected stored as '/storage/...' -> convert to 'public/...'
                if (str_starts_with($path, '/storage/')) {
                    $relative = substr($path, strlen('/storage/'));
                    Storage::disk('public')->delete($relative);
                } else {
                    // Fallback: try delete raw path on public disk
                    Storage::disk('public')->delete($path);
                }
            }
        });
    }
}
