<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\User;
use App\Models\Wallet;
use App\Referral;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash as FlashFlash;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function checkBlock($id)
    {
        $user = User::find($id);
        
        $users = $user->closeSiblings($user)->filter(function($item) {
            return $item->level != null;
        });

        return view('users.block', compact('users', 'user'));
    }

    public function createNewAccount(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|string',
           'email' => 'required|email|unique:users' ,
           'username' => 'required|string|unique:users|alpha_dash',
           'password' => 'required|string|min:8',
           'referral_link' => 'required'
        ]);

        // check if the referral link matches any one in the referral table
        $parent = Referral::where('referral_link', $request->referral_link)->first();

        if ($parent) {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'parent_id' => $parent->user_id,
                'password' => Hash::make($request->password),
            ]);

            $siblings = $user->siblings($user);

            if (!$siblings->isEmpty()) {
                // get total siblings
                $totalSiblings = $siblings->count();
                // get the last siblings level
                $lastSibling = $siblings->last();
                $level = $lastSibling->level;

                if ($totalSiblings >= 1 && $totalSiblings <= 3) {
                    $user->level = $level;
                    $user->save();
                }

                if ($totalSiblings == 3) {
                    $user->level = ++$level;
                    $user->save();
                }
            }

            if ($siblings->isEmpty()) {
                $users = User::all()->count();
                if ($users <= 2) {
                    $user->level = null;
                    $user->save();
                } else {
                    $user->level = 1;
                    $user->save();
                }
            }

            $wallet = Wallet::create([
                'user_id' => $user->id,
                'investment_plan_id' => '0'
            ]);

            if ($parent != null) {
                Referral::create([
                    'user_id' => $user->id,
                    'referral_link' => 'http://www.cleverfxinvestor.com/register?ref=' . $user->name,
                ]);
            } else {
                Referral::create([
                    'user_id' => $user->id,
                    'referral_link' => 'http://www.cleverfxinvestor.com/register?ref=' . $user->name,
                ]);
            }

            Flash::success('Account created');
        } else {
            Flash::error('Referral Link does not exist');
        }
      
        return back();
        // if no return referral link does not exist
        // if yes proceed in storing the user in the user table and also the referral table
        

        
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request,[
            'profile_picture' => ['required', 'image:jpeg,png,jpg'],
        ]);

        // Check if its a file

        
        $profile_pic = request('profile_picture') ? request('profile_picture')->store('profile_picture') : null;
        // Update User Profile
        $user = User::find(auth()->user()->id);
        $user->profile_pic = $profile_pic;
        $user->save();

        Flash::success('Profile Picture Updated Successful');


        return redirect()->back();
    }

    public function index(Request $request)
    {
        $users = User::latest()->paginate(8);
        $referrals = Referral::with('users')->get();

            $my_account = User::find(auth()->user()->id);

            $user = User::where('id', auth()->id())->with('referrals', 'credential')->first();
       
            if (auth()->user()->role_id == 1) {
                return view('users.index')
                ->with(['users' => $users, 'referrals' => $referrals, 'my_account' => $my_account]);
       }  else {
            return view('users.investors', compact('user'));
       }
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $user = $this->userRepository->create($input);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        // $user = $this->userRepository->find($id);
        $user  = User::where('id',$id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user->forceDelete($id);

        Flash::success('User deleted successfully.');

        return back();
    }
}