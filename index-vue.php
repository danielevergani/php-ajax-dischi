<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>dischi</title>
    </head>
    <body>
    <header>
        <div class="logo__section">
            <img src="img/download.png" alt="logo">
        </div>
    </header>
    <main>
    <main>
        <!-- selezione genere -->
        <div class="genre__selection">
            <label for="genere">Scegli il tuo genere preferito</label>
            <select v-model="genreSelected" name="genere" id="genere">
                <option  v-for="genere in genre" :value="genere"> {{genere}} </option>
            </select>
        </div>
        
        <!--end selezione genere -->

        <div class="album__section">
            <div v-for="album in albums" v-show="album.genre == genreSelected || genreSelected == 'All'" class="single_album">
                <img :src="album.poster" alt="">
                <h3 class="title">{{album.title}}</h3>
                <p class="author">{{album.author}}</p>
                <p>{{album.year}}</p>
            </div>
        </div>
    </main>
    </main>
        
    </body>
</html>