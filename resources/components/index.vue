<template>
    <h1>{{ hello }}</h1>
    <button v-on:click="join()">회원가입</button>
</template>

<script>
const join = () => {
    window.location.href = '/join'
};

export default {
    setup() {
        return {
            hello: '안녕하세요 Laravel + Vue 프로젝트의 index 화면',
            join
        };
    }
};
</script>
