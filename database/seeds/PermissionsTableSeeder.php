<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-04-29 05:43:03',
            'updated_at' => '2019-04-29 05:43:03',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '17',
                'title'      => 'basic_c_r_m_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '18',
                'title'      => 'crm_status_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '19',
                'title'      => 'crm_status_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '20',
                'title'      => 'crm_status_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '21',
                'title'      => 'crm_status_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '22',
                'title'      => 'crm_status_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '23',
                'title'      => 'crm_customer_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '24',
                'title'      => 'crm_customer_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '25',
                'title'      => 'crm_customer_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '26',
                'title'      => 'crm_customer_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '27',
                'title'      => 'crm_customer_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '28',
                'title'      => 'crm_note_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '29',
                'title'      => 'crm_note_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '30',
                'title'      => 'crm_note_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '31',
                'title'      => 'crm_note_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '32',
                'title'      => 'crm_note_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '33',
                'title'      => 'crm_document_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '34',
                'title'      => 'crm_document_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '35',
                'title'      => 'crm_document_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '36',
                'title'      => 'crm_document_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '37',
                'title'      => 'crm_document_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '38',
                'title'      => 'time_management_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '39',
                'title'      => 'time_work_type_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '40',
                'title'      => 'time_work_type_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '41',
                'title'      => 'time_work_type_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '42',
                'title'      => 'time_work_type_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '43',
                'title'      => 'time_work_type_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '44',
                'title'      => 'time_project_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '45',
                'title'      => 'time_project_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '46',
                'title'      => 'time_project_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '47',
                'title'      => 'time_project_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '48',
                'title'      => 'time_project_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '49',
                'title'      => 'time_entry_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '50',
                'title'      => 'time_entry_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '51',
                'title'      => 'time_entry_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '52',
                'title'      => 'time_entry_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '53',
                'title'      => 'time_entry_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '54',
                'title'      => 'time_report_create',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '55',
                'title'      => 'time_report_edit',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '56',
                'title'      => 'time_report_show',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '57',
                'title'      => 'time_report_delete',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ],
            [
                'id'         => '58',
                'title'      => 'time_report_access',
                'created_at' => '2019-04-29 05:43:03',
                'updated_at' => '2019-04-29 05:43:03',
            ]];

        Permission::insert($permissions);
    }
}
