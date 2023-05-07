<template>
    <div>
        <form @submit.prevent="saveData">
            <input type="text" v-model="name">
            <button type="submit">Save</button>
        </form>
    </div>
</template>

<script>

export default {
    data() {
        return {
            name: ''
        }
    },
    methods: {
        saveData() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // CSRF 토큰 가져오기

            axios.post('/joinSave', {
                name: this.name
            }, {
                // headers: {
                //     'X-CSRF-TOKEN': csrfToken // CSRF 토큰 헤더 추가
                // }
            })
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>
