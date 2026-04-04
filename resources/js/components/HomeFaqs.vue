<template>
    <!-- Tabs -->
    <div class="tabs-wrapper" style="overflow-x:auto;">
        <div class="tabs" style="display:flex; flex-wrap:nowrap;">
            <div v-for="(faq, ind) in faqs" @click="selectedFaq = faq"
                :class="{ 'active': selectedFaq === faq, 'tab': true }"
                style="flex:0 0 auto; cursor:pointer; padding: 10px 20px;">
                {{ faq.toUpperCase() }}
            </div>
        </div>
    </div>

    <!-- FAQ Sections -->
    <div class="active faq-section">
        <div class="row">
            <template v-for="(faqData, ind) in faqsData">
                <div v-if="faqData.category === selectedFaq" class="faq-con">
                    <div class="col-md-7 mb-4">
                        <div class="accordion__item" @click="updateItem(ind)">
                            <div :class="{ 'active': selectedFaqItem === ind, 'accordion__header': true }">{{ faqData.title }}</div>
                            <div v-if="selectedFaqItem === ind" class="accordion__content" v-html="faqData.content"></div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <div class="read-more-btn-div d-flex justify-content-center mt-4">
        <a :href="props.faqsUrl" style="padding: 11px 32px 9px 29px;" class="read-more-btn"
            id="view-all-faqs">View all FAQs</a>
    </div>
</template>


<script setup>
import { ref  } from 'vue';



const selectedFaq = ref('School');
const selectedFaqItem = ref(0);

const updateItem = ind => {
    selectedFaqItem.value = (selectedFaqItem.value === ind) ? null : ind;
}
  const props = defineProps({
    faqsUrl: String
});
const faqsData = [
    {
        category: 'School',
        title: "What is the admission process at Guiding Star International?",
        content: `<p>The admission process at Guiding Star International is simple and structured. Parents are required to fill out the admission form and submit the necessary documents, including the child’s birth certificate, previous school records (if applicable), and recent photographs. After submission, the student may be asked to appear for an assessment test or interview, depending on the grade level. Once the evaluation is complete and the admission is approved, parents will be guided through the fee submission and enrollment formalities.</p>
                            
                           
                           `
    },
    {
        category: 'Academy',
        title: "What classes does GSI Academy cover?",
        content: `<p>
                               We provide coaching from Play Group to Grade 10 and onward for Matric & Intermediate students.
                            </p>
                            `
                           
    },
   

    {
        title: "Do students participate in competitions?",
        category: "Co-Curriculum",
        content: `<p>
                               Yes, GSI organizes annual sports week and also encourages participation in inter-school events.
                            </p>
                           
                            
                                        
                                        

                            `
    },
   
    {
        title: "How can I apply to join GSI as faculty?",
        category: "Faculty",
        content: `<p>You can apply directly through our website’s faculty registration form or submit your CV to the administration office.</p>
                            `
    },

   
]

const faqs = [...new Set(faqsData.map(faq => faq.category))];

</script>
