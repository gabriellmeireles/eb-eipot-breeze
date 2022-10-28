<x-app-layout>  
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">Tipo de Usuário</h2>
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
</x-app-layout>