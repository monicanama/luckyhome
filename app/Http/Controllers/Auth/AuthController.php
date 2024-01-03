<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
   // clients
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function landing()
    {
        return view('landing');
    }  

    public function login()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Retrieve the authenticated user
            $user = Auth::user();
            
            // Store the username in a session variable
            session(['username' => $user->name]);
            
            return redirect()->intended('dashboard')
                ->withSuccess('You have successfully logged in');
        }
    
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
        ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
    
        return Redirect('login');
    }

    // pages
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function shop()
    {
        return view('shop');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function order()
    {
        return view('order');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function products()
    {
        return view('products');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function tracking()
    {
        return view('tracking');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    // admin
    public function adminpostLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Retrieve the authenticated user
            $user = Auth::user();
            
            // Store the username in a session variable
            session(['username' => $user->name]);
            
            return redirect()->intended('admindashboard')
                ->withSuccess('You have successfully logged in');
        }
    
        return redirect("adminlogin")->withSuccess('Oppes! You have entered invalid credentials');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function adminindex()
    {
        return view('auth.adminlogin');
    }  
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function adminaddproduct()
    {
        return view('adminaddproduct');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function admindashboard()
    {
        if(Auth::check()){
            return view('admindashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function adminlogout() {
        Session::flush();
        Auth::logout();
        // Auth::guard('admin')->logout();
    
        return Redirect('adminlogin');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
}
