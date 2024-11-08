<x-layout>
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        {{--<img id="background" class="absolute top-0 bottom-0 left-0 w-full h-full object-cover"
             src="" alt=""/>--}}
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <main class="mt-10 container mx-auto p-6 rounded-xl border border-gray-500 shadow-xl">
                    <div class="relative text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800">Pokémon List</h2>
                        <x-button-link :color="''" :href="route('pokemons.create')"
                                       class="absolute right-0 top-0.5 bg-emerald-600 hover:bg-emerald-200 hover:text-emerald-600 w-10 h-10">
                            <i class="ti ti-plus font-bold"></i></x-button-link>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach($pokemons as $pokemon)
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                                <div class="w-full h-48 bg-slate-100 border-b-4 border-indigo-400">
                                    <img src="{{$pokemon->image}}"
                                         alt="{{$pokemon->name}}"
                                         class="w-4/5 h-48 mx-auto object-center"
                                    />
                                </div>

                                <div class="p-4 flex flex-col items-center relative">
                                    <div class="flex-cols absolute right-1 top-1">
                                        <a href="{{route('pokemons.edit', $pokemon->id)}}" class="hover:text-cyan-600 ">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="{{route('pokemons.destroy', $pokemon->id)}}" class="inline"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button id="delete-pokemon" type="submit" class="inline hover:text-red-600 ">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wide">{{$pokemon->type}}</span>
                                    <span class="mt-2 text-xl font-bold text-gray-800">{{$pokemon->name}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-layout>
<script>
    // display swal alert when deleting a pokemon
    document.querySelectorAll('#delete-pokemon').forEach((button) => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Êtes-vous sûr?',
                text: "Vous ne pourrez pas revenir en arrière!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.closest('form').submit();
                }
            })
        });
    });
</script>