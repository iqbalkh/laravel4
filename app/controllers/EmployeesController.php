<?php

class EmployeesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Show a listing of employees.
		$employees = Employee::all();
		return View::make('index', compact('employees'));

	}

	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Show the create employee form.
		return View::make('create');

	}
	
	public function handleCreate()
	{
		$employee = new Employee;
		$employee->first_name = Input::get('first_name');
		$employee->last_name = Input::get('last_name');
		$employee->email = Input::get('email');
		//var_dump(Input::all());exit;
		$employee->save();
		return Redirect::action('EmployeesController@index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Employee $employee)
	{
		// Show the edit employee form.
		return View::make('edit', compact('employee'));

	}
	
	public function handleEdit()
	{
		// Handle edit form submission.
		$employee = Employee::findOrFail(Input::get('id'));
		$employee->first_name        = Input::get('first_name');
		$employee->last_name           = Input::get('last_name');
		$employee->email                = Input::get('email');
		$employee->save();
		return Redirect::action('EmployeesController@index');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function handleDelete()
	{
		// Handle the delete confirmation.
		$id = Input::get('employee');
		$employee = Employee::findOrFail($id);
		$employee->delete();
		return Redirect::action('EmployeesController@index');
	}
	
	
	public function delete(Employee $employee)
	{
		// Show delete confirmation page.
		return View::make('delete', compact('employee'));
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
