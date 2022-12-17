<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = QueryBuilder::for(User::class)
            ->defaultSort('name')
            ->allowedSorts('name', 'email', 'gender')
            ->allowedFilters('name', 'email', 'gender')
            ->paginate()
            ->withQueryString();

        return view('user.index', [
            'users' => SpladeTable::for($users)
                ->defaultSort('name')
                // ->withGlobalSearch('Search for what you want')
                ->rowLink(function (User $user) {
                    return route('user.show', $user);
                })
                ->column('name', 'Names', sortable: true, searchable: true)
                ->column('email', 'Email Address', sortable: true, searchable: true)
                ->column('gender', sortable: true, searchable: true)
                ->column('date_of_birth', 'Date of Birth', sortable: true, searchable: true)
                // ->column('biography', 'Biography', sortable: true, searchable: true)
                // ->column('agree_terms', 'Agree to Terms and Conditions', sortable: true, searchable: true)
                ->column('role', 'Role', sortable: true, searchable: true)
                // ->column('created_at','Date Created', sortable:true, searchable:true)
                // ->column('updated_at','Date Last Updated', sortable:true, searchable:true)
                ->column('actions', 'Actions', sortable: false, searchable: false, canBeHidden: false)
                ->selectFilter('gender', [
                    'Male' => 'Male',
                    'Female' => 'Female'
                ])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('user.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $gender = ['male', 'female'];
        $roles = ['admin', 'Manager', 'Developer', 'Editor', 'Writer'];
        return view('user.edit', [
            'user' => $user,
            'gender' => $gender,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'role' => ['required', 'string'],
            'date_of_birth' => ['required', 'date'],
            'biography' => ['required', 'string', 'max:200'],
            'gender' => ['required', 'string'],
            'agree_terms' => ['required', 'boolean'],
        ]);

        
        if ($data['gender'] == '0') {
            $data['gender'] = 'Male';
        } else {
            $data['gender'] = 'Female';
        }

        $user->update($data);

        Toast::title('The user was updated!!!')
            ->leftTop()
            ->backdrop()
            ->info()
            ->autoDismiss(1);

        return redirect()->route('users');
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
}
