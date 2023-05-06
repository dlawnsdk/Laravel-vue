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
            axios.post('/joinSave', {
                name: this.name
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
