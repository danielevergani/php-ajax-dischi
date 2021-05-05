var app = new Vue ({
    el: `#app`,
    data: {
        albums: []
    },
    mounted: function(){
        axios.get("http://localhost/php-ajax-dischi/partials/api.php")
        .then( response => {
            console.log(response.data);
        })
    }
});