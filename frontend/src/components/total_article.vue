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
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5" v-for="(learn, index) in learnarray" :value="learn" :key="index">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">{{  learn.title }}</h2>
                            <vue-markdown class="card-text" style="overflow : hidden; text-overflow : ellipsis; white-space : nowrap; height : 50px;">{{  learn.content }}</vue-markdown>
                        </div>
                        <div class="card-footer">
                            <router-link class="btn btn-primary btn-sm" :to="'/article/'+ learn.id ">查看</router-link>
                            <a class="btn btn-primary btn-sm" href="#">更改</a>
                            <a class="btn btn-danger btn-sm" href="#" v-on:click="deletearticle(learn.id)">刪除</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <v-btn fab dark style="position:fixed; bottom: 0; right: 0; z-index: 9999;" class="fas fa-plus" data-toggle="modal"  data-target="#myModal"></v-btn>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">新增文章</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <v-form v-on:submit.prevent="createarticle">
                            <b-select v-model="learn_tag" >
                                <option v-for="(learn, index) in learn_alltag" :value="learn" :key="index">
                                    {{learn}}
                                </option>
                            </b-select>
                            <v-text-field label="title" v-model="learn_title"></v-text-field>
                            <b-form-textarea id="textarea" v-model="learn_text" placeholder="Enter something..." rows="20"></b-form-textarea>
                            <button type="submit" class="btn btn-primary">確定</button>
                        </v-form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div> 
</template>

<script>
import * as Learn from '../services/category_service.js';
export default {
    data() {
        return {
            learnarray:[],
            learn_tag:'html',
            learn_alltag:['html','css','javascript','api','frontend','backend'],
            learn_title:null,
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
                this.learnarray.push(response['data'][i])
            }
        },
        createarticle: async function(){
            let formData = new FormData();
            formData.append('tag',this.learn_tag);
            formData.append('title',this.learn_title);
            formData.append('content',this.learn_text);
            const response = await Learn.createLearn(formData);
            this.learnarray.push(response.data)
        },
        deletearticle: async function(id){
            let check_delete = null;
            check_delete = window.confirm("確定刪除？")
            if (check_delete === true){
                await Learn.deleteLearn(id);
                for (var i = 0; i < this.learnarray.length; i++){
                    if (this.learnarray[i].id === id){
                        this.learnarray.splice(i,1)
                    }
                }
            }
        }
    },
}
</script>

