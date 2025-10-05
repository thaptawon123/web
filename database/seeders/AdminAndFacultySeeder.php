<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Faculty;

class AdminAndFacultySeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(['email' => 'admin@example.com'], [
            'name' => 'Administrator',
            'password' => Hash::make('123456789'),
        ]);

        // Clear existing faculty records
        Faculty::truncate();
        
        // Create faculty members with the new information
        Faculty::create([
            'name' => 'อาจารย์ ดร. วรเชษฐ์ อุทธา',
            'degree' => 'Dr. Worachet Uttha',
            'position' => 'ประธานสาขาวิชาวิศวกรรมซอฟต์แวร์',
            'image' => '', // Add image URL if available
            'bio' => ''
        ]);
        
        Faculty::create([
            'name' => 'อาจารย์ ดร.อุษณีย์ ภักดีตระกูลวงศ์',
            'degree' => 'Dr. Udsanee Pakdeetrakulwong',
            'position' => 'ประธานสาขาวิชาวิศวกรรมซอฟต์แวร์',
            'image' => '', // Add image URL if available
            'bio' => ''
        ]);
        
        Faculty::create([
            'name' => 'อาจารย์ สมเกียรติ ช่อเหมือน',
            'degree' => 'Somkiat Chormuan',
            'position' => 'รองประธานฯ ฝ่ายนโยบายและแผน',
            'image' => '', // Add image URL if available
            'bio' => ''
        ]);
        
        Faculty::create([
            'name' => 'อาจารย์ นฤพล สุวรรณวิจิตร',
            'degree' => 'Naruapon Suwanwijit',
            'position' => 'รองประธานฯ ฝ่ายประกันคุณภาพฯ',
            'image' => '', // Add image URL if available
            'bio' => ''
        ]);
        
        Faculty::create([
            'name' => 'อาจารย์ สุธารัตน์ ชาวนาฟาง',
            'degree' => 'Sutarat Chaonafang',
            'position' => 'อาจารย์ลาศึกษาต่อปริญญาเอก',
            'image' => '', // Add image URL if available
            'bio' => 'hhhh'
        ]);
    }
}