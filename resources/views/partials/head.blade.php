<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mark Judeo Lorenzo | Portfolio</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Inter', sans-serif;
    }
</style>
<script>
    function themeHandler() {
        return {
            darkMode: false,

            initTheme() {
                this.darkMode =
                    localStorage.getItem('darkMode') === 'true';
            },

            toggleTheme() {
                this.darkMode = !this.darkMode;

                localStorage.setItem(
                    'darkMode',
                    this.darkMode
                );
            }
        }
    }
    function cryptoData() {

    return {

        coins: [],
        loading: true,

        async fetchCoins() {

            try {

                const response =
                    await fetch('/crypto-data');

                this.coins =
                    await response.json();

            } catch (error) {

                console.error(error);

            } finally {

                this.loading = false;

            }

        }

    }

}
</script>