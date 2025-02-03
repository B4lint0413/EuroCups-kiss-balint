<template>
<BaseLayout>
  <FormKit type="form" @submit="createTeam" :actions="false">
    <FormKit type="text" name="country" validation="required|string|length:5,20"></FormKit>
    <FormKit type="text" name="captain" validation="required|string|length:5,30"></FormKit>
    <FormKit type="submit"></FormKit>
  </FormKit>
</BaseLayout>
</template>

<script>
import BaseLayout from '@layouts/BaseLayout.vue'
import {useTeamStore} from '@stores/TeamStore.mjs'
import { mapActions } from 'pinia'

export default{
  components: {
    BaseLayout
  },
  methods: {
    ...mapActions(useTeamStore, ['createTeam']),
    async postTeam(data){
      await this.createTeam(data);
    }
  }
}
</script>

<route lang="json">
  {
    "name": "create-teams"
  }
</route>
