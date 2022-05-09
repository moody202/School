<?php
namespace Database\Seeders;
use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();
        $specializations = [
            ['en'=> 'Arabic', 'ar'=> 'عربي'],
            ['en'=> 'Sciences', 'ar'=> 'علوم'],
            ['en'=> 'Computer', 'ar'=> 'حاسب الي'],
            ['en'=> 'English', 'ar'=> 'انجليزي'],
            ['en'=> 'Social Studies', 'ar'=> 'دراسات اجتماعية'],
            ['en'=> 'Maths', 'ar'=> 'رياضيات'],
        ];
        foreach ($specializations as $S) {
            Specialization::create(['Name' => $S]);
        }
    }
}
