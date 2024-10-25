<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::select('id', 'company_name', 'application_status', 'industry', 'location', 'rating', 'created_at', 'user_id')
            ->where('user_id', auth()->id())  
            ->paginate(10);

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:50',
            'company_url' => 'nullable|url|max:255',
            'application_status' => 'nullable|string|max:50',
            'industry' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:50',
            'rating' => 'nullable|integer|between:1,5',
            'notes' => 'nullable|string|max:255',
        ]);

        $validated['user_id'] = auth()->id();

        $company = Company::create($validated);

        $request->session()->flash('message', '保存しました');
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('company.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:50',
            'company_url' => 'nullable|url|max:255',
            'application_status' => 'nullable|string|max:50',
            'industry' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:50',
            'rating' => 'nullable|integer|between:1,5',
            'notes' => 'nullable|string|max:255',
        ]);

        $validated['user_id'] = auth()->id();
        
        $company->update($validated);

        $request->session()->flash('message', '更新しました');
        return redirect()->route('company.show', compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Company $company)
    {
        $company->delete();
        $request->session()->flash('message', '削除しました');
        return redirect('company');
    }
}
