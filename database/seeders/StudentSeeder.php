<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    protected $model = Student::class;

    public function run()
    {
        // Student::factory()->count(50)->create();
        
        DB::table('students')->insert(
        	['id'     => 1,
            'name'     => 'Haaroon al-Khan',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
        );

        DB::table('students')->insert(
            ['id'     => 2,
            'name'     => 'Mushtaaq al-Salameh',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
        );
        DB::table('students')->insert(
            ['id'     => 3,
            'name'     => 'Maahir al-Huq',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
        );
        DB::table('students')->insert(
            ['id'     => 4,
            'name'     => 'Kabeer al-Gad',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
        );
        DB::table('students')->insert(
            ['id'     => 5,
            'name'     => 'Marzooq el-Azad',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
        );
        DB::table('students')->insert(
            ['id'     => 6,
            'name'     => 'Farhaan al-Aydin',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
        );
        DB::table('students')->insert(
            ['id'     => 7,
            'name'     => 'Raaid al-Safi',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
        );
        DB::table('students')->insert(
            ['id'     => 8,
            'name'     => 'Haashid al-Nasr',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
);
        DB::table('students')->insert(
            ['id'     => 9,
            'name'     => 'Abdullah al-Rabbani',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 10,
            'name'     => 'Shameem al-Basha',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
);
        DB::table('students')->insert(
            ['id'     => 11,
            'name'     => 'Maleeha el-Jamal',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
            );
        DB::table('students')->insert(
            ['id'     => 12,
            'name'     => 'Shakeela al-Firman',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 13,
            'name'     => 'Randa el-Rahimi',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
);
        DB::table('students')->insert(
            ['id'     => 14,
            'name'     => 'Naadiya al-Rehmann',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
);
        DB::table('students')->insert(
            ['id'     => 15,
            'name'     => 'Aasima el-Hussein',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 16,
            'name'     => 'Lutfiyya el-Noorani',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
);
        DB::table('students')->insert(
            ['id'     => 17,
            'name'     => 'Abdul Khaliq al-Moussa',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
);
        DB::table('students')->insert(
            ['id'     => 18,
            'name'     => 'Riyaal el-Nawaz',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 19,
            'name'     => 'Misfar el-Salik',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
);
        DB::table('students')->insert(
            ['id'     => 20,
            'name'     => 'Sultan al-Emami',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
);
        DB::table('students')->insert(
            ['id'     => 21,
            'name'     => 'Hamdaan al-Ghazi',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 22,
            'name'     => 'Saadiq el-Nazar',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software engineering'],
);
        DB::table('students')->insert(
            ['id'     => 23,
            'name'     => 'Junaid el-Wakim',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Network engineering'],
);
        DB::table('students')->insert(
            ['id'     => 24,
            'name'     => 'Abbaad el-Farag',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 25,
            'name'     => 'Fahd el-Ghazi',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 26,
            'name'     => 'Awad al-Jalali',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
);
        DB::table('students')->insert(
            ['id'     => 27,
            'name'     => 'Ismad al-Sadek',
            'student_id'     => random_int(1, 10000),
            'course_name'     => 'Software design'],
        );
    }
}
