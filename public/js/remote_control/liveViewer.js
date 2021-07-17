class LiveViewer {
    constructor() {
        this.canto;
        this.clear = false;
        this.black = false;
    }

    toString() {
        console.log(this.title, this.body,this.background);
    }

    setClear(){
        if (this.clear){
            $("#main_viewer").fadeIn();
            this.clear = false;
        }else{
            $("#main_viewer").fadeOut();
            this.clear = true;
        }
    }

    activeFirst(){
        var item = $(".item_live","#list_live").first();
        var txt = item.find(".body_item").html();
        LIVE.setActive(item,txt);
    }

    setBlack(){
        if (this.black){
            this.clear = true;
            this.setClear();
            $("img","#live_viewer_main_innner").fadeIn();
            this.black = false;
        }else{
            $("img","#live_viewer_main_innner").fadeOut();
            this.black = true;
            this.clear = false;
            this.setClear();
        }
    }

    setCanto(canto){
        this.canto = canto;
        this.setData();
        this.activeFirst();
    }

    setData(){
        $("#list_live").html("");
        this.canto.data.map(function (item) {
            let estrofa = new Estrofa(item.title,item.body,BG,"#list_live",true);
            estrofa.render();
        });
    }



    setActive(ele,data){
        $(".item_live.active").removeClass("active");
        $(ele).addClass("active");
        $("#main_viewer").html(data);
    }
}

class PreLiveViewer {
    constructor() {
        this.canto;
        this.clear = false;
        this.black = false;
    }

    toString() {
        console.log(this.title, this.body,this.background);
    }

    setClear(){
        if (this.clear){
            $("#main_viewer").fadeIn();
            this.clear = false;
        }else{
            $("#main_viewer").fadeOut();
            this.clear = true;
        }
    }

    activeFirst(){
        var item = $(".item_live","#list_prelive").first();
        var txt = item.find(".body_item").html();
        this.setActive(item,txt);
    }

    setBlack(){
        if (this.black){
            this.clear = true;
            this.setClear();
            $("img","#live_viewer_main_innner").fadeIn();
            this.black = false;
        }else{
            $("img","#live_viewer_main_innner").fadeOut();
            this.black = true;
            this.clear = false;
            this.setClear();
        }
    }

    setCanto(canto){
        this.canto = canto;
        this.setData();
        this.activeFirst();
    }

    setData(){
        $("#list_prelive").html("");
        this.canto.data.map(function (item) {
            let estrofa = new Estrofa(item.title,item.body,BG,"#list_prelive",false);
            estrofa.render();
        });
    }



    setActive(ele,data){
        $(".item_live.active","#list_prelive").removeClass("active");
        $(ele,"#list_prelive").addClass("active");
        $("#main_viewer_pre").html(data);
    }
}



