<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceDiscriptionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ServiceDiscriptionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServiceDiscriptionCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ServiceDiscription::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service-discription');
        CRUD::setEntityNameStrings('service discription', 'service discriptions');
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
                    'name' => 'image',
                    'type' => 'image',
                    'label' => 'Image',
                    'disk' => 'uploads',
                    'upload' => true,
                ],
            
                [
                    'name' => 'point_one',
                    'type' => 'text',
                    'label' => 'point_one',
                ],
                 [
                    'name' => 'point_two',
                    'type' => 'text',
                    'label' => 'point_two',
                ],
                [
                    'name' => 'point_three',
                    'type' => 'text',
                    'label' => 'point_three',
                ],
                [
                    'name' => 'point_four',
                    'type' => 'text',
                    'label' => 'point_four',
                ]
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
        CRUD::setValidation(ServiceDiscriptionRequest::class);
        // CRUD::setFromDb(); // set  from db columns.

        $fields = [  
                [
                    'name' => 'our_services_id',
                    'label' => 'Our Service',
                    'type' => 'select',
                    'entity' => 'Services', 
                    'model' => \App\Models\Services::class,
                    'attribute' => 'title', 
                     'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
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
                    'name' => 'image',
                    'type' => 'image',
                    'label' => 'Image',
                    'disk' => 'uploads',
                    'upload' => true,
                    'wrapper' => [
                        'class' => 'form-group col-lg-6 col-md-4'
                    ],
                ],

                  [
                    'name' => 'sec_title',
                    'type' => 'text',
                    'label' => 'Secondary Title',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'short_title',
                    'type' => 'text',
                    'label' => 'Short Title',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'sec_desc',
                    'type' => 'textarea',
                    'label' => 'Secondary Description',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],



                [
                    'name' => 'point_one',
                    'type' => 'text',
                    'label' => 'point_one',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'point_two',
                    'type' => 'text',
                    'label' => 'point_two',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'point_three',
                    'type' => 'text',
                    'label' => 'point_three',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'point_four',
                    'type' => 'text',
                    'label' => 'point_four',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'point_five',
                    'type' => 'text',
                    'label' => 'point_five',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'point_six',
                    'type' => 'text',
                    'label' => 'point_six',
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
