<template>
    <div>
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Boboprofesser's Learn Daily</h1>
                    <p class="lead mb-0">紀錄關於boboprofessor所學的網站知識</p>
                </div>
            </div>
        </header>
        <v-container>
            <v-row>
                <div>
                    <br>
                    <br>
                    <vue-markdown> {{ learnarray[0].content }} </vue-markdown>
                </div>
            </v-row>
        </v-container>
    </div>
</template>

<script>
import * as Learn from '../services/category_service.js';
export default {
    data() {
        return {
            learnarray:[],
            learn_text:null,
        }
    },
    created:function(){  // 網頁載入時，一開始就載入
        this.getJson();
    },
    methods: {
        async getJson(){ 
            const response = await Learn.loadLearn();
            for (var i in response['data']) {
                if (response['data'][i].id == this.$route.params.articleId){
                    this.learnarray.push(response['data'][i]) 
                }          
            }
        },
        
    },
}
</script>

