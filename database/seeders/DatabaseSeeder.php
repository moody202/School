<?php

namespace Database\Seeders;
<<<<<<< HEAD
use Illuminate\Database\Seeder;

use Database\Seeders\UserSeeder;
use Database\Seeders\GradeSeeder;
use Database\Seeders\BloodTableSeeder;
use Database\Seeders\GenderTableSeeder;
use Database\Seeders\ParentsTableSeeder;
use Database\Seeders\religionTableSeeder;
use Database\Seeders\SectionsTableSeeder;
use Database\Seeders\SettingsTableSeeder;
use Database\Seeders\StudentsTableSeeder;
use Database\Seeders\ClassroomTableSeeder;
use Database\Seeders\NationalitiesTableSeeder;
use Database\Seeders\SpecializationsTableSeeder;

=======


use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(UserSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(BloodTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(religionTableSeeder::class);
        $this->call(SpecializationsTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
=======
        // \App\Models\User::factory(5)->create();

      $this->call([
        AdminSeeder::class
      ]);


      $user = User::factory()->create([
        'name' => 'mahmoud m',
        'email' => 'mahmoud22@gmail.com',
        'password' => bcrypt('moody8101988')
    ]);

    Listing::factory(6)->create([
        'user_id' => $user->id
    ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend ,api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //   ]);
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
    }
}
