<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    Route::apiResource('crm-notes', 'CrmNoteApiController');

    Route::apiResource('crm-documents', 'CrmDocumentApiController');

    Route::apiResource('time-work-types', 'TimeWorkTypeApiController');

    Route::apiResource('time-projects', 'TimeProjectApiController');

    Route::apiResource('time-entries', 'TimeEntryApiController');

    Route::apiResource('time-reports', 'TimeReportApiController');
});
