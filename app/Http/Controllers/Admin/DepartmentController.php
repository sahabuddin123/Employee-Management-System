<?php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Contracts\DepartmentContract;
use App\Http\Controllers\BaseController;


class DepartmentController extends BaseController
{
    /* @var DepartmentContract
    */
   protected $departmentRepository;

   /**
    * CategoryController constructor.
    */ /*@param CategoryContract $categoryRepository
    */
   public function __construct(DepartmentContract $departmentRepository)
   {
       $this->departmentRepository = $departmentRepository;
   }

   /**
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
   public function index()
   {
       $departments = $this->departmentRepository->listDepartment();

       $this->setPageTitle('Departments', 'List of all departments');
       return view('admin.departments.index', compact('departments'));

   }
   public function create()
{
    $categories = $this->categoryRepository->listCategories('id', 'asc');
 
    $this->setPageTitle('Categories', 'Create Category');
    return view('admin.categories.create', compact('categories'));
}
}
