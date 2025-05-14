<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('partners.index', compact('partners'));
    }

    public function create()
    {
        return view('partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
        ]);

        // Create Partner instance manually
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->website = $request->website;
        $partner->email = $request->email;
        $partner->phone = $request->phone;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('partners', $filename, 'public'); // Store manually
            $partner->logo = $path;
        }

        $partner->save();

        return redirect()->route('partners.index')->with('success', 'Partner added successfully');
    }


    public function edit(Partner $partner)
    {
        return view('partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'website' => 'nullable|url',
        'email' => 'nullable|email',
        'phone' => 'nullable|string|max:20',
    ]);

    // Update other fields manually
    $partner->name = $request->name;
    $partner->website = $request->website;
    $partner->email = $request->email;
    $partner->phone = $request->phone;

    // Handle logo update
    if ($request->hasFile('logo')) {
        // Delete old logo if exists
        if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
            Storage::disk('public')->delete($partner->logo);
        }

        // Store new logo
        $file = $request->file('logo');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('partners', $filename, 'public');

        $partner->logo = $path;
    }

    $partner->save();

    return redirect()->route('partners.index')->with('success', 'Partner updated successfully');
}

    public function destroy(Partner $partner)
    {
        if ($partner->logo) {
            Storage::delete('public/' . $partner->logo);
        }

        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully');
    }
}
