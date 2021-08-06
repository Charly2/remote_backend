<template>
    <nav class="navbar_header">
        <div class="nav-wrapper">
            <div class="row contariner_actions">
                <div class="col m6 center">
                    <div class="fondo">
                        <a class='dropdown-trigger btn azul_celeste_btn title_action' href='#' data-target='fondo_dropdown'>Fondo</a>
                        <!-- Dropdown Structure -->
                        <div id='fondo_dropdown' class='dropdown-content'>
                            <div class="select_fondo">
                                @for($i = 1; $i <= 10; $i++)
                                <div class="item_fondo"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m6 center">
                    <div class="fondo">
                        <a class='btn red title_action' v-on:click="setlive()" ><i class="material-icons icon_live">fiber_manual_record</i> En Vivo</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import {mapState} from "vuex";

export default {
    name: "PreLiveSectionActions",
    computed:{
        ...mapState("PreliveStore",["preLiveSong"])
    },
    methods:{
        setlive(song){
            this.$emit("setliveSong")
        }
    }
}
</script>

<style scoped>
.contariner_actions{
    margin: 0;
    width: 100%;
}
.nav-wrapper{
    display: flex;
    align-items: center;
}
.title_action{
    font-size: .7rem;
}
</style>
