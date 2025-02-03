<template>
  <BaseLayout>
    <h1>EuroCup</h1>
    <BaseTable></BaseTable>
  </BaseLayout>
</template>

<script>
import BaseLayout from '@layouts/BaseLayout.vue'
import BaseTable from '@components/layout/BaseTable.vue';

export default {
  components: {
    BaseLayout,
    BaseTable
  }
}
</script>

<route lang="json">
  {
    "name": "home"
  }
</route>
