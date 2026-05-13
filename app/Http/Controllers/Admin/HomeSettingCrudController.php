<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HomeSettingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HomeSettingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HomeSettingCrudController extends CrudController
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
        CRUD::setModel(\App\Models\HomeSetting::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/home-setting');
        CRUD::setEntityNameStrings('home setting', 'home settings');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

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
        CRUD::setValidation(HomeSettingRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.
              $fields = [     
                [
                    'name' => 'company_name',
                    'type' => 'text',
                    'label' => 'Company Name',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'phone',
                    'type' => 'number',
                    'label' => 'Phone',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'phone2',
                    'type' => 'number',
                    'label' => 'Phone 2',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'email',
                    'type' => 'email',
                    'label' => 'Email',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                 [
                    'name' => 'address_en',
                    'type' => 'text',
                    'label' => 'Address (English)',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'company_description',
                    'type' => 'text',
                    'label' => 'Company Description',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'facebook',
                    'type' => 'text',
                    'label' => 'Facebook URL',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                  [
                    'name' => 'instagram',
                    'type' => 'text',
                    'label' => 'Instagram URL',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'linkdian',
                    'type' => 'text',
                    'label' => 'LinkedIn URL',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'wattsapp',
                    'type' => 'text',
                    'label' => 'WhatsApp URL',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ], 

                [
                   'name' => 'logo',
                    'type' => 'image',
                    'label' => 'Upload Logo',
                    'disk' => 'uploads',
                    'upload' => true,
                    'wrapper' => [
                        'class' => 'form-group col-lg-6 col-md-4'
                    ],
                ],
                
                [
                    'name' => 'map_location',
                    'type' => 'summernote',
                    'label' => 'Map Location',
                    'wrapper' => [
                      'class' => 'form-group col-lg-12 col-md-6',
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
