<x-layout>
    <div class="px-6">
        <main class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 ">
            <div class="relative text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Modifier le Pokémon : {{$pokemon->name}}</h2>
            </div>
            <form action="{{route('pokemons.update',$pokemon->id)}}" method="POST" class="px-14 w-100 ">
                @csrf
                @method('PUT')
                <x-button-link :color="''" :href="route('pokemons.index')"
                               class="absolute left-0 top-0.5 text-indigo-600 hover:text-indigo-300"><i
                            class="ti ti-back-left"></i> Retour à la liste des Pokémons
                </x-button-link>
                <div class="flex justify-between gap-6 mx-auto w-1/2 p-6 rounded-xl border border-gray-500 shadow-xl">
                    <div class="flex-1">
                        <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                            Type du Pokémon
                        </label>
                        <x-input
                                name="type"
                                value="{{old('type',$pokemon->type)}}"
                                placeholder="Type du Pokémon"
                        />
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                            Nom du Pokémon
                        </label>
                        <x-input
                                name="name"
                                value="{{old('name', $pokemon->name)}}"
                                placeholder="Nom du Pokémon"
                        />
                        <x-input
                                name="image"
                                value="{{old('name', $pokemon->image)}}"
                                placeholder="URL de l'image du Pokémon"
                        />
                        <x-button :color="'indigo'" :type="'submit'"
                                  class="bg-indigo-600 hover:bg-indigo-200 hover:text-indigo-600">Modifier le Pokémon
                        </x-button>
                    </div>
                    <div class="flex-1">
                        <img src="{{$pokemon->image}}" alt="{{$pokemon->name}}" class="w-60 h-60 mx-auto" id="pokemon-image">
                    </div>
                </div>
            </form>
        </main>
    </div>
</x-layout>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('input[name="image"]').addEventListener('input', function (e) {
            let img = document.querySelector('#pokemon-image')
            validateImageUrl(e.target.value, function (isValid) {
                if (isValid) {
                    img.src = e.target.value;
                    img.parentElement.classList.remove('hidden');
                } else {
                    img.parentElement.classList.add('hidden');
                }
            });
        });

        function validateImageUrl(url, callback) {
            let img = new Image();
            img.src = url;
            img.onload = function () {
                callback(true);
            };
            img.onerror = function () {
                callback(false);
            };
        }
    });
</script>