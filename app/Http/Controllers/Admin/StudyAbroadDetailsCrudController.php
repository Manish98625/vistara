<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StudyAbroadDetailsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StudyAbroadDetailsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StudyAbroadDetailsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\StudyAbroadDetails::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/study-abroad-details');
        CRUD::setEntityNameStrings('study abroad details', 'study abroad details');
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
                    'name' => 'benefit_one',
                    'type' => 'text',
                    'label' => 'Benefit One',
                ],

                [
                    'name' => 'benefit_two',
                    'type' => 'text',
                    'label' => 'Benefit Two',
                ],
                [
                    'name' => 'benefit_three',
                    'type' => 'text',
                    'label' => 'Benefit Three',
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
        CRUD::setValidation(StudyAbroadDetailsRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.
        $fields = [    
                [
                    'name' => 'study_abroads_id',
                    'label' => 'Study Abroad',
                    'type' => 'select',
                    'entity' => 'StudyAbroad', 
                    'model' => \App\Models\StudyAbroad::class,
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
                    'name' => 'benefit_one',
                    'type' => 'text',
                    'label' => 'Benefit One',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'benefit_two',
                    'type' => 'text',
                    'label' => 'Benefit Two',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                [
                    'name' => 'benefit_three',
                    'type' => 'text',
                    'label' => 'Benefit Three',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                   [
                    'name' => 'why_study',
                    'type' => 'text',
                    'label' => 'Why Study Abroad',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                     [
                    'name' => 'cost_overview',
                    'type' => 'text',
                    'label' => 'Cost Overview',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],
                     [
                    'name' => 'intake_information',
                    'type' => 'text',
                    'label' => 'Intake Information',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'visa_process',
                    'type' => 'text',
                    'label' => 'Visa Process',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'academic_scores',
                    'type' => 'text',
                    'label' => 'Academic Scores',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                [
                    'name' => 'english_proficiency',
                    'type' => 'text',
                    'label' => 'English Proficiency',
                    'wrapper' => [
                      'class' => 'form-group col-lg-4 col-md-3',
                    ],
                ],

                 [
                    'name' => 'financial_capacity',
                    'type' => 'text',
                    'label' => 'Financial Capacity',
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
