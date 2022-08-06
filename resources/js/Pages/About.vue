<template>
    <h1 class="text-center">About Us</h1>
    <hr>
    <p class="indent">To provide a friendly, comfortable atmosphere where the customer can receive quality food, service and entertainment at a reasonable price.</p>
</template>

<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout
}
</script>

<style>
h1, p{
    color: white;
}
hr {
    border-top: 20px dashed white;
}
.indent {
    text-indent: 50px;
}
</style>