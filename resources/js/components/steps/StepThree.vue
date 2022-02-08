<template>
    <div class="position-relative h-100 container_bg">
        <div class="pt-5"></div>
        <h3 class="primary_text fw-bold text-center mb-3 fz33 ">LE INVITAMOS A DEJAR SUS COMENTARIOS</h3>
        <div class="text-center">
            <textarea name="" id=""  v-model="comment" rows="3"></textarea>
        </div>
        <keyboard-component v-model="comment" class="keyboard_step1"/>
        <button type="button" class="btn btn-primary btn-lg next" @click="setAction(4)">Finalizar</button>
        <div class="close_btn" @click="setAction(1)">
            <i class="fa fa-close"/>
        </div>
    </div>
</template>

<script>
import KeyboardComponent from "../KeyboardComponent";
export default {
    name: "StepThree",
    components: {KeyboardComponent},
    data(){
        return {
            comment:""
        }
    },
    methods:{
        setAction(action){
            this.$emit("action",action)
        }
    }

}
</script>

<style scoped>
.container_bg{
    background: #ffffff73;
}
textarea{
    width: 90%;
    left: 5%;
    font-size: 30px;
    line-height: 1;
    padding: 5px;
    color: #000787;

}
.keyboard_step1{
    width: 65%;
    margin-left: 20px;
    margin-top: 15px;
}
.next{
    background: #040e8c;
    border-color: #040e8c;
    position: absolute;
    bottom: 30px;
    right: 30px;
    width: 280px;
    height: 60px;
    font-size: 28px;
    text-transform: uppercase;
}
.fz33{
    font-size: 33px;
}
.close_btn{
    background: red;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: calc(50% - 60px);
    bottom: 0;
}
.close_btn i{
    color: white;
    font-size: 25px;
}
</style>
