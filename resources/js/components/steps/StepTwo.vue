<template>
    <div class="position-relative h-100">
        <h1 class="primary_text fw-bold fz_50 mt-5">¿Comó desea ayudarnos?</h1>
        <h3 class="primary_text fz_20 w-50 mt-4">
            La información que usted nos proporciona nos ayuda a mejorar nuestro servicio.
        </h3>
        <div class=" d-flex  mt-5 ">
            <button class="btn btn-primary d-flex align-items-center p-2 ml2 ">
                <div class="">
                    <i class="fa fa-check text-white icon_btn "></i>
                </div>
                <span class=" text_btn">
                    <span>
                        Desea hacer un
                    </span>
                    <h3>Evalucion</h3>
                </span>
            </button>
            <button class="btn btn-success d-flex align-items-center p-2 " @click="setAction(3)">
                <div class="">
                    <i class="fa fa-edit text-white icon_btn "></i>
                </div>
                <span class=" text_btn">
                    <span>
                        Desea realizar un
                    </span>
                    <h3>Comentario</h3>
                </span>
            </button>
        </div>
        <div class="close_btn" @click="setAction(1)">
            <i class="fa fa-close"/>
        </div>
    </div>

</template>

<script>
import StepOne from "./StepOne";
import KeyboardComponent from "../KeyboardComponent";

export default {
    name: "StepTwo",
    components: {StepOne, KeyboardComponent},
    methods:{
        setAction(action){
            this.$emit("action",action)
        }
    }
}
</script>

<style scoped>
.icon_btn{
    font-size: 30px;
    margin-left: 15px;
}
.text_btn{
    margin-top: 5px;
    margin-left: 12px;
    margin-right: 20px;
}
.text_btn span{
    font-size: 17px;
    padding-left: 15px;
}

.text_btn h3{
    font-size: 25px;
}
.ml2{
    margin-right: 30px;
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
    bottom: 50px;
}
.close_btn i{
    color: white;
    font-size: 25px;
}
</style>
