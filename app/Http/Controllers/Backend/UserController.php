<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use TPG\Deadbolt\Facades\Deadbolt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_if(Gate::denies('user_list'), 403);

        return view('pages.backend.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('user_add'), 403);

        $user = null;

        return view('pages.backend.users.cev', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        abort_if(Gate::denies('user_view'), 403);

        $user = $user->id;

        return view('pages.backend.users.cev', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), 403);

        $user = $user->id;

        return view('pages.backend.users.cev', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function permission_edit($id)
    {
        abort_if(Gate::denies('user_permissions_edit'), 403);

        $data = User::findOrFail($id);
        if (auth()->user()->role != 'Super Admin') {
            $all_permissions = array_diff(Deadbolt::all(), ['log_viewer']);
        } else {
            $all_permissions = Deadbolt::all();
        }
        $not_selected_permissions = array_diff($all_permissions, $data->permissions);

        return view('pages.backend.users.permissions', compact('data', 'not_selected_permissions'));
    }

    public function permission_save(Request $request, $id)
    {
        abort_if(Gate::denies('user_permissions_edit'), 403);

        $request->validate([
            'permissions' => 'required',
        ]);

        User::findOrFail($id)->update([
            'permissions' => $request->permissions,
        ]);

        return redirect()->route('admin.user.index');
    }
}
