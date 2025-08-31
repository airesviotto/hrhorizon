
<div class="p-3 space-y-4 md:space-y-6 sm:p-8">
    
      <a href="#" class="w-full flex items-center mb-6 text-2xl font-semibold text-gray-700">
        <img class="w-8 h-8 mr-2" src="{{asset('/images/logo.png')}}" alt="logo" />{{env("APP_NAME")}}
      </a>

    <form class="space-y-4 md:space-y-6" action="#" method="POST">
      @csrf
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-black">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-100 border border-sky-500 rounded-lg focus:ring-primary-600 focus:border-sky-600 block w-full p-2.5" placeholder="name@company.com" required="">
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-black">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-100 border border-sky-500 text-gray-900 rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5" required="">
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-sky-500 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
                </div>
                <div class="ml-3 text-sm">
                  <label for="remember" class="text-gray-700">Remember me</label>
                </div>
            </div>
            <a href="#" class="text-sm font-medium  hover:underline text-sky-500">Forgot password?</a>
        </div>
        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
       
    </form>
</div>






