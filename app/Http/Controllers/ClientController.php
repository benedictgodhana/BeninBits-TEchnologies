<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $query = Client::query();

        if ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('category', 'LIKE', "%{$search}%");
        }

        if ($category) {
            $query->where('category', $category);
        }

        $clients = $query->get();

        return view('clients.index', compact('clients', 'search', 'category'));
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return response()->json($client);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'website_url' => 'required|url',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $imagePath = $request->file('image_url')->store('clients', 'public');

        $client = new Client();
        $client->name = $request->input('name');
        $client->category = $request->input('category');
        $client->website_url = $request->input('website_url');
        $client->image_url = $imagePath;
        $client->save();

        return redirect()->route('clients.index');
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'website_url' => 'required|url',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('clients', 'public');
            $client->image_url = $imagePath;
        }

        $client->name = $request->input('name');
        $client->category = $request->input('category');
        $client->website_url = $request->input('website_url');
        $client->save();

}

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index');
    }
}
