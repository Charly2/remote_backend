class Estrofa {
    constructor(title,body,background,elemt_append,live) {
        this.title = title;
        this.body = body;
        this.background = background;
        this.elemt_append = elemt_append;
        this.live = live;
    }

    toString() {
        console.log(this.title, this.body,this.background);
    }

    render(){
        $(this.elemt_append).append(
            `<div class="item_live card"  onclick="setActive(this,${this.live})" >
                    <div class="img_preview">
                        <div class="wrapper">
                            <div class="wrapper_img"><img src="/imgs/${this.background}" alt=""></div>
                            <div class="wrapper_text">
                                <span class="inner_text">${this.body.replaceAll("\n","<br>")}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text_preview">
                        <div class="title_item">${this.title}</div>
                        <div class="body_item">${this.body.replaceAll("\n","<br>")}</div>
                    </div>
                </div>`
        );
    }
}
