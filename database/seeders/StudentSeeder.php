<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            
            [
                "sid" => 641442201,
                "fname" => "John",
                "lname" => "Doe",
                "std_prg_id" => 1
              ],
              [
                "sid" => 641442202,
                "fname" => "Jane",
                "lname" => "Smith",
                "std_prg_id" => 2
              ],
              [
                "sid" => 641442203,
                "fname" => "Michael",
                "lname" => "Johnson",
                "std_prg_id" => 3
              ],
              [
                "sid" => 641442204,
                "fname" => "Emily",
                "lname" => "Brown",
                "std_prg_id" => 4
              ],
              [
                "sid" => 641442205,
                "fname" => "David",
                "lname" => "Williams",
                "std_prg_id" => 4
              ],
              [
                "sid" => 641442206,
                "fname" => "Sarah",
                "lname" => "Miller",
                "std_prg_id" => 5
              ],
              [
                "sid" => 641442207,
                "fname" => "Matthew",
                "lname" => "Wilson",
                "std_prg_id" => 6
              ],
              [
                "sid" => 641442208,
                "fname" => "Olivia",
                "lname" => "Moore",
                "std_prg_id" => 7
              ],
              [
                "sid" => 641442209,
                "fname" => "Daniel",
                "lname" => "Taylor",
                "std_prg_id" => 9
              ],
              [
                "sid" => 641442210,
                "fname" => "Sophia",
                "lname" => "Anderson",
                "std_prg_id" => 10
              ],
              [
                "sid" => 641442211,
                "fname" => "Sophia",
                "lname" => "Anderson",
                "std_prg_id" => 1
            ],
            [
                "sid" => 123456789,
                "fname" => "John",
                "lname" => "Doe",
                "std_prg_id" => 2
            ],
            [
                "sid" => 987654321,
                "fname" => "Emily",
                "lname" => "Smith",
                "std_prg_id" => 3
            ],
            [
                "sid" => 555111222,
                "fname" => "Michael",
                "lname" => "Johnson",
                "std_prg_id" => 4
            ],
            [
                "sid" => 888777666,
                "fname" => "Emma",
                "lname" => "Brown",
                "std_prg_id" => 5
            ],
            [
                "sid" => 444333222,
                "fname" => "Daniel",
                "lname" => "Martinez",
                "std_prg_id" => 6
            ],
            [
                "sid" => 999888777,
                "fname" => "Olivia",
                "lname" => "Garcia",
                "std_prg_id" => 7
            ],
            [
                "sid" => 222333444,
                "fname" => "William",
                "lname" => "Lopez",
                "std_prg_id" => 8
            ],
            [
                "sid" => 666777888,
                "fname" => "Ava",
                "lname" => "Hernandez",
                "std_prg_id" => 9
            ],
            [
                "sid" => 333444555,
                "fname" => "James",
                "lname" => "Gonzalez",
                "std_prg_id" => 1
            ],
            [
                "sid" => 777888999,
                "fname" => "Isabella",
                "lname" => "Perez",
                "std_prg_id" => 1
            ],
            [
                "sid" => 111222333,
                "fname" => "Alexander",
                "lname" => "Sanchez",
                "std_prg_id" => 2
            ],
            [
                "sid" => 888999000,
                "fname" => "Mia",
                "lname" => "Torres",
                "std_prg_id" => 3
            ],
            [
                "sid" => 555444333,
                "fname" => "Benjamin",
                "lname" => "Ramirez",
                "std_prg_id" => 4
            ],
            [
                "sid" => 222111000,
                "fname" => "Charlotte",
                "lname" => "Rivera",
                "std_prg_id" => 5
            ],
            [
                "sid" => 999000111,
                "fname" => "Ethan",
                "lname" => "Reyes",
                "std_prg_id" => 6
            ],
            [
                "sid" => 444555666,
                "fname" => "Amelia",
                "lname" => "Rojas",
                "std_prg_id" => 7
            ],
            [
                "sid" => 777666555,
                "fname" => "Jacob",
                "lname" => "Cruz",
                "std_prg_id" => 8
            ],
            [
                "sid" => 333222111,
                "fname" => "Evelyn",
                "lname" => "Gutierrez",
                "std_prg_id" => 9
            ],
            [
                "sid" => 111000999,
                "fname" => "Michael",
                "lname" => "Ortiz",
                "std_prg_id" => 10
            ],
            [
                "sid" => 888777666,
                "fname" => "Liam",
                "lname" => "Morales",
                "std_prg_id" => 1
            ],
            [
                "sid" => 555444333,
                "fname" => "Sophia",
                "lname" => "Vasquez",
                "std_prg_id" => 2
            ],
            [
                "sid" => 222111000,
                "fname" => "Avery",
                "lname" => "Castillo",
                "std_prg_id" => 3
            ],
            [
                "sid" => 999000111,
                "fname" => "Lucas",
                "lname" => "Jimenez",
                "std_prg_id" => 4
            ],
            [
                "sid" => 444555666,
                "fname" => "Harper",
                "lname" => "Wheeler",
                "std_prg_id" => 5
            ],
            [
                "sid" => 777666555,
                "fname" => "Logan",
                "lname" => "Gomez",
                "std_prg_id" => 6
            ],
            [
                "sid" => 333222111,
                "fname" => "Madison",
                "lname" => "Crawford",
                "std_prg_id" => 3
            ],
            [
                "sid" => 111000999,
                "fname" => "Jackson",
                "lname" => "Sullivan",
                "std_prg_id" => 8
            ],
            [
                "sid" => 888777666,
                "fname" => "Ella",
                "lname" => "Neal",
                "std_prg_id" => 3
            ],
            [
                "sid" => 555444333,
                "fname" => "Mateo",
                "lname" => "Garrett",
                "std_prg_id" => 4
            ],
            [
                "sid" => 222111000,
                "fname" => "Victoria",
                "lname" => "Walsh",
                "std_prg_id" => 1
            ],
            [
                "sid" => 999000111,
                "fname" => "David",
                "lname" => "Hawkins",
                "std_prg_id" => 4
            ],
            [
                "sid" => 444555666,
                "fname" => "Penelope",
                "lname" => "Banks",
                "std_prg_id" => 3
            ],
            [
                "sid" => 777666555,
                "fname" => "Jack",
                "lname" => "Harrison",
                "std_prg_id" => 4
            ],
            [
                "sid" => 333222111,
                "fname" => "Gabriella",
                "lname" => "Hart",
                "std_prg_id" => 5
            ],
            [
                "sid" => 111000999,
                "fname" => "Ryan",
                "lname" => "Newton",
                "std_prg_id" => 6
            ],
            [
                "sid" => 888777666,
                "fname" => "Nathan",
                "lname" => "Bryant",
                "std_prg_id" => 7
            ],
            [
                "sid" => 555444333,
                "fname" => "Samantha",
                "lname" => "West",
                "std_prg_id" => 8
            ],
            [
                "sid" => 222111000,
                "fname" => "Sophie",
                "lname" => "Barker",
                "std_prg_id" => 9
            ],
            [
                "sid" => 999000111,
                "fname" => "Luke",
                "lname" => "Page",
                "std_prg_id" => 5
            ],
            [
                "sid" => 444555666,
                "fname" => "Nicholas",
                "lname" => "Flynn",
                "std_prg_id" => 1
            ],
            [
                "sid" => 777666555,
                "fname" => "Aria",
                "lname" => "Owens",
                "std_prg_id" => 2
            ],
            [
                "sid" => 333222111,
                "fname" => "Christian",
                "lname" => "Mason",
                "std_prg_id" => 3
            ],
            [
                "sid" => 111000999,
                "fname" => "Grace",
                "lname" => "Russell",
                "std_prg_id" => 4
            ],
            [
                "sid" => 888777666,
                "fname" => "Julian",
                "lname" => "Dixon",
                "std_prg_id" => 5
            ],
            ["sid" => 555444333,"fname" => "Lily","lname" => "Gordon","std_prg_id" => 6]


        ]); 
    }
}
