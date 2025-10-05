<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faculty;

class DeleteAllFacultySeeder extends Seeder
{
    public function run(): void
    {
        // Delete all faculty records
        Faculty::truncate();
        
        echo "All faculty records have been deleted.\n";
    }
}