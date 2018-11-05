<template lang="html">
    <div>
        <a class="followbtn" @click="doFollow"><i class="fas fa-user-plus"></i> Follow User</a>
    </div>
</template>

<script>
export default {
    props: ['userId', 'hasFollowed'],
    data() {
        return{
            dataHasFollowed: 0,
        }
    },
    mounted() {
        this.dataHasFollowed = this.hasFollowed
    },
    methods: {
        doFollow(){
            let type = 'follow';
            if(this.dataHasLiked){
                type = 'unfollow';
            }

            axios({
                method: 'GET',
                url: '/'+type+'/' + this.userId + '/',
            }).then((response) => {
                console.log(response);
                if(response.data.status == 'success'){
                    if(type == 'follow'){
                        this.dataHasFollowed = true;
                    } else {
                        this.dataHasFollowed = false;
                    }
                    return;
                }
            })
        },

        alert() {
            alert('hello')
        }
    }

}

</script>

<style lang="css">

</style>
