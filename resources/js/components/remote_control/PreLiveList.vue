<template>
    <div class="list_live" id="list_prelive">
        <div class="title_prelive">{{SongActive.nombre}}</div>
        <verse-component
            v-for="(verse, index) in SongActive.data"
            v-bind:type="type"
            v-bind:id="index"
            :key="SongActive.nombre.replaceAll(' ','').trim()+index"
            @setPreliveSong="setActiveVerse"
        ></verse-component>
    </div>
</template>

<script>
import {mapMutations, mapState} from "vuex";

export default {
    name: "PreLiveList",
    data(){
        return {
            SongActive: {},
            VerseActive: {},
            type:"PRELIVE",
        };
    },
    watch: {
        preLiveSong(a,b) {
            this.SongActive = this.preLiveSong;
        }
    },
    methods:{
        ...mapMutations("PreliveStore",["setPreLiveVerse"]),
        setActiveVerse(verse){
            console.log("set Verse Active")
            this.setPreLiveVerse(verse)
        }
    },
    computed:{
        ...mapState("PreliveStore",["preLiveSong"]),
        ...mapState("PreliveStore",["preLiveVerse"]),
    }
}
</script>

<style scoped>
.title_prelive{
    color: #042C5C;
    font-size: 20px;
    text-align: center;
    font-weight: bold;
    position: sticky;
    top: 0;
    left: 0;
    z-index: 1000;
    background: #eff0f0;
    width: 100%;
}
</style>
