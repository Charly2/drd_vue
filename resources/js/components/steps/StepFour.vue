<template>
    <div class="position-relative h-100">
        <div class="p-4"></div>
        <h1 class="primary_text fw-bold  fz_50">GRACIAS POR <br>
            PARTICIPAR EN <br>
            NUESTRA ENCUESTA</h1>
        <h3 class="primary_text fz_20 w-50 mt-3">
            Su opinion es muy importante para nosotros, siempre estamos buscando mejorar nuestro servicio.
        </h3>
    </div>
</template>

<script>
export default {
    name: "StepFour",
    created() {
        setTimeout(() => {
            this.$emit("action",1)
        }, 2000);
    }
}
</script>

<style scoped>

</style>
