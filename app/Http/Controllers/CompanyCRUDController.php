<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    //


    public function index() {

        $data['companies'] = Company::orderBy('id', 'desc')->paginate(5);

        return view('companies.index', $data);

    }

    public function create() {
        return view('companies.create');
    }


    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'description'=> 'required'
        ]);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->description = $request->description;
        $company->save();

        return redirect()->route('companies.index')
            ->with('success','Company has been created successfully');

    }

    public function show(Company $company) {
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company) {
        return view('companies.edit', compact('company'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'description' => 'required'
        ]);

        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->description = $request->description;
        $company->save();

        return redirect()->route('companies.index')
        ->with('success','Company has been updated successfully');
    }

    public function destroy(Company $company) {
        $company->delete();
        
        return redirect()->route('companies.index')
        ->with('success','Company hasa been deleted successfully');
    }
}