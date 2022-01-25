<template>
    <div>
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Boboprofesser's Css Template</h1>
                    <p class="lead mb-0">紀錄關於boboprofessor所刻的css樣板</p>
                </div>
            </div>
        </header>
        <div id="my-editormd" >
            <textarea id="my-editormd-markdown-doc" name="my-editormd-markdown-doc" style="display:none;"></textarea>
            <!-- 注意：name屬性的值-->
            <textarea id="my-editormd-html-code" name="my-editormd-html-code" style="display:none;"></textarea>
        </div>
        <div class="container">
            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        時間軸
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="RwgqMEK" data-user="vewhghqq-the-typescripter" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                                <span>See the Pen <a href="https://codepen.io/vewhghqq-the-typescripter/pen/RwgqMEK">
                                css 時間軸</a> by 葉柏漢 (<a href="https://codepen.io/vewhghqq-the-typescripter">@vewhghqq-the-typescripter</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        交錯版
                    </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="QWgJrVX" data-user="vewhghqq-the-typescripter" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                            <span>See the Pen <a href="https://codepen.io/vewhghqq-the-typescripter/pen/QWgJrVX">
                            交錯版</a> by 葉柏漢 (<a href="https://codepen.io/vewhghqq-the-typescripter">@vewhghqq-the-typescripter</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        互動圖文卡片
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="yLXGzzJ" data-user="vewhghqq-the-typescripter" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                                <span>See the Pen <a href="https://codepen.io/vewhghqq-the-typescripter/pen/yLXGzzJ">
                                互動圖文卡片</a> by 葉柏漢 (<a href="https://codepen.io/vewhghqq-the-typescripter">@vewhghqq-the-typescripter</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                            人員介紹卡
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="jOwXYEp" data-user="vewhghqq-the-typescripter" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
                                <span>See the Pen <a href="https://codepen.io/vewhghqq-the-typescripter/pen/jOwXYEp">
                                人員介紹卡</a> by 葉柏漢 (<a href="https://codepen.io/vewhghqq-the-typescripter">@vewhghqq-the-typescripter</a>)
                                on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {

        }
    },
    created:function(){  // 網頁載入時，一開始就載入
        // this.$auth.user();
        // console.log(this.$auth.user()); // 可以取得使用者資料
    },
    methods: {
    },
}
</script>
<script type="text/javascript">
  $(function() {
      editormd("my-editormd", {//注意1：這裡的就是上面的DIV的id屬性值
          width   : "90%",
          height  : 640,
          syncScrolling : "single",
          path    : "./editor.md/lib/",//注意2：你的路徑
          saveHTMLToTextarea : true//注意3：這個配置，方便post提交表單
      });
  });
</script>

