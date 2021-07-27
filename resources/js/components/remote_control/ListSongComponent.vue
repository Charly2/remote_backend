<template>
    <div class="list_song">
        <div class="list_song_search">
            <div class="list_song_search-search">
                <i class="material-icons">search</i>
            </div>
            <div class="list_song_search-input">
                <input type="text" v-model="searchValue" placeholder="Busca Tu Canto" id="search-input">
            </div>
            <div class="list_song_search-clear pointer "          >
                <i class="material-icons" v-bind:click="clearFilter()"  >close</i>
            </div>
        </div>
        <div class="list_song_list ">

            <div v-for="(song, index) in filteredRecipes" :key="index+'_'+song.id" class="list_song_list-item">{{song.nombre}}</div>

        </div>
    </div>
</template>

<script>
import {mapActions, mapState,mapGetters} from "vuex";

export default {
    name: "ListSongComponent",
    data(){
        return {
            searchValue: '',
        }
    },
    methods:{
        ...mapActions("PreliveStore",["getSongs"]),
        clearFilter(){
            console.log("clear")
            //this.searchValue = "";
        }
    },
    computed:{
        ...mapState("PreliveStore",["ListSongs"]),
        ...mapGetters("PreliveStore",['ListSongsGetters']),
        filteredRecipes() {
            let tempsongs = this.ListSongs;
            if (this.searchValue != '' && this.searchValue) {
                tempsongs = tempsongs.filter((item) => {
                    return item.nombre
                        .toUpperCase()
                        .includes(this.searchValue.toUpperCase())
                })
            }
            return tempsongs;
        }
    },
    mounted() {
        this.getSongs()
    }
}
</script>

<style scoped>
    .pointer:hover{
        cursor: pointer;
    }
</style>
