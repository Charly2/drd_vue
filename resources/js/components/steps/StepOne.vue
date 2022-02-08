<template>
<div class="position-relative h-100">
    <h1 class="primary_text fw-bold text-center fz_50">Bienvenido</h1>
    <h3 class="primary_text fz_20 w-50">
        La información que usted nos brinde sra de utilidad para mejorar la atencion que usted merece. Sus datos se encutran en total discrecion.
    </h3>
    <div class="" v-if="step===1">
        <div class="input mt-3 d-flex position-relative">
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <input type="text" v-model="name" style="pointer-events: none" placeholder="Ingrese su nombre completo" aria-label="Username">
        </div>
        <keyboard-component v-model="name" class="mt-3 keyboard_step1"  />
    </div>
    <div class="" v-if="step===2">
        <div class="input mt-3 d-flex position-relative">
            <div class="icon">
                <i class="fa fa-phone"></i>
            </div>
            <input type="text" v-model="phone" style="pointer-events: none" placeholder="Ingrese su telefono" aria-label="Username">
        </div>
        <numeric-keyboard-component  v-model="phone"  class="mt-3 keyboard_step1" />
    </div>
    <button type="button" class="btn btn-primary btn-lg next" @click="next">Continuar</button>
</div>
</template>

<script>
import KeyboardComponent from "../KeyboardComponent";
import NumericKeyboardComponent from "../NumericKeyboardComponent";

export default {
    name: "StepOne",
    components: {NumericKeyboardComponent, KeyboardComponent},
    data(){
        return {
            name:"",
            phone:"",
            step:1,
        }
    },
    methods:{
        key(key){
            this.name = this.name.concat(key)
        },
        space(){
            this.name = this.name.concat(" ")
        },
        removeKey(){
            this.name = this.name.slice(0, -1);
        },
        next(){
            if (this.step === 1){
                this.step = 2
            }else if (this.step === 2 ){
                this.$emit("next",2)
            }
        }
    }
}
</script>

<style scoped>
.input{
    background: rgba(255,255,255,.4);
    padding: 30px;
    width: 560px;
    height: 110px;
}
.icon{
    position: absolute;
    font-size: 25px;
    height: 30px;
    top: 35px;
    color: #009b7a;
    left: 45px;
}
input {
    height: 50px;
    padding: 0 15px 0 50px;
    line-height: 1;
    font-size: 25px;
    width: 500px;
    color: #040e8c;
    border: 1px solid #cfcfcfbf;
    text-transform: uppercase;
}
.keyboard_step1{
    width: 65%;
    margin-left: -25px;
}
.next{
    background: #040e8c;
    border-color: #040e8c;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 280px;
    height: 60px;
    font-size: 28px;
    text-transform: uppercase;
}
</style>

<style>
.fz_50{
    font-size: 50px;
}
.fz_20{
    font-size: 20px;
}
</style>
