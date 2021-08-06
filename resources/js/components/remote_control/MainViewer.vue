<template>
    <div class="">
        <div class="col m4 main_section" id="select_section">
            <nav class="navbar_header">
                <div class="nav-wrapper" >
                    <a href="#" class="brand-logo"><img src="/imgs/logo_white.svg" alt=""></a>
                </div>
            </nav>
            <program-component @setPreliveSong="setPreSong"></program-component>
            <list-song-component></list-song-component>
        </div>
        <div class="col m4 main_section" id="pre_live_section">
            <pre-live-section-actions @setliveSong="setLiveSongEvent"></pre-live-section-actions>
            <pre-live-list></pre-live-list>
            <pre-live-viewer></pre-live-viewer>
        </div>
        <div class="col m4 main_section" id="live_section">
            <live-actions></live-actions>
            <live-list></live-list>
            <live-viewer></live-viewer>
        </div>
    </div>
</template>

<script>
import ProgramComponent from "./ProgramComponent";
import ListSongComponent from "./ListSongComponent";
import PreLiveSectionActions from "./PreLiveSectionActions";
import PreLiveList from "./PreLiveList";
import PreLiveViewer from "./PreLiveViewer";
import LiveActions from "./LiveActions";
import LiveList from "./LiveList";
import LiveViewer from "./LiveViewer";
import { mapState,mapMutations,mapActions } from 'vuex';
export default {
    name: "MainViewer",
    data(){
        return {
            PreLivesong:{},
        };
    },
    components: {
        LiveViewer,
        LiveList,
        LiveActions, PreLiveViewer, PreLiveList, PreLiveSectionActions, ListSongComponent, ProgramComponent},
    computed:{
        ...mapState("PreliveStore",["preLiveSong"]),
        ...mapState("PreliveStore",["preLiveVerse"])
    },
    methods:{
        ...mapMutations("PreliveStore",["setPreLiveSong","setLiveSong"]),
        ...mapMutations("PreliveStore",["setPreLiveVerse"]),
        setPreSong(song){
            this.setPreLiveSong(song);
            console.log(song.data[0]);
            this.setPreLiveVerse(0);
        },
        setLiveSongEvent(){
            this.setLiveSong(this.preLiveSong)
        }
    }
}
</script>s

<style scoped>

</style>
