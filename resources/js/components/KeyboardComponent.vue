<template>
    <div class="">
        <div class="keyboard  showKey" >
            <div class="row-keyboard">
                <div @click="setKey('q')" ><p>q</p></div>
                <div @click="setKey('w')" ><p>w</p></div>
                <div @click="setKey('e')" ><p>e</p></div>
                <div @click="setKey('r')" ><p>r</p></div>
                <div @click="setKey('t')" ><p>t</p></div>
                <div @click="setKey('y')" ><p>y</p></div>
                <div @click="setKey('u')" ><p>u</p></div>
                <div @click="setKey('i')" ><p>i</p></div>
                <div @click="setKey('o')" ><p>o</p></div>
                <div @click="setKey('p')" ><p>p</p></div>
            </div>
            <div class="row-keyboard">
                <div @click="setKey('a')" ><p>a</p></div>
                <div @click="setKey('s')" ><p>s</p></div>
                <div @click="setKey('d')" ><p>d</p></div>
                <div @click="setKey('f')" ><p>f</p></div>
                <div @click="setKey('g')" ><p>g</p></div>
                <div @click="setKey('h')" ><p>h</p></div>
                <div @click="setKey('j')" ><p>j</p></div>
                <div @click="setKey('k')" ><p>k</p></div>
                <div @click="setKey('l')" ><p>l</p></div>
                <div @click="setKey('ñ')" ><p>ñ</p></div>
            </div>
            <div class="row-keyboard">
                <div @click="setKey('z')" ><p>z</p></div>
                <div @click="setKey('x')" ><p>x</p></div>
                <div @click="setKey('c')" ><p>c</p></div>
                <div @click="setKey('v')" ><p>v</p></div>
                <div @click="setKey('b')" ><p>b</p></div>
                <div @click="setKey('n')" ><p>n</p></div>
                <div @click="setKey('m')" ><p>m</p></div>
                <div id="del" @click="setDelete('del')" ><p>Borrar</p></div>
            </div>
            <div class="row-keyboard">
                <div @click="setSpace('s')" id="switch" class="w250" ><p>___</p></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "KeyboardComponent",
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
