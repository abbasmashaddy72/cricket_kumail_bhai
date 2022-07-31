<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use TPG\Deadbolt\Facades\Deadbolt;

class UserCEV extends Component
{

    // Model Values
    public $name, $email, $password, $role;

    // Custom Values
    public $action, $user;

    protected $rules = [
        'name' => '',
        'email' => '',
        'password' => '',
        'role' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        abort_if(Gate::denies('user_add'), 403);

        $validatedData = $this->validate();
        $validatedData['password'] = Hash::make($validatedData['password']);

        $role = $this->role;
        $permissions = Deadbolt::all();
        if ($role == 'Super Admin') {
            $permissions = Deadbolt::all();
        } elseif ($role == 'Admin') {
            $permissions = array_diff($permissions, ['log_viewer']);
        } elseif ($role == 'Employee_FO') {
            $permissions = array_diff($permissions, [
                'homepage',
                'department_list',
                'department_add',
                'department_edit',
                'department_view',
                'department_delete',
                'service_list',
                'service_add',
                'service_edit',
                'service_view',
                'service_delete',
                'review_list',
                'review_add',
                'review_edit',
                'review_view',
                'review_delete',
                'doctor_list',
                'doctor_add',
                'doctor_edit',
                'doctor_view',
                'doctor_delete',
                'blog_list',
                'blog_add',
                'blog_edit',
                'blog_view',
                'blog_delete',
                'package_list',
                'package_add',
                'package_edit',
                'package_view',
                'package_delete',
                'package_list_list',
                'package_list_add',
                'package_list_edit',
                'package_list_view',
                'package_list_delete',
                'insurance_list',
                'insurance_add',
                'insurance_edit',
                'insurance_view',
                'insurance_delete',
                'terms',
                'privacy',
                'career',
                '   ',
                'user_add',
                'user_edit',
                'user_view',
                'user_delete',
                'gallery',
                'log_viewer'
            ]);
        } else {
            $permissions = array_values(array_diff($permissions, [
                'homepage',
                'review_list',
                'review_add',
                'review_edit',
                'review_view',
                'review_delete',
                'blog_list',
                'blog_add',
                'blog_edit',
                'blog_view',
                'blog_delete',
                'insurance_list',
                'insurance_add',
                'insurance_edit',
                'insurance_view',
                'insurance_delete',
                'terms',
                'privacy',
                'career',
                'user_list',
                'user_add',
                'user_edit',
                'user_view',
                'user_delete',
                'log_viewer'
            ]));
        }

        User::create(array_merge($validatedData, ['permissions' => $permissions]));

        notify()->success('User Saved Successfully!');

        return $this->redirectRoute('admin.user.index');
    }

    public function update()
    {
        abort_if(Gate::denies('user_edit'), 403);

        $validatedData = $this->validate();

        $data = User::findOrFail($this->user);

        if ($data->password != $validatedData['password']) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $role = $this->role;
        $permissions = Deadbolt::all();
        if ($role == 'Super Admin') {
            $permissions = Deadbolt::all();
        } elseif ($role == 'Admin') {
            $permissions = array_diff($permissions, ['log_viewer']);
        } elseif ($role == 'Employee_FO') {
            $permissions = array_diff($permissions, [
                'homepage',
                'department_list',
                'department_add',
                'department_edit',
                'department_view',
                'department_delete',
                'service_list',
                'service_add',
                'service_edit',
                'service_view',
                'service_delete',
                'review_list',
                'review_add',
                'review_edit',
                'review_view',
                'review_delete',
                'doctor_list',
                'doctor_add',
                'doctor_edit',
                'doctor_view',
                'doctor_delete',
                'blog_list',
                'blog_add',
                'blog_edit',
                'blog_view',
                'blog_delete',
                'package_list',
                'package_add',
                'package_edit',
                'package_view',
                'package_delete',
                'package_list_list',
                'package_list_add',
                'package_list_edit',
                'package_list_view',
                'package_list_delete',
                'insurance_list',
                'insurance_add',
                'insurance_edit',
                'insurance_view',
                'insurance_delete',
                'terms',
                'privacy',
                'career',
                'user_list',
                'user_add',
                'user_edit',
                'user_view',
                'user_delete',
                'gallery',
                'log_viewer'
            ]);
        } else {
            $permissions = array_values(array_diff($permissions, [
                'homepage',
                'review_list',
                'review_add',
                'review_edit',
                'review_view',
                'review_delete',
                'blog_list',
                'blog_add',
                'blog_edit',
                'blog_view',
                'blog_delete',
                'insurance_list',
                'insurance_add',
                'insurance_edit',
                'insurance_view',
                'insurance_delete',
                'terms',
                'privacy',
                'career',
                'user_list',
                'user_add',
                'user_edit',
                'user_view',
                'user_delete',
                'log_viewer'
            ]));
        }

        User::where('id', $this->user)->update(array_merge($validatedData, ['permissions' => $permissions]));

        notify()->success('User Updated Successfully!');

        return $this->redirectRoute('admin.user.index');
    }

    public function mount($user)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = User::findOrFail($user);
            $this->name = $data->name;
            $this->email = $data->email;
            $this->password = $data->password;
            $this->role = $data->role;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.user-c-e-v');
    }
}
