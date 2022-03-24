@extends('theme')
@section('title')
    Home
@endsection


@section('home')


    <div class="mt-10 mb-10 text-center">

        <h2 class="font-bold text-2xl"> Latest Articles </h2>

    </div>
    <div class="container max-w-5xl mx-auto mb-14">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="object-cover h-48 w-full"
                         decoding="async" src="{{ asset('vue3autocomplate.png') }}"
                         alt="How to build an autocomplete field with Vue 3" style="object-fit: cover; opacity: 1;">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl">How to build an autocomplete field with Vue 3</h3>
                        <p class="text-gray-500 mt-3">Create an autocomplete/auto-suggest search field with Vue 3 and
                            the Composition API without
                            using any external packages</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="object-cover h-48 w-full"
                         decoding="async" src="{{ asset('second.png') }}"
                         alt="How to build an autocomplete field with Vue 3" style="object-fit: cover; opacity: 1;">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl">Adding a Markdown editor to Laravel</h3>
                        <p class="text-gray-500 mt-3">Use a Markdown editor for a much better content creation process,
                            and the ability to migrate content to other systems with ease</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="object-cover h-48 w-full"
                         decoding="async" src="{{ asset('third.png') }}"
                         alt="How to build an autocomplete field with Vue 3" style="object-fit: cover; opacity: 1;">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl">WordPress Barebones starter script and theme</h3>
                        <p class="text-gray-500 mt-3">Use this script to get up and running quickly with a new WordPress
                            website</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="object-cover h-48 w-full"
                         decoding="async" src="{{ asset('fourth.png') }}"
                         alt="How to build an autocomplete field with Vue 3" style="object-fit: cover; opacity: 1;">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl">Integrating Mailchimp with a contact form</h3>
                        <p class="text-gray-500 mt-3">Use the Mailchimp API to automatically subscribe users to your
                            newsletter when submitting a contact form</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10 mb-10 text-center">

        <h2 class="font-bold text-2xl"> Latest Snippets</h2>

    </div>
    <div class="container max-w-5xl mx-auto mb-14">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl text-center">syntax in Vue 3</h3>
                        <p class="text-gray-500 mt-3 text-center">Reduce code and improve performance</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl text-center">High CPU usage with Docker on M1 Macs</h3>
                        <p class="text-gray-500 mt-3 text-center">These are the settings I used to avoid this issue</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl text-center">Passing arguments to get_template_part</h3>
                        <p class="text-gray-500 mt-3 text-center">Using the built-in WordPress function to encourage reusable components</p>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-xl shadow-lg overflow-hidden">
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <a href="">
                        <h3 class="text-blue-600 font-bold text-xl text-center">Refactoring Laravel models into a dedicated folder</h3>
                        <p class="text-gray-500 mt-3 text-center">Improve the organisation of your projects</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
