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
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '18',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '19',
                'title' => 'task_management_access',
            ],
            [
                'id'    => '20',
                'title' => 'task_status_create',
            ],
            [
                'id'    => '21',
                'title' => 'task_status_edit',
            ],
            [
                'id'    => '22',
                'title' => 'task_status_show',
            ],
            [
                'id'    => '23',
                'title' => 'task_status_delete',
            ],
            [
                'id'    => '24',
                'title' => 'task_status_access',
            ],
            [
                'id'    => '25',
                'title' => 'task_tag_create',
            ],
            [
                'id'    => '26',
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => '27',
                'title' => 'task_tag_show',
            ],
            [
                'id'    => '28',
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => '29',
                'title' => 'task_tag_access',
            ],
            [
                'id'    => '30',
                'title' => 'task_create',
            ],
            [
                'id'    => '31',
                'title' => 'task_edit',
            ],
            [
                'id'    => '32',
                'title' => 'task_show',
            ],
            [
                'id'    => '33',
                'title' => 'task_delete',
            ],
            [
                'id'    => '34',
                'title' => 'task_access',
            ],
            [
                'id'    => '35',
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => '36',
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => '37',
                'title' => 'currency_create',
            ],
            [
                'id'    => '38',
                'title' => 'currency_edit',
            ],
            [
                'id'    => '39',
                'title' => 'currency_show',
            ],
            [
                'id'    => '40',
                'title' => 'currency_delete',
            ],
            [
                'id'    => '41',
                'title' => 'currency_access',
            ],
            [
                'id'    => '42',
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => '43',
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => '44',
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => '45',
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => '46',
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => '47',
                'title' => 'income_source_create',
            ],
            [
                'id'    => '48',
                'title' => 'income_source_edit',
            ],
            [
                'id'    => '49',
                'title' => 'income_source_show',
            ],
            [
                'id'    => '50',
                'title' => 'income_source_delete',
            ],
            [
                'id'    => '51',
                'title' => 'income_source_access',
            ],
            [
                'id'    => '52',
                'title' => 'client_status_create',
            ],
            [
                'id'    => '53',
                'title' => 'client_status_edit',
            ],
            [
                'id'    => '54',
                'title' => 'client_status_show',
            ],
            [
                'id'    => '55',
                'title' => 'client_status_delete',
            ],
            [
                'id'    => '56',
                'title' => 'client_status_access',
            ],
            [
                'id'    => '57',
                'title' => 'project_status_create',
            ],
            [
                'id'    => '58',
                'title' => 'project_status_edit',
            ],
            [
                'id'    => '59',
                'title' => 'project_status_show',
            ],
            [
                'id'    => '60',
                'title' => 'project_status_delete',
            ],
            [
                'id'    => '61',
                'title' => 'project_status_access',
            ],
            [
                'id'    => '62',
                'title' => 'client_management_access',
            ],
            [
                'id'    => '63',
                'title' => 'client_create',
            ],
            [
                'id'    => '64',
                'title' => 'client_edit',
            ],
            [
                'id'    => '65',
                'title' => 'client_show',
            ],
            [
                'id'    => '66',
                'title' => 'client_delete',
            ],
            [
                'id'    => '67',
                'title' => 'client_access',
            ],
            [
                'id'    => '68',
                'title' => 'project_create',
            ],
            [
                'id'    => '69',
                'title' => 'project_edit',
            ],
            [
                'id'    => '70',
                'title' => 'project_show',
            ],
            [
                'id'    => '71',
                'title' => 'project_delete',
            ],
            [
                'id'    => '72',
                'title' => 'project_access',
            ],
            [
                'id'    => '73',
                'title' => 'note_create',
            ],
            [
                'id'    => '74',
                'title' => 'note_edit',
            ],
            [
                'id'    => '75',
                'title' => 'note_show',
            ],
            [
                'id'    => '76',
                'title' => 'note_delete',
            ],
            [
                'id'    => '77',
                'title' => 'note_access',
            ],
            [
                'id'    => '78',
                'title' => 'document_create',
            ],
            [
                'id'    => '79',
                'title' => 'document_edit',
            ],
            [
                'id'    => '80',
                'title' => 'document_show',
            ],
            [
                'id'    => '81',
                'title' => 'document_delete',
            ],
            [
                'id'    => '82',
                'title' => 'document_access',
            ],
            [
                'id'    => '83',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '84',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '85',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '86',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '87',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '88',
                'title' => 'client_report_create',
            ],
            [
                'id'    => '89',
                'title' => 'client_report_edit',
            ],
            [
                'id'    => '90',
                'title' => 'client_report_show',
            ],
            [
                'id'    => '91',
                'title' => 'client_report_delete',
            ],
            [
                'id'    => '92',
                'title' => 'client_report_access',
            ],
            [
                'id'    => '93',
                'title' => 'expense_management_access',
            ],
            [
                'id'    => '94',
                'title' => 'expense_category_create',
            ],
            [
                'id'    => '95',
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => '96',
                'title' => 'expense_category_show',
            ],
            [
                'id'    => '97',
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => '98',
                'title' => 'expense_category_access',
            ],
            [
                'id'    => '99',
                'title' => 'income_category_create',
            ],
            [
                'id'    => '100',
                'title' => 'income_category_edit',
            ],
            [
                'id'    => '101',
                'title' => 'income_category_show',
            ],
            [
                'id'    => '102',
                'title' => 'income_category_delete',
            ],
            [
                'id'    => '103',
                'title' => 'income_category_access',
            ],
            [
                'id'    => '104',
                'title' => 'expense_create',
            ],
            [
                'id'    => '105',
                'title' => 'expense_edit',
            ],
            [
                'id'    => '106',
                'title' => 'expense_show',
            ],
            [
                'id'    => '107',
                'title' => 'expense_delete',
            ],
            [
                'id'    => '108',
                'title' => 'expense_access',
            ],
            [
                'id'    => '109',
                'title' => 'income_create',
            ],
            [
                'id'    => '110',
                'title' => 'income_edit',
            ],
            [
                'id'    => '111',
                'title' => 'income_show',
            ],
            [
                'id'    => '112',
                'title' => 'income_delete',
            ],
            [
                'id'    => '113',
                'title' => 'income_access',
            ],
            [
                'id'    => '114',
                'title' => 'expense_report_create',
            ],
            [
                'id'    => '115',
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => '116',
                'title' => 'expense_report_show',
            ],
            [
                'id'    => '117',
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => '118',
                'title' => 'expense_report_access',
            ],
            [
                'id'    => '119',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '120',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '121',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '122',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '123',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '124',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '125',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '126',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '127',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '128',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '129',
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => '130',
                'title' => 'time_management_access',
            ],
            [
                'id'    => '131',
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => '132',
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => '133',
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => '134',
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => '135',
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => '136',
                'title' => 'time_project_create',
            ],
            [
                'id'    => '137',
                'title' => 'time_project_edit',
            ],
            [
                'id'    => '138',
                'title' => 'time_project_show',
            ],
            [
                'id'    => '139',
                'title' => 'time_project_delete',
            ],
            [
                'id'    => '140',
                'title' => 'time_project_access',
            ],
            [
                'id'    => '141',
                'title' => 'time_entry_create',
            ],
            [
                'id'    => '142',
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => '143',
                'title' => 'time_entry_show',
            ],
            [
                'id'    => '144',
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => '145',
                'title' => 'time_entry_access',
            ],
            [
                'id'    => '146',
                'title' => 'time_report_create',
            ],
            [
                'id'    => '147',
                'title' => 'time_report_edit',
            ],
            [
                'id'    => '148',
                'title' => 'time_report_show',
            ],
            [
                'id'    => '149',
                'title' => 'time_report_delete',
            ],
            [
                'id'    => '150',
                'title' => 'time_report_access',
            ],
            [
                'id'    => '151',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '152',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '153',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '154',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '155',
                'title' => 'content_management_access',
            ],
            [
                'id'    => '156',
                'title' => 'content_category_create',
            ],
            [
                'id'    => '157',
                'title' => 'content_category_edit',
            ],
            [
                'id'    => '158',
                'title' => 'content_category_show',
            ],
            [
                'id'    => '159',
                'title' => 'content_category_delete',
            ],
            [
                'id'    => '160',
                'title' => 'content_category_access',
            ],
            [
                'id'    => '161',
                'title' => 'content_tag_create',
            ],
            [
                'id'    => '162',
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => '163',
                'title' => 'content_tag_show',
            ],
            [
                'id'    => '164',
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => '165',
                'title' => 'content_tag_access',
            ],
            [
                'id'    => '166',
                'title' => 'content_page_create',
            ],
            [
                'id'    => '167',
                'title' => 'content_page_edit',
            ],
            [
                'id'    => '168',
                'title' => 'content_page_show',
            ],
            [
                'id'    => '169',
                'title' => 'content_page_delete',
            ],
            [
                'id'    => '170',
                'title' => 'content_page_access',
            ],
            [
                'id'    => '171',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '172',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '173',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '174',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '175',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '176',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '177',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '178',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '179',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '180',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '181',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '182',
                'title' => 'asset_management_access',
            ],
            [
                'id'    => '183',
                'title' => 'asset_category_create',
            ],
            [
                'id'    => '184',
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => '185',
                'title' => 'asset_category_show',
            ],
            [
                'id'    => '186',
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => '187',
                'title' => 'asset_category_access',
            ],
            [
                'id'    => '188',
                'title' => 'asset_location_create',
            ],
            [
                'id'    => '189',
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => '190',
                'title' => 'asset_location_show',
            ],
            [
                'id'    => '191',
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => '192',
                'title' => 'asset_location_access',
            ],
            [
                'id'    => '193',
                'title' => 'asset_status_create',
            ],
            [
                'id'    => '194',
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => '195',
                'title' => 'asset_status_show',
            ],
            [
                'id'    => '196',
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => '197',
                'title' => 'asset_status_access',
            ],
            [
                'id'    => '198',
                'title' => 'asset_create',
            ],
            [
                'id'    => '199',
                'title' => 'asset_edit',
            ],
            [
                'id'    => '200',
                'title' => 'asset_show',
            ],
            [
                'id'    => '201',
                'title' => 'asset_delete',
            ],
            [
                'id'    => '202',
                'title' => 'asset_access',
            ],
            [
                'id'    => '203',
                'title' => 'assets_history_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
