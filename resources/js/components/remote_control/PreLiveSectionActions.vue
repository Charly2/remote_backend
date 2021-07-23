<template>
    <nav class="navbar_header">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col m6 center">
                    <div class="fondo">
                        <a class='dropdown-trigger btn azul_celeste_btn' href='#' data-target='fondo_dropdown'>Fondo</a>
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
                        <a class='btn red' onclick="LIVE.setCanto(CANTOACTIVO)"><i class="material-icons icon_live">fiber_manual_record</i> En Vivo</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "PreLiveSectionActions"
}
</script>

<style scoped>

</style>
