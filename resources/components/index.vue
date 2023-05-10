<template>
    <h1>{{ hello }}</h1>
    <button v-on:click="join()">데이터 저장</button>
    <button v-on:click="list()">데이터 목록</button>
</template>

<script>
console.log("test")
const join = () => {
    window.location.href = '/join'
};

const list = () => {
    window.location.href = '/joinList'
}

export default {
    setup() {
        return {
            hello: '안녕하세요 Laravel + Vue 프로젝트의 index 화면',
            join,
            list
        };
    }
};
</script>
