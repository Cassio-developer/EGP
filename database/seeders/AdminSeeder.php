<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

            DB::table('admins')->insert([
                'email'         => 'AdministradorTi@admin.com',
                'admin_level' =>$admin_level = 1,
                'approved' => $approved = 1,
                'name' => "Administrador TI",
                'cpf' => "31410690008",
                'password'      => Hash::make('adminTI'),
                'created_at'    => now(),
                'updated_at'    => now()
            ]);

        }
    }
