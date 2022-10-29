<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <h2 class=" font-semibold text-xl text-gray-800 leading-tight uppercase">
                {{ __($pageTitle) }}
            </h2>
            <!-- Botão que chama o Modal de cadastro de novo USER_TYPE-->
            <button type="button" data-modal-toggle="create-user-type-modal" class="ml-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                Add
              </button>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Nome
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Data de Criação
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Data de Atualização
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ( $userTypes as $userType )
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $userType->id }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $userType->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $userType->created_at->format('j M Y, G:i') }}
                                    </td>

                                    <td class="py-4 px-6 ">
                                        @if ($userType->created_at->ne($userType->updated_at))
                                            {{ $userType->updated_at->format('j M Y, G:i') }}
                                        @else
                                            ---
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <span class="mx-1"> &middot; </span>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('user-type.store') }}">
                        @csrf
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="user_type_name" id="user_type_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="user_type_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
                        </div>
                        <x-input-error :messages="$errors->get('user_type_name')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ 'Cadastrar' }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
