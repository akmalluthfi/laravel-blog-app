<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'Akmal Luthfi',
            'Nando Septian Prisandy',
            'Achmad Zuhril Facrizal',
            'Akmal Fikri',
            'Sandhika Galih',
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user,
                'username' => $this->generateUsername($user),
                'email' => $this->generateEmail($user),
                'password' => Hash::make($this->generateUsername($user)),
            ]);
        }
    }

    public function generateUsername($name)
    {
        return strtolower(str_replace(' ', '', $name));
    }

    public function generateEmail($name)
    {
        return $name . '@gmail.com';
    }
}
