<?php

include __DIR__ . "/partials/database.php";
include __DIR__ . "/partials/header.php";


?>


    <main>
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
            <!-- <div v-for="album in albums" v-show="album.genre == genreSelected || genreSelected == 'All'" class="single_album">
                <img :src="album.poster" alt="">
                <h3 class="title">{{album.title}}</h3>
                <p class="author">{{album.author}}</p>
                <p>{{album.year}}</p>
            </div> -->

            <?php foreach($dischi as $disco) :?>
                <div class="single_album">
                    <img src="<?php echo $disco["poster"]; ?>" alt="">
                    <h3 class="title"><?php echo $disco["title"]; ?></h3>
                    <p class="author"><?php echo $disco["author"]; ?></p>
                    <p><?php echo $disco["year"]; ?></p>
                </div>

            <?php endforeach; ?>

        </div>
    </main>
    </main>
        
    </body>
</html>