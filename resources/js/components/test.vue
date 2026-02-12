<template>
    <div class="char-counter">
        <h2>Write a message:</h2>
        <textarea v-model="message" rows="5" placeholder="Type something..."></textarea>
        <p>{{ message.length }} / {{ maxLength }} characters</p>
        <p v-if="message.length > maxLength" style="color: red;">Too many characters!</p>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const message = ref('')
const maxLength = 100
</script>

<style>
.char-counter {
    max-width: 500px;
    margin: 40px auto;
    padding: 20px;
    border: 2px solid #ddd;
    border-radius: 10px;
    font-family: Arial, sans-serif;
}

textarea {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
}
</style>
