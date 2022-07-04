<template>
  <nav class="flex justify-content-between flex-wrap bg-primary py-2">
    <div class="flex align-items-center justify-content-center">
      <!-- logo -->
      <Button
        class="p-button text-white p-button-text ml-2 mr-5 font-bold"
        @click="$inertia.get('/')"
        >ONLINE PMS</Button
      >
      <slot name="links" />
    </div>

    <div class="flex align-items-center justify-content-center mx-2">
      <slot name="right-items" />
    </div>
  </nav>
</template>
<script>
export default {
  props: {
    title: "",
  },
};
</script>