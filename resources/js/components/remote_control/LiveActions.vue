<template>
    <nav class="navbar_header">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right items">
                <li>
                    <a class="">
                        <div class="iconbtn">
                            <img src="imgs/icon_logo.svg" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a onclick="LIVE.setBlack(this)">
                        <div class="iconbtn">
                            <img src="imgs/icon_black.svg" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a onclick="LIVE.setClear(this)">
                        <div class="iconbtn">
                            <img src="imgs/icon_clear.svg" alt="">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: "LiveActions"
}
</script>

<style scoped>

</style>
