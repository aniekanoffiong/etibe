<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();
		for ($i = 0; $i < 10; $i++) {
			$user = User::create(
			[
				'id'            => Uuid::uuid5(Uuid::NAMESPACE_DNS, str_random(20))->toString(),
				'name'     		=> $faker->name,
				'email'         => $faker->email,
				'password'      => bcrypt('gentle1'.$i),
				'auth_code'     => 'AUTH_' . str_random(5),
			]);
        }
    }
}
