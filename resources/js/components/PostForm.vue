<template lang="html">
    <div>

        <span class="postbtn" @click="toggleType">
            <i class="far" :class="browseGifs ? 'fa-keyboard' : 'fa-smile-wink'"></i>
        </span>
        <div class="inline" v-if="browseGifs">
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
        </div>
        <input type="text" ref="body" v-show="!browseGifs" placeholder="Enter Your Post" name="body">
        <button type="submit" v-show="!browseGifs" class="postbtn">Post</button>

        <input type="hidden" name="attachment" ref="attachment" value="">

        <input type="hidden" ref="media" name="media" value="0">
        <div class="selectedGif" v-show="showSelect">
            <img @click="unSelectGif()" :src="selectedGif" name="gif_comment">
        </div>
    </div>

</template>

<script>
export default {
    name: 'post-form',
    data() {
        return{
            browseGifs: false,
            search: null,
            gifs: [],
            selectedGif:' ',
            dropResult:false,
            showSelect: false
        }
    },
    methods: {
        toggleType() {

            this.browseGifs = !this.browseGifs;
        },
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
            this.$refs['attachment'].value = this.selectedGif;
            this.$refs['media'].value = 1;
            this.browseGifs = false;
            this.dropResult = false;
            this.showSelect = true;
        },
        unSelectGif()
        {
            this.selectedGif = "";
            this.$refs['attachment'].value = "";
            this.$refs['media'].value = 0;
            this.showSelect = false;
        }


    }
}
</script>

<style scoped lang="css">
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
    width: 100%;
    max-width: 600px;
}
.selectedGif img:hover{
    border: 2px solid red;
    box-shadow: 0px 0px 5px red;
    cursor: pointer;
}
.show {
    display: block !important;
}
</style>
