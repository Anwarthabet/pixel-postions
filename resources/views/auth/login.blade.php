<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
            <x-page-heading class="text-center mb-6">Log In</x-page-heading>

            <x-forms.form method="POST" action="/login" class="space-y-4">
                <x-forms.input 
                    label="Email" 
                    name="email" 
                    type="email" 
                    placeholder="Enter your email" 
                    required 
                    class="w-full"
                />

                <x-forms.input 
                    label="Password" 
                    name="password" 
                    type="password" 
                    placeholder="Enter your password" 
                    required 
                    class="w-full"
                />

                <div class="flex justify-between items-center text-sm text-gray-600">
                    <label>
                        <input type="checkbox" name="remember" class="mr-1">
                        Remember me
                    </label>
                    <a href="/forgot-password" class="text-blue-500 hover:underline">
                        Forgot Password?
                    </a>
                </div>

                <x-forms.button class="w-full mt-4">
                    Log In
                </x-forms.button>
            </x-forms.form>

            <p class="mt-6 text-center text-gray-500 text-sm">
                Don't have an account? 
                <a href="/register" class="text-blue-500 hover:underline">Sign Up</a>
            </p>
        </div>
    </div>
</x-layout>
