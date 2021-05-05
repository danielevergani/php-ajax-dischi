<?php

include __DIR__ . "/partials/header.php";

?>

    <main>
        <!-- selezione genere
        <div class="genre__selection">
            <label for="genere">Scegli il tuo genere preferito</label>
            <select v-model="genreSelected" name="genere" id="genere">
                <option  v-for="genere in genre" :value="genere"> {{genere}} </option>
            </select>
        </div> -->
        
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

    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/script.js"></script>
    </body>
</html>