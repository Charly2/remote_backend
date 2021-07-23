<template>
    <div class="item_live card" v-on:click="setActive()" v-bind:class="{ active: active }" >
        <div class="img_preview">
            <div class="wrapper">
                <div class="wrapper_img"><img src="imgs/bg.jpg" alt=""></div>
                <div class="wrapper_text">
                    <span class="inner_text">{{verse.body}}</span>
                </div>
            </div>
        </div>
        <div class="text_preview">
            <div class="title_item">{{verse.title}}</div>
            <div class="body_item">{{verse.body}}</div>
        </div>
    </div>
</template>

<script>
import {mapState} from "vuex";

export default {
    name: "VerseComponent",
    data(){
        return {
            id:"",
            img:"",
            type:"",
            active:false,
            verse:"",
        };
    },
    mounted: function() {
        this.id = this.$el.getAttribute('id');
        this.type = this.$el.getAttribute('type');
        this.verse=this.preLiveSong.data[this.id];
        this.active = parseInt(this.preLiveVerse) == parseInt(this.id);
    },
    watch: {
        preLiveVerse(a,b) {
            this.active = parseInt(this.preLiveVerse) == parseInt(this.id);
        },
        preLiveSong(a,b) {
            this.active = parseInt(this.preLiveVerse) == parseInt(this.id);
        }
    },
    computed:{
        ...mapState("PreliveStore",["preLiveSong"]),
        ...mapState("PreliveStore",["preLiveVerse"]),

    },
    methods:{
        setActive(){
            if (this.type=="LIVE"){
                this.$emit("setliveSong",this.id)
            }else{
                this.$emit("setPreliveSong",this.id)
            }
        }
    }
}
</script>

<style scoped>

</style>
