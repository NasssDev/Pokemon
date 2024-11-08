<x-layout>
    <x-button-link :color="''" :href="route('pokemons.index')" class="absolute left-0 top-0.5 text-indigo-600 hover:text-indigo-300"><i class="ti ti-back-left"></i> Retour à la liste des Pokémons</x-button-link>

    <main class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 w-1/2 mx-auto px-14">
        <div class="relative text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Créez un nouveau Pokemon</h2>
        </div>
        <form action="{{route('pokemons.store')}}" method="POST" >
            @csrf
            <div class="py-4 hidden">
                <img src="" alt="pokemon-image" class="w-40 h-40 object-cover mx-auto" id="pokemon-image">
            </div>
            <x-input
                    name="image"
                    value="{{old('image')}}"
                    placeholder="URL de l'image du Pokémon"
            />
            <x-input
                    name="type"
                    value="{{old('type')}}"
                    placeholder="Type du Pokémon"
            />
            <x-input
                    name="name"
                    value="{{old('name')}}"
                    placeholder="Nom du Pokémon"
            />
            <x-button :type="'submit'" class="bg-indigo-600 hover:bg-indigo-200 hover:text-indigo-600">Ajouter le Pokémon</x-button>
        </form>
    </main>
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