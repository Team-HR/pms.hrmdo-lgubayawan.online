<template>
  <navbar class="fixed top-0 left-0 w-full">
    <template #links>
      <Button
        v-for="(item, i) in items"
        :key="i"
        @click="$inertia.get(item.to)"
        class="mx-1"
        :class="active_url == item.to? 'shadow-8':''"
      >
        {{ item.label }}
      </Button>
    </template>
    <template #right-items>
      <span class="mr-5 text-white">{{ $page.props.auth.user.username }}</span>
      <Button @click="$inertia.post(route('logout'))" class="p-button-danger">
        Logout
      </Button>
    </template>
  </navbar>
  <div class="mt-7">
    <slot />
  </div>
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
export default {
  components: {
    Navbar,
  },
  data() {
    return {
      active_url: this.$inertia.page.url,
      items: [
        {
          icon: "",
          label: "Dashboard",
          to: "/dashboard",
        },
        {
          icon: "",
          label: "Rating Scale Matrix",
          to: "/rating-scale-matrix",
        },
      ],
    };
  },
};
</script>