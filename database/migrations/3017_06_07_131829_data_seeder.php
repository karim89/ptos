<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use App\Permission;
use App\Role;
use App\User;
use App\Models\PermissionRole;
use App\Models\RoleUser;
use App\Models\Scheme;

class DataSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // permissions
        DB::table('permissions')->delete();
        $permissions = [
            [
                'id' => 1, 
                'name' => 'user-manager',
                'display_name' => 'User Manager',
                'description' => 'Manage permission, Role and User',
            ],
            [
                'id' => 2,
                'name' => 'lookup-manager',
                'display_name' => 'Lookup Manager',
                'description' => '',
            ],
        ];
        Permission::insert($permissions);
        
        // roles
        DB::table('roles')->delete();
        $roles = [
            [
                'id' => 1, 
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'All Access',
            ],
        ];
        Role::insert($roles);
        
        // users
        DB::table('users')->delete();
        $users = [
            [
                'id' => 1, 
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'sohib.a.karim@gmail.com',
                'password' => Hash::make('123123'),
            ],
        ];
        User::insert($users);

        // permission_role
        DB::table('permission_role')->delete();
        $permission_role = [
            [
                'permission_id' => 1,
                'role_id' => 1, 
            ],
            [
                'permission_id' => 2,
                'role_id' => 1, 
            ],
        ];
        PermissionRole::insert($permission_role);

        // permission_role
        DB::table('role_user')->delete();
        $role_user = [
            [
                'role_id' => 1,
                'user_id' => 1,
            ], 
        ];
        RoleUser::insert($role_user);

        // scheme
        DB::table('scheme')->delete();
        $scheme = [
            [
                'id' => 1,
                'name' => 'Proficiency Testing',
                'description' => '<p>Why choose KIMIA PTOS proficiency testing schemes?</p>

                                    <ul>
                                        <li>First PT online system in Malaysia</li>
                                        <li>Convenient to &nbsp;monitor the status of registration, payment and on-going PT scheme.</li>
                                        <li>Easily&nbsp;track&nbsp;your shipments&nbsp;online.&nbsp;</li>
                                        <li>Easy &nbsp;to submit results &nbsp;through the secure website</li>
                                        <li>Be able to download the important documents related to PT scheme and PT report 24/7.</li>
                                    </ul>', 
            ],
            [
                'id' => 2,
                'name' => 'Proficiency Material',
                'description' => '<p>Centre for Metrology in Chemistry supports accurate measurements by certifying and providing Reference Materials (RM KIMIA) in accordance with ISO 17034:2016 (General requirements for the competence of reference material producers).&nbsp;</p>
                
                    <p>The reference materials are used:&nbsp;</p>

                    <ul>
                        <li>to perform instrument calibrations as part of quality assurance programs;</li>
                        <li>to verify the accuracy of specific measurements;</li>
                        <li>to support the development of new measurement methods;</li>
                        <li>to facilitate commerce and trade.</li>
                    </ul>

                    <p>Presently the RM KIMIAs are currently available for use in areas such as forensic analysis, industrial materials production and analysis and basic measurements in science and metrology. Each RM KIMIA is supplied with a Certificate of Analysis.&nbsp;<br />
                    &nbsp;</p>', 
            ]
        ];
        Scheme::insert($scheme);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
