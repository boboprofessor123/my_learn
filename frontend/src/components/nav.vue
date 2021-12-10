<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">boboprofessor's learn diary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><router-link class="nav-link" to="/learndaily">learn content</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" to="/">css temp</router-link></li>
                </ul>
            </div>
        </div>
    </nav>
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

