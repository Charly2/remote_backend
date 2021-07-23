<template>
    <div class="card item_program"
         v-on:click="setActive()"
         v-bind:class="{ active: active }"
    >
        <div  class="title">{{ nombre }}</div>
    </div>
</template>

<script>
import {mapState} from "vuex";

export default {
    name: "SongProgramComponent",
    data(){
        return {
            active:false,
            nombre:"",
            id: null,
        };
    },
    mounted: function() {
        this.id = this.$el.getAttribute('id');
        this.nombre = this.$el.getAttribute('nombre');
        this.active = parseInt(this.preLiveSong.id) == parseInt(this.id);
    },
    methods:{
        setActive(){
            this.$emit("setliveSongMain",this.id)
        }
    },
    watch: {
        preLiveVerse(a,b) {
            this.active = parseInt(this.preLiveSong.id) == parseInt(this.id);
        },
        preLiveSong(a,b) {
            this.active = parseInt(this.preLiveSong.id) == parseInt(this.id);
        }
    },
    computed:{
        ...mapState("PreliveStore",["preLiveSong"]),

    },
}
</script>

<style scoped>

</style>
