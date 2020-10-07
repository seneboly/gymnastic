<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\User;

class ExcelExportController extends Controller
{
	public function index(){

		return view('website.export-excel')->withUsers(User::all());

	}

	public function excel(){
		
		$users = User::all();

		$allUsersInExcel = []; 

		foreach ($users as $user) {
			
			$allUsersInExcel[] = [
									'name'=>$user->name,
									'email'=>$user->email,
									'created_at'=>$user->created_at
								];
			
		}

		return Excel::download($allUsersInExcel, 'Liste-users.xlsx');



	}


}
