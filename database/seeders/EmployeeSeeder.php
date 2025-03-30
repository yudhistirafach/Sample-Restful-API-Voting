<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                "name" => "John Doe",
                "email" => "john.doe@example.com",
                "password" => "password1",
                "division" => "Marketing",
                "photo" => "John Doe.jpg"
            ],
            [
                "name" => "Jane Smith",
                "email" => "jane.smith@example.com",
                "password" => "password2",
                "division" => "Information Technology",
                "photo" => "Jane Smith.jpg"
            ],
            [
                "name" => "Michael Johnson",
                "email" => "michael.johnson@example.com",
                "password" => "password3",
                "division" => "Human Resources",
                "photo" => "Michael Johnson.jpg"
            ],
            [
                "name" => "Emily Davis",
                "email" => "emily.davis@example.com",
                "password" => "password4",
                "division" => "Finance",
                "photo" => "Emily Davis.jpg"
            ],
            [
                "name" => "William Wilson",
                "email" => "william.wilson@example.com",
                "password" => "password5",
                "division" => "Operations",
                "photo" => "William Wilson.jpg"
            ],
            [
                "name" => "Olivia Martinez",
                "email" => "olivia.martinez@example.com",
                "password" => "password6",
                "division" => "Sales",
                "photo" => "Olivia Martinez.jpg"
            ],
            [
                "name" => "James Anderson",
                "email" => "james.anderson@example.com",
                "password" => "password7",
                "division" => "Customer Support",
                "photo" => "James Anderson.jpg"
            ],
            [
                "name" => "Sophia Taylor",
                "email" => "sophia.taylor@example.com",
                "password" => "password8",
                "division" => "Legal",
                "photo" => "Sophia Taylor.jpg"
            ],
            [
                "name" => "Benjamin Thomas",
                "email" => "benjamin.thomas@example.com",
                "password" => "password9",
                "division" => "Engineering",
                "photo" => "Benjamin Thomas.jpg"
            ],
            [
                "name" => "Emma Hernandez",
                "email" => "emma.hernandez@example.com",
                "password" => "password10",
                "division" => "Product Management",
                "photo" => "Emma Hernandez.jpg"
            ],
        ];

        foreach($employees as $employee) {
            Employee::create($employee);
        }
    }
}
