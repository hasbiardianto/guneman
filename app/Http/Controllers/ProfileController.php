<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function view($username) {
        $user = User::where('username', $username)->firstOrFail();
        return view('dashboard.profile', [
            'user' => $user,
            'title' => 'Profile',
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('dashboard.setting', [
            'user' => $request->user(),
            'title' => 'Profile',
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function upload(Request $request)
{
    if ($request->hasFile('image')) {
        $oldFilename = Auth()->user()->image;
        $filename = uniqid() . $request->image->getClientOriginalName();
        $request->image->storeAs('images',$filename, 'public');
        Auth()->user()->update(['image' => $filename]);
        if ($oldFilename) {
            Storage::disk('public')->delete('images/' . $oldFilename);
        }
    }
    return redirect()->back();
}
    public function delete(User $user) 
    {
        if ($user->image) {
            Storage::delete($user->image);
            $user->update(['image' => null]);    
        }
        return redirect()->back();
    }
}
