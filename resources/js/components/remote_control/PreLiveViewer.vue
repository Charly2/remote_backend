<template>
    <div class="live_viewer">
        <div class="bg_wrapper">
            <div class="wrapper_img"><img src="imgs/bg.jpg" alt=""></div>
            <div class="wrapper_text">
                <span class="inner_text" id="main_viewer_pre" >{{body}}</span>
            </div>
        </div>
    </div>
</template>

<script>
import {mapState} from "vuex";

export default {
    name: "PreLiveViewer",
    data(){
        return {
            body:"",
        };
    },
    watch: {
        preLiveVerse(a,b) {
            this.body = this.preLiveSong.data[parseInt(this.preLiveVerse)].body;
        },
        preLiveSong(a,b) {
            this.body = this.preLiveSong.data[parseInt(this.preLiveVerse)].body;
        }
    },
    computed:{
        ...mapState("PreliveStore",["preLiveVerse"]),
        ...mapState("PreliveStore",["preLiveSong"]),
    }
}
</script>

<style scoped>

</style>
