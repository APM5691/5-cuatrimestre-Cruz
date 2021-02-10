<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$now = Carbon::now('America/Mexico_City')->format('Y-m-d H:i:s');
User::insert([
'name' => 'Usuario inicial'
, 'email' => 'inicial@correo.com'
, 'password' => bcrypt('12345678')
, 'created_at' => $now
, 'updated_at' => $now
]);
}
}
