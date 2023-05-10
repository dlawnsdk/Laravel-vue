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
            axios.post('/joinSave', {
                userid: this.userid,
                email: this.email,
                password: this.password
            }).then(response => {
                    console.log(response);
                    alert("데이터 저장 성공")
                    window.location.href = '/';
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>
