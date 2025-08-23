<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register">
        <x-forms.input name="name" label="Your Name"></x-forms.input>
        <x-forms.input name="email" label="Email Address"></x-forms.input>
        <x-forms.input name="password" label="Password"></x-forms.input>
    </x-forms.form>
</x-layout>
