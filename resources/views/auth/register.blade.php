<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Shop - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FFAE00',
                        secondary: '#FFCD29',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#FFAE00] min-h-screen flex items-center justify-center p-4">
    <div class="flex w-full max-w-4xl bg-white rounded-[50px] shadow-2xl overflow-hidden">
        <!-- Left Side - Form Register -->
        <div class="w-1/2 bg-gray-50 p-10 flex flex-col justify-center rounded-l-[50px]">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Register</h2>
            
            <!-- Error Messages -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded-lg mb-3 text-xs">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                
                <!-- Username/Name -->
                <div>
                    <label for="name" class="block text-gray-900 text-sm font-medium mb-1.5">Username</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                        class="w-full px-4 py-2.5 border-2 border-[#FFCD29] rounded-full focus:outline-none focus:border-[#FFAE00] text-sm @error('name') border-red-500 @enderror"
                    >
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-900 text-sm font-medium mb-1.5">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="username"
                        class="w-full px-4 py-2.5 border-2 border-[#FFCD29] rounded-full focus:outline-none focus:border-[#FFAE00] text-sm @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Password -->
                <div>
                    <label for="password" class="block text-gray-900 text-sm font-medium mb-1.5">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        required
                        autocomplete="new-password"
                        class="w-full px-4 py-2.5 border-2 border-[#FFCD29] rounded-full focus:outline-none focus:border-[#FFAE00] text-sm @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-gray-900 text-sm font-medium mb-1.5">Confirm Password</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        class="w-full px-4 py-2.5 border-2 border-[#FFCD29] rounded-full focus:outline-none focus:border-[#FFAE00] text-sm"
                    >
                </div>
                
                <div class="text-center text-sm pt-1">
                    <span class="text-gray-700">Already have account ? </span>
                    <a href="{{ route('login') }}" class="text-gray-900 font-semibold underline hover:text-gray-700">
                        Login
                    </a>
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-[#FFCD29] text-gray-900 py-2.5 rounded-full text-base font-bold hover:bg-[#FFAE00] transition-all"
                >
                    Register
                </button>
            </form>
        </div>

        <!-- Right Side - Yellow Banner -->
        <div class="w-1/2 bg-[#FFCD29] p-10 flex flex-col justify-center items-center text-center">
            <h1 class="text-white text-5xl font-bold mb-8">Logo</h1>
            
            <p class="text-white text-base leading-relaxed mb-8">
                Welcome to furniture shop  lets buy your property for your dream house. Find your furniture and we can Delivery to your House (Example)
            </p>
            
            <button class="bg-transparent border-4 border-white text-white px-16 py-3 rounded-full text-lg font-semibold hover:bg-white hover:text-[#FFCD29] transition-all">
                Example
            </button>
        </div>
    </div>
</body>
</html>