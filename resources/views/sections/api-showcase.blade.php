<section id="api-showcase" class="py-32">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-24" data-aos="fade-up">

            <p class="uppercase tracking-[0.3em] text-cyan-400 text-sm mb-5">
                Live API Integrations
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Real-Time API Showcase
            </h2>

            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Demonstrating real-world API integrations using Laravel backend routes,
                asynchronous requests, JSON handling, and dynamic frontend rendering.
            </p>

        </div>

        <div
            x-data="cryptoData()"
            x-init="fetchCoins()"
            class="mb-32"
        >

            <!-- Loading -->
            <div
                x-show="loading"
                class="grid md:grid-cols-3 gap-8"
                
            >

                <template x-for="i in 6">

                    <div class="p-8 rounded-3xl bg-black/[0.03] dark:bg-white/5 border border-black/10 dark:border-white/10 animate-pulse">

                        <div class="h-6 w-32 bg-black/10 dark:bg-white/10 rounded mb-6"></div>

                        <div class="h-10 w-40 bg-black/10 dark:bg-white/10 rounded mb-4"></div>

                        <div class="h-5 w-24 bg-black/10 dark:bg-white/10 rounded"></div>

                    </div>

                </template>

            </div>

            <!-- Data -->
            <div
                x-show="!loading"
                class="grid md:grid-cols-3 gap-8"
            >

                <template x-for="coin in coins" :key="coin.id">

                    <div class="p-8 rounded-3xl bg-black/[0.03] dark:bg-white/5 border border-black/10 dark:border-white/10 hover:border-cyan-400 hover:-translate-y-2 transition duration-300">

                        <div class="flex items-center gap-4 mb-6">

                            <img
                                :src="coin.image"
                                :alt="coin.name"
                                class="w-14 h-14 rounded-full"
                            >

                            <div>

                                <h3
                                    class="text-2xl font-bold"
                                    x-text="coin.name"
                                ></h3>

                                <p
                                    class="uppercase text-sm text-gray-500"
                                    x-text="coin.symbol"
                                ></p>

                            </div>

                        </div>

                        <div class="mb-5">

                            <p class="text-gray-500 text-sm mb-2">
                                Current Price
                            </p>

                            <h4
                                class="text-4xl font-bold"
                                x-text="'$' + coin.current_price.toLocaleString()"
                            ></h4>

                        </div>

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-gray-500 text-sm">
                                    24h Change
                                </p>

                                <p
                                    class="font-semibold"
                                    :class="coin.price_change_percentage_24h >= 0
                                        ? 'text-green-500'
                                        : 'text-red-500'"
                                    x-text="coin.price_change_percentage_24h.toFixed(2) + '%'"
                                ></p>

                            </div>

                            <div>

                                <p class="text-gray-500 text-sm">
                                    Market Cap
                                </p>

                                <p
                                    class="font-semibold"
                                    x-text="'$' + (coin.market_cap / 1000000000).toFixed(1) + 'B'"
                                ></p>

                            </div>

                        </div>

                    </div>

                </template>

            </div>

        </div>

        <!-- GitHub Section -->
        <div
            x-data="githubData()"
            x-init="fetchGitHub()"
            class="mb-32"
        >

            <h3 class="text-3xl font-bold mb-10">
                GitHub Integration
            </h3>

            <div
                x-show="profile"
                class="p-8 rounded-3xl bg-black/[0.03] dark:bg-white/5 border border-black/10 dark:border-white/10"
            >

                <div class="flex flex-col md:flex-row items-start md:items-center gap-8">

                    <img
                        :src="profile.avatar_url"
                        class="w-28 h-28 rounded-full"
                    >

                    <div>

                        <h4
                            class="text-3xl font-bold mb-3"
                            x-text="profile.name"
                        ></h4>

                        <p
                            class="text-gray-600 dark:text-gray-400 mb-5"
                            x-text="profile.bio"
                        ></p>

                        <div class="flex flex-wrap gap-6 text-sm">

                            <p>
                                Repositories:
                                <span
                                    class="text-cyan-400 font-semibold"
                                    x-text="profile.public_repos"
                                ></span>
                            </p>

                            <p>
                                Followers:
                                <span
                                    class="text-cyan-400 font-semibold"
                                    x-text="profile.followers"
                                ></span>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Weather Section -->
        <div
            x-data="weatherData()"
            x-init="fetchWeather()"
            class="mb-32"
        >

            <h3 class="text-3xl font-bold mb-10">
                Weather Dashboard
            </h3>

            <div class="p-8 rounded-3xl bg-black/[0.03] dark:bg-white/5 border border-black/10 dark:border-white/10">

                <div class="flex flex-col md:flex-row gap-6 mb-8">

                    <input
                        type="text"
                        x-model="city"
                        placeholder="Enter city..."
                        class="flex-1 px-6 py-4 rounded-2xl bg-transparent border border-black/10 dark:border-white/10 outline-none"
                    >

                    <button
                        @click="fetchWeather()"
                        class="px-8 py-4 rounded-2xl bg-cyan-400 text-black font-semibold"
                    >
                        Search
                    </button>

                </div>

                <div
                    x-show="weather"
                    class="grid md:grid-cols-3 gap-8"
                >

                    <div>

                        <p class="text-gray-500 mb-2">
                            Temperature
                        </p>

                        <h4
                            class="text-5xl font-bold"
                            x-text="weather.current_condition[0].temp_C + '°C'"
                        ></h4>

                    </div>

                    <div>

                        <p class="text-gray-500 mb-2">
                            Condition
                        </p>

                        <h4
                            class="text-3xl font-bold"
                            x-text="weather.current_condition[0].weatherDesc[0].value"
                        ></h4>

                    </div>

                    <div>

                        <p class="text-gray-500 mb-2">
                            Humidity
                        </p>

                        <h4
                            class="text-3xl font-bold"
                            x-text="weather.current_condition[0].humidity + '%'"
                        ></h4>

                    </div>

                </div>

            </div>

        </div>

        <!-- Anime Section -->
        <div
            x-data="animeData()"
            x-init="fetchAnime()"
        >

            <h3 class="text-3xl font-bold mb-10">
                Trending Anime API
            </h3>

            <div class="grid md:grid-cols-3 gap-8">

                <template x-for="item in anime" :key="item.mal_id">

                    <div class="rounded-3xl overflow-hidden bg-black/[0.03] dark:bg-white/5 border border-black/10 dark:border-white/10 hover:border-cyan-400 hover:-translate-y-2 transition duration-300">

                        <img
                            :src="item.images.jpg.large_image_url"
                            class="w-full h-[400px] object-cover"
                        >

                        <div class="p-6">

                            <h4
                                class="text-2xl font-bold mb-3 line-clamp-1"
                                x-text="item.title"
                            ></h4>

                            <p
                                class="text-gray-500 mb-3"
                                x-text="'Score: ' + item.score"
                            ></p>

                            <p
                                class="text-gray-600 dark:text-gray-400 text-sm line-clamp-3"
                                x-text="item.synopsis"
                            ></p>

                        </div>

                    </div>

                </template>

            </div>

        </div>

    </div>

</section>