@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Dashboard
                </header>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <!-- component -->
                    <div class="md:px-8 py-8 w-full">
                        <div class="shadow overflow-hidden rounded border-b border-gray-200">
                            <table class="min-w-full bg-white">
                                <thead class="bg-purple-400 text-white">
                                    <tr>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                        <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="tel:622322662">622322662</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    </p>
                </div>
            </section>
        </div>
    </main>
@endsection
