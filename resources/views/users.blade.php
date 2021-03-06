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


                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <!-- component -->
                            <h1 class="m-auto">Users Avaliable: {{ $users->count() }}</h1>

                    <div class="md:px-8 py-8 w-full">
                        <div class="shadow overflow-hidden rounded border-b border-gray-200">
                            <table class="min-w-full bg-white ">
                                <thead class="bg-purple-400 text-white">
                                    <tr>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm border border-purple-600">Name</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm border border-purple-600">Email Address</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm border border-purple-600">Joined</td>
                                    </tr>
                                </thead>
                                @foreach ($users as $user)
                                     <tr>
                                        <td class="w-1/3 text-left py-3 px-4 border border-purple-600">{{ $user->name }}</td>
                                        <td class="text-left py-3 px-4 border border-purple-600"><a class="hover:text-blue-500"
                                                href="tel:622322662">{{ $user->email }}</a></td>
                                        <td class="text-left py-3 px-4 border border-purple-600"><a class="hover:text-blue-500"
                                                href="mailto:jonsmith@mail.com">{{ $user->updated_at->diffForHumans() }}</a></td>
                                    </tr>
                                @endforeach
                                <tbody class="text-gray-700">
                                   

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
