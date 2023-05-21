<template>
    <h1>{{ number }}</h1>
    <h1>{{ number2 }}</h1>
    <button v-on:click="plus()">더하기 버튼</button>
</template>

<script>
export default {
    data() {
        return {
            number: 0,
            number2: 10
        };
    },
    methods: {
        plus(){
            this.number2 -= 1;
            this.number += 1;
        }
    }
};
</script>
