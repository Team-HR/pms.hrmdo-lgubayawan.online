<template>
  <guest-nav v-if="!$page.props.auth.user"></guest-nav>
  <authed-nav v-else></authed-nav>
  <div>
    <Card style="width: 90%; margin: auto; margin-top: 20px" class="h-full">
      <template #header>
        <img src="images/bg-form.jpg" >
      </template>
      <template #title>
        {{ `Online Performance Management System`.toUpperCase() }}
      </template>
      <template #subtitle> {{ `LGU Bayawan City` }} </template>
      <template #content>
        <div>
          Information System that supports Monitoring and Evaluation. Monitoring
          and Evaluation mechanics and Information Systems are vital component
          of the SPMS in order to facilitate linkage between organizational and
          employee performance. The M & E and reliable information for both
          performance monitoring/tracking, accomplishment reporting, program
          improvement and policy decision making.
        </div>
      </template>
      <template #footer>
    
      </template>
    </Card>
  </div>
</template>

<script>
import PigLayout from "@/Layouts/Pig.vue";
import IButton from "@/Components/Button";

// PrimeVue Components
// import Button from "primevue/button";
// import Card from "primevue/card";

// Layouts
import GuestNav from "@/Layouts/Guest.vue";
import AuthedNav from "@/Layouts/Authenticated.vue";

export default {
  props: {
    total_respondents: Number,
  },
  components: {
    // Card,
    // Button,
    GuestNav,
    AuthedNav,
    PigLayout,
    IButton,
  },
  data() {
    return {
      display: true,
      displayBasic: false,
    };
  },
  methods: {
    openBasic() {
      this.displayBasic = true;
    },

    closeBasic() {
      this.displayBasic = false;
    },
  },
  mounted() {},
};
</script>