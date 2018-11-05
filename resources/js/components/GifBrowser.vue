<template lang="html">
    <div class="inline">
            <input type="text"
            @keypress.enter.prevent="doSearch"
            v-model="search"
            placeholder="Search for GIFS...">

            <a type="search" name="button" class="postbtn" @click="doSearch">Search</a>

            <div class="gifResult" :class="{'show' : dropResult}">
                <a href="#" v-for="gif in gifs" @click="selectGif(gif.images)">
                    <img :src="gif.images.original.url" alt="gif">
                </a>
            </div>

        <div class="selectedGif" v-show="showSelect">
            <img :src="selectedGif" name="gif_comment">
        </div>
    </div>
</template>

<script>
export default {
    name: 'gifBrowser',
    data() {
        return{
            search: null,
            gifs: [],
            selectedGif:' ',
            dropResult:false,
            showSelect: false
        }
    },
    methods: {
        doSearch()
        {
            if(!this.search){
                return false
            }

            this.gifs = [];
            this.dropResult = false;

            axios.get('https://api.giphy.com/v1/gifs/search?q='+this.search+'&api_key=w4SBZbdOPGDTz4UwfTyD5Jez0DtfJs7K&limit=12')
            .then((response) => {
                console.log(response);

                this.loadGifs(response.data.data);
            })
        },
        loadGifs(data)
        {
            this.gifs = data;
            this.dropResult = true;
        },
        selectGif(data)
        {
            this.selectedGif = data.original.url;
            this.$emit('gifSelected', this.selectedGif);
            this.dropResult = false;
            this.showSelect = true;
        }
    }
}
</script>

<style lang="css" scoped>

.gifResult {
    margin-top: 10px;
    display: none;
    box-shadow: 0 0 3px black;
    border-radius: 5px;
    padding: 0.5em;
    overflow-y: auto;
    height: 200px;
}
.gifResult img {
    margin: 1px;
    width: 30%;
    border-radius: 10px;
}
.selectedGif {
    display: block;
    padding: 2em;
}
.selectedGif img {
    max-width: 600px;
}
.show {
    display: block !important;
}
</style>
