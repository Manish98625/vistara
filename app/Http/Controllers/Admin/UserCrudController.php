<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('email');
        CRUD::column('phone');
        CRUD::column('study_destination');
        CRUD::column('education_level');
        CRUD::column('field_of_study');
        CRUD::column('role');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);
        CRUD::field('name')->type('text');
        CRUD::field('email')->type('email');
        CRUD::field('phone')->type('text');
        CRUD::field('study_destination')->type('text');
        CRUD::field('education_level')->type('text');
        CRUD::field('field_of_study')->type('text');
        CRUD::field('role')->type('select_from_array')->options([
            'student' => 'Student',
            'admin' => 'Admin',
        ])->default('student');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
