<template>
    <div class="list_live" id="list_live">
        <div class="title_prelive">{{SongActive.nombre}}</div>
        <verse-component
            v-for="(verse, index) in SongActive.data"
            v-bind:type="type"
            v-bind:id="index"
            :key="SongActive.nombre.replaceAll(' ','').trim()+index+type"
            @setPreliveSong="setActiveLiveVerse"
        ></verse-component>
    </div>
</template>

<script>
import VerseComponent from "./VerseComponent";
import { mapState,mapMutations,mapActions } from 'vuex';
export default {
    name: "LiveList",
    components: {VerseComponent},
    data(){
        return {
            SongActive: {},
            VerseActive: {},
            type:"LIVE",
        };
    },
    watch: {
        LiveSong(a,b) {
            this.SongActive = this.LiveSong;
        }
    },
    methods:{
        ...mapMutations("PreliveStore",["setLiveVerse"]),
        setActiveLiveVerse(verse){
            console.log("set Verse Active")
            this.setLiveVerse(verse)
        }
    },
    computed:{
        ...mapState("PreliveStore",["LiveSong"]),
        ...mapState("PreliveStore",["LiveVerse"]),
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
