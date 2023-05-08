<template>
    <div>
        <form @submit.prevent="saveData">
            <input type="text" v-model="userid">
            <input type="text" v-model="email">
            <input type="text" v-model="password">
            <button type="submit">Save</button>
        </form>
    </div>
</template>

<script>

export default {
    data() {
        return {
            userid: '',
            email: '',
            password: '',
        }
    },
    methods: {
        saveData() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // CSRF 토큰 가져오기

            axios.post('/joinSave', {
                userid: this.userid,
                email: this.email,
                password: this.password
            }, {
                // headers: {
                //     'X-CSRF-TOKEN': csrfToken // CSRF 토큰 헤더 추가
                // }
            })
                .then(response => {
                    console.log(response);d
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>
