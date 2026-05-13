<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CoursesDetailRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CoursesDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CoursesDetailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\CoursesDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/courses-detail');
        CRUD::setEntityNameStrings('courses detail', 'courses details');
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
                    'label' => 'Upload Image',
                    'disk' => 'uploads',
                    'upload' => true,
                  
                ],
            
                [
                    'name' => 'duration',
                    'type' => 'text',
                    'label' => 'Duration',
                  
                ],
              
 
                [
                    'name' => 'intakes',
                    'type' => 'text',
                    'label' => 'Intakes',
                 
                ],
                 [
                    'name' => 'average_fees',
                    'type' => 'text',
                    'label' => 'Average Fees',
                
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
        CRUD::setValidation(CoursesDetailRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.
          $fields = [  
            
                [
                    'name' => 'courses_id',
                    'label' => 'Course',
                    'type' => 'select',
                    'entity' => 'Courses', 
                    'model' => \App\Models\Courses::class,
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
                    'label' => 'Upload Image',
                    'disk' => 'uploads',
                    'upload' => true,
                    'wrapper' => [
                        'class' => 'form-group col-lg-4 col-md-3'
                    ],
                ],
            
                [
                    'name' => 'duration',
                    'type' => 'text',
                    'label' => 'Duration',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
              
 
                [
                    'name' => 'intakes',
                    'type' => 'text',
                    'label' => 'Intakes',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                 [
                    'name' => 'average_fees',
                    'type' => 'text',
                    'label' => 'Average Fees',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'career_prospects',
                    'type' => 'textarea',
                    'label' => 'Career Prospects',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                
                [
                    'name' => 'point_one',
                    'type' => 'text',
                    'label' => 'Point One',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],


                
                [
                    'name' => 'point_two',
                    'type' => 'text',
                    'label' => 'Point Two',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                
                [
                    'name' => 'point_three',
                    'type' => 'text',
                    'label' => 'Point Three',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                
                [
                    'name' => 'point_four',
                    'type' => 'text',
                    'label' => 'Point Four',
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
