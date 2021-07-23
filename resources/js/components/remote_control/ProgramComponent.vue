<template>
    <div class="program">
        <div class="program_list">
            <song-program-component
                v-for="(item,index) in ListSong"
                v-bind:id="item.id"
                v-bind:nombre="item.nombre"
                :key="index"
                @setliveSongMain = "setPrelive"
            ></song-program-component>

        </div>
        <div class="program_actions">
            <div class="program_actions_item"><i class="material-icons dp48">add</i></div>
            <div class="program_actions_item"><i class="material-icons dp48">remove</i></div>
            <div class="program_actions_item"><i class="material-icons dp48">arrow_upward</i></div>
            <div class="program_actions_item"><i class="material-icons dp48">arrow_downward</i></div>
        </div>
    </div>
</template>

<script>
import {mapState} from "vuex";
import SongProgramComponent from "./SongProgramComponent";

export default {
    name: "ProgramComponent",
    components: {SongProgramComponent},
    computed:{
        ...mapState("PreliveStore",["ListSong"]),
        ...mapState("PreliveStore",["preLiveSong"]),
    },
    methods:{
        setPrelive(song){
            console.log("------"+song);
            let searchSong = this.ListSong.find(function (item) {
                return item.id == song;
            });
            this.$emit("setPreliveSong",searchSong)
        }
    }
}
</script>

<style scoped>

</style>
