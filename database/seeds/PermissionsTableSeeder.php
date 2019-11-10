<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'asset_management_access',
            ],
            [
                'id'    => '18',
                'title' => 'asset_category_create',
            ],
            [
                'id'    => '19',
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'asset_category_show',
            ],
            [
                'id'    => '21',
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'asset_category_access',
            ],
            [
                'id'    => '23',
                'title' => 'asset_location_create',
            ],
            [
                'id'    => '24',
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => '25',
                'title' => 'asset_location_show',
            ],
            [
                'id'    => '26',
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => '27',
                'title' => 'asset_location_access',
            ],
            [
                'id'    => '28',
                'title' => 'asset_status_create',
            ],
            [
                'id'    => '29',
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => '30',
                'title' => 'asset_status_show',
            ],
            [
                'id'    => '31',
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => '32',
                'title' => 'asset_status_access',
            ],
            [
                'id'    => '33',
                'title' => 'asset_create',
            ],
            [
                'id'    => '34',
                'title' => 'asset_edit',
            ],
            [
                'id'    => '35',
                'title' => 'asset_show',
            ],
            [
                'id'    => '36',
                'title' => 'asset_delete',
            ],
            [
                'id'    => '37',
                'title' => 'asset_access',
            ],
            [
                'id'    => '38',
                'title' => 'assets_history_access',
            ],
            [
                'id'    => '39',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '40',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '41',
                'title' => 'team_create',
            ],
            [
                'id'    => '42',
                'title' => 'team_edit',
            ],
            [
                'id'    => '43',
                'title' => 'team_show',
            ],
            [
                'id'    => '44',
                'title' => 'team_delete',
            ],
            [
                'id'    => '45',
                'title' => 'team_access',
            ],
            [
                'id'    => '46',
                'title' => 'task_management_access',
            ],
            [
                'id'    => '47',
                'title' => 'task_status_create',
            ],
            [
                'id'    => '48',
                'title' => 'task_status_edit',
            ],
            [
                'id'    => '49',
                'title' => 'task_status_show',
            ],
            [
                'id'    => '50',
                'title' => 'task_status_delete',
            ],
            [
                'id'    => '51',
                'title' => 'task_status_access',
            ],
            [
                'id'    => '52',
                'title' => 'task_tag_create',
            ],
            [
                'id'    => '53',
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => '54',
                'title' => 'task_tag_show',
            ],
            [
                'id'    => '55',
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => '56',
                'title' => 'task_tag_access',
            ],
            [
                'id'    => '57',
                'title' => 'task_create',
            ],
            [
                'id'    => '58',
                'title' => 'task_edit',
            ],
            [
                'id'    => '59',
                'title' => 'task_show',
            ],
            [
                'id'    => '60',
                'title' => 'task_delete',
            ],
            [
                'id'    => '61',
                'title' => 'task_access',
            ],
            [
                'id'    => '62',
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => '63',
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => '64',
                'title' => 'currency_create',
            ],
            [
                'id'    => '65',
                'title' => 'currency_edit',
            ],
            [
                'id'    => '66',
                'title' => 'currency_show',
            ],
            [
                'id'    => '67',
                'title' => 'currency_delete',
            ],
            [
                'id'    => '68',
                'title' => 'currency_access',
            ],
            [
                'id'    => '69',
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => '70',
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => '71',
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => '72',
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => '73',
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => '74',
                'title' => 'income_source_create',
            ],
            [
                'id'    => '75',
                'title' => 'income_source_edit',
            ],
            [
                'id'    => '76',
                'title' => 'income_source_show',
            ],
            [
                'id'    => '77',
                'title' => 'income_source_delete',
            ],
            [
                'id'    => '78',
                'title' => 'income_source_access',
            ],
            [
                'id'    => '79',
                'title' => 'client_status_create',
            ],
            [
                'id'    => '80',
                'title' => 'client_status_edit',
            ],
            [
                'id'    => '81',
                'title' => 'client_status_show',
            ],
            [
                'id'    => '82',
                'title' => 'client_status_delete',
            ],
            [
                'id'    => '83',
                'title' => 'client_status_access',
            ],
            [
                'id'    => '84',
                'title' => 'project_status_create',
            ],
            [
                'id'    => '85',
                'title' => 'project_status_edit',
            ],
            [
                'id'    => '86',
                'title' => 'project_status_show',
            ],
            [
                'id'    => '87',
                'title' => 'project_status_delete',
            ],
            [
                'id'    => '88',
                'title' => 'project_status_access',
            ],
            [
                'id'    => '89',
                'title' => 'client_management_access',
            ],
            [
                'id'    => '90',
                'title' => 'client_create',
            ],
            [
                'id'    => '91',
                'title' => 'client_edit',
            ],
            [
                'id'    => '92',
                'title' => 'client_show',
            ],
            [
                'id'    => '93',
                'title' => 'client_delete',
            ],
            [
                'id'    => '94',
                'title' => 'client_access',
            ],
            [
                'id'    => '95',
                'title' => 'project_create',
            ],
            [
                'id'    => '96',
                'title' => 'project_edit',
            ],
            [
                'id'    => '97',
                'title' => 'project_show',
            ],
            [
                'id'    => '98',
                'title' => 'project_delete',
            ],
            [
                'id'    => '99',
                'title' => 'project_access',
            ],
            [
                'id'    => '100',
                'title' => 'note_create',
            ],
            [
                'id'    => '101',
                'title' => 'note_edit',
            ],
            [
                'id'    => '102',
                'title' => 'note_show',
            ],
            [
                'id'    => '103',
                'title' => 'note_delete',
            ],
            [
                'id'    => '104',
                'title' => 'note_access',
            ],
            [
                'id'    => '105',
                'title' => 'document_create',
            ],
            [
                'id'    => '106',
                'title' => 'document_edit',
            ],
            [
                'id'    => '107',
                'title' => 'document_show',
            ],
            [
                'id'    => '108',
                'title' => 'document_delete',
            ],
            [
                'id'    => '109',
                'title' => 'document_access',
            ],
            [
                'id'    => '110',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '111',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '112',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '113',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '114',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '115',
                'title' => 'client_report_create',
            ],
            [
                'id'    => '116',
                'title' => 'client_report_edit',
            ],
            [
                'id'    => '117',
                'title' => 'client_report_show',
            ],
            [
                'id'    => '118',
                'title' => 'client_report_delete',
            ],
            [
                'id'    => '119',
                'title' => 'client_report_access',
            ],
            [
                'id'    => '120',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '121',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '122',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '123',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '124',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '125',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '126',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '127',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '128',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '129',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '130',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '131',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '132',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '133',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '134',
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => '135',
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => '136',
                'title' => 'crm_status_create',
            ],
            [
                'id'    => '137',
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => '138',
                'title' => 'crm_status_show',
            ],
            [
                'id'    => '139',
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => '140',
                'title' => 'crm_status_access',
            ],
            [
                'id'    => '141',
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => '142',
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => '143',
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => '144',
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => '145',
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => '146',
                'title' => 'crm_note_create',
            ],
            [
                'id'    => '147',
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => '148',
                'title' => 'crm_note_show',
            ],
            [
                'id'    => '149',
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => '150',
                'title' => 'crm_note_access',
            ],
            [
                'id'    => '151',
                'title' => 'crm_document_create',
            ],
            [
                'id'    => '152',
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => '153',
                'title' => 'crm_document_show',
            ],
            [
                'id'    => '154',
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => '155',
                'title' => 'crm_document_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
