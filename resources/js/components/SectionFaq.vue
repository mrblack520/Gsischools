<template>
    <div class="accordion-con">
        <div class="accordion">

            <template v-for="(faq, ind) in props.faqs">
                <div class="accordion__item" @click="updateItem(ind)">
                    <div :class="{ 'active': selectedFaqItem === ind, 'accordion__header': true }"
                        data-toggle="#hdiw-1">{{ faq.title }}</div>
                    <div v-if="selectedFaqItem === ind" class="accordion__content" id="hdiw-1" v-html="faq.content">
                    </div>
                </div>
            </template>

        </div>
    </div>
</template>

<script setup>
import { ref, defineProps } from 'vue';

const selectedFaqItem = ref(null);

const updateItem = ind => {
    selectedFaqItem.value = (selectedFaqItem.value === ind) ? null : ind;
}

const props = defineProps([
    'faqs'
]);


</script>

<style>
.accordion__content li {
    padding-left: 18px;
    position: relative;
}

.join-question-point .accordion-con .accordion__content li:before {
    content: '';
    background: url('../../images/dark-bullets.svg');
    display: block;
    width: 20px;
    height: 20px;
    position: absolute;
    background-repeat: no-repeat;
    left: 0;
    top: 6px;
}
</style>
