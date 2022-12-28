<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $user = User::create([
      'name' => 'Super Admin',
      'email' => 'superadmin@example.com',
      'email_verified_at' => now(),
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'card_type' => ""
    ]);
    $user->assignRole('superadmin', 'admin', 'user');
    print($user);
    print($user->hasRole('superadmin'));
  }
}
