<script>
  import { useEurocupStore } from '@stores/EurocupStore.mjs'
  import { useTeamStore } from '@stores/TeamStore.mjs'
export default{
  async mounted(){
    await useEurocupStore().getEurocups();
    await useTeamStore().getTeams();
  }
}
</script>

<template>
  <RouterView />
</template>
