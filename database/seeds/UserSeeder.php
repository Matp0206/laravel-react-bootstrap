<?php
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Generate Users.
     *
     * @return void
     */
    public function run()
    {
        // Create primary user account for testing.
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.dev',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'User Test',
            'email' => 'user@test.dev',
            'password' => bcrypt('password')
        ]);

        $this->command->info('Users table seeded.');
    }
}
