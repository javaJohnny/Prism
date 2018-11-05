<template lang="html">
    <div class="likeBtn">
        <p>
            {{dataLikeCount}}
        </p>
        <a @click="doLike">
            Like
        </a>
    </div>
</template>

<script>
export default {
    props: ['postId', 'hasLiked', 'likeCount'],
    data() {
        return{
            dataHasLiked: 0,
            dataLikeCount: 0,
        }
    },
    mounted() {
        this.dataHasLiked = this.hasLiked;
        this.dataLikeCount = this.likeCount
    },
    methods: {
        doLike(){
            let type = 'like';
            if(this.dataHasLiked){
                type = 'unlike';
            }

            axios({
                method: 'POST',
                url: '/'+type+'/' + this.postId + '/',
            }).then((response) => {
                console.log(response);
                if(response.data.status == 'success'){
                    if(type == 'like'){
                        this.dataLikeCount++;
                        this.dataHasLiked = true;
                    } else {
                        this.dataLikeCount--;
                        this.dataHasLiked = false;
                    }
                    return;
                }
            })
        },

    }

}

</script>

<style lang="css">
    .likeBtn{
        display: inline;
    }
    .likeBtn:hover {
        cursor: pointer;
    }
    .likeBtn a {
        margin-left: 0;
    }

    .likeBtn p {
        margin-left: 0;
        display: inline;
        font-size: 1.5em;
    }

</style>
