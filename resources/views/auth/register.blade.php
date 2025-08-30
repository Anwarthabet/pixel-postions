<x-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-2xl bg-white rounded-2xl shadow-lg p-8">
            <x-page-heading class="text-center mb-6">Register</x-page-heading>

   ssh-keygen -t ed25519 -C "anwar773bs@gmail.com
"          <x-forms.form method="POST" action="/register" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <!-- Row 1: Name & Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-forms.input 
                        name="name" 
                        label="Your Name" 
                        type="text" 
                        placeholder="Enter your full name" 
                        required
                    />
                    <x-forms.input 
                        name="email" 
                        label="Email Address" 
                        type="email" 
                        placeholder="Enter your email" 
                        required
                    />
                </div>

                <!-- Row 2: Password & Confirm Password -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-forms.input 
                        name="password" 
                        label="Password" 
                        type="password" 
                        placeholder="Enter your password" 
                        required
                    />
                    <x-forms.input 
                        name="password_confirmation" 
                        label="Confirm Password" 
                        type="password" 
                        placeholder="Confirm your password" 
                        required
                    />
                </div>

                <x-forms.divider>or</x-forms.divider>

                <!-- Row 3: Employer & Logo -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-forms.input 
                        name="employer" 
                        label="Employee Name" 
                        type="text" 
                        placeholder="Enter company or employer name"
                    />
                    <x-forms.input 
                        name="logo" 
                        label="Company Logo" 
                        type="file"
                    />
                </div>

                <x-forms.button class="w-full mt-4">
                    Register
                </x-forms.button>
            </x-forms.form>

            <p class="mt-6 text-center text-gray-500 text-sm">
                Already have an account? 
                <a href="/login" class="text-blue-500 hover:underline">Log In</a>
            </p>
        </div>
    </div>
</x-layout>
