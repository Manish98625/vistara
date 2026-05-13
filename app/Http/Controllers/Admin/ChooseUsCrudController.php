<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ChooseUsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ChooseUsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ChooseUsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ChooseUs::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/choose-us');
        CRUD::setEntityNameStrings('choose us', 'choose uses');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // set columns from db columns.

        $cols = [     
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Title',
            ],
            
            [
                'name' => 'icon',
                'type' => 'text',
                'label' => 'Icon',
            ],
        
            [
                'name' => 'display_order',
                'type' => 'number',
                'label' => 'Display Order',
            ],
        ];  

        $cols = array_filter($cols);
        $this->crud->addColumns($cols);


        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ChooseUsRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        $fields = [     
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Title',
                'wrapper' => [
                    'class' => 'form-group col-lg-4 col-md-3',
                ],
            ],
            [
                'name' => 'description',
                'type' => 'textarea',
                'label' => 'Description',
                'wrapper' => [
                    'class' => 'form-group col-lg-4 col-md-3',
                ],
            ],
            [
                'name' => 'icon',
                'type' => 'text',
                'label' => 'Icon',
                'wrapper' => [
                    'class' => 'form-group col-lg-4 col-md-3'
                ],
            ],
        
            [
                'name' => 'display_order',
                'type' => 'number',
                'label' => 'Display Order',
                'wrapper' => [
                    'class' => 'form-group col-lg-4 col-md-3',
                ],
            ],
            

            
        ];

        $fields = array_filter($fields);
        $this->crud->addFields($fields);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
