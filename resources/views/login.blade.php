@extends('layouts.master')
@section('title')

<title>Login</title>
@endsection


@section('logordashboard')


    <section class="bg-gray-50 mt-0 ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-[500px] mt-[40px] lg:py-10">
            
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-8 dark:bg-gray-800 dark:border-gray-700">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="assest/images/logo.webp" class="w-[60%] m-auto mt-3" alt=" Logo" />
                </a>
                <div class="p-0 space-y-4 md:space-y-2 sm:px-2">
                    <h1 class="text-[32px] font-normal leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to Admin Dashboard
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{route('login')}}" method="POST">
                        {{-- <input type="hidden" name="CSRFToken" value="{{ csrf_token() }}"> --}}
                        
                        {{ csrf_field() }}
                       
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            {{-- <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" >
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div> --}}
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline text-stone-100">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full  text-white bg-blue-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                        
                    </form>
                </div>
            </div>
        </div>
      </section>
   

@endsection
