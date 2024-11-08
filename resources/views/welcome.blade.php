<x-layout>
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <a
                                href="{{route('pokemons.index')}}"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white pb-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                        >
                            <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                <img
                                        src="{{asset('storage/welcome.jpg')}}"
                                        alt="Pokemon List"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                />

                                <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                ></div>
                            </div>

                            <div class="relative flex items-center gap-6 lg:items-end px-6">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24">
                                            <path fill="#FF2D20"
                                                  d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/>
                                            <path fill="#FF2D20"
                                                  d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/>
                                        </svg>
                                    </div>

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Liste de
                                            POKEMON</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            Visitez la liste de nos POKEMONS ! Vous pouvez voir les détails de chaque
                                            pokemon et les modifier. Ou encore ajouter un nouveau pokemon à la liste.
                                        </p>
                                    </div>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                </svg>
                            </div>
                        </a>

                        <a
                                href="https://www.pokemon.com/us/pokemon-news/"
                                target="_blank"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FFCC00] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FFCC00]"
                        >
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FFCC00]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <g fill="#FFCC00">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C12.45 12.9 12 13.5 12 15h-2v-.5c0-.6.45-1.25 1.17-1.75l1.24-1.26c.37-.37.59-.88.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Pokémon News</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Stay updated with the latest Pokémon news, game updates, events, and features from the official Pokémon website. Perfect for trainers who want to keep up with everything in the Pokémon world!
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-[#FFCC00]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                            </svg>
                        </a>

                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FFCC00] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FFCC00]">
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FFCC00]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <g fill="#FFCC00">
                                        <path d="M8 15V5h2v10h4V5h2v10h-8z"/>
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Official Pokémon Resources</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Explore official resources like Pokémon Home, Pokémon TV, and other tools that enhance your Pokémon experience.
                                </p>
                            </div>
                            <svg class="size-6 shrink-0 self-center stroke-[#FFCC00]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                            </svg>
                        </div>

                        <a
                                href="https://www.pokemon.com/us/pokemon-video-games"
                                target="_blank"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FFCC00] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FFCC00]"
                        >
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FFCC00]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <g fill="#FFCC00">
                                        <path d="M8 15V5h2v10h4V5h2v10h-8z"/>
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Pokémon Video Games</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Discover the latest video games from the Pokémon series, including the newest releases and the most popular titles.
                                </p>
                            </div>
                            <svg class="size-6 shrink-0 self-center stroke-[#FFCC00]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                            </svg>
                        </a>
                    </div>
                </main>


            </div>
        </div>
    </div>
</x-layout>
