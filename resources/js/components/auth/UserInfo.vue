<template>

    <h1>hello</h1>

    <h2>Counter: {{ counter.count }}</h2>


</template>


<script setup>

import axios from 'axios';
await axios.get('/sanctum/csrf-cookie');

await axios.post('/api/login', {
  email: 'jane.henna@gmail.com',
  password: '123456789',
}).then((response) => {
    console.log(response);
    axios.defaults.headers.common["Authorization"] = "Bearer " + response.data.data.token;
    console.log('token', response.data.data.token)
})

axios.defaults.headers.common["Authorization"] = "Bearer " + response.data.data.token;

axios.get('/new-user').then((response) => {
    console.log(response);
    console.log('token', response.data.data.token)
})

// const formData = new FormData();
// formData.append("email", '');
// formData.append("password", '');

// axios
//     .post('/api/login', formData)
//     .then(({ data }) => {
//         localStorage.setItem("token", data.data.token);

//         axios.defaults.headers.common["Authorization"] =
//             "Bearer " + data.data.token;


//     })
//     .catch(function (error) {
//         if (error.response) {
//             setLoading(false);
//             seteErorr(error.response.data.message);
//         }
//     });

import { useCounterStore } from '../../stores/counter';
const counter = useCounterStore();


</script>
