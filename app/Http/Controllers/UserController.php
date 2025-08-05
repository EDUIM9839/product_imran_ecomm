<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard')->with('success', 'User Login Successfully');
    }
    public function store(Request $request)
        {
            // Validate Form Data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'phone' => 'nullable|string|max:20',
                'role_id' => 'required|integer|exists:roles,id',
                'password' => 'required|string|min:6|confirmed',
                'profile_image' => 'nullable|image|mimes:jpeg,png|max:2048',  // 2MB
            ]);

            // Handle Image Upload (if any)
            $imageName = null;
            if ($request->hasFile('profile_image')) {
                $image = $request->file('profile_image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/users'), $imageName);
            }

            do {
                $userId = 'USR' . mt_rand(100000, 999999);
            } while (User::where('user_id', $userId)->exists());


            // Create User (Insert to DB)
            $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,  // <-- Add this
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
            'status' => $request->has('status') ? 1 : 0,
            'profile_image' => $imageName,
            'user_id' => $userId,
            'plain_password' => $request->password
        ]);


            return redirect()->back()->with('success', 'User Created Successfully!');
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'role_id' => 'required|exists:roles,id',
                'email' => 'required|email|unique:users,email,'.$id,
                'phone' => 'nullable|string|max:20',
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $user = User::findOrFail($id);

            // Handle Profile Image Upload
            if ($request->hasFile('profile_image')) {
                // Delete old image if exists
                if ($user->profile_image && file_exists(public_path('uploads/users/'.$user->profile_image))) {
                    unlink(public_path('uploads/users/'.$user->profile_image));
                }

                $image = $request->file('profile_image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/users'), $imageName);
                $user->profile_image = $imageName;
            }

            // Update other fields
            $user->name = $request->name;
            $user->role_id = $request->role_id;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->status = $request->has('status') ? 1 : 0;
            $user->save();

            return redirect()->back()->with('success', 'User Updated Successfully!');
        }

        public function destroy($id)
            {
                $user = User::findOrFail($id);

                // Delete Profile Image if exists
                if ($user->profile_image && file_exists(public_path('uploads/users/' . $user->profile_image))) {
                    unlink(public_path('uploads/users/' . $user->profile_image));
                }

                $user->delete();
                        return redirect()->back()->with('success', 'User deleted Successfully!');

                
            }

}
