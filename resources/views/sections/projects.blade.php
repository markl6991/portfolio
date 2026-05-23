<section id="projects" class="py-32">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-20" data-aos="fade-up">

            <p class="uppercase tracking-[0.3em] text-cyan-400 text-sm mb-5">
                API Integration
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Live Crypto Market Dashboard
            </h2>

            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Example of real-time API integration using Laravel backend
                and external cryptocurrency market APIs.
            </p>

        </div>

        <!-- API Cards -->
        <div
            x-data="cryptoData()"
            x-init="fetchCoins()"
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

    </div>

</section>