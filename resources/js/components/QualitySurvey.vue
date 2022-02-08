<template>
    <div style="height: 100%;position: relative">
        <transition mode="out-in" name="fade">
            <step-one  v-if="step===1"  v-on:next="setStep"  />
            <step-two   v-if="step===2"  v-on:action="setStep" />
            <step-three v-if="step===3"  v-on:action="setStep"  />
            <step-four v-if="step===4"  v-on:action="setStep"  />




        </transition>
    </div>
</template>

<script>


import KeyboardComponent from "./KeyboardComponent";
import StepOne from "./steps/StepOne";
import StepTwo from "./steps/StepTwo";
import StepThree from "./steps/StepThree";
import StepFour from "./steps/StepFour";
export default {
    name: "QualitySurvey",
    components: {StepFour, StepThree, StepTwo, StepOne, KeyboardComponent},
    comments:{

    },
    data(){
        return {
            step:4
        }
    },
    methods: {
        setStep(step){
            this.step = step
        }
    }

}
</script>

<style >

.component-fade-enter-active, .component-fade-leave-active {
    transition: opacity .3s ease;
}
.component-fade-enter, .component-fade-leave-to
    /* .component-fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}


fade-enter-active, .fade-leave-active {
    transition: all 1s;
}
.fade-enter-to {
    transform: translateX(30px);
    opacity: 0;
}
.fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    transform: translateX(-30px);
    opacity: 0;
}
</style>
