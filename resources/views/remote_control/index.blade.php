@extends("remote_control.layout")

@section("main_content")

    <div id="app" class="row main_content">
        <main-viewer></main-viewer>
    </div>

@endsection
<script>
    import MainViewer from "../../js/components/remote_control/MainViewer";
    export default {
        components: {MainViewer}
    }
</script>
