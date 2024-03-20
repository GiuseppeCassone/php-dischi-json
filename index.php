<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DISCHI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <div id="app">

        <header>
            <nav class="navbar h-100">
                <div class="container-fluid h-100 p-3">
                    <img class="h-100" src="./img/logo-spotify.png" alt="">
                </div>
            </nav>
        </header>

        <div class="container p-5">
            <div class="row flex-wrap">
                <div class="card" v-for="disk in disks">
                    <img :src="disk.poster" alt="">
                    <div class="text-center py-3 d-flex flex-column gap-3">
                        <h5>{{ disk.title }}</h5>
                        <span>{{ disk.author }}</span>
                        <span class="fw-bold">{{ disk.year }}</span>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <script src="./js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>