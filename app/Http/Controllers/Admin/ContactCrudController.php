<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ContactCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Contact::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contact');
        CRUD::setEntityNameStrings('contact submission', 'contact submissions');
    }

    protected function setupListOperation()
    {
        CRUD::column('id')->label('ID');
        CRUD::column('name')->label('Name');
        CRUD::column('email')->label('Email');
        CRUD::column('phone')->label('Phone');
        CRUD::column('subject')->label('Subject');
        CRUD::column('type')->label('Type')->type('select_from_array')->options([
            'contact' => 'Contact',
            'inquiry' => 'Inquiry',
            'newsletter' => 'Newsletter',
        ]);
        CRUD::column('status')->label('Status')->type('select_from_array')->options([
            'new' => 'New',
            'read' => 'Read',
            'replied' => 'Replied',
        ]);
        CRUD::column('created_at')->label('Submitted At')->type('datetime');

        CRUD::addFilter([
            'name' => 'type',
            'type' => 'dropdown',
            'label' => 'Type',
        ], [
            'contact' => 'Contact',
            'inquiry' => 'Inquiry',
            'newsletter' => 'Newsletter',
        ], function ($value) {
            CRUD::addClause('where', 'type', $value);
        });

        CRUD::addFilter([
            'name' => 'status',
            'type' => 'dropdown',
            'label' => 'Status',
        ], [
            'new' => 'New',
            'read' => 'Read',
            'replied' => 'Replied',
        ], function ($value) {
            CRUD::addClause('where', 'status', $value);
        });

        CRUD::orderBy('created_at', 'DESC');
    }

    protected function setupShowOperation()
    {
        CRUD::column('id');
        CRUD::column('name');
        CRUD::column('email');
        CRUD::column('phone');
        CRUD::column('subject');
        CRUD::column('content')->label('Message');
        CRUD::column('type');
        CRUD::column('status');
        CRUD::column('user_id')->label('User ID');
        CRUD::column('created_at');
        CRUD::column('updated_at');
    }
}
