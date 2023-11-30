<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Show form to create user
    public function create() {
        return view('users.create');
    }

    // Store user data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create($formFields);

        return redirect()->route('users.edit', $user)
            ->with('info', 'User has been created successfully');
    }

    // Show form to edit user
    public function edit(User $user) {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    // Update user data
    public function update(Request $request, User $user) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user->update($formFields);
        return back()->with('info', 'User has been updated successfully');
    }

    // Delete user
    public function destroy(User $user) {
        $user->delete();
        return back()->with('info', 'User has been deleted successfully');
    }
}
