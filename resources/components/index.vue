<template>
    <div class="login-container">
        <form @submit.prevent="login" class="login-form">
            <div class="form-group">
                <label for="username">사용자 이름:</label>
                <input type="text" id="username" v-model="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">비밀번호:</label>
                <input type="password" id="password" v-model="password" class="form-control">
            </div>
            <button type="submit" class="login-button">로그인</button>
        </form>
        <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            username: '',
            password: '',
            errorMessage: ''
        };
    },
    methods: {
        login() {
            // 로그인 로직 구현
            axios.post('/chackLogin')
                .then(response => {
                    console.log("home page move" + response.data)
                    window.location.href = '/home'
                }).catch(error => {
                console.error(error);
            })
        },
    }
};
</script>

<style scoped>
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form {
    width: 300px;
    padding: 20px;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.login-button {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

.error {
    color: red;
    margin-top: 10px;
}
</style>
