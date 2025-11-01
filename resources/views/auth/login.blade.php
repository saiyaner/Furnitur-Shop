<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Shop - Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="flex w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden">
        <!-- Left Side - Yellow Banner -->
        <div class="w-1/2 bg-yellow-400 p-12 flex flex-col justify-center items-center text-center">
            <h1 class="text-white text-5xl font-bold mb-8">Logo</h1>
            
            <p class="text-white text-base leading-relaxed mb-8">
                Welcome to furniture shop lets buy your property for your dream house. Find your furniture and we can Delivery to your House (Example)
            </p>
            
            <button class="bg-white border-3 border-white text-[#FFAE00] px-12 py-3 rounded-full text-base font-semibold">
                Example
            </button>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="w-1/2 p-12 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Login</h2>
            
            <!-- Session Status / Success Message -->
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-lg mb-4 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-lg mb-4 text-sm">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf
                
                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-gray-900 text-sm font-medium mb-2">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        class="w-full px-4 py-3 border-2 border-yellow-400 rounded-xl focus:outline-none focus:border-yellow-500 text-sm @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Password -->
                <div>
                    <label for="password" class="block text-gray-900 text-sm font-medium mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        required
                        autocomplete="current-password"
                        class="w-full px-4 py-3 border-2 border-yellow-400 rounded-xl focus:outline-none focus:border-yellow-500 text-sm @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        name="remember"
                        class="rounded border-gray-300 text-yellow-400 shadow-sm focus:ring-yellow-500 w-4 h-4"
                    >
                    <label for="remember_me" class="ml-2 text-gray-700 text-sm">Remember me</label>
                </div>
                
                <div class="text-right text-sm">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-gray-700 hover:text-gray-900">
                            Forgot password?
                        </a>
                    @endif
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900 ml-3">
                            <span class="underline">register now</span>
                        </a>
                    @endif
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-yellow-400 text-gray-900 py-3 rounded-xl text-base font-semibold hover:bg-yellow-500 transition-all"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>