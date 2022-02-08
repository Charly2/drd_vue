<template>
    <div class="">
        <div class="keyboard  showKey" >
            <div class="row-keyboard">
                <div @click="setKey('1')" ><p>1</p></div>
                <div @click="setKey('2')" ><p>2</p></div>
                <div @click="setKey('3')" ><p>3</p></div>
            </div>
            <div class="row-keyboard">
                <div @click="setKey('4')" ><p>4</p></div>
                <div @click="setKey('5')" ><p>5</p></div>
                <div @click="setKey('6')" ><p>6</p></div>
            </div>
            <div class="row-keyboard">
                <div @click="setKey('7')" ><p>7</p></div>
                <div @click="setKey('8')" ><p>8</p></div>
                <div @click="setKey('9')" ><p>9</p></div>
            </div>
            <div class="row-keyboard">
                <div id="del" @click="setDelete('del')" ><p>Borrar</p></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NumericKeyboardComponent",
    data(){
        return {
            model:""
        };
    },
    props:{
        value:{
            required: true,
        },
    },
    created() {
        this.model = this.value;
    },
    methods:{
        setKey(key){
            this.model = this.model.concat(key)
        },
        setDelete(key){
            this.model = this.model.slice(0, -1);
        },
        setSpace(key){
            this.model = this.model.concat(" ");
        }
    },
    watch:{
        model: {
            deep:true,
            handler(newValue, oldValue){
                this.$emit('input', newValue);
            }
        },
        value: {
            deep:true,
            handler(newValue){
                this.model = newValue;
            }
        }
    }
}
</script>

<style scoped>

</style>
